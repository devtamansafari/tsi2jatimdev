<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Restaurant extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/safari_info";
        $this->load->Model('Main_model');
    }

  
    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Data Restaurant ";
        $data['data'] = $this->Main_model->get('tb_restaurant');
  
        admin_template('safari_info/restaurant/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_restaurant', 'Kategori Restaurant', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Restaurant";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari_info/restaurant/create', $data);
        } else {
            $this->save();
        }
    }

    private function _configUpload()
    {
        $config['upload_path'] = $this->path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $this->upload->initialize($config);
    }

    private function _compressImg($name)
    {
        $config['image_library']    = 'gd2';
        $config['source_image']     = $this->path . $name;
        $config['create_thumb']     = FALSE;
        $config['maintain_ratio']   = TRUE;
        $config['quality']          = '80%';
        $config['new_image']        = $this->path . $name;

        $this->load->library('image_lib', $config);
        $this->image_lib->resize();
    }

    private function save()
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_restaurant'] = $this->input->post('link_restaurant', false);
        $input['kategori_restaurant'] = $this->input->post('kategori_restaurant', false);

        // Image Upload
        if (!empty($_FILES['img_restaurant']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_restaurant')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_restaurant'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('Restaurant/create');
            }
        }

        $this->Main_model->insert('tb_restaurant', $input);
        redirect('Restaurant/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_restaurant' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Restaurant';
        $data['data'] = $this->Main_model->get_where('tb_restaurant',$where);

        if (!$data['data']) redirect('Restaurant/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari_info/restaurant/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_restaurant'] = $this->input->post('link_restaurant', false);

        if (!empty($_FILES['img_restaurant']['name'])) {
            $oldimg = $this->main->get_where('tb_restaurant', $where)->img_restaurant;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_restaurant')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_restaurant'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('Restaurant/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_restaurant', $input, $where);
        redirect('Restaurant/data');
    }

    public function deleteContentImage($content)
    {
        check_role(['admin']);

        preg_match_all('/<img[^>]+>/i', $content, $imgTags);
        for ($i = 0; $i < count($imgTags[0]); $i++) {
            preg_match('/src="([^"]+)/i', $imgTags[0][$i], $imgage);
            $images[] = str_ireplace('src="', '',  $imgage[0]);
        }

        foreach ($images as $image) {
            $extract = explode('/', $image);
            $img = end($extract);

            $thumbnail = $this->path . $img;
            if (is_file($thumbnail)) {
                unlink($thumbnail);
            }
        }
    }

    public function delete($id_safari)
    {
        check_role(['admin']);

        $id = encode_php_tags($id_safari);
        $where = ['id_restaurant' => $id];

        $query = $this->main->get_where('tb_restaurant', $where);
        if (!$query) redirect('Restaurant/data');

        $this->deleteContentImage($query->img_restaurant);

        $img = $query->img_restaurant;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_restaurant', $where);
        redirect('Restaurant/data');
    }
}

