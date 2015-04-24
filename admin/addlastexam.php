<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
/*recived data from html forms*/
if (isset($_POST['submit'])) {
	$year=$_POST['year'];
	$department=$_POST['department'];
	$subject=$_POST['subject'];
	$term=$_POST['term'];
}
/* check if user dont enter table image */
if (empty($_FILES['file']['name'])) {
	header("location: lastexam.php?msg=empty_data");die();
}

$img_name=$_FILES['file']['name'];
/* check this file imae or no */
require '../classes/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg','doc','pdf'))) {
		// function return false 
	header("location: lastexam.php?msg=error_data");die();
}
	//function used to know file type
require '../classes/filetype.php';
$type=get_type($img_name);
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$img_name=$randomstring.".$type" ;
// var_dump($type);die();
if ($type == 'pdf' || $type == 'doc') {
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$file_name=$randomstring.".$type" ;
	move_uploaded_file($_FILES['file']['tmp_name'] , 'image/file/'.$img_name);
}
else
{
	
	move_uploaded_file($_FILES['file']['tmp_name'] , 'image/'.$img_name);	
}

require 'connection.php';
$query=$conn->prepare("INSERT INTO last_exams VALUES ('',?,?,?,?,?)");
$query->bindValue(1,$department,PDO::PARAM_STR);
$query->bindValue(2,$year,PDO::PARAM_INT);
$query->bindValue(3,$term,PDO::PARAM_INT);
$query->bindValue(4,$img_name,PDO::PARAM_INT);
$query->bindValue(5,$subject,PDO::PARAM_INT);
/*execute query*/
if ($query->execute()) {
	header("location: showlastexam.php?msg=data_inserted");die();
}
elseif (file_exists("image/$img_name")) {
	unlink("image/$img_name");
}
elseif (file_exists("image/file/$img_name")) {
	unlink("image/file/$file_name");
}
else
{
	header("location: lastexam.php?msg=error_data");die();
}



?>