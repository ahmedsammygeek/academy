<?php 
require 'check_user.php';

require '../admin/connection.php';
require '../classes/helper.php';


// if(!isset($_GET['task_id']) || empty($_GET['task_id'])) {
//     header('location: tasks.php?id');
//     die();
// }


// $task_id = filter_input(INPUT_GET, 'task_id' , FILTER_SANITIZE_NUMBER_INT);

// if(!check_if_exists($task_id ,'id' , 'tasks')) {
//    header('location: tasks.php?idd');
//    die();
// }

require 'header.php';

?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>questions</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">questions</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <?php 
            if(isset($_GET['msg']) && !empty($_GET['msg'])) {
                switch ($_GET['msg']) {
                    case 'done':
                    echo '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b> task has been deleted successfully.
                    </div>';
                    break;
                    case 'inserted':
                    echo '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b> task insert successfully.
                    </div>';
                    break;
                    case 'db_error':
                    echo '<div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Wrong!</b> somethng went wrong please try again 
                    </div>';
                    break;

                }
            }
            ?>
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">view questions</h3>
                    </div>
                    <div class="box-footer">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>student</th>
                                    <th>Department</th>
                                    <th>Subject</th>
                                    <th>Year</th>
                                    <th>content</th>
                                    <th>DATE</th>
                                    <th>Details & answer</th>
                                    

                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $doctor_subjects = get_doctor_subjects($_SESSION['system_user_id']);
                                $questions = $conn->query("SELECT * FROM student_questions WHERE answered='0' AND subject_id in($doctor_subjects) ");
                                $i = 1;
                                while ($question = $questions->fetch(PDO::FETCH_OBJ)) {
                                    $students = $conn->query("SELECT name FROM students WHERE id=$question->student_id");
                                    $student = $students->fetch(PDO::FETCH_OBJ);
                                    $subjects = $conn->query("SELECT name , department , year FROM subjects WHERE id=$question->subject_id");
                                    $subject = $subjects->fetch(PDO::FETCH_OBJ);
                                    $departments = $conn->query("SELECT name FROM departments WHERE id=$subject->department");
                                    $department = $departments->fetch(PDO::FETCH_OBJ);
                                    $content = substr($question->content, 0,10);
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$student->name.'</td>
                                    <td>'.$department->name.'</td>
                                    <td>'.$subject->name.'</td>
                                    <td>'.$subject->year.'</td>
                                    <td>'.$content.'</td>
                                    <td>'.$question->q_date.'</td>
                                    <td><a href="question_details.php?question_id='.$question->id.'" class="btn btn-success">ANSWER</a></td>
                                    </tr>';
                                    $i++;
                                }

                                ?>


                                

                            </tbody>

                        </table>
                    </div><!-- /.box-body -->


                </div>
            </div>
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script src="../admin/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>

<script src="../admin/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="../admin/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script>
$(function () {
    $("#tasks").dataTable();
});
</script>
</body>
</html>
