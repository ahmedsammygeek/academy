<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}


if (isset($_POST['submit'])) {
	//recieved data admin add it in form 
	$content=htmlspecialchars($_POST['content']);
	//put the content admin added in this variable
	$name1=$_FILES['image1']['name'];
	// frist image admin add 
	$name2=$_FILES['image2']['name'];
	//second image
	$name3=$_FILES['image3']['name'];
	//third image
	// echo "$content" . "<br>" . "$name1" . "<br>" . "$name2" . "<br>" . "$name3" ;
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
		header('location: about.php?msg=small_image'); die();
	}
}
$size_height = array($height1,$height2,$height3 );
//put the images height in this array to make sure this width isn't small
foreach ($size_height as  $value_height) {
	if ($value_height < 150) {
		//if this image height smaller than 150
		//go to input page to enter another image 
		header('location: about.php?msg=small_image'); die();

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