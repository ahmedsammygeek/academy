<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
$name=htmlspecialchars($_POST['name']);
$description=htmlspecialchars($_POST['description']);
$year=$_POST['year'];
$department=$_POST['department'];
$term=$_POST['term'];
$doctor=$_POST['doctor'];
if (empty($name) || empty($description)) {
	header("location: subject.php?msg=empty_data");die();
}
//connection with db (met)
include 'connection.php';
$sql="INSERT INTO subjects VALUES ('',?,?,?,?,?,?) ";
$query=$conn->prepare($sql);
//bind value of name and insert it in database
$query->bindValue(1,$doctor,PDO::PARAM_STR);
//bind value of description and insert it in database
$query->bindValue(2,$name,PDO::PARAM_STR);
//bind value of year and insert it in database
$query->bindValue(3,$description,PDO::PARAM_INT);
//bind value of department and insert it in database
$query->bindValue(4,$year,PDO::PARAM_INT);
$query->bindValue(5,$department,PDO::PARAM_INT);
$query->bindValue(6,$term,PDO::PARAM_INT);
if ($query->execute()) {
	$lastid = $conn->lastInsertId();
}
for ($i=0; $i < count($_POST['domenstrator']); $i++) { 
	$domenstrator=$_POST['domenstrator'][$i];
	$sql2="INSERT INTO demonstrator_subjects values('',?,?) ";
	$query2=$conn->prepare($sql2);
	$query2->bindValue(1,$lastid,PDO::PARAM_INT);
	$query2->bindValue(2,$domenstrator,PDO::PARAM_INT);
	$query2->execute();
}
header('location: showsubject.php?msg=data_inserted'); die();	





?>