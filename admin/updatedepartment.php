<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}
if (isset($_POST['submit'])) {
$args = array('name' =>FILTER_SANITIZE_STRING ,'description' =>FILTER_SANITIZE_STRING );
//validate name and description
$inputs=filter_input_array(INPUT_POST,$args);
//recive inputs by post method
if (isset($_GET['id'])) {
	$id=$_GET['id'];
}
foreach ($inputs as $key_input => $input_value) {
	if (empty($input_value)) {
		//if admin left eny enput empty go to input page
		header("location: editdepartment.php?id=$id&msg=empty_data"); die();
	}
}
}
extract($inputs);
include 'connection.php';
//connection with db(met)
$sql="UPDATE departments SET name='$name',description='$description' WHERE id=$id ";
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showdepartment.php?msg=updated");die();
}
else
{
	header("location: editdepartment.php?id=$id&msg=error_update");die();
}


 ?>