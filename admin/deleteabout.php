<?php  session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
 header('location: login.php'); die();
}


$id=$_GET['id'];
//get id of row we want to delete and put it in this variable
$image1=$_GET['img1'];
//get the name of frist image 
$image2=$_GET['img2'];
//get the name of second image 
$image3=$_GET['img3'];
//get the name of third image 
$images = array($image1 ,$image2,$image3 );
//put the three image in this array to make sure this image in this file 
foreach ($images as  $value) {
	if (file_exists("image/$value")) {
		//if image exists in file delete it from file 
		unlink("image/$value");
	}
}
include 'connection.php';
//connection with database(met)
$sql="DELETE FROM about WHERE id = $id " ;
//delete the row of id ($id)
$query=$conn->query($sql);
//prepare the sql request
$num=$query->rowCount();
//return the number rows of results
if ($num==1) {
	//if exist result delete it and go to gellery 
	header('location: showabout.php?msg=deleted'); die();
}
else
{
	header('location: showabout.php?msg=error_delete'); die();
}


 ?>