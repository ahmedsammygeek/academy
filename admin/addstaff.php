<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	//validate data recived
	$img_name=$_FILES['file']['name'];
	$args=array('name'=>FILTER_SANITIZE_STRING,'description'=>FILTER_SANITIZE_STRING,'staff_type'=>FILTER_SANITIZE_STRING,
		'facebook'=>FILTER_SANITIZE_STRING,'email'=>FILTER_VALIDATE_EMAIL,'username'=>FILTER_SANITIZE_STRING,'password'=>FILTER_SANITIZE_STRING);
	
	$inputs=filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key_input => $input_value) {
		if (empty($input_value) || empty($img_name)) {
			header('location: staff.php?msg=empty_data'); die();
		}
	}

}
// var_dump($_POST);die();
extract($inputs);
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
// var_dump($type);die();
require '../classes/filevalidate.php';
	if (!validation($img_name,array('jpg','png','jpeg'))) {
		/* function return false */ 
		header("location: staff.php?msg=error_data");die();
	}

	//function used to know file type
	require '../classes/filetype.php';
	$img_type=get_type($img_name);
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$img_name=$randomstring.".$img_type" ;
	$up=move_uploaded_file($_FILES['file']['tmp_name'], 'image/'.$img_name);
	if (!$up) {
		header("location: staff.php?msg=no_uploaded");die();
	}





//connection with db (met)
include 'connection.php';
$query=$conn->prepare("INSERT INTO staff VALUES ('',?,?,?,?,?,?,?,?,?) ");
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,$img_name,PDO::PARAM_STR);
$query->bindValue(3,$title,PDO::PARAM_STR);
$query->bindValue(4,$description,PDO::PARAM_STR);
$query->bindValue(5,$facebook,PDO::PARAM_STR);
$query->bindValue(6,$email,PDO::PARAM_STR);
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