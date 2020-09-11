<?php
session_start();

$name = "";
$email ="";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'nyumbani')or die;

if (isset($_POST['create'])) {
	/*$name= mysql_escape_string( $_POST['name']);
	$pass= mysql_escape_string( $_POST['pass']);
	$email= mysql_escape_string( $_POST['email']);
	$location= mysql_escape_string( $_POST['location']);*/
  $create= $_POST['create'];
}
 if(isset($_POST['name'])){
$name = $_POST['name'];
 }
if(isset($_POST['pass'])){
$pass = $_POST['pass'];
}
if(isset($_POST['email'])){
$email = $_POST['email'];
}
if(isset($_POST['location'])){
$location = $_POST['location'];
}

 if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($pass)) { array_push($errors, "Password is required"); }
   if (empty($email)) { array_push($errors, "Email is required"); }
	
	/* $sql = "SELECT * FROM `account` WHERE `email`='$email' LIMIT 1";
  $result = mysqli_query($db, $sql);
  $email = mysqli_fetch_assoc($result);
  
   
  if ($email) { 
    if ($email['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  */
  if (count($errors) == 0) {
  	$pass = md5($pass);

  	$query = "INSERT INTO account (name, pass, email) 
  			  VALUES('$name','$pass','$email')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('Location: logi.html');
  }

?>