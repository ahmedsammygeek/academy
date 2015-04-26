<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
	//validate data recived
$args=array('staff_type'=>FILTER_SANITIZE_STRING,'name'=>FILTER_SANITIZE_STRING,'username'=>FILTER_SANITIZE_STRING,'password'=>FILTER_SANITIZE_STRING);
$img_name=$_FILES['file']['name'];
$inputs=filter_input_array(INPUT_POST,$args);
foreach ($inputs as $key_input => $input_value) {
	if (empty($_POST['name']) || empty($_POST['username']) || empty($_POST['password']) ) {
		header('location: staff.php?msg=empty_data'); die();
	}
}
// var_dump($_POST);die();
extract($inputs);
$password=hash('ripemd160', "$password");
/*
check about the type (doctor or domenstor) ?? from 'type' 
*/
if ($staff_type == '1') {
	$title="domenestor"; 
}
else
{
	$title="doctor";
}

//connection with db (met)
include 'connection.php';
$query=$conn->prepare("INSERT INTO staff VALUES ('',?,?,?,?,?,?,?,?,?) ");
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,0,PDO::PARAM_STR);
$query->bindValue(3,$title,PDO::PARAM_STR);
$query->bindValue(4,0,PDO::PARAM_STR);
$query->bindValue(5,0,PDO::PARAM_STR);
$query->bindValue(6,0,PDO::PARAM_STR);
$query->bindValue(7,$username,PDO::PARAM_STR);
$query->bindValue(8,$password,PDO::PARAM_STR);
$query->bindValue(9,$staff_type,PDO::PARAM_STR);
if ($query->execute()) {
	header("location: showstaff.php?data_inserted");die();
}
else
{
	header("location: addstaff.php?error_data");die();
}





?>