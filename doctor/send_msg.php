<?php 

require 'check_user.php';
$msg = filter_input(INPUT_POST , 'msg' , FILTER_SANITIZE_STRING);

$to = filter_input(INPUT_POST , 'to' , FILTER_SANITIZE_NUMBER_INT);

if(!$msg || !$to) {
	echo "missing";
}
require '../admin/connection.php';


$sender = $_SESSION['system_user_id'];
$save = $conn->prepare("INSERT INTO system_messages VALUES('', ? , ? ,NOW() ,  ?  , ? )");
$save->bindValue(1,$sender,PDO::PARAM_INT);
$save->bindValue(2,$to,PDO::PARAM_INT);
$save->bindValue(3,$msg,PDO::PARAM_INT);
$save->bindValue(4,0,PDO::PARAM_INT);

if($save->execute()) {
	echo "done";
}

else {
	echo "sql_erro";
}



?>