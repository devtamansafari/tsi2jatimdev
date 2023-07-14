<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SpecialExperience extends CI_Controller
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

        $data['title'] = "Data Special Experience ";
        $data['data'] = $this->Main_model->get('tb_special_experience');
  
        admin_template('animals/special_experience/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_special_experience', 'Kategori Special Experience', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Special Experience";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('animals/special_experience/create', $data);
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
        $input['link_special_experience'] = $this->input->post('link_special_experience', false);
        $input['kategori_special_experience'] = $this->input->post('kategori_special_experience', false);

        // Image Upload
        if (!empty($_FILES['img_special_experience']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_special_experience')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_special_experience'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('SpecialExperience/create');
            }
        }

        $this->Main_model->insert('tb_special_experience', $input);
        redirect('SpecialExperience/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_special_experience' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Special Experience';
        $data['data'] = $this->Main_model->get_where('tb_special_experience',$where);

        if (!$data['data']) redirect('SpecialExperience/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('animals/special_experience/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_special_experience'] = $this->input->post('link_special_experience', false);

        if (!empty($_FILES['img_special_experience']['name'])) {
            $oldimg = $this->main->get_where('tb_special_experience', $where)->img_special_experience;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_special_experience')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_special_experience'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('SpecialExperience/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_special_experience', $input, $where);
        redirect('SpecialExperience/data');
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
        $where = ['id_special_experience' => $id];

        $query = $this->main->get_where('tb_special_experience', $where);
        if (!$query) redirect('SpecialExperience/data');

        $this->deleteContentImage($query->img_special_experience);

        $img = $query->img_special_experience;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_special_experience', $where);
        redirect('SpecialExperience/data');
    }
}

