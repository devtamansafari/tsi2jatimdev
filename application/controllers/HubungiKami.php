<?php
defined('BASEPATH') or exit('No direct script access allowed');

class HubungiKami extends CI_Controller
{
    private $path = "";

    public function __construct()
    {
        parent::__construct();
        $this->path = FCPATH . "assets/dist/img/homes/hub";
        $this->load->Model('Main_model');
    }



public function data()
    {
        check_role(['admin']);

        $data['title'] = "Data Hubungi Kami";
        $data['hub'] = $this->Main_model->get('tb_hubungi_kami');
        admin_template('home/hubungikami/data', $data);
    }

        private function validation()
    {
        $this->form_validation->set_rules('title_hub', 'Title Hub', 'required|trim');
        $this->form_validation->set_rules('alamat_hub', 'Alamat Hub', 'required|trim');
        $this->form_validation->set_rules('title_hub_telp', 'Title Hub Telp', 'required|trim');
        $this->form_validation->set_rules('isi_hub_telp', 'Isi Hub Telp', 'required|trim');
        $this->form_validation->set_rules('title_hub_email', 'Isi Hub Email', 'required|trim');
        $this->form_validation->set_rules('isi_hub_email', 'Isi Hub Email', 'required|trim');
        $this->form_validation->set_rules('link_gmap', 'Isi Link Gmaps', 'required|trim');
        $this->form_validation->set_rules('title_hub_ikuti', 'Title Hub Ikuti', 'required|trim');
        $this->form_validation->set_rules('link_ig', 'Isi Link IG', 'required|trim');
        $this->form_validation->set_rules('link_fb', 'Isi Link FB', 'required|trim');
    }

    public function create()
    {
        check_role(['admin']);

        $data['title'] = "Create New Hubungi Kami";

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('home/hubungikami/create', $data);
        } else {
            $this->save();
        }
    }
    private function save()
    {
        check_role(['admin']);

        $input = $this->input->post(null, true);
        $input['title_hub'] = $this->input->post('title_hub', false);
        $input['alamat_hub'] = $this->input->post('alamat_hub', false);
        $input['title_hub_telp'] = $this->input->post('title_hub_telp', false);
        $input['isi_hub_telp'] = $this->input->post('isi_hub_telp', false);
        $input['title_hub_email'] = $this->input->post('title_hub_email', false);
        $input['isi_hub_email'] = $this->input->post('isi_hub_email', false);
        $input['link_gmap'] = $this->input->post('link_gmap', false);
        $input['title_hub_ikuti'] = $this->input->post('title_hub_ikuti', false);
        $input['link_ig'] = $this->input->post('link_ig', false);
        $input['link_fb'] = $this->input->post('link_fb', false);

        // $input['user_id'] = userdata()->user_id;
        // $input['post_slug'] = $this->post->create_slug($input['post_title']);

        // Image Upload
        // if (!empty($_FILES['img_plan']['name'])) {
        //     $this->_configUpload();

        //     if ($this->upload->do_upload('img_plan')) {
        //         $img = $this->upload->data();

        //         //Compress Image
        //         $this->_compressImg($img['file_name']);

        //         $input['img_plan'] = $img['file_name'];
        //     } else {
        //         setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
        //         redirect('PlanYourVisit/create');
        //     }
        // }

        $this->Main_model->insert('tb_hubungi_kami', $input);
        redirect('HubungiKami/data');
    }


    public function edit($id_hub)
    {
        check_role(['admin']);

        $where = ['id_hub' => encode_php_tags($id_hub)];

        $data['title'] = 'Edit Hubungi Kami';
        $data['hub'] = $this->Main_model->get_where('tb_hubungi_kami',$where);

        if (!$data['hub']) redirect('HubungiKami/data');

        $this->validation();

        if ($this->form_validation->run() == false) {
            admin_template('home/hubungikami/edit', $data);
        } else {
            $this->update($where);
        }
    }
    private function update($where)
    {
        check_role(['admin']);

        
        $input = $this->input->post(null, true);
        $input['title_hub'] = $this->input->post('title_hub', false);
        $input['alamat_hub'] = $this->input->post('alamat_hub', false);
        $input['title_hub_telp'] = $this->input->post('title_hub_telp', false);
        $input['isi_hub_telp'] = $this->input->post('isi_hub_telp', false);
        $input['title_hub_email'] = $this->input->post('title_hub_email', false);
        $input['isi_hub_email'] = $this->input->post('isi_hub_email', false);
        $input['link_gmap'] = $this->input->post('link_gmap', false);
        $input['title_hub_ikuti'] = $this->input->post('title_hub_ikuti', false);
        $input['link_ig'] = $this->input->post('link_ig', false);
        $input['link_fb'] = $this->input->post('link_fb', false);


        // if (!empty($_FILES['img_plan']['name'])) {
        //     $oldimg = $this->main->get_where('tb_planyourvisit', $where)->img_plan;

        //     if ($oldimg) {
        //         if (is_file($this->path . $oldimg)) {
        //             unlink($this->path . $oldimg);
        //         }
        //     }

        //     $this->_configUpload();

        //     if ($this->upload->do_upload('img_plan')) {
        //         $img = $this->upload->data();

        //         //Compress Image
        //         $this->_compressImg($img['file_name']);

        //         $input['img_plan'] = $img['file_name'];
        //     } else {
        //         setMsg('danger', "Failed to upload image : " . $this->upload->display_errors());
        //         redirect('PlanYourVisit/data');
        //     }
        // }

        setMsg('success', 'Hubungi Kami Updated..');
        $this->main->update('tb_hubungi_kami', $input, $where);
        redirect('HubungiKami/data');
    }

}