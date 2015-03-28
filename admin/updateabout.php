<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	if (isset($_GET['id'])) {
		$id=$_GET['id'];
	}
	//recieved data admin add it in form 
	$content=htmlspecialchars($_POST['content']);
	$name1=$_FILES['image1']['name'];
	$name2=$_FILES['image2']['name'];
	$name3=$_FILES['image3']['name'];
}

$inputs = array($content,$name1,$name2,$name3);
//put variables in array to use it to make sure this variables not empty 
foreach ($inputs as $value) {
	if (empty($value)) {
		//if eny variable empty 
		//go to add page to enter and compelet inputs and show alert about this case 
		header("location: editabout.php?id=$id&msg=empty_data"); die();
	}
}

	require '../classes/filevalidate.php';
	if (!validation($name1,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: editabout.php?id=$id&msg=error_data");die();
	}
	//function used to know file type
	require '../classes/filetype.php';
	$type=get_type($name1);
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
	$name1=$randomstring.".$type" ;
	// frist image admin add 

	if (!validation($name2,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: editabout.php?id=$id&msg=error_data");die();
	}
	//function used to know file type
	$type=get_type($name2);
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
	$name2=$randomstring.".$type" ;
	//second image
	
	if (!validation($name3,array('jpg','png','jpeg'))) {
		// function return false 
		header("location: editabout.php?id=$id&msg=error_data");die();
	}
	//function used to know file type
	$type=get_type($name3);
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
	$name3=$randomstring.".$type";
$location="image/";
//this folder is a location images save in it 
move_uploaded_file($_FILES['image1']['tmp_name'] , $location.$name1);
// put frist image in file we made it ($location)
move_uploaded_file($_FILES['image2']['tmp_name'] , $location.$name2);
// put second image in file we made it ($location)
move_uploaded_file($_FILES['image3']['tmp_name'] , $location.$name3);
// put third image in file we made it ($location)
list($width1,$height1) = getimagesize($location.$name1);
//get  frist image width and height
list($width2,$height2) = getimagesize($location.$name2);
//get  second image width and height
list($width3,$height3) = getimagesize($location.$name3);
//get third image width and height
$size_width = array($width1,$width2,$width3);
//put the images width in this array to make sure this width isn't small
foreach ($size_width as $value_width) {
	if ($value_width < 100) {
		//if this image width smaller than 200
		//go to input page to enter another image 
		header('location: editabout.php?msg=small_image'); die();
	}
}
$size_height = array($height1,$height2,$height3 );
//put the images height in this array to make sure this width isn't small
foreach ($size_height as  $value_height) {
	if ($value_height < 50) {
		//if this image height smaller than 150
		//go to input page to enter another image 
		header('location: editabout.php?msg=small_image'); die();

	}
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