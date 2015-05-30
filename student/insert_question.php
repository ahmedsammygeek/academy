<?php 
// reqiure ceck function
require 'check_user.php';
// lood my library
require '../classes/helper.php';

//get the subject id 
if(!filter_input(INPUT_GET, 'subject_id' , FILTER_SANITIZE_NUMBER_INT)) {
	header('location: index.php');
	die();
}
$subject_id = filter_input(INPUT_GET, 'subject_id' , FILTER_SANITIZE_NUMBER_INT);
//load DB connection
require '../admin/connection.php';
//check the subject if it sxsists or not 
if(!check_if_exists($subject_id, 'id' ,'subjects')) {
	header('location: index.php');
	die();
}
//check if this subject belong to this student or not 
if (!is_subject_belongs_to_student($subject_id ,$_SESSION['student_user_department'] , $_SESSION['student_user_year'] )) {
	header('location: index.php');
	die();
}

//check the question 
if(!isset($_POST['question']) || empty($_POST['question'])) {
	header('location: subject.php?id='.$subject_id.'&msg=question#ask');
	die();
}
$question = htmlentities($_POST['question']);

$student_id = $_SESSION['student_user_id'];

$insert = $conn->prepare("INSERT INTO student_questions(student_id,subject_id,content,status , answered,q_date )
	VALUES (?,?,?,0,0,NOW());
	");

$insert->bindValue(1,$student_id,PDO::PARAM_INT);
$insert->bindValue(2,$subject_id,PDO::PARAM_INT);
$insert->bindValue(3,$question,PDO::PARAM_STR);
$insert->execute();

if($insert->rowCount()) {
	$send_to = array();
	//get the subject's doctor 
	$send_to[] = get_the_subject_doctor($subject_id);
	//get the subject's demonestrators 
	$demonstrators = get_the_subject_demonstrator($subject_id);
	foreach ($demonstrators as $key => $value) {
		$send_to[] = $value;
	}
	//send notiications to doctoser and demonestrators 
	send_notification($_SESSION['student_user_id']," a new question from by {$_SESSION["student_user_name"]} " , $send_to );
	header('location: subject.php?id='.$subject_id.'&msg=done#ask');
	die();
}
else {
	header('location: subject.php?id='.$subject_id.'&msg=erro#ask');
	die();
}

?>