<?php 
date_default_timezone_set('UTC');
// reqiure ceck function
require 'check_user.php';
if (!isset($_GET['q_id']) || empty($_GET['q_id'])) {
	header("location: question_details.php");die();
}
$q_id = $_GET['q_id'];
/*submit is set*/
if (isset($_POST['submit'])) {
	$answer = htmlspecialchars($_POST['answer']);
	$time_answer = date("Y-m-d H:i:s");
}
if (empty($answer)) {
	header("location: question_details.php?msg=empty_data");die();
}
/*insert answer in db */
require '../admin/connection.php';
require '../classes/helper.php';
try {
	$conn->beginTransaction();
	$query = $conn->prepare("INSERT INTO question_answers VALUES('',?,?,?,?) ");
	$query->bindValue(1,$q_id,PDO::PARAM_INT);
	$query->bindValue(2,$answer,PDO::PARAM_STR);
	$query->bindValue(3,$time_answer,PDO::PARAM_STR);
	$query->bindValue(4,$_SESSION['system_user_id'],PDO::PARAM_INT);
	$query->execute();
	/*make it answerd in questions table*/
	$answerd = $conn->prepare("UPDATE student_questions SET answered='1' WHERE id=$q_id");
	$answerd->execute();
	$conn->commit();

	$question_details = $conn->prepare("SELECT student_id FROM student_questions WHERE id = $q_id");
	$question_details->execute();

	$question_detail = $question_details->fetch(PDO::FETCH_OBJ);

	$student_id = array($question_detail->student_id);


	send_notification($_SESSION['system_user_id'] , ' your question has been answered by('.$_SESSION['system_user_name'].') check it now  '.$_SESSION['system_user_name'] ,$student_id);




	header("location: questions.php?msg=answered");die();
}
catch (Exception $e) {
	$conn->rollBack();
}


?>