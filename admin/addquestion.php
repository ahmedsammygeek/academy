<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}
if (isset($_POST['submit'])) {
$args = array('question' =>FILTER_SANITIZE_STRING ,'answer' =>FILTER_SANITIZE_STRING );
//validate name and description
$inputs=filter_input_array(INPUT_POST,$args);
//recive inputs by post method
foreach ($inputs as $key_input => $input_value) {
	if (empty($input_value)) {
		//if admin left eny enput empty go to input page
		header('location: question.php?msg=empty_data'); die();
	}
}
}
extract($inputs);
include 'connection.php';
//connection with db(met)
$sql="INSERT INTO questions VALUES('',?,?) ";
//insert into tb(departments)
$query=$conn->prepare($sql);
$query->bindValue(1,$question,PDO::PARAM_STR);
$query->bindValue(2,$answer,PDO::PARAM_STR);
if ($query->execute()) {
	header('location: showquestion.php?msg=data_inserted'); die();
}
else
{
	header('location: question.php?msg=error_data'); die();
}





 ?>