<?php

if (isset($employee)) {
  if (isset($employee['avatar'])) {
  } else {
  }
} else {
  $result = uifacesRequest();
}


function uifacesRequest($limit = 8, $gender = false, $age = false){

  $partialUrl = $gender ? "&gender=$gender&from_age=" . ($age-5) . "&to_age=" . ($age +5) : "";
  $url = "https://uifaces.co/api?limit=$limit$partialUrl";
  $ch = curl_init($url);

  curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'X-API-KEY: 177AEE4B-C5854FEC-AEB8531D-318C0073'
  ));

  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

  $result = curl_exec($ch);

  curl_close($ch);

  return json_decode($result, true);
}