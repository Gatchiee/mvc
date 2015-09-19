<?php
//Employees_model.php

function add_Employees($data){
include "config.php";
include "employees.php";
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
//return mysqli_affected_rows($result); //determine mysql function to check if the record was inserted or get the last inserted ID
printf("Last inserted record has id %d\n", mysqli_insert_id($conn));

}


function view_Employees(){
include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
	// echo "OK";
}
$sql = "SELECT * FROM employees WHERE id='".$_GET['id']."'";

//display
$result = mysqli_query($conn, $sql);

$Employees = array();
	if( $myrow=mysqli_fetch_array($result) ){
			$info= array();
			$info['id'] = $myrow['id'];
			$info['name'] = $myrow['name'];
			$info['age'] = $myrow['age'];
			$info['address'] = $myrow['address'];
			$info['position'] = $myrow['position'];
			$Employees = $info;
			}
	return $Employees;
}


function delete_Employees(){
include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
	// echo "OK";
}
//prepare
$sql = "DELETE FROM employees WHERE id=".$_GET['id'];

//display
$result = mysqli_query($conn, $sql);

display_Employees();
}
function display_Employees(){
//OUTPUT REQT
// return/display data:
//	id,name,age

//connect and select
include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
	// echo "OK";
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
 //print_r($Employees);
}

function update_Employees(){

include "config.php";
$conn = mysqli_connect($host,$user,$pass,$db);

//check
if( mysqli_connect_errno($conn) ){
	echo "Error in DB";
}else{
	// echo "OK";
}
//prepare
	


$sql = "UPDATE employees SET name='$name',age='$age',address='$address',position='$position' WHERE id='$id'";

//display
$result = mysqli_query($conn,$sql);
}



// display_Employees();

?>
