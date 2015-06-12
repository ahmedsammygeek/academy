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
		return true;
	}
	return false;
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

/**
 * function which send notifications to spcific users 
 * @param  [integer] $id      [the user who made th action]
 * @param  [string] $content [the notification content]
 * @param  array  $send_to [the users will be notified ]
 * @return [mixed] boolean or error          [description]
 */
function send_notification($id,$content,$send_to=array())
{
    global $conn ;
    $time=date("Y-m-d & H:i:s");
    $conn->beginTransaction();
    try {
       $query=$conn->prepare("INSERT INTO notifications VALUES('',?,?,?) ");
       $query->bindValue(1,$content,PDO::PARAM_STR);
       $query->bindValue(2,$id,PDO::PARAM_INT);
       $query->bindValue(3,$time,PDO::PARAM_INT);
       if ($query->execute()) {
           $inserted_id= $conn->lastInsertId();
           foreach ($send_to as $key => $value) {
             $query2=$conn->prepare("INSERT INTO notifications_users VALUES('',?,?,?) ");
             $query2->bindValue(1,$inserted_id,PDO::PARAM_INT);
             $query2->bindValue(2,$value,PDO::PARAM_INT);
             $query2->bindValue(3,0,PDO::PARAM_INT);
             $query2->execute();
         }

     }$conn->commit();
     return true;

 } catch (Exception $e) {
    $conn->rollBack();
    echo $e->getMessage();
}
}

/**
 * a function bring students depents on conditions
 * @param  string $where [the conditions]
 * @return [array of ides]        [description]
 */
function get_students($where)
{
    $ids = array();
    global $conn;
    $select = $conn->prepare("SELECT id FROM students WHERE $where ");
    $select->execute();
    if($select->rowCount() > 0) {
        while ($one = $select->fetch(PDO::FETCH_NUM)) {
            $ids[] = $one[0];
        }
        return $ids;
    }
    return false;
}

/**
 * function which get all the doctor subjects 
 * @param  [integer] $doctor_id [description]
 * @return [type]  array of subjects' ides        [description]
 */
function get_doctor_subjects($doctor_id)
{
    global  $conn ;

    $doc_subject = $conn->prepare("SELECT id FROM subjects WHERE doctor_id= ?");
    $doc_subject->bindValue(1,$doctor_id , PDO::PARAM_INT);
    $doc_subject->execute();
    if($doc_subject->rowCount()) {
        $ids = array();
        while ($subject = $doc_subject->fetch(PDO::FETCH_OBJ)) {
            $ids[] = $subject->id;
        }
        return implode(',', $ids);
    }
    return false;
}

/**
 * check if the student study this subject or not
 * @param  [interger]  $department [the subject department]
 * @param  [integer]  $year       [the subject year]
 * @return boolean             
 */
function is_subject_belongs_to_student($subject_id , $department , $year) {
    global $conn ;
    $subject = $conn->prepare("SELECT id FROM subjects WHERE department = ? AND year = ? AND id = ?");
    $subject->bindValue(1,$department , PDO::PARAM_INT);
    $subject->bindValue(2,$year , PDO::PARAM_INT);
    $subject->bindValue(3,$subject_id , PDO::PARAM_INT);
    $subject->execute();
    if($subject->rowCount()){
        return true;
    }
    return false;
}




function check_task($days) {
    if($days > 0 )
        return '<td><span class="label label-success">avilabe</span></td>';
    else 
        return '<td><span class="label label-success">expired</span></td>' ;
}

/**
 * get the answer os some question by question id 
 * @param  integer $question_id [description]
 * @return string  [mixed html with question answer data]
 */
function get_question_answer($question_id) {
    global $conn;
    $output = '';
    $select = $conn->prepare("SELECT q_s.content  , q_s.date , s.name as answered_by FROM question_answers as q_s LEFT JOIN staff as s on s.id = q_s.made_by WHERE question_id = ? ");
    $select->bindValue(1,$question_id,PDO::PARAM_INT);
    $select->execute();
    $answer = $select->fetch(PDO::FETCH_OBJ);
    $output = '<small><span class="time"><i class="fa fa-user"></i> '.$answer->answered_by.'   </span></small>
    <small><span class="time"><i class="fa fa-clock-o"></i> '.$answer->date.'</span></small>
    <p>'.$answer->content.'</p>
    ';
    return $output;
}

/**
 * get the subject's doctor 
 * @param  [integer] $subject_id [the subject id ]
 * @return [integer]      the doctor id        
 */
function get_the_subject_doctor($subject_id)
{
    global $conn;
    $subject  = $conn->prepare("SELECT doctor_id FROM subjects WHERE id= ?");
    $subject->bindValue(1,$subject_id,PDO::PARAM_INT);
    $subject->execute();
    $subject_info = $subject->fetch(PDO::FETCH_OBJ);
    return $subject_info->doctor_id;
}




/**
 * get the subject's demonestratoers  
 * @param  [integer] $subject_id [the subject id ]
 * @return [integer]      the doctor id        
 */
function get_the_subject_demonstrator($subject_id)
{
    $demonstrators = array();
    global $conn;
    $subject  = $conn->prepare("SELECT demonstrator_id FROM demonstrator_subjects WHERE subject_id= ?");
    $subject->bindValue(1,$subject_id,PDO::PARAM_INT);
    $subject->execute();
    
 while ($subject_info = $subject->fetch(PDO::FETCH_OBJ)) {
     $demonstrators[] = $subject_info->demonstrator_id;
 }
    return $demonstrators;
}








?>
