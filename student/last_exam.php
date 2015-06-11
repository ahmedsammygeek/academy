<?php 
require 'check_user.php';

require '../admin/connection.php';



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
            <small>last exams </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">exams</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">show exams</h3>
                    </div>
                    <div class="box-footer">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                                <tr><td>SUBJECT NAME</td><td>EXAM</td></tr>
                            </thead>
                            <tbody>
                                <?php
                                $depart_id = $_SESSION['student_user_department'];
                                $year = $_SESSION['student_user_year']; 
                                $exams = $conn->query("SELECT * FROM last_exams WHERE
                                 year=$year AND department_id=$depart_id");
                                while ($exam = $exams->fetch(PDO::FETCH_OBJ)) {
                                    $subjects = $conn->query("SELECT name FROM subjects WHERE id=$exam->subject_id");
                                    $subject = $subjects->fetch(PDO::FETCH_OBJ);
                                    echo "<tr><td>$subject->name</td><td><img src='../admin/image/".$exam->exam_file."' width='250' height='400'></td></tr>";
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
