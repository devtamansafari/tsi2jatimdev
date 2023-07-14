<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ParkMap extends CI_Controller
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

        $data['title'] = "Data Park Map ";
        $data['data'] = $this->Main_model->get('tb_park_map');
  
        admin_template('safari_info/park_map/data', $data);
    }

    private function validation()
    {
        $this->form_validation->set_rules('kategori_park_map', 'Kategori Park Map', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create Park Map";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari_info/park_map/create', $data);
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
        $input['link_park_map'] = $this->input->post('link_park_map', false);
        $input['kategori_park_map'] = $this->input->post('kategori_park_map', false);

        // Image Upload
        if (!empty($_FILES['img_park_map']['name'])) {
            $this->_configUpload();

            if ($this->upload->do_upload('img_park_map')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_park_map'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('ParkMap/create');
            }
        }

        $this->Main_model->insert('tb_park_map', $input);
        redirect('ParkMap/data');
    }

    public function edit($id_safari)
    {
        check_role(['admin']);

        $where = ['id_park_map' => encode_php_tags($id_safari)];

        $data['title'] = 'Edit Data Park Map';
        $data['data'] = $this->Main_model->get_where('tb_park_map',$where);

        if (!$data['data']) redirect('ParkMap/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('safari_info/park_map/edit', $data);
        } else {
            $this->update($where);
        }
    }

    private function update($where)
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['link_park_map'] = $this->input->post('link_park_map', false);

        if (!empty($_FILES['img_park_map']['name'])) {
            $oldimg = $this->main->get_where('tb_park_map', $where)->img_park_map;

            if ($oldimg) {
                if (is_file($this->path . $oldimg)) {
                    unlink($this->path . $oldimg);
                }
            }

            $this->_configUpload();

            if ($this->upload->do_upload('img_park_map')) {
                $img = $this->upload->data();

                //Compress Image
                $this->_compressImg($img['file_name']);

                $input['img_park_map'] = $img['file_name'];
            } else {
                setMsg('danger', "Failed to upload image/video : " . $this->upload->display_errors());
                redirect('ParkMap/data');
            }
        }

        setMsg('success', ' Successfuly Updated.');
        $this->main->update('tb_park_map', $input, $where);
        redirect('ParkMap/data');
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
        $where = ['id_park_map' => $id];

        $query = $this->main->get_where('tb_park_map', $where);
        if (!$query) redirect('ParkMap/data');

        $this->deleteContentImage($query->img_park_map);

        $img = $query->img_park_map;
        $image = $this->path . $img;

        if ($img) {
            if (is_file($image)) {
                unlink($image);
            }
        }

        setMsg('success', "deleted successfully.");
        $this->main->delete('tb_park_map', $where);
        redirect('ParkMap/data');
    }
}

