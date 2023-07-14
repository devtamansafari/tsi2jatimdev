<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HomeBanner extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/homes/banner";
        $this->load->Model('Main_model');
    }

   

   

    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Data Banner Home";
        $data['ban'] = $this->Main_model->get('tb_banner_home');
        admin_template('home/banner/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('link_banner_home', 'Link Banner Home', 'required|trim');
        $this->form_validation->set_rules('type_banner_home', 'type Banner Home', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Banner";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('home/banner/create', $data);
        } else {
            $this->save();
        }
    }

    private function _configUpload()
    {
        $config['upload_path'] = $this->path;
        $config['allowed_types'] = 'gif|jpg|jpeg|png|jpeg|bmp|mp4';
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
        // $input['img_banner_home'] = $this->input->post('img_banner_home', false);
        $input['type_banner_home'] = $this->input->post('type_banner_home', false);
        $input['link_banner_home'] = $this->input->post('link_banner_home', false);


        // Image Upload
        if (!empty($_FILES['img_banner_home']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_banner_home')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_banner_home'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('HomeBanner/create');
            }
        }

        $this->Main_model->insert('tb_banner_home', $input);
        redirect('HomeBanner/data');
    }

    public function edit($id_banner_home)
    {
        check_role(['admin']);

        $where = ['id_banner_home' => encode_php_tags($id_banner_home)];

        $data['title'] = 'Edit Banner Home';
        $data['banner'] = $this->Main_model->get_where('tb_banner_home',$where);

        // $data['category'] = $this->main->get('category');
        // $data['post'] = $this->main->get_where('posts', $where);
        if (!$data['banner']) redirect('HomeBanner/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('home/banner/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        // $input['img_banner_home'] = $this->input->post('img_banner_home', false);
        $input['type_banner_home'] = $this->input->post('type_banner_home', false);
        $input['link_banner_home'] = $this->input->post('link_banner_home', false);

        if (!empty($_FILES['img_banner_home']['name'])) {
            $oldimg = $this->main->get_where('tb_banner_home', $where)->img_banner_home;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_banner_home')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_banner_home'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('HomeBanner/data');
            }
        }

        setMsg('success', 'Banner Home Updated.');
        $this->main->update('tb_banner_home', $input, $where);
        redirect('HomeBanner/data');
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

    public function delete($id_banner_home)
    {
        check_role(['admin']);

        $id = encode_php_tags($id_banner_home);
        $where = ['id_banner_home' => $id];

        $query = $this->main->get_where('tb_banner_home', $where);
        if (!$query) redirect('HomeBanner/data');

        $this->deleteContentImage($query->img_banner_home);

        $img = $query->img_banner_home;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "Banner deleted successfully.");
        $this->main->delete('tb_banner_home', $where);
        redirect('HomeBanner/data');
    }
}
