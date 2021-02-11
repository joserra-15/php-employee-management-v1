<?php
require("employeeManager.php");
$queryParameters = getQueryStringParameters();
switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    if (isset($_GET['id'])) {
      $employee = getEmployee($_GET['id']);
    }
    if ($_REQUEST['action'] == 'getAllEmployees') {
      header('Content-Type: application/json');
      echo getAllEmployees();
    }
    break;
  case 'POST':
    break;
  case 'PUT':
    break;
  case 'DELETE':
    $queryParameters = getQueryStringParameters();
    deleteEmployee($queryParameters['data']);
    break;
  case 'PATCH':
    break;
}
