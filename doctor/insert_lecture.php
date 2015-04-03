<?php 


// reqiure ceck function
require 'check_user.php';
// lood my library
require 'function.php';
require '../classes/helper.php';
//check the subject if if send and lecutre summary of files
if((isset($_GET['subject_id']) && !empty($_GET['subject_id']))	&&	(!empty($_POST['lecture_summary']) || !empty($_FILES['lecture_files']['name']) ) ) {
	$lecture_summary =   filter_input(INPUT_POST, 'lecture_summary') ? : $lecture_summary = '';
	$subject_id = $_GET['subject_id'];
	// DB connection
	require '../admin/connection.php';
	$has_file = 0;
	if(isset($_FILES['lecture_files']['name']) && !empty($_FILES['lecture_files']['name'])) {
		$has_file = 1;
	}
	$date = date('Y-m-d');
	// save lecture content in databse
	$conn->beginTransaction();
	try {

		$insert = $conn->prepare("INSERT INTO lectures VALUES('' , ? , ? , ? , ? , ?) ");
		$insert->bindValue(1,$lecture_summary,PDO::PARAM_STR);
		$insert->bindValue(2,$date,PDO::PARAM_STR);
		$insert->bindValue(3,$_SESSION['system_user_id'],PDO::PARAM_INT);
		$insert->bindValue(4,$subject_id,PDO::PARAM_INT);
		$insert->bindValue(5,$has_file,PDO::PARAM_INT);
	// execute query
		$insert->execute();
	// get lecture id after inserting it 
		$lecture_id = $conn->lastInsertId();
	// check the lecture if it is has files to uplaod it 
		if(isset($_FILES['lecture_files']['name']) && !empty($_FILES['lecture_files']['name'])) {

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
					header("Location: subject.php?id=$subject_id&msg=invalid");
					die();
				}
			}
		}

	// insert uplaoded file namse in database
		foreach ($uplaoded_files as  $one) {
			$file = $conn->prepare("INSERT INTO lectures_files VALUES('' , ? , ? ) ");
			$file->bindValue(1,$lecture_id,PDO::PARAM_INT);
			$file->bindValue(2,$one,PDO::PARAM_STR);
			$file->execute();
		}

		$conn->commit();
		header("Location: subject.php?id=$subject_id&msg=done");
		die();
	} catch (PDOException $e) {
		$conn->rollback();
		header("Location: index.php?msg=tryagain");
		die();
	} 


}
else {
	header("Location: index.php?msg=missing");
	die();
}



?>