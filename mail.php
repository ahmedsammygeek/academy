<?php 
$name=htmlspecialchars($_POST['name']);
$email=htmlspecialchars($_POST['email']);
$content=htmlspecialchars($_POST['content']);
$time=date("Y-m-d & H:i:s");
$inputs = array("$name","$email","$content");
foreach ($inputs as $key_input => $input_value) {
	if (empty($input_value)) {
		header("location: contact.php?empty_data"); die();
	}
}if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	header("location: contact.php?error_email");die();
}
extract($inputs);
require 'admin/connection.php';
$sql="INSERT INTO messages VALUES('',?,?,?,?,?) ";
$query=$conn->prepare($sql);
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,$email,PDO::PARAM_STR);
$query->bindValue(3,$content,PDO::PARAM_STR);
$query->bindValue(4,$time,PDO::PARAM_INT);
$query->bindValue(5,"0",PDO::PARAM_INT);
if ($query->execute()) {
	header("location: contact.php?message_sent");die();
}
header("location: contact.php?error_data");die();



 ?>