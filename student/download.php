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


$file = "../uploaded/lectures/".$file->file;
    // Add a file type check here for security purposes so that nobody can-
    // download PHP files or other sensitive files from your server by spoofing this script

   readfile($file);
       header('Content-type: application/pdf');
    header('Content-Disposition: attachment; filename="'.$file->file.'"');
    exit();


}
else {
	header("location: index.php?msg=no");
	die();	
}



?>