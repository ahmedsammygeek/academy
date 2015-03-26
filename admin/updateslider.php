<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}

if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
$args = array('title' =>FILTER_SANITIZE_STRING ,'link' =>FILTER_SANITIZE_STRING );
// this array to validate data recieved slider.php 
$inputs=filter_input_array(INPUT_POST,$args);
// this function to recieve data from args array by post method
if (isset($_POST['submit'])) {
	foreach ($inputs as $input_key => $input_value) {
		if (empty($input_value) || empty($_FILES['file']['name'])) {
			// if user leave eny inputs empty without enter eny thing in this case 
			//go to inputs page again and show alert about this case (some data is an empty)
			header('location: editslider.php?msg=empty_data'); die();
		}
		else
		{
			$img_name=$_FILES['file']['name'];
			$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
			$img_name=$randomstring.'.jpg' ;
		}
	}
}
$up=move_uploaded_file($_FILES['file']['tmp_name'] , 'image/'.$img_name);
if (!$up) {
	header("location: editslider.php?msg=empty_data");die();
}
extract($inputs);
require 'connection.php';
$sql="UPDATE slider SET image='$img_name',title='$title',link='$link' WHERE id=$id ";
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showslider.php?msg=data_updated"); die();
}
else
{
	header("location: editslider.php?msg=error_update"); die();
}

?>
