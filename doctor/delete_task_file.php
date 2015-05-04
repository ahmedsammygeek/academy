<?php 
require  'check_user.php';
require '../admin/connection.php';
require '../classes/helper.php';


if(!isset($_GET['task_id']) || empty($_GET['task_id'])) {
	header("location: tasks.php");
	die();
}

$task_id = filter_input(INPUT_GET, 'task_id' , FILTER_SANITIZE_NUMBER_INT);


if(!check_if_exists($task_id , 'id' , 'tasks')) {
	header("location: tasks.php");
	die();
}
if(!isset($_GET['task_file_id']) || empty($_GET['task_file_id'])) {
	header("location: edit_task.php?task_id=$task_id");
	die();
}
$task_file_id = filter_input(INPUT_GET, 'task_file_id' , FILTER_SANITIZE_NUMBER_INT);


if(!isset($_GET['task_file_name']) || empty($_GET['task_file_name'])) {
	header("location: edit_task.php?task_id=$task_id");
	die();
}

$task_file_name = filter_input(INPUT_GET, 'task_file_name' , FILTER_SANITIZE_STRING);





$delete = $conn->prepare("DELETE FROM tasks_files WHERE id = ? ");
$delete->bindValue(1,$task_file_id , PDO::PARAM_INT);
if($delete->execute()) {

	if(file_exists("../uploaded/tasks/".$task_file_name));
	{
		unlink("../uploaded/tasks/".$task_file_name);
	}
	header("location: edit_task.php?task_id=$task_id&msg=done");
}
else {
	header("location: edit_task.php?task_id=$task_id&msg=db_error");
}




?>