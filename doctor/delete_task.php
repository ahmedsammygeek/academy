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
$task = $conn->prepare("SELECT * FROM tasks_files WHERE task_id = ?");
$task->bindValue(1,$task_id , PDO::PARAM_INT);
$task->execute();
while ($one = $task->fetch(PDO::FETCH_OBJ)) {
	if(file_exists("../uploaded/tasks/".$one->file));
	{
		@unlink("../uploaded/tasks/".$one->file);
	}
}
$delete = $conn->prepare("DELETE FROM tasks_files WHERE id = ? ");
$delete->bindValue(1,$task_id , PDO::PARAM_INT);
if($delete->execute()) {

	if(file_exists("../uploaded/tasks/".$task_file_name));
	{
		unlink("../uploaded/tasks/".$task_file_name);
	}
	$delete_task = $conn->prepare("DELETE FROM tasks WHERE id = ?");
	$delete_task->bindValue(1,$task_id , PDO::PARAM_INT);
	if($delete_task->execute()) {
		header("location: tasks.php?msg=done");
	}
	
}
else {
	header("location: tasks.php?msg=db_error");
}




?>