<?php 
require_once("connectionFunction.php");
if(isset($_POST['submitproperty']))
{
	print_r($_POST);

$title=$_POST['title'];
$location = $_POST['location'];
$city = $_POST['city'];
$property_type = $_POST['type'];
$contract_type = $_POST['contract_type'];
$price = $_POST['price'];
$agent = $_POST['agent'];
$area = $_POST['area'];
$bedrooms = $_POST['bedrooms'];
$bathrooms = $_POST['bathrooms'];
$garages = $_POST['garages'];
$rooms= $_POST['rooms'];
$parking_lots = $_POST['parking_lots'];

$connecting = connection();


}

$sql="INSERT INTO property (title, location, city, property_type, contract_type, price, agent, area, bedrooms, bathrooms, garages, rooms, parking_lots)VALUES('$title', '$location', '$city', '$property_type','$contract_type', '$price', '$agent', '$area', '$bedrooms', '$bathrooms', '$garages', '$rooms', '$parking_lots')";
$insert = mysqli_query($connecting, $sql);

if($insert){
		echo "Details updated";
		header('Location: index.php');
	}	

else{
	echo "fail";
}

 ?>