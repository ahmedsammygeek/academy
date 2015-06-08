<?php 
if (isset($_POST['submit'])) {
	$email = htmlspecialchars($_POST['email']);
}
if (empty($email)) {
	header("location: index.php?msg=em_let");die();
}
/*
insert in db
*/
require 'admin/connection.php';
$query = $conn->prepare("INSERT INTO newsletter VALUES ('' , ?)");
$query->bindValue(1,$email,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: index.php?msg=sent");die();
}


?>