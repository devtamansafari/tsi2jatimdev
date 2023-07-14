<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SafariInfoController extends CI_Controller
{


    public function package()
    {
        $data['title']  = "Safari Info - package";
        $data['siHargaTiket'] = $this->main->get_where('tb_package', ['kategori_package' => 'harga tiket'], true);
        
        public_template('safari_info/vpackage', $data);  
    }
    public function park_map()
    {
        $data['title']  = "Safari Info - Park Map";
        $data['siMap'] = $this->main->get_where('tb_park_map', ['kategori_park_map' => 'the park map'], true);
        public_template('safari_info/vpark_map', $data);  
    }
    public function restaurant()
    {
        $data['title']  = "Safari Info - Restaurant";
        $data['siCaptainCrocs'] = $this->main->get_where('tb_restaurant', ['kategori_restaurant' => 'captain crocs'], true);
        $data['siGadingRestaurant'] = $this->main->get_where('tb_restaurant', ['kategori_restaurant' => 'gading restaurant'], true);
        $data['siSafariFriedChicken'] = $this->main->get_where('tb_restaurant', ['kategori_restaurant' => 'safari fried chicken'], true);
        $data['siTigerCaveRestaurant'] = $this->main->get_where('tb_restaurant', ['kategori_restaurant' => 'tiger cave restaurant'], true);
        $data['siWarungNdeso'] = $this->main->get_where('tb_restaurant', ['kategori_restaurant' => 'warung ndeso'], true);
        public_template('safari_info/vrestaurant', $data);  
    }
    
   

}
