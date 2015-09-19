<?php
//Employees controller

if( isset($_GET['action']) && strlen($_GET['action'])>0 ) {
	switch($_GET['action']){
	case 'display':
		display_Employees_();
		break;
	case 'add':
		add_Employee_();
		break;
	case 'view':
		view_Employee_();
		break;
	case 'update':
		update_Employee_();
		break;
	case 'delete':
		delete_Employee_();
		break;
	default:
		//call the index function
	}
}else{
	//call the index function
	index();
}

function add_Employee_(){
	include "model/Employee_model.php";
	$Employees = add_Employees();
	include "view/employee_add.php";
}

function view_Employee_(){
	include "model/Employee_model.php";
	$Employees = view_Employee();
	
	include "view/Employee_view.php";
}

function display_Employees_(){
	include "model/Employee_model.php";
	$Employees = display_Employees();
	
	include "view/Employee_display.php";
}

function update_Employee_(){
	include "model/Employee_model.php";
	$Employees = update_Employees();
	include "view/Employee_update.php";
}

function delete_Employee_(){
	include "model/Employee_model.php";
	$Employees = delete_Employees();
	
	include "view/Employee_delete.php";
}

function index(){ 
	//default function when there is no request
	// echo "Welcome to Employees";
	include "view/Employee_index.php";
}


?>
