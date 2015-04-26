<?php 
require  'check_user.php';


if(isset($_POST['task_btn'])) {
	$args = array(
		'task_title' => FILTER_SANITIZE_STRING,
		'task_date' => FILTER_SANITIZE_STRING,
		'department' => FILTER_SANITIZE_NUMBER_INT,
		'year' => FILTER_SANITIZE_NUMBER_INT,
		'subject' => FILTER_SANITIZE_NUMBER_INT,
		'task_content' => FILTER_SANITIZE_ENCODED,
		);
	// Inputs from post
	$inputs = filter_input_array( INPUT_POST,  $args );
	var_dump($inputs); die();

	foreach ( $inputs as $input_name => $input_value )
	{
		if ( empty( $input_value ) ) {
			header("location: add_task.php?msg=$input_name");
		}
			
	}
	// create variables from inputs array in runtime
	extract( $inputs );
	//the end dete of task 
	$ex_date = explode(' - ', $task_date);

	$task = $conn->prepare("INSERT INTO tasks VALUES('' , ?  , ? , ? , ? , ? , ?, ?, ?, ? ) ");
	$task->bindValue(1,$task_title , PDO::PARAM_STR);
	$task->bindValue(2,$task_content , PDO::PARAM_STR);
	$task->bindValue(3,$ex_date[1], PDO::PARAM_STR);
	$task->bindValue(4,$subject , PDO::PARAM_INT);
	$task->bindValue(5,$_SESSION['system_user_id'] , PDO::PARAM_INT);
	$task->bindValue(6,$department , PDO::PARAM_INT);
	$task->bindValue(7,1 , PDO::PARAM_INT);
	$task->bindValue(8,0 , PDO::PARAM_INT);
	$task->bindValue(9, $ex_date[0], PDO::PARAM_STR);
	$task->execute();




}

?>