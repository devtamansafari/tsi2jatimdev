<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlanYourVisit extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/homes/plan";
        $this->load->Model('Main_model');
    }

   

   

    public function data()
    {
        check_role(['admin']);

        $data['title'] = "Plan Your Visit";
        $data['plan'] = $this->Main_model->get('tb_planyourvisit');
        admin_template('home/planyourvisit/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('title_plan', 'Title Plan', 'required|trim');
        $this->form_validation->set_rules('desc_plan', 'Desc Plan', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create New Plan";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('home/planyourvisit/create', $data);
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
        $input['title_plan'] = $this->input->post('title_plan', false);
        $input['desc_plan'] = $this->input->post('desc_plan', false);

        // $input['user_id'] = userdata()->user_id;
        // $input['post_slug'] = $this->post->create_slug($input['post_title']);

        // Image Upload
        if (!empty($_FILES['img_plan']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_plan')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_plan'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
                redirect('PlanYourVisit/create');
            }
        }

        $this->Main_model->insert('tb_planyourvisit', $input);
        redirect('PlanYourVisit/data');
    }

    public function edit($id_plan)
    {
        check_role(['admin']);

        $where = ['id_plan' => encode_php_tags($id_plan)];

        $data['title'] = 'Edit Plan Your Visit';
        $data['plan'] = $this->Main_model->get_where('tb_planyourvisit',$where);

        // $data['category'] = $this->main->get('category');
        // $data['post'] = $this->main->get_where('posts', $where);
        if (!$data['plan']) redirect('PlanYourVisit/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('home/planyourvisit/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['title_plan'] = $this->input->post('title_plan', false);
        $input['desc_plan'] = $this->input->post('desc_plan', false);

        if (!empty($_FILES['img_plan']['name'])) {
            $oldimg = $this->main->get_where('tb_planyourvisit', $where)->img_plan;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_plan')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_plan'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
                redirect('PlanYourVisit/data');
            }
        }

        setMsg('success', 'Plan updated.');
        $this->main->update('tb_planyourvisit', $input, $where);
        redirect('PlanYourVisit/data');
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

    public function delete($id_plan)
    {
        check_role(['admin']);

        $id = encode_php_tags($id_plan);
        $where = ['id_plan' => $id];

        $query = $this->main->get_where('tb_planyourvisit', $where);
        if (!$query) redirect('PlanYourVisit');

        $this->deleteContentImage($query->img_plan);

        $img = $query->img_plan;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "Plan deleted successfully.");
        $this->main->delete('tb_planyourvisit', $where);
        redirect('PlanYourVisit/data');
    }
}
