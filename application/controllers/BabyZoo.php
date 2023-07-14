<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BabyZoo extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/animals";
        $this->load->Model('Main_model');
    }

  
    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Data Baby Zoo ";
        $data['data'] = $this->Main_model->get('tb_baby_zoo');
  
        admin_template('animals/baby_zoo/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_baby_zoo', 'Kategori Baby Zoo', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Baby Zoo";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('animals/baby_zoo/create', $data);
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
        $input['link_baby_zoo'] = $this->input->post('link_baby_zoo', false);
        $input['kategori_baby_zoo'] = $this->input->post('kategori_baby_zoo', false);

        // Image Upload
        if (!empty($_FILES['img_baby_zoo']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_baby_zoo')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_baby_zoo'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('BabyZoo/create');
            }
        }

        $this->Main_model->insert('tb_baby_zoo', $input);
        redirect('BabyZoo/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_baby_zoo' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Baby Zoo';
        $data['data'] = $this->Main_model->get_where('tb_baby_zoo',$where);

        if (!$data['data']) redirect('BabyZoo/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('animals/baby_zoo/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_baby_zoo'] = $this->input->post('link_baby_zoo', false);

        if (!empty($_FILES['img_baby_zoo']['name'])) {
            $oldimg = $this->main->get_where('tb_baby_zoo', $where)->img_baby_zoo;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_baby_zoo')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_baby_zoo'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('BabyZoo/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_baby_zoo', $input, $where);
        redirect('BabyZoo/data');
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
        $where = ['id_baby_zoo' => $id];

        $query = $this->main->get_where('tb_baby_zoo', $where);
        if (!$query) redirect('BabyZoo/data');

        $this->deleteContentImage($query->img_baby_zoo);

        $img = $query->img_baby_zoo;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_baby_zoo', $where);
        redirect('BabyZoo/data');
    }
}

