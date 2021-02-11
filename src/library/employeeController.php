<?php
require("employeeManager.php");
$queryParameters = getQueryStringParameters();
if ($queryParameters['action'] == 'getAllEmployees') {
  header('Content-Type: application/json');
  echo json_encode(getAllEmployees());
}
