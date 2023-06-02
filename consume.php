<?php 
class consume{

    private $payload;
    private $api_key;
    private $url;
    private $response;
    private $recharge_field ;


    public function __construct($test_key)
    {
        $this->api_key = $test_key;
    }

    public function set_payload($payload){
        $this->payload =json_encode($payload) ;
    }
    public function set_url($url){
        $this->url = $url;
    }
    public function get_mresponse(){
        return $this->response;
    }

    


    public function register_api(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Content-Type: application/json',
              "Authorization: Bearer $this->api_key"
            ),
          ));
          
          $this->response = curl_exec($curl);
          
          curl_close($curl);
          

    }
public function get_Packages(){


  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => $this->url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>$this->payload,
    CURLOPT_HTTPHEADER => array(
      'Content-Type: application/json',
      "Authorization: Bearer $this->api_key"
    ),
  ));
  
  $this->response = curl_exec($curl);
  
  curl_close($curl);
  
  

    }




}












?>