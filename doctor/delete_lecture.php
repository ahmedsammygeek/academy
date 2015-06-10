<?php 
require  'check_user.php';
require '../admin/connection.php';
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location: subject.php");
	die();
}
if (isset($_GET['id'])) {
	$lecture_id = $_GET['id'];
}
/*file want to delete it*/
$file = $conn->prepare("SELECT file FROM lectures_files WHERE lecture_id=?");
$file->bindValue(1,$lecture_id,PDO::PARAM_INT);
$file->execute();
$file_name = $file->fetch(PDO::FETCH_OBJ);
$subject = $conn->prepare("SELECT subject_id FROM lectures WHERE id=?");
$subject->bindValue(1,$lecture_id,PDO::PARAM_INT);
$subject->execute();
$subject_name = $subject->fetch(PDO::FETCH_OBJ);
/*delete from lecturs and delete file */
$query = $conn->prepare("DELETE FROM lectures WHERE id=?");
$query->bindValue(1,$lecture_id,PDO::PARAM_INT);
if ($query->execute()) {
	$query2 = $conn->prepare("DELETE FROM lectures_files WHERE lecture_id=?");
	$query2->bindValue(1,$lecture_id,PDO::PARAM_INT);
	/*this file exist*/
	if (file_exists("../uploaded/lectures/$file_name->file")) {
		unlink("../uploaded/lectures/$file_name->file");
	}
	else
	{
		echo "notfound";
	}
	if ($query2->execute()) {
		header("location: subject.php?msg=deleted&id=$subject_name->subject_id");die();
	}		
}










?>