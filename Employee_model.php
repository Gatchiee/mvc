<?php
//Employees_model.php

function add_Employees(){
if( $_SERVER['REQUEST_METHOD']=='POST' ){
			$id = $_POST['empID'];
			$name = $_POST['empName'];
			$age = $_POST['empAge'];
			$address = $_POST['empAddress'];
			$position = $_POST['empPosition'];

include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
	// echo "OK";
}
//prepare
$sql = "INSERT INTO employees VALUES('$id','$name','$age','$address','$position')";

//display
$result = mysqli_query($conn,$sql);
}
}

function delete_Employees(){
include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
}
//prepare
$sql = "DELETE FROM employees WHERE id=".$_GET['id'];

//display
$result = mysqli_query($conn, $sql);

display_Employees();
}
function display_Employees(){
include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
}
//prepare
$sql = "SELECT * FROM Employees";

//display 
$result = mysqli_query($conn,$sql);

$Employees = array();
	if( $myrow=mysqli_fetch_array($result) ){
		do{
			$info= array();
			$info['id'] = $myrow['id'];
			$info['name'] = $myrow['name'];
			$info['age'] = $myrow['age'];
			$info['address'] = $myrow['address'];
			$info['position'] = $myrow['position'];
			$Employees[] = $info;
		}while($myrow=mysqli_fetch_array($result));
	}
	return $Employees;
}

function view_Employee(){
include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
}
//prepare

$id=$_GET['id'];
$sql = "SELECT * FROM Employees where id=$id";

//display 
$result = mysqli_query($conn,$sql);

$Employees = array();
	if( $myrow=mysqli_fetch_array($result) ){
		do{
			$info= array();
			$info['id'] = $myrow['id'];
			$info['name'] = $myrow['name'];
			$info['age'] = $myrow['age'];
			$info['address'] = $myrow['address'];
			$info['position'] = $myrow['position'];
			$Employees[] = $info;
		}while($myrow=mysqli_fetch_array($result));
	}
	return $Employees;
}

function update_Employees(){
if( $_SERVER['REQUEST_METHOD']=='POST' ){
			$emp = $_POST['empID'];
			$name = $_POST['empName'];
			$age = $_POST['empAge'];
			$address = $_POST['empAddress'];
			$position = $_POST['empPosition'];

include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
}
//prepare
	

$sql = "UPDATE employees SET name='$name',age='$age',address='$address',position='$position' WHERE id='$id'";

//display
$result = mysqli_query($conn,$sql);
}

}


?>
