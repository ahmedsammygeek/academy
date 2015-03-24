<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}


$id=$_GET['id'];
//get the id of this row we need to delete and put it in this variable($id)
include 'connection.php';
//connection with database(met)
$sql="DELETE FROM subjects WHERE id='$id' ";
//delete from table (slider)
$query=$conn->query($sql);
//prepare the sql request
$num=$query->rowCount();
//this function return the number of rows 
// var_dump($num); die();
if ($num==1) {
	//if rows doesnt=0 go to gellery slider and show alert about deleted 
	header('location: showsubject.php?msg=deleted'); die();
}
else
{
	header('location: showsubject.php?msg=error_delete'); die();
}
 ?>