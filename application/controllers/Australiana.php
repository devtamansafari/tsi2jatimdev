<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Australiana extends CI_Controller
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

        $data['title'] = "Data Australiana ";
        $data['data'] = $this->Main_model->get('tb_australiana');
  
        admin_template('animals/australiana/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_australiana', 'Kategori Australiana', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Australiana";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('animals/australiana/create', $data);
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
        $input['link_australiana'] = $this->input->post('link_australiana', false);
        $input['kategori_australiana'] = $this->input->post('kategori_australiana', false);

        // Image Upload
        if (!empty($_FILES['img_australiana']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_australiana')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_australiana'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('Australiana/create');
            }
        }

        $this->Main_model->insert('tb_australiana', $input);
        redirect('Australiana/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_australiana' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Australiana';
        $data['data'] = $this->Main_model->get_where('tb_australiana',$where);

        if (!$data['data']) redirect('Australiana/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('animals/australiana/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_australiana'] = $this->input->post('link_australiana', false);

        if (!empty($_FILES['img_australiana']['name'])) {
            $oldimg = $this->main->get_where('tb_australiana', $where)->img_australiana;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_australiana')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_australiana'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('Australiana/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_australiana', $input, $where);
        redirect('Australiana/data');
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
        $where = ['id_australiana' => $id];

        $query = $this->main->get_where('tb_australiana', $where);
        if (!$query) redirect('Australiana/data');

        $this->deleteContentImage($query->img_australiana);

        $img = $query->img_australiana;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_australiana', $where);
        redirect('Australiana/data');
    }
}

