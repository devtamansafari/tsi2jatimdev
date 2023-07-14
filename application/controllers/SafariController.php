<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SafariController extends CI_Controller {

    public function safari_adventure()
    {
        $data['title']  = "Safari - Safari Adventure";
        $data['saZonaAsia'] = $this->main->get_where('tb_safari_adventure', ['kategori_safari_adventure' => 'zona asia'], true);
        $data['saAustralia'] = $this->main->get_where('tb_safari_adventure', ['kategori_safari_adventure' => 'zona australia'], true);
        $data['saZonaAfrika'] = $this->main->get_where('tb_safari_adventure', ['kategori_safari_adventure' => 'zona afrika'], true);
        $data['saZonaKarnivora'] = $this->main->get_where('tb_safari_adventure', ['kategori_safari_adventure' => 'zona karnivora'], true);
        $data['saZonaAmerikaEropa'] = $this->main->get_where('tb_safari_adventure', ['kategori_safari_adventure' => 'zona amerika eropa'], true);

        public_template('safari/vsafari_adventure', $data);  
    }
    public function safari_animal_show(){
        $data['title']  = "Safari - Safari Animal Show";
        $data['sasElephantStory'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'elephant story'], true);
        $data['sasDolphinAndFriend'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'dolphin and friend'], true);
        $data['sasMysteriousJungle'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'mysterious jungle'], true);
        $data['sasTigerShow'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'tiger show'], true);
        $data['sasDogHorseShow'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'dog horse show'], true);
        $data['sasBirdShow'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'bird show'], true);
        $data['sasTempleOfTerror'] = $this->main->get_where('tb_safari_animal_show', ['kategori_safari_animal_show' => 'temple of terror'], true);

        public_template('safari/vsafari_animal_show', $data); 
    }
 
    public function recreation_area(){
        $data['title']  = "Safari - Recreation Area";
        $data['sAmusementPark'] = $this->main->get_where('tb_recreation_area', ['kategori_recreation_area' => 'Amusement Park'], true);
        $data['sSafariWaterWorld'] = $this->main->get_where('tb_recreation_area', ['kategori_recreation_area' => 'safari water world'], true);
        $data['sElephantStory'] = $this->main->get_where('tb_recreation_area', ['kategori_recreation_area' => 'elephant story'], true);

        public_template('safari/vrecreation_area', $data); 
    }
    
 
}
