<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}
if (isset($_GET['msg'])) {
	$id=$_GET['msg'];
	//put the id of row we need to delete in this variale
}
include 'connection.php';
//connection with db (met)
$sql="DELETE FROM questions WHERE id=$id ";
//delete this row
$query=$conn->query($sql);
$num=$query->rowCount();
if ($num == 1) {
	header('location: showquestion.php?msg=deleted'); die();
}
else
{
	header('location: showquestion.php?msg=error_delete'); die();
}


 ?>