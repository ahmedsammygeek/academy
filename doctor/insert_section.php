<?php 


// reqiure ceck function
require 'check_user.php';
// lood my library
require 'function.php';
require '../classes/helper.php';
//check the subject if if send and lecutre summary of files
if(isset($_GET['subject_id']) && !empty($_GET['subject_id'])) {
	//get suject id
	$subject_id = $_GET['subject_id'];


	if(empty($_POST['lecture_summary']) && empty($_FILES['lecture_files']['name'][0]))  {
		header("Location: subject.php?id=$subject_id&msg=missing#section");
		die();
	}
	$lecture_summary =   filter_input(INPUT_POST, 'lecture_summary') ? : $lecture_summary = '';
	
	$has_file = 0;

	if(isset($_FILES['lecture_files']['name']) && !empty($_FILES['lecture_files']['name'][0])) {
		$has_file = 1;
	}
	$date = date('Y-m-d');

	// DB connection
	require '../admin/connection.php';
	// save lecture content in databse
	$conn->beginTransaction();
	try {

		$insert = $conn->prepare("INSERT INTO lectures VALUES('' , ? , ? , ? , ? , ? , ?) ");
		$insert->bindValue(1,$lecture_summary,PDO::PARAM_STR);
		$insert->bindValue(2,$date,PDO::PARAM_STR);
		$insert->bindValue(3,$_SESSION['system_user_id'],PDO::PARAM_INT);
		$insert->bindValue(4,$subject_id,PDO::PARAM_INT);
		$insert->bindValue(5,$has_file,PDO::PARAM_INT);
		$insert->bindValue(6,'section',PDO::PARAM_STR);
	// execute query
		$insert->execute();
	// get lecture id after inserting it 
		$lecture_id = $conn->lastInsertId();
	// check the lecture if it is has files to uplaod it 
		if(isset($_FILES['lecture_files']['name']) && !empty($_FILES['lecture_files']['name'][0])) {

			$uplaoded_files = array();
			for ($i=0; $i <count($_FILES['lecture_files']['tmp_name']) ; $i++) { 
			// get uploded file type
				$file_name = $_FILES['lecture_files']['name'][$i];
				if(is_valid_type($file_name)) {
					if(file_exists('../uploaded/lectures/'.$file_name)) {
						$file_name = md5(date('h:m:s:i')).'_'.$file_name;
					}
					$move = move_uploaded_file($_FILES['lecture_files']['tmp_name'][$i], "../uploaded/lectures/".$file_name);
					if($move) {
						$uplaoded_files[] = $file_name; 
					}	
				}
				else {
					header("Location: subject.php?id=$subject_id&msg=invalid#section");
					die();
				}
			}
			// insert uplaoded file namse in database
			foreach ($uplaoded_files as  $one) {
				$file = $conn->prepare("INSERT INTO lectures_files VALUES('' , ? , ? ) ");
				$file->bindValue(1,$lecture_id,PDO::PARAM_INT);
				$file->bindValue(2,$one,PDO::PARAM_STR);
				$file->execute();
			}
		}
		if($conn->commit()) {
			$subject_details = $conn->prepare("SELECT year FROM subjects WHERE id = $subject_id");
			$subject_details->execute();

			$subject_detail = $subject_details->fetch(PDO::FETCH_OBJ);

			$year = $subject_detail->year;
			send_notification($_SESSION['system_user_id'] , 'a new lecture has been made by doctor '.$_SESSION['system_user_name'] , get_students("year = $year") );
			
			header("Location: subject.php?id=$subject_id&msg=done#section");
			die();
		}
	} catch (PDOException $e) {
		$conn->rollback();
		header("Location: index.php?msg=tryagain");
		die();
	} 
}
else {
	header("Location: index.php");
	die();
}
?>