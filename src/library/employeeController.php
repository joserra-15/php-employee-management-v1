<?php
require("employeeManager.php");

switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    if (isset($_REQUEST['id'])) {
      $employee = getEmployee($_REQUEST['id']);
    }
    if (isset($_REQUEST['getAllEmployees'])) {
      header('Content-Type: application/json');
      echo getAllEmployees();
    }
    break;
  case 'POST':
    $_REQUEST['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));
    isset($_REQUEST['lastName']) ? $_REQUEST['lastName'] : $_REQUEST['lastName'] = "";
    isset($_REQUEST['gender']) ? $_REQUEST['gender'] : $_REQUEST['gender'] = "";
    addEmployee($_REQUEST);
    if (isset($_REQUEST['employeePage'])) {
      header('Location: dashboard.php');
    } else {
      header('Content-Type: application/json');
      echo json_encode($_REQUEST['id']);
    }

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
