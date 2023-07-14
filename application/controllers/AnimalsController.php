<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnimalsController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library('function_helper');
    }

    public function baby_zoo()
    {
        
        $data['title']  = "Animals - Baby Zoo";
        $data['aFotoSatwa'] = $this->main->get_where('tb_baby_zoo', ['kategori_baby_zoo' => 'foto satwa'], true);
        $data['aSatwaTunggang'] = $this->main->get_where('tb_baby_zoo', ['kategori_baby_zoo' => 'satwa tunggang'], true);
        $data['aAquaticLand'] = $this->main->get_where('tb_baby_zoo', ['kategori_baby_zoo' => 'aquatic land'], true);
        public_template('animals/vbaby_zoo', $data);   
    }
    public function australiana()
    {
        $data['title']  = "Animals - Australiana";
        $data['aAustraliana'] = $this->main->get_where('tb_australiana', ['kategori_australiana' => 'australiana zone'], true);

        public_template('animals/vaustraliana', $data);   
    }
    public function special_experience()
    {
        $data['title']  = "Animals - Special Experience";
        $data['aPaintBall'] = $this->main->get_where('tb_special_experience', ['kategori_special_experience' => 'paintball'], true);
        $data['aElephantJourney'] = $this->main->get_where('tb_special_experience', ['kategori_special_experience' => 'elephant journey'], true);
        public_template('animals/vspecial_experience', $data);   
    }

 
  

}
