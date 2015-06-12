<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	//recieved data admin add it in form 
	$content=htmlspecialchars($_POST['content']);
	$name1=$_FILES['image1']['name'];
	require '../classes/filevalidate.php';
	if (!validation($name1,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: about.php?msg=error_data");die();
	}
	//function used to know file type
	require '../classes/filetype.php';
	$type=get_type($name1);
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$name1=$randomstring.".$type" ;
	require_once '../classes/ImageManipulator.php';
	//to make random name
	$newName= time() . '_';
	$img=new ImageManipulator($_FILES['image1']['tmp_name']);
	//resize image
	$newimg=$img->resample(374,284);
	//put image in file "image"
	$img->save('image/'.$name1);
	// frist image admin add 
	$name2=$_FILES['image2']['name'];
	if (!validation($name2,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: about.php?msg=error_data");die();
	}
	//function used to know file type
	$type=get_type($name2);
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$name2=$randomstring.".$type" ;
	$newName= time() . '_';
	$img=new ImageManipulator($_FILES['image2']['tmp_name']);
	//resize image

	$newimg=$img->resample(374,284);
	//put image in file "image"
	$img->save('image/'.$name2);
	//second image
	$name3=$_FILES['image3']['name'];
	if (!validation($name3,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: about.php?msg=error_data");die();
	}
	//function used to know file type
	$type=get_type($name3);
	//to make random name
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
	$name3=$randomstring.".$type" ;
	$newName= time() . '_';
	$img=new ImageManipulator($_FILES['image3']['tmp_name']);
	//resize image

	$newimg=$img->resample(400,350);
	//put image in file "image"
	$img->save('image/'.$name3);
	//third image
}

$inputs = array($content,$name1,$name2,$name3);
//put variables in array to use it to make sure this variables not empty 
foreach ($inputs as $value) {
	if (empty($value)) {
		//if eny variable empty 
		//go to add page to enter and compelet inputs and show alert about this case 
		header('location: about.php?msg=empty_data'); die();
	}
}

require 'connection.php';
//connection with database (met)
$sql="INSERT INTO about VALUES('',?,?,?,?) ";
//insert values($content,image1,image2,image3) in table(about)
$query=$conn->prepare($sql);
//prepare sql request 
$query->bindValue(1,$content,PDO::PARAM_STR);
//bind the value of $content and send it to database
$query->bindValue(2,$name1,PDO::PARAM_STR);
//bind the value of image1 and send it to database
$query->bindValue(3,$name2,PDO::PARAM_STR);
//bind the value of image2 and send it to database
$query->bindValue(4,$name3,PDO::PARAM_STR);
//bind the value of image3 and send it to database
if ($query->execute()) {
	//execute sql request 
	// go to about gallery and show alert about data inserted
	header('location: showabout.php?msg=data_inserted'); die();
}
else
{
	header('location: about.php?msg=error_data'); die();
}


?>