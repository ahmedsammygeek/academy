<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
		$img1=$_GET['img1'];
		$img2=$_GET['img2'];
		$img3=$_GET['img3'];
	}
	//recieved data admin add it in form 
	$content=htmlspecialchars($_POST['content']);
	$name1=$_FILES['image1']['name'];
	$name2=$_FILES['image2']['name'];
	$name3=$_FILES['image3']['name'];
}

$inputs = array($content);
//put variables in array to use it to make sure this variables not empty 
foreach ($inputs as $value) {
	if (empty($value)) {
		//if eny variable empty 
		//go to add page to enter and compelet inputs and show alert about this case 
		header("location: editabout.php?id=$id&msg=empty_data"); die();
	}
}
require '../classes/filevalidate.php';
require '../classes/filetype.php';
require_once '../classes/ImageManipulator.php';
	if (empty($_FILES['image1']['name'])) {
	$name1=$img1;
	//function used to be sure this is image
}
//name of image
else{
	if (file_exists('image/'.$img1)) {
		unlink('image/'.$img1);
	}
	$name1=$_FILES['image1']['name'];
	//function used to be sure this is image

if (!validation($name1,array('jpg','png','jpeg'))) {
		// function return false 
	header("location: editabout.php?id=$id&msg=error_data");die();
}
	//function used to know file type

$type=get_type($name1);
	//class used to resize images

	//to make random name
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$name1=$randomstring.".$type" ;
$newName= time() . '_';
$img=new ImageManipulator($_FILES['image1']['tmp_name']);
	//resize image
$newimg=$img->resample(100,100);
	//put image in file "image"
$img->save('image/'.$name1);
}

	if (empty($_FILES['image2']['name'])) {
	$name2=$img2;
	//function used to be sure this is image
}
//name of image
else{
	if (file_exists('image/'.$img2)) {
		unlink('image/'.$img2);
	}
	$name2=$_FILES['image2']['name'];
	//function used to be sure this is image

if (!validation($name2,array('jpg','png','jpeg'))) {
		// function return false 
	header("location: editabout.php?id=$id&msg=error_data");die();
}
	//function used to know file type

$type=get_type($name2);
	//class used to resize images

	//to make random name
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$name2=$randomstring.".$type" ;
$newName= time() . '_';
$img=new ImageManipulator($_FILES['image2']['tmp_name']);
	//resize image
$newimg=$img->resample(100,100);
	//put image in file "image"
$img->save('image/'.$name2);
}
	
	if (empty($_FILES['image3']['name'])) {
	$name3=$img3;
	//function used to be sure this is image
}
//name of image
else{
	if (file_exists('image/'.$img3)) {
		unlink('image/'.$img3);
	}
	$name3=$_FILES['image3']['name'];
	//function used to be sure this is image

if (!validation($name3,array('jpg','png','jpeg'))) {
		// function return false 
	header("location: editabout.php?id=$id&msg=error_data");die();
}
	//function used to know file type

$type=get_type($name3);
	//class used to resize images

	//to make random name
$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15);
$name3=$randomstring.".$type" ;
$newName= time() . '_';
$img=new ImageManipulator($_FILES['image3']['tmp_name']);
	//resize image
$newimg=$img->resample(100,100);
	//put image in file "image"
$img->save('image/'.$name3);
}

require 'connection.php';
$sql="UPDATE about SET content='$content',image1='$name1',image2='$name2',image3='$name3' WHERE id=$id "; 
$query=$conn->prepare($sql);
if ($query->execute()) {
	header("location: showabout.php?msg=updated");die();
}
else
{
	header("location: editabout.php?msg=error_update");die();
}

?>