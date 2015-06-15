<?php 
require 'check_user.php';
require '../admin/connection.php';
/*new info */
if (isset($_POST['submit'])) {
	$args = array('name'=>FILTER_SANITIZE_STRING,
		'description'=>FILTER_SANITIZE_STRING,
		'facebook'=>FILTER_SANITIZE_STRING,
		'email'=>FILTER_VALIDATE_EMAIL,
		'username'=>FILTER_SANITIZE_STRING,
		);
	$inputs = filter_input_array(INPUT_POST,$args);
	/*check empty and validate*/
	foreach ($inputs as $key => $value) {
		if (empty($value)) {
			header("location: profil.php?msg=empty_data");die();
		}
	}
	extract($inputs);
	// var_dump($name);var_dump($description);var_dump($facebook);var_dump($email);var_dump($username);die();
	/*get last image */
	if (isset($_GET['img'])) {
		$img = $_GET['img'];
	}
	if (empty($_FILES['file']['name'])) {
		$img_name=$img;	
	}
	else{
		if (file_exists('../uploaded/staff/'.$img)) {
			unlink('../uploaded/staff/'.$img);
		}
		$img_name=$_FILES['file']['name'];
	//function used to be sure this is image
		require '../classes/filevalidate.php';
		if (!validation($img_name,array('jpg','png','jpeg'))) {
		// function return false 
			header("location: profile.php?msg=error_data");die();
		}
	//function used to know file type
		require '../classes/filetype.php';
		$type=get_type($img_name);
	//class used to resize images
		require_once '../classes/ImageManipulator.php';
	//to make random name
		$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
		$img_name=$randomstring.".$type" ;
		$newName= time() . '_';
		$img=new ImageManipulator($_FILES['file']['tmp_name']);
	//resize image
		$newimg=$img->resample(200,300);
	//put image in file "image"
		$img->save('../uploaded/staff/'.$img_name);
	}

}
/*update info*/
$query = $conn->prepare("UPDATE staff SET name=?,image=?,description=?,facebook=?,email=?,username=? WHERE id =?");
$query->bindValue(1,$name,PDO::PARAM_STR);
$query->bindValue(2,$img_name,PDO::PARAM_STR);
$query->bindValue(3,$description,PDO::PARAM_STR);
$query->bindValue(4,$facebook,PDO::PARAM_STR);
$query->bindValue(5,$email,PDO::PARAM_STR);
$query->bindValue(6,$username,PDO::PARAM_STR);
$query->bindValue(7,$_SESSION['system_user_id'],PDO::PARAM_STR);
if ($query->execute()) {
	header("location: profil.php?msg=updated");die();
}



?>