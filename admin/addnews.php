<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
if (isset($_POST['submit'])) {
	$args = array('title' =>FILTER_SANITIZE_STRING ,'content'=>FILTER_SANITIZE_STRING);
	//recived data
	$inputs=filter_input_array(INPUT_POST,$args);
	//by post method
	foreach ($inputs as $key_input => $input_value) {
		if (empty($input_value) || empty( $_FILES['file']['name'])) {
			//if eny input place is empty go to empty data to show alert
			header('location: news.php?msg=empty_data'); die();
		}
	}
}
$img_name=$_FILES['file']['name'];
require '../classes/filevalidate.php';
if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
	header("location: news.php?msg=error_data");die();
}
	//function used to know file type
require '../classes/filetype.php';
$type=get_type($img_name);
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
$img_name=$randomstring.".$type" ;
$location="image/";//location to save images
move_uploaded_file($_FILES['file']['tmp_name'], $location.$img_name);
list($width,$height)=getimagesize($location.$img_name);
// tr return width and height image admin use it 
if ($width < 100 || $height < 50) {
	header('location: news.php?msg=small_image'); die();
}
date_default_timezone_set('UTC');
$today = date("M j Y"); 
extract($inputs);
include 'connection.php';
// connection with db (met)
$sql="INSERT INTO news VALUES('',?,?,?,?) ";
$query=$conn->prepare($sql);
$query->bindValue(1,$title,PDO::PARAM_STR);
$query->bindValue(2,$content,PDO::PARAM_STR);
$query->bindValue(3,$img_name,PDO::PARAM_STR);
$query->bindValue(4,$today,PDO::PARAM_STR);
if ($query->execute()) {
	header('location: shownews.php?msg=data_inserted');
	die();
}
else
{
	header('location: news.php?msg=error_data'); die();
}



?>
