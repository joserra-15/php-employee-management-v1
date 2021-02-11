<?php
require("employeeManager.php");
$queryParameters = getQueryStringParameters();

if (isset($_GET['id']))  {
  $employee = getEmployee($_GET['id']);
}else if (isset($queryParameters['action'])){
  if ($queryParameters['action'] == 'getAllEmployees' && $queryParameters['method'] == 'GET') {
    header('Content-Type: application/json');
    echo getAllEmployees();
  }
}
