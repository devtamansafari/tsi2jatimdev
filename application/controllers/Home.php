<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    private $path = "";

    function __construct()
	{
		parent::__construct();
        $this->path = FCPATH . "assets/dist/img/posts/";
        $this->load->model('Model_basic');
        // $this->load->model('Model_instagram');
        // $this->load->model('Model_youtobe');
	}

    public function index()
    {

        $config['per_page'] = 9;
        $start = $this->uri->segment(3);
        $data['posts'] = $this->post->get_all_post($config['per_page'],$start);
    
		$data["plan_your_visit"] =$this->Model_basic->getdata("tb_planyourvisit");
		$data["hubungi_kami"] = $this->Model_basic->getdata("tb_hubungi_kami");
		$data["banner"] = $this->Model_basic->getdata("tb_banner_home");

        $data['title'] = "Taman Safari Indonesia Bogor";
        $data['members'] = $this->main->get_where('users', ['role' => 'member'], true);

        	// Get Data Scrap IG Safari Wonders
		// from apify scraper
		// $ch = curl_init(); 
		// curl_setopt($ch, CURLOPT_URL, "https://api.apify.com/v2/datasets/zcTkimVLLAnDcFs68/items?clean=true&format=json"); 
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		// $data_ig_wonders=json_decode(curl_exec($ch)); 
		// $data["ig"]=$data_ig_wonders;

        // from meta
		// $ch = curl_init(); 
		// curl_setopt($ch, CURLOPT_URL, "https://graph.instagram.com/me/media?fields=id,caption,media_url,media_type,timestamp,thumbnail_url,permalink&access_token=IGQVJWSUl6MXp1YW91eFltelhSQnQ2MjRVZATMzMzl0aDdyY2lBS3N0YzhtYi03VExTYXVseFJZAY3FNZAHNodTNqWUpPVzRDSnplcmRTZA25ONVVmQ29iTnBKZAnc5ZAEotQ1R2aV9CU1N6OC15TTU0MUUteAZDZD"); 
		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		// $data_ig_wonders=json_decode(curl_exec($ch)); 
		// $data["ig"]=$data_ig_wonders->data;

        // Get Data Safari Wonders

        // $this->Model_instagram->getdatainstagram_tsi("IGQVJWUlJRQTd5NG92TkRMTGFMZAUtjV1Q0MmpZAYVVFaEt2ZA3BKWTdscUhmeUdJVU90dFNuNlk0TVBrYTF1NU94QVI2X2NxSVlVQWNaVW5RUlJOQmUteXNSbWtiNkMwNkhhQzJvb3FFVEplMFotMllGUAZDZD");
		// $filterinstagram["instagram_id"]="1";
		// $data["ig"]=$this->Model_basic->getdata("instagram_tsi","",$filterinstagram)[0];
        // End Get Data Safari Wonders
        
        // YT
        // $this->Model_youtube->getdatayoutube_tsi();
		// $filteryoutube["youtube_aid"]="1";
		// $data["youtube"]=$this->Model_basic->getdata("youtube_tsi","",$filteryoutube)[0];
        
        $filteryoutobe['youtobe_id'] ="1";
        $data["yt"] =$this->Model_basic->getdata("youtobe_tsi","",$filteryoutobe)[0];

        $filterinstagram['instagram_id'] ="1";
		$data["ig"] =$this->Model_basic->getdata("instagram_tsi","",$filterinstagram)[0];


        public_template('home/view', $data);
    }

   

}
