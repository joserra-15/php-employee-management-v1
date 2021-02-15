<?php

function uifacesRequest($gender = false, $age = false, $limit = 8)
{

  $partialUrl = $gender ? "&gender[]=$gender&from_age=" . ($age - 5) . "&to_age=" . ($age + 10) : "";
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

if (isset($employee)) {
  $gender = $employee['gender'] == "man" ? "male" : ($employee['gender'] == "woman" ? "female" : '');
  if (isset($employee['avatar'])) {
    $result = uifacesRequest($gender, $employee['age'], 7);
    array_push($result, array('photo' => $employee['avatar']));
  } else {
    $result = uifacesRequest($gender, $employee['age']);
  }
} else {
  $result = uifacesRequest();
}
