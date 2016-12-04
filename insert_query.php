<?php
$server = "localhost";
$username = "root";
$password = "donkey1h10";
$db = "katie";

$conn = new mysqli($server, $username, $password, $db);
//Check connection
if ($conn->connect_error){
  die ("Connection failed: " . $conn-> connect_error);
}
  $week = $_POST['week'];
  $monday = $_POST['monday'];
  $tuesday = $_POST['tuesday'];
  $wednesday = $_POST['wednesday'];
  $thursday = $_POST['thursday'];
  $friday = $_POST['friday'];
  $saturday = $_POST['saturday'];
  $sunday = $_POST['sunday'];

  if($week!=NULL){
  $sql = "UPDATE week_budget SET budget = $week WHERE id = 1";
  if ($conn->query($sql) === TRUE) {
  } else {
  }
  }
  if($monday!=NULL){
    $sql = "UPDATE budget SET budget = $monday WHERE id = 1";
    if($conn->query($sql) === TRUE) {
    } else {

    }
  }
  if($tuesday!=NULL){
    $sql = "UPDATE budget SET budget = $monday WHERE id = 2";
  if($conn->query($sql) === TRUE){
  }else{}
  }
  if($wednesday!=NULL){
    $sql = "UPDATE budget SET BUDGET = $wednesday WHERE id = 3";
    if($conn->query($sql) === TRUE){}
      else{}
  }
  if($thursday!=NULL){
    $sql = "UPDATE budget SET budget = $thursday WHERE id = 4";
    if($conn->query($sql) === TRUE){}
      else{}
  }
  if($friday!=NULL){
    $sql = "UPDATE budget SET budget = $friday WHERE id = 5";
    if($conn->query($sql) === TRUE){}
      else {}
  }
  if($saturday!=NULL){
    $sql = "UPDATE budget SET budget = $saturday WHERE id =6";
    if($conn->query($sql) === TRUE){}
      else{}
  }
  if($sunday!=NULL){
    $sql = "UPDATE budget SET budget = $sunday WHERE id = 7";
    if($conn->query($sql) === TRUE){}
      else {}
  }
  ?>
