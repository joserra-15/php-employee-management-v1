<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
  // TODO implement it
}


function deleteEmployee(string $id)
{
  // TODO implement it
}


function updateEmployee(array $updateEmployee)
{
  // TODO implement it
}


function getEmployee(string $id)
{
  $data = json_decode(file_get_contents("../resources/employees.json"), true);
  foreach ($data as $value){
    if ($value["id"] == $id) {
      $employee = $value;
    }
  }

  return $employee;
}


function removeAvatar($id)
{
  // TODO implement it
}


function getQueryStringParameters(): array
{
  $_REQUEST['method'] = $_SERVER['REQUEST_METHOD'];
  return $_REQUEST;
}

function getNextIdentifier(array $employeesCollection): int
{
  return count($employeesCollection) + 1;
}

function getAllEmployees()
{
  $data = file_get_contents("../../resources/employees.json");

  return $data;
}
