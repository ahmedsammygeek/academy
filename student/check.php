<?php
ini_set("session.cookie_httponly", 1);
ini_set("session.session.use_only_cookies", 1);
ini_set("session.cookie_lifetime", 0);
ini_set("session.cookie_secure", 1);
session_start() ;

if (isset($_POST['submit'])) {
	$args = array('userid' =>FILTER_SANITIZE_NUMBER_INT ,'password' =>FILTER_SANITIZE_NUMBER_INT);
	$inputs=filter_input_array(INPUT_POST,$args);
	foreach ($inputs as $key_input => $value_input) {
		if (empty($value_input)) {
			header('location: login.php?msg=data_empty'); die();
		}
	}
	extract($inputs);
	require '../admin/connection.php';
	$query = $conn->prepare("SELECT * FROM students WHERE card_id = ? AND password = ? ");
	$query->bindValue(1,$userid,PDO::PARAM_STR);
	$query->bindValue(2,$password,PDO::PARAM_STR);
	$query->execute();
	$user=$query->fetch(PDO::FETCH_OBJ);
	extract($user);
	if ($query->rowCount()) {
		$_SESSION['is_system_user'] = true;
		$_SESSION['student_user_id'] = $user->id;
		$_SESSION['student_user_year'] = $user->year;
		$_SESSION['student_user_name'] = $user->name;
		$_SESSION['student_user_department'] = $user->department_id;
		$_SESSION['student_user_pic'] = $user->pic;

		header("location: index.php?id=$user->id");
		die();
	}
	else
	{
		header('location: login.php?msg=data_error'); die();
	}

}
else {
	header("location: login.php");
}





?>