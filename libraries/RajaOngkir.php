<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
Bismillahhirrohmanirrohim ..
Semoga menjadi script yang barokah amin ..
*/
class RajaOngkir {
  // api key akun rajaongkir
  private $api_key = 'your-api-key';

  public function province($prov_id){
      $curl = curl_init();

      curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/province?id=$prov_id",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: ".$this->api_key.""
          ),
       ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          $response =  "cURL Error #:" . $err;
        } else {
          $response;
        }

      return json_decode($response,TRUE);

  }
  public function ongkir($asal,$id_kota,$berat,$kurir){

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/cost",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=".$asal."&originType=city&destination=".$id_kota."&destinationType=subdistrict&weight=".$berat."&courier=".$kurir."",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: ".$this->api_key.""
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          $response =  "cURL Error #:" . $err;
        } else {
          $response;
        }

    return json_decode($response,TRUE);
  }

  public function sub_district($id_kab){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/subdistrict?city=$id_kab",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: ".$this->api_key.""
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      $response =  "cURL Error #:" . $err;
    } else {
       $response;
    }
    return json_decode($response,TRUE);
  }

public function kab_through($id_prov){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/city?province=".$id_prov."",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: ".$this->api_key.""
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      $response =  "cURL Error #:" . $err;
    } else {
      $response;
    }
    return json_decode($response,TRUE);
}

  public function name_kab($id){
      $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/city?id=".$id."",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: ".$this->api_key.""
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          $response =  "cURL Error #:" . $err;
        } else {
          $response;
        }

    return json_decode($response,TRUE);
  }

  public function kab(){
    $curl = curl_init();
  	curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/city",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "key: ".$this->api_key.""
      ),
    ));

  	$response = curl_exec($curl);
  	$err = curl_error($curl);

  	curl_close($curl);
    return json_decode($response,TRUE);
  }
  public function get_prov(){
    $curl = curl_init();

	 curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pro.rajaongkir.com/api/province",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: ".$this->api_key.""
          ),
       ));

	$response = curl_exec($curl);
	$err = curl_error($curl);
  return $response;
  }
  public function waybill($resi,$kurir){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://pro.rajaongkir.com/api/waybill",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => "waybill=".$resi."&courier=$kurir",
      CURLOPT_HTTPHEADER => array(
        "content-type: application/x-www-form-urlencoded",
        "key: ".$this->api_key.""
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      $response =  "cURL Error #:" . $err;
    } else {
      $response;
    }
    return json_decode($response,TRUE);
  }
}
