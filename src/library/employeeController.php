<?php
require("employeeManager.php");

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    if (isset($_REQUEST['id'])) {
      $employee = getEmployee($_REQUEST['id']);
    }
    if (isset($_REQUEST['action'])){
      if ($_REQUEST['action'] == 'getAllEmployees') {
        header('Content-Type: application/json');
        echo getAllEmployees();
      }
    }
    break;
  case 'POST':
    $_REQUEST['data']['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));
    isset($_REQUEST['data']['lastName'])?$_REQUEST['data']['lastName']:$_REQUEST['data']['lastName'] = "";
    isset($_REQUEST['data']['gender'])?$_REQUEST['data']['gender']:$_REQUEST['data']['gender'] = "";
    addEmployee($_REQUEST['data']);
    echo $_REQUEST['data']['id'];
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
