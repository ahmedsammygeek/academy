<?php 
// reqiure ceck function
require 'check_user.php';
require '../classes/helper.php';
if (!isset($_GET['answer_id']) || empty($_GET['answer_id'])) {
	header("location: answer_details.php");die();
}
/*get the answer id*/
$answer_id = $_GET['answer_id'];
if (isset($_POST['submit'])) {
	$mark = $_POST['mark'];
}
/*empty mark*/
if (empty($mark)) {
	header("location: answer_details.php?answer_id=$answer_id&msg=empty_date");die();
}
/*should be int only*/
if (is_int($mark)) {
	header("location: answer_details.php?answer_id=$answer_id&msg=err_mark00");die();
}
/*should between 1 to 10*/
if ($mark < 0 || $mark > 10) {
	header("location: answer_details.php?answer_id=$answer_id&msg=err_mark");die();
}
/*insert it in db */
require '../admin/connection.php';
$query = $conn->prepare("UPDATE tasks_answers SET answerd=? WHERE id=?");
$query->bindValue(1,$mark,PDO::PARAM_INT);
$query->bindValue(2,$answer_id,PDO::PARAM_INT);
if ($query->execute()) {
	$get_student = $conn->prepare("SELECT student_id FROM tasks_answers WHERE id = ? ");
	$get_student->bindValue(1,$answer_id,PDO::PARAM_INT);
	$get_student->execute();
	$details = $get_student->fetch(PDO::FETCH_OBJ);

	send_notification($_SESSION['system_user_id'] , 'the task has been mark by '.$_SESSION['system_user_name']." an you got $mark / 10" , array($details->student_id) );
	header("location: answer_details.php?answer_id=$answer_id&msg=marked");die();
}


?>