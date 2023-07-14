<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SafariAnimalShow extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/safari";
        $this->load->Model('Main_model');
    }

  
    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Data Safari Animal Show ";
        $data['data'] = $this->Main_model->get('tb_safari_animal_show');
  
        admin_template('safari/safari_animal_show/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_safari_animal_show', 'Kategori Safari Animal Show', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Safari Animal Show";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari/safari_animal_show/create', $data);
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
        $input['link_safari_animal_show'] = $this->input->post('link_safari_animal_show', false);
        $input['kategori_safari_animal_show'] = $this->input->post('kategori_safari_animal_show', false);

        // Image Upload
        if (!empty($_FILES['img_safari_animal_show']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_safari_animal_show')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_safari_animal_show'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('SafariAnimalShow/create');
            }
        }

        $this->Main_model->insert('tb_safari_animal_show', $input);
        redirect('SafariAnimalShow/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_safari_animal_show' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Safari Animal Show';
        $data['data'] = $this->Main_model->get_where('tb_safari_animal_show',$where);

        if (!$data['data']) redirect('SafariAnimalShow/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari/safari_animal_show/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_safari_animal_show'] = $this->input->post('link_safari_animal_show', false);

        if (!empty($_FILES['img_safari_animal_show']['name'])) {
            $oldimg = $this->main->get_where('tb_safari_animal_show', $where)->img_safari_animal_show;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_safari_animal_show')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_safari_animal_show'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('SafariAnimalShow/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_safari_animal_show', $input, $where);
        redirect('SafariAnimalShow/data');
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
        $where = ['id_safari_animal_show' => $id];

        $query = $this->main->get_where('tb_safari_animal_show', $where);
        if (!$query) redirect('SafariAnimalShow/data');

        $this->deleteContentImage($query->img_safari_animal_show);

        $img = $query->img_safari_animal_show;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_safari_animal_show', $where);
        redirect('SafariAnimalShow/data');
    }
}

