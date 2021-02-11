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
  // TODO implement it
}


function removeAvatar($id)
{
  // TODO implement it
}


function getQueryStringParameters(): array
{
  $data = array('action' => '', 'data' => '');
  foreach (explode('&', $_SERVER['QUERY_STRING']) as $value) {
    $result = explode('=', $value);
    $data[$result[0]] = $result[1];
  };
  return $data;
}

function getNextIdentifier(array $employeesCollection): int
{
  return count($employeesCollection) + 1;
}

function getAllEmployees(): array
{
  $data = json_decode(file_get_contents("../../resources/employees.json"), true);

  return $data;
}
