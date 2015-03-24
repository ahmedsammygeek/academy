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
		if (empty($input_value) || empty( $_FILES['file']['name']) ||empty($_POST['date'])) {
			//if eny input place is empty go to empty data to show alert
			header('location: news.php?msg=empty_data'); die();
		}
	}
}
$location="image/";//location to save images
move_uploaded_file($_FILES['file']['tmp_name'], $location.$_FILES['file']['name']);
list($width,$height)=getimagesize($location.$_FILES['file']['name']);
// tr return width and height image admin use it 
if ($width < 200 || $height < 150) {
	header('location: news.php?msg=small_image'); die();
}

extract($inputs);
include 'connection.php';
// connection with db (met)
$sql="INSERT INTO news VALUES('',?,?,?,?) ";
$query=$conn->prepare($sql);
$query->bindValue(1,$title,PDO::PARAM_STR);
$query->bindValue(2,$content,PDO::PARAM_STR);
$query->bindValue(3,$_FILES['file']['name'],PDO::PARAM_STR);
$query->bindValue(4,$_POST['date'],PDO::PARAM_STR);
if ($query->execute()) {
	header('location: shownews.php?msg=data_inserted');
	die();
}
else
{
	header('location: news.php?msg=error_data'); die();
}



 ?>
