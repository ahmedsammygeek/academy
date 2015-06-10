<?php 
require 'check_user.php';
require '../admin/connection.php';
if (isset($_POST['submit'])) {
	$password = htmlspecialchars($_POST['password']);
	$new_pass = htmlspecialchars($_POST['password1']);
	$new_pass_con = htmlspecialchars($_POST['password2']);
}
/*check data empty*/
if (empty($password) || empty($new_pass) || empty($new_pass_con)) {
	header("location: edit_pass.php?msg=empty_data");die();
}
/*check this password right or not */
$check = $conn->prepare("SELECT password FROM students WHERE id=?");
$check->bindValue(1,$_SESSION['student_user_id'],PDO::PARAM_INT);
$check->execute();
$res = $check->fetch(PDO::FETCH_OBJ);
/*error password*/
if ($password != $res->password) {
	header("location: edit_pass.php?msg=err_pass");die();
}
/*check new passwordes equals*/
if ($new_pass != $new_pass_con) {
	header("location: edit_pass.php?msg=no_eq_pass");die();
}
/*update password*/
$query = $conn->prepare("UPDATE students SET password=? WHERE id=?");
$query->bindValue(1,$new_pass,PDO::PARAM_STR);
$query->bindValue(2,$_SESSION['student_user_id'],PDO::PARAM_INT);
if ($query->execute()) {
	header("location: edit_pass.php?msg=updated");die();
}
header("location: edit_pass.php?msg=error");die();



 ?>