<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller
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

        $data['title'] = "Data Package ";
        $data['data'] = $this->Main_model->get('tb_package');
  
        admin_template('safari_info/package/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_package', 'Kategori Package', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Package";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari_info/package/create', $data);
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
        $input['link_package'] = $this->input->post('link_package', false);
        $input['kategori_package'] = $this->input->post('kategori_package', false);

        // Image Upload
        if (!empty($_FILES['img_package']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_package')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_package'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('Package/create');
            }
        }

        $this->Main_model->insert('tb_package', $input);
        redirect('Package/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_package' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Package';
        $data['data'] = $this->Main_model->get_where('tb_package',$where);

        if (!$data['data']) redirect('Package/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari_info/package/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_package'] = $this->input->post('link_package', false);

        if (!empty($_FILES['img_package']['name'])) {
            $oldimg = $this->main->get_where('tb_package', $where)->img_package;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_package')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_package'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('Package/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_package', $input, $where);
        redirect('Package/data');
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
        $where = ['id_package' => $id];

        $query = $this->main->get_where('tb_package', $where);
        if (!$query) redirect('Package/data');

        $this->deleteContentImage($query->img_package);

        $img = $query->img_package;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_package', $where);
        redirect('Package/data');
    }
}

