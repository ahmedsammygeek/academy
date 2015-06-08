<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}
/*
get row id to delete 
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'] ; 
}
/*delete from db */
require 'connection.php';
$query = $conn->prepare("DELETE FROM newsletter WHERE id=?");
$query->bindValue(1,$id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: newsletter.php?msg=deleted");die();
}
header("location: newsletter.php?msg=error");die();







 ?>