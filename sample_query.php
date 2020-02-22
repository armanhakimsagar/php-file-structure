<?php

# For select

	include("app/Http/Controllers/HomeController.php");

	$home = new HomeController;
	$eloquent = new Eloquent;

	$columnName = "*";
	$tableName = "sliders";

	$sliderList = $eloquent->selectData($columnName, $tableName);


# for insert

	$tableName = "customers";
	$columnValue["customer_name"] = $_POST['full_name'];
	$columnValue["customer_mobile"] = $_POST['mobile_no'];
	$columnValue["customer_email"] = $_POST['email_address'];
	$columnValue["customer_password"] = md5($_POST['password']);
	$columnValue["created_at"] = date("Y-m-d H:i:s");
	
	$queryResult = $eloquent->insertData($tableName, $columnValue);
	
	print_r($queryResult);

# insert output


	if($queryResult['NO_OF_ROW_INSERTED'] > 0)
	{
		echo 'inserted';
	}
	else
	{
		echo 'problem';
	}
				

# select query

	$home = new HomeController;
	$eloquent = new Eloquent;

	$columnName = "*";
	$tableName = "sliders";

	$sliderList = $eloquent->selectData($columnName, $tableName);

	foreach($sliderList AS $eachSlider){
		echo $eachSlider['slider_title'];
	}
	


	
?>