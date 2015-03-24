<?php  session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}


$args = array('title' =>FILTER_SANITIZE_STRING ,'link' =>FILTER_SANITIZE_STRING );
// this array to validate data recieved slider.php 
$inputs=filter_input_array(INPUT_POST,$args);
// this function to recieve data from args array by post method
if (isset($_POST['submit'])) {
	foreach ($inputs as $input_key => $input_value) {
		if (empty($input_value) || empty($_FILES['file']['name'])) {
			// if user leave eny inputs empty without enter eny thing in this case 
			//go to inputs page again and show alert about this case (some data is an empty)
			header('location: slider.php?msg=empty_data'); die();
		}
	}
	$location="image/"; // the image uploaded file 
	move_uploaded_file($_FILES['file']['tmp_name'] , $location.$_FILES['file']['name']);
	// this function used to save image in folder we make ($location)
	list($width,$height) = getimagesize($location.$_FILES['file']['name']);
		// this function return information about image we need to use width,height only
	if ($width < 250 || $height < 180) {
			//if image width or height is small 
			//go to inputs page again and show alert about this case (this image is small enter other)
		unlink($location.$_FILES['file']['name']);
		header('location: slider.php?msg=small_image');
		die();
	}

	extract($inputs);
	//this function to make elemets in this array($inputs) variables
	include 'connection.php';
	//connection with database (met)
	$sql="INSERT INTO slider VALUES('',?,?,?) ";
	//add values in table (slider) 
	$query=$conn->prepare($sql);
	//prepare the sql request
	$query->bindValue(1,$_FILES['file']['name'],PDO::PARAM_STR);
	//bind the information about image to send it to db (met) table(slider)
	$query->bindValue(2,$title,PDO::PARAM_STR);
	//bind the information about title to send it to db (met) table(slider)
	$query->bindValue(3,$link,PDO::PARAM_STR);
	//bind the information about link to send it to db (met) table(slider)
	if ($query->execute()) {
		//if sql request executed and data sent success
		//go to showslider.php
		header('location: showslider.php?msg=data_inserted'); die();
	}
	else{
		//if sql request non executed 
		//go to input page again and show alert about this case (error ni insert)
		header('location: slider.php?msg=error_data'); die();
	}

}

?>