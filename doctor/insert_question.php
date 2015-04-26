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
//load BD connection
require '../admin/connection.php';
if(!check_if_exists($subject_id, 'id' ,'subjects')) {
	header('location: index.php');
	die();
}
if(!isset($_POST['question']) || empty($_POST['question'])) {
	header('location: subject.php?id='.$subject_id.'&msg=question#ask');
	die();
}
$question = htmlentities($_POST['question']);

$student_id = 3;

$insert = $conn->prepare("INSERT INTO student_questions(student_id,subject_id,content,status , answered,q_date )
	VALUES (?,?,?,0,0,NOW());
 ");

$insert->bindValue(1,$student_id,PDO::PARAM_INT);
$insert->bindValue(2,$subject_id,PDO::PARAM_INT);
$insert->bindValue(3,$question,PDO::PARAM_STR);
$insert->execute();

if($insert->rowCount()) {
	header('location: subject.php?id='.$subject_id.'&msg=done#ask');
	die();
}
else {
	header('location: subject.php?id='.$subject_id.'&msg=erro#ask');
	die();
}

?>