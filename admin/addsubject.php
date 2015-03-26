<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
if (isset($_POST['submit'])) {
	//validate data recived
	$args=array('name'=>FILTER_SANITIZE_STRING,'description'=>FILTER_SANITIZE_STRING,'year'=>FILTER_VALIDATE_INT,
		'department'=>FILTER_VALIDATE_INT,'term'=>FILTER_VALIDATE_INT,'doctor'=>FILTER_VALIDATE_INT,'domenstrator'=>FILTER_VALIDATE_INT);
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
	$sql2="INSERT INTO demonstrator_subjects values('',?,?) ";
	$query2=$conn->prepare($sql2);
	$query2->bindValue(1,$lastid,PDO::PARAM_INT);
	$query2->bindValue(2,$domenstrator,PDO::PARAM_INT);
	if ($query2->execute()) {
		header('location: showsubject.php?msg=data_inserted'); die();
	}

	
}
else
{
	header('location: subject.php?msg=data_error'); die();
}




?>