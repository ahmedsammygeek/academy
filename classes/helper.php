<?php 
/**
 * generate a random string with given length
 * @param  integer $length [the length of the string you wanna it to return]
 * @return string          [description]
 */
function rand_string($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

// /**
//  * Redirect to main page
//  * @param  string $msg
//  * @return void
//  */
// function safe_redirect($page  , $msg = "" )
// {
// 	header( "location: $page.php?msg=". $msg, true, 302 );
// 	die();
// }

function is_valid_type($ex , $valid= array('pdf','doc' , 'ppt' , 'pptx' , 'docx' , 'rar','jpg' , 'jpeg' , 'txt'  , 'png' , 'zip')) {
	$ex = explode('.', $ex);
	$ex = end($ex);
	if(in_array($ex, $valid)) {
		return TRUE;
	}
	return FALSE;
}

/**
 * it's a function which get the lecture files
 * @param  int     $id        the lecutre id 
 * @param  boolean $has_files dereminte if the lecutre have fiies or not
 * @return html with pathes   [description]
 */
function get_lecture_files($id , $has_files)
{
    global $conn ;
    $output= '';
    $files = $conn->prepare("SELECT * FROM  lectures_files WHERE lecture_id = ?");
    $files->bindValue(1,$id, PDO::PARAM_INT);
    $files->execute();

    while ($file = $files->fetch(PDO::FETCH_OBJ)) {
        $output .= '<li><a href="download.php?id='.$file->id.'">'.$file->file.'</a></li>'; 
    }

    return $output;


}



/**
 * check if data exists or not
 * @param  mixed $data  [description]
 * @param  string $col   [description]
 * @param  string $table [description]
 * @return return boolean        if the data exsits or not
 */
function check_if_exists($data , $col , $table)
{
    global $conn ;
    $check = $conn->prepare("SELECT id FROM $table WHERE $col=?");
    $check->bindValue(1,$data,PDO::PARAM_INT);
    $check->execute();
    if($check->rowCount())
        return true;

    return false;
}
function send_notefication($id,$content,array())
{
    global $conn ;
    $time=date("Y-m-d & H:i:s");
    $query=$conn->prepare("INSERT INTO notifications VALUES('',?,?,?) ");
    $query->bindValue(1,$content,PDO::PARAM_STR);
    $query->bindValue(2,$id,PDO::PARAM_INT);
    $query->bindValue(3,$time,PDO::PARAM_INT);
    if ($query->execute()) {
        return true;
    }
    return false;
}

 ?>
