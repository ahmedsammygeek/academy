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
$file_info = $conn->prepare("SELECT file FROM tasks_files WHERE id = ?");
$file_info->bindValue(1, $file_id , PDO::PARAM_INT);
$file_info->execute();

$file = $file_info->fetch(PDO::FETCH_OBJ);


if(file_exists("../uploaded/tasks/".$file->file)) {


	$file_name = "../uploaded/tasks/".$file->file;

	$local_file = "../uploaded/tasks/".$file->file;
	$download_file = $file->file;

// set the download rate limit (=> 20,5 kb/s)
	$download_rate = 20.5;
	if(file_exists($local_file) && is_file($local_file))
	{
		header('Cache-control: private');
		header('Content-Type: application/octet-stream');
		header('Content-Length: '.filesize($local_file));
		header('Content-Disposition: filename='.$download_file);

		flush();
		$file = fopen($local_file, "r");
		while(!feof($file))
		{
        // send the current file part to the browser
			print fread($file, round($download_rate * 1024));
        // flush the content to the browser
			flush();
        // sleep one second
			sleep(1);
		}
		fclose($file);}
		else {
			die('Error: The file '.$local_file.' does not exist!');
		}



	}
	else {
		header("location: index.php?msg=no");
		die();	
	}



	?>