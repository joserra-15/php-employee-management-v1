<?php

/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
  $data = json_decode(file_get_contents("../../resources/employees.json"), true);
  array_push($data, $newEmployee);

  $updatedData = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents('../../resources/employees.json', $updatedData);
}


function deleteEmployee(string $id)
{
  $data = json_decode(file_get_contents("../../resources/employees.json"), true);
  for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]['id'] == $id) {
      $position = $i;
    }
  }

  unset($data[$position]);

  $data = array_values($data);
  $data = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents('users.json', $data); //TODO change path
}


function updateEmployee(array $updateEmployee)
{
  // TODO implement it
}


function getEmployee(string $id)
{
  $data = json_decode(file_get_contents("../resources/employees.json"), true);
  foreach ($data as $value) {
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
  parse_str(file_get_contents("php://input"), $query);
  return $query;
}

function getNextIdentifier(array $employeesCollection): int
{
  return $employeesCollection[count($employeesCollection) - 1]["id"] + 1;
}

function getAllEmployees()
{
  $data = file_get_contents("../../resources/employees.json");

  return $data;
}
