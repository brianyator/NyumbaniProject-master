<?php
session_start(); 


$db = mysqli_connect('localhost', 'root', '', 'nyumbani');

if (isset($_POST['login'])) {
	$name = mysqli_real_escape_string($db, $_POST['name']);
	$pass = mysqli_real_escape_string($db, $_POST['pass']);
	
	if (empty($name)) { array_push($errors, "Name is required"); }
     if (empty($pass)) { array_push($errors, "Password is required"); }
	 
	 if (count($errors) == 0) {
  	    $pass = md5($pass);
		$query= "SELECT * FROM account WHERE name='$name' AND pass='$pass'";
		$results = mysqli_query($db, $query);
		
		$sql="INSERT INTO login (name,pass) values ('$name','$pass')";
        $res=mysqli_query($db,$sql);
		
		if (mysqli_num_rows($results)) {
          $_SESSION['name'] = $_POST['name'];
		  $_SESSION['success'] = "You are now logged in";
		  header('Location: index.php');
		  }else {
            array_push($errors, "Wrong username/password combination");
    }
	 }
}

?>