<?php  session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}
/*
get id 
*/
if (isset($_GET['id'])) {
	$id = $_GET['id'];
}
/*
new data to updated
*/
$args = array('phone' => FILTER_SANITIZE_STRING,'email' => FILTER_VALIDATE_EMAIL,'facebook'=>FILTER_SANITIZE_STRING,
	'twitter'=>FILTER_SANITIZE_STRING,'linkedin'=>FILTER_SANITIZE_STRING,'address'=>FILTER_SANITIZE_STRING,
	'map'=>FILTER_SANITIZE_STRING);
$inputs = filter_input_array(INPUT_POST,$args);
	/*
check empty 
	*/
foreach ($inputs as $key => $value) {
	if (empty($value)) {
		header("location: edit_info.php?msg=empty_data&id=$id");die();
	}
}
extract($inputs);
/*
update in db
*/
require 'connection.php';
$query = $conn->prepare("UPDATE site_info SET phone=?,mail=?,facebook=?,twitter=?,linkedin=?,address=?,map=? WHERE id=? ");
$query->bindValue(1,$phone,PDO::PARAM_STR);
$query->bindValue(2,$email,PDO::PARAM_STR);
$query->bindValue(3,$facebook,PDO::PARAM_STR);
$query->bindValue(4,$twitter,PDO::PARAM_STR);
$query->bindValue(5,$linkedin,PDO::PARAM_STR);
$query->bindValue(6,$address,PDO::PARAM_STR);
$query->bindValue(7,$map,PDO::PARAM_STR);
$query->bindValue(8,$id,PDO::PARAM_STR);
if ($query->execute()) {
	header("location: show_info.php?msg=updated");die();
}
header("location: edit_info.php?msg=error_update$id=$id");die();





?>