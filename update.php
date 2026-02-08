<?php

$id =  $_POST['id'];

include 'database.php';

$query = new Query();
$table = "users";


  $data = [
    "id" => $_POST['id'],
    "name" => $_POST['name'],
    "age" => $_POST['age'],
  ];


  $result = $query->UpdateData($table, $data, "id", $id );

  header('location: index.php');

?>