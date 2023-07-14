<?php

class Model_youtube extends CI_Model {

    function __construct()
	{
		parent::__construct();
        $this->load->model('Model_Basic');   
	}

    function getdatayoutube_tsi(){
		
            $youtube=$this->Model_Basic->getdata("youtube_tsi")[0];
            if($youtube->youtube_date_modified!=date("d-m-Y")){
                $url = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyCEaiY0noKvqNlGdrTDSrnjWpcy2TjDcuM&channelId=UC3GakgbQenPxUhJqYP9NCeA&part=snippet,id&order=date&maxResults=8";
                $curl = curl_init($url);
                /* Return json */
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($curl, CURLOPT_TIMEOUT, 10000); //timeout in seconds
                /* make request */
                $result = curl_exec($curl);
                
                /* close curl */
                curl_close($curl);		
                $filteryoutube["youtube_id"]="1";
                $dataupdate["youtube_response"]=$result;
                $dataupdate["youtube_date_modified"]=date("d-m-Y");
                $this->Model_Basic->updatedata("youtube_tsi",$dataupdate,$filteryoutube);
            }

    }
}