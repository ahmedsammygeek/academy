<?php error_reporting(0);
try {
	$conn=new PDO('mysql:host=localhost;dbname=met;charset=utf8','root','');
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	// if ($conn) {
	// 	echo "conn yup";
	// }
} catch (Exception $e) {
	echo $e->getMessage();
}

 ?>