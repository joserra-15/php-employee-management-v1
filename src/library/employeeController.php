<?php
require("employeeManager.php");
if (isset($_REQUEST['_method'])) {
  $_SERVER['REQUEST_METHOD'] = $_REQUEST['_method'];
  array_splice($_REQUEST, array_search('_method', array_keys($_REQUEST)), 1);
}
switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    if (isset($_REQUEST['id'])) {
      require("./library/avatarsApi.php");
      $employee = getEmployee($_REQUEST['id']);
    }
    if (isset($_REQUEST['getAllEmployees'])) {
      header('Content-Type: application/json');
      echo getAllEmployees();
    }
    break;
  case 'POST':
    $_REQUEST['id'] = getNextIdentifier(json_decode(getAllEmployees(), true));
    if (isset($_REQUEST['employeePage'])) {
      array_splice($_REQUEST, array_search('employeePage', array_keys($_REQUEST)), 1);
      addEmployee($_REQUEST);
      header('Location: ../dashboard.php');
      exit;
    } else {
      $_REQUEST['lastName'] = "";
      $_REQUEST['gender'] = "";
      addEmployee($_REQUEST);
      header('Content-Type: application/json');
      echo json_encode($_REQUEST['id']);
    }
    break;
  case 'PUT':
    $query = getQueryStringParameters();
    updateEmployee($query);
    if (isset($query['employeePage'])) {
      header('Location: ../dashboard.php');
      exit;
    }
    break;
  case 'DELETE':
    $queryParameters = getQueryStringParameters();
    deleteEmployee($queryParameters['data']);
    break;
}
