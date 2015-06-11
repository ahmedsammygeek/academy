<?php

// reqiure ceck function
require 'check_user.php';
// lood my library
require '../classes/helper.php';

$file_id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);


if(!$file_id) {
	header("location: index.php");
	die();
}

require '../admin/connection.php';
$file_info = $conn->prepare("SELECT file FROM lectures_files WHERE id = ?");
$file_info->bindValue(1, $file_id , PDO::PARAM_INT);
$file_info->execute();

$file = $file_info->fetch(PDO::FETCH_OBJ);


if(file_exists("../uploaded/lectures/".$file->file)) {

$dir = "../uploaded/lectures/";

$path = $dir.$file->file;

$fsize = filesize($path);
header("Content-length: $fsize");
header("Cache-Control: private");
header("Content-Description: File Transfer");
header("Content-Disposition: attachment; filename=$path");
header("Content-Type: application/pdf");
header("Content-Transfer-Encoding: binary");
readfile($path);


}
else {
	header("location: index.php?msg=no");
	die();	
}



?>