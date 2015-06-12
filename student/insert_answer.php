<?php // reqiure ceck function
require 'check_user.php';
require '../admin/connection.php';
require '../classes/helper.php';
if (isset($_GET['task_id'])) {
	$task_id = $_GET['task_id'];
}
if (isset($_POST['task_btn'])) {
	$content = htmlspecialchars($_POST['task_content']);
}
/*check empty data */
if (empty($content)) {
	header("location: task_answer.php?msg=empty_data&task_id=$task_id");die();
}

$has_file = 0;
if(isset($_FILES['task_files']['name']) && !empty($_FILES['task_files']['name'][0])) {
	
	$has_file = 1;
}


$conn->beginTransaction();
try {

	$query = $conn->prepare("INSERT INTO tasks_answers VALUES('' ,?,?,?,?,?)");
	$query->bindValue(1,$content,PDO::PARAM_STR);
	$query->bindValue(2,$_SESSION['student_user_id'],PDO::PARAM_STR);
	$query->bindValue(3,$has_file,PDO::PARAM_STR);
	$query->bindValue(4,0,PDO::PARAM_INT);
	$query->bindValue(5,$task_id,PDO::PARAM_INT);
	$query->execute();

	$task_answer_id = $conn->lastInsertId();

// var_dump($task_answer_id); die();
	if(isset($_FILES['task_files']['name']) && !empty($_FILES['task_files']['name'][0])) {

		$uplaoded_files = array();
		for ($i=0; $i <count($_FILES['task_files']['tmp_name']) ; $i++) {
			// get uploded file type
			$file_name = $_FILES['task_files']['name'][$i];
			// var_dump(is_valid_type($file_name)); die();
			if(is_valid_type($file_name) == true) {
				if(file_exists('../uploaded/tasks/'.$file_name)) {
					$file_name = md5(date('h:m:s:i')).'_'.$file_name;
				}
				$move = move_uploaded_file($_FILES['task_files']['tmp_name'][$i], "../uploaded/tasks/".$file_name);
				if($move) {
					$uplaoded_files[] = $file_name; 
				}	
			}
			else {
				header("Location: task_answer.php?msg=file_type&task_id=$task_id");
				die();
			}
		}
			// insert uplaoded file namse in database
		foreach ($uplaoded_files as  $one) {
			$file = $conn->prepare("INSERT INTO tasks_answers_files VALUES('' , ? , ? ) ");
			$file->bindValue(1,$task_answer_id,PDO::PARAM_INT);
			$file->bindValue(2,$one,PDO::PARAM_STR);
			$file->execute();
		}
	}



	if($conn->commit()) {
		header("Location: task_answer.php?msg=done&task_id=$task_id");
		die();
	}
} catch (PDOException $e) {
	$conn->rollback();
	header("Location: index.php?msg=tryagain");
	die();
} 


?>