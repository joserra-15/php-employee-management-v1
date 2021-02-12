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
  array_splice($data, $position, 1);
  $data = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents('users.json', $data); //TODO change path
}


function updateEmployee(array $updateEmployee)
{
  $data = json_decode(file_get_contents("../../resources/employees.json"), true);
  for ($i = 0; $i < count($data); $i++) {
    if ($data[$i]['id'] == $updateEmployee['id']) {
      $position = $i;
    }
  }
  $data[$position]['name'] = $updateEmployee['name'];
  $data[$position]['lastName'] = $updateEmployee['lastName'];
  $data[$position]['age'] = $updateEmployee['age'];
  $data[$position]['email'] = $updateEmployee['email'];
  $data[$position]['gender'] = $updateEmployee['gender'];
  $data[$position]['streetAddress'] = $updateEmployee['streetAddress'];
  $data[$position]['city'] = $updateEmployee['city'];
  $data[$position]['state'] = $updateEmployee['state'];
  $data[$position]['postalCode'] = $updateEmployee['postalCode'];
  $data[$position]['phoneNumber'] = $updateEmployee['phoneNumber'];
  $data = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents('../../resources/employees.json', $data);
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
