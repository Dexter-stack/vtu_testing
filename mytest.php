<?php

require "consume.php";

$api_key = "pk_test_/IMu87rgYqlQ+FcFink9tqLsuAbcO8SM+SYwNFIiDvY=";
$token = "sk_test_xdiU2sSCTag1B6hxUUvMxU5jXN2gnWulD5hPiHJYz9I=";
$url="https://enterprise.mobilenig.com/api/control/balance";
$curl = curl_init();

// $object = new consume($api_key);
// $object->set_url($url);
// $object->register_api();
// echo $object->get_mresponse();


$url1 = "https://enterprise.mobilenig.com/api/services/packages";

$object1 = new consume($api_key);
$object1->set_url($url1);
$data = array("service_id"=> "BCB",
"requestType"=> "GIFTING");
$object1->set_payload($data);
$object1->get_Packages();
echo $object1->get_mresponse();
echo "hello";




?>