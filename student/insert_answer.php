<?php // reqiure ceck function
require 'check_user.php';
require '../admin/connection.php';
if (isset($_GET['task_id'])) {
	$task_id = $_GET['task_id'];
}
if (isset($_POST['task_btn'])) {
	$content = htmlspecialchars($_POST['task_content']);
	$file = $_FILES['file']['name'];
}
/*check empty data */
if (empty($content)) {
	header("location: task_answer.php?msg=empty_data&task_id=$task_id");die();
}
require '../classes/filetype.php';
$type=get_type($file);
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$file=$randomstring.".$type" ;
$up = move_uploaded_file($_FILES['file']['tmp_name'], "../uploaded/tasks/".$file);
if (!$up) {
header("location: task_answer.php?msg=nup");die();
}
/*insrt in db */
$query = $conn->prepare("INSERT INTO tasks_answers VALUES('' ,?,?,?,?,?)");
$query->bindValue(1,$content,PDO::PARAM_STR);
$query->bindValue(2,$_SESSION['student_user_id'],PDO::PARAM_STR);
$query->bindValue(3,$file,PDO::PARAM_STR);
$query->bindValue(4,1,PDO::PARAM_INT);
$query->bindValue(5,$task_id,PDO::PARAM_INT);
if ($query->execute()) {
	header("location: tasks.php?msg=answerd");die();
}
header("location: task_answer.php?msg=error&task_id=$task_id");die();



?>