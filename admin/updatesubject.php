<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
if (isset($_POST['submit'])) {
	//validate data recived
	$args=array('name'=>FILTER_SANITIZE_STRING,'description'=>FILTER_SANITIZE_STRING,'year'=>FILTER_VALIDATE_INT,
		'department'=>FILTER_VALIDATE_INT,'term'=>FILTER_VALIDATE_INT,'doctor'=>FILTER_VALIDATE_INT);
	//recived data with post method
	$inputs=filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key_input => $input_value) {
		if (empty($input_value)) {
			header('location: subject.php?msg=empty_data'); die();
		}
	}
}
extract($inputs);
//connection with db (met)
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
include 'connection.php';
$sql="UPDATE subjects SET name='$name',description='$description',year='$year',department=$department
,term='$term',doctor_id='$doctor' WHERE id=$id ";
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showsubject.php?msg=updated"); die();
}
else
{
	header("location: editsubject.php?msg=error_update"); die();
}

 ?>