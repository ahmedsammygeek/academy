<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
	header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	//recieved data admin add it in form 
	$content=htmlspecialchars($_POST['content']);
	//put the content admin added in this variable
	$name1=$_FILES['image1']['name'];
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
	$name1=$randomstring.'.jpg' ;
	// frist image admin add 
	$name2=$_FILES['image2']['name'];
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
	$name2=$randomstring.'.jpg' ;
	//second image
	$name3=$_FILES['image3']['name'];
	$randomstring=substr(str_shuffle("1234567890abcdefghijklmnopqrstuvwxyz"), 0 , 15); 
	$name3=$randomstring.'.jpg' ;
	//third image
	// echo "$content" . "<br>" . "$name1" . "<br>" . "$name2" . "<br>" . "$name3" ;
}

$inputs = array($content,$name1,$name2,$name3);
//put variables in array to use it to make sure this variables not empty 
foreach ($inputs as $value) {
	if (empty($value)) {
		//if eny variable empty 
		//go to add page to enter and compelet inputs and show alert about this case 
		header('location: editabout.php?msg=empty_data'); die();
	}
}
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
	if ($value_width < 200) {
		//if this image width smaller than 200
		//go to input page to enter another image 
		header('location: editabout.php?msg=small_image'); die();
	}
}
$size_height = array($height1,$height2,$height3 );
//put the images height in this array to make sure this width isn't small
foreach ($size_height as  $value_height) {
	if ($value_height < 150) {
		//if this image height smaller than 150
		//go to input page to enter another image 
		header('location: editabout.php?msg=small_image'); die();

	}
}
$id=$_GET['id'];
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