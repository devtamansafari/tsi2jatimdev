<?php

class Model_instagram extends CI_Model {

    function __construct()
	{
		parent::__construct();
	}

    function getdatainstagram_tsi($token){
        $ig=$this->Model_Basic->getdata("instagram_tsi")[0];
        if($ig->instagram_modified_date!=date("d-m-Y")){
            $u = "https://graph.instagram.com/me/media?fields=id,caption,media_url,media_type,timestamp,thumbnail_url,permalink&access_token=";
            $url = $u ."".$token;
            $curl = curl_init($url);
            /* Return json */
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                
            /* make request */
            $result = curl_exec($curl);
            
            /* close curl */
            curl_close($curl);		
            
            $filter["instagram_id"]="1";
            $dataupdate["instagram_response"]=$result;
            $dataupdate["instagram_modified_date"]=date("d-m-Y");
            $this->Model_Basic->updatedata("instagram_tsi",$dataupdate,$filter);
        }
    }
}