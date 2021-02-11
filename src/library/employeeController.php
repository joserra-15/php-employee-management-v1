<?php
require("employeeManager.php");
$queryParameters = getQueryStringParameters();

if ($queryParameters['action'] == 'getAllEmployees' && $queryParameters['method'] == 'GET') {
  header('Content-Type: application/json');
  echo getAllEmployees();
}
