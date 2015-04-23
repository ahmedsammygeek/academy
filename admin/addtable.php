<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
/*recived data from html forms*/
if (isset($_POST['submit'])) {
	$year=$_POST['year'];
	$department=$_POST['department'];
}
/* check if user dont enter table image */
if (empty($_FILES['file']['name'])) {
	header("location: table.php?msg=empty_data");die();
}

$img_name=$_FILES['file']['name'];
/* check this file imae or no */
require '../classes/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
	header("location: table.php?msg=error_data");die();
}
	//function used to know file type
require '../classes/filetype.php';
$type=get_type($img_name);
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$img_name=$randomstring.".$type" ;
$up=move_uploaded_file($_FILES['file']['tmp_name'] , 'image/'.$img_name);
require 'connection.php';
$query=$conn->prepare("INSERT INTO tables VALUES ('',?,?,?)");
$query->bindValue(1,$img_name,PDO::PARAM_STR);
$query->bindValue(2,$year,PDO::PARAM_INT);
$query->bindValue(3,$department,PDO::PARAM_INT);
/*execute query*/
if ($query->execute()) {
	header("location: showtable.php?msg=data_inserted");die();
}
if (file_exists("image/$img_name")) {
	unlink("image/$img_name");
}
header("location: table.php?msg=error_data");die();


?>