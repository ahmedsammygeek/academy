<?php 
require  'check_user.php';
require '../admin/connection.php';
require '../classes/helper.php';
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location: tasks.php");
	die();
}
$task_id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
if(!check_if_exists($task_id ,'id' , 'tasks')){
	header("location: tasks.php");
	die();
}
if(isset($_POST['task_btn'])) {
	$args = array(
		'title' => FILTER_SANITIZE_STRING,
		'task_date' => FILTER_SANITIZE_STRING,
		'subject' => FILTER_SANITIZE_NUMBER_INT,
		'content' => FILTER_SANITIZE_ENCODED,
		);
	// Inputs from post
	$inputs = filter_input_array( INPUT_POST,  $args );
	// var_dump($inputs); die();

	foreach ( $inputs as $input_name => $input_value )
	{
		if ( empty( $input_value ) ) {
			header("location: edit_task.php?task_id=$task_id&msg=missing");
			die();
		}
	}


	// create variables from inputs array in runtime
	extract( $inputs );


	$subject_details = $conn->prepare("SELECT * FROM subjects WHERE id = ?");
	$subject_details->bindValue(1,$subject , PDO::PARAM_INT);
	$subject_details->execute();
	$subject_detail = $subject_details->fetch(PDO::FETCH_OBJ);

	$department = $subject_detail->department;
	$year = $subject_detail->year;
	$term = $subject_detail->term ;
	





	//the end dete of task 
	$ex_date = explode(' - ', $task_date);
	$has_file = 0;
	if(isset($_FILES['task_files']['name'][0]) && !empty($_FILES['task_files']['name'][0])) {
		$has_file = 1;
	}

	$conn->beginTransaction();
	try {
		$task = $conn->prepare("UPDATE tasks SET task_title = ? , task_content = ? , ex_date = ? , subject_id = ? , created_at = ? , year = ? , term = ? , department_id = ? WHERE id = ?  ");
		$task->bindValue(1,$title , PDO::PARAM_STR);
		$task->bindValue(2,$content , PDO::PARAM_STR);
		$task->bindValue(3,$ex_date[1], PDO::PARAM_STR);
		$task->bindValue(4,$subject , PDO::PARAM_INT);
		$task->bindValue(5, $ex_date[0], PDO::PARAM_STR);
		$task->bindValue(6, $year, PDO::PARAM_INT);
		$task->bindValue(7, $term, PDO::PARAM_INT);
		$task->bindValue(8, $department, PDO::PARAM_INT);
		$task->bindValue(9, $task_id, PDO::PARAM_INT);
		$task->execute();

		
		$uplaoded_files = array();
		if(isset($_FILES['task_files']['name'][0]) && !empty($_FILES['task_files']['name'][0])) {
			for ($i=0; $i <count($_FILES['task_files']['tmp_name']) ; $i++) { 

			// get uploded file type
				$file_name = $_FILES['task_files']['name'][$i];
				if(is_valid_type($file_name)) {
					if(file_exists('../uploaded/tasks/'.$file_name)) {
						$file_name = md5(date('h:m:s:i')).'_'.$file_name;
					}
					$move = move_uploaded_file($_FILES['task_files']['tmp_name'][$i], "../uploaded/tasks/".$file_name);
					if($move) {
						$uplaoded_files[] = $file_name; 
					}	
				}
				else {
					header("Location: edit_task.php?task_id=$task_id&msg=invalid");
					die();
				}
			}

			// insert uplaoded file namse in database
			foreach ($uplaoded_files as  $one) {
				$file = $conn->prepare("INSERT INTO tasks_files VALUES('' , ? , ?) ");
				$file->bindValue(1,$task_id,PDO::PARAM_INT);
				$file->bindValue(2,$one,PDO::PARAM_STR);
				$file->execute();
			}
		}
		$conn->commit();
	} catch (PDOException $e) {
		$conn->rollback();
		echo $e->getMessage();
		$conn->errorInfo();
		// header("Location: add_task.php?msg=error");
		die();
	}
	send_notification($_SESSION['system_user_id'] , 'the task has been upated by  '.$_SESSION['system_user_name'] , get_students("year = $year") );
	header("Location: edit_task.php?task_id=$task_id&msg=done");
	die();
}

?>