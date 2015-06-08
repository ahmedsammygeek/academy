<?php 
require 'check_user.php';
require '../admin/connection.php';
if (isset($_POST['submit'])) {
	$password = htmlspecialchars($_POST['password']);
	$password = hash('ripemd160', $password);
	$new_pass = htmlspecialchars($_POST['password1']);
	$new_pass = hash('ripemd160', $new_pass);
	$new_pass_con = htmlspecialchars($_POST['password2']);
	$new_pass_con = hash('ripemd160', $new_pass_con);
}
/*check data empty*/
if (empty($password) || empty($new_pass) || empty($new_pass_con)) {
	header("location: edit_pass.php?msg=empty_data");die();
}
/*check this password right or not */
$check = $conn->prepare("SELECT password FROM staff WHERE id=?");
$check->bindValue(1,$_SESSION['system_user_id'],PDO::PARAM_INT);
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
$query = $conn->prepare("UPDATE staff SET password=? WHERE id=?");
$query->bindValue(1,$new_pass,PDO::PARAM_STR);
$query->bindValue(2,$_SESSION['system_user_id'],PDO::PARAM_INT);
if ($query->execute()) {
	header("location: edit_pass.php?msg=updated");die();
}
header("location: edit_pass.php?msg=error");die();



 ?>