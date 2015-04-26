<?php 	
require 'admin/connection.php';	
require 'classes/helper.php';
$test=send_notification(2,"done abos eidk b2a :D",array(4));
if ($test) {
	echo "done and working";
}







 ?>