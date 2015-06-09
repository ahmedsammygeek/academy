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
            <small>task details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tasks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">show tasks</h3>
                    </div>
                    <div class="box-footer">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                            </thead>
                            <tbody>
                                <?php 
                                if (isset($_GET['task_id'])) {
                                    $task_id = $_GET['task_id'];
                                }
                                $details = $conn->prepare("SELECT * FROM tasks WHERE id=?");
                                $details->bindValue(1,$task_id,PDO::PARAM_INT);
                                $details->execute();
                                $result = $details->fetch(PDO::FETCH_OBJ);
                                $subject = $conn->query("SELECT name FROM subjects WHERE 
                                    id=$result->subject_id");
                                $result2 = $subject->fetch(PDO::FETCH_OBJ);
                                $depart = $conn->query("SELECT name FROM departments WHERE 
                                    id=$result->department_id");
                                $result3 = $depart->fetch(PDO::FETCH_OBJ);
                                echo "
                                <tr><td>TASK TITLE</td><td>$result->task_title</td></tr>
                                <tr><td>TASK CONTENT</td><td>$result->task_content</td></tr>
                                <tr><td>CREATED AT</td><td>$result->created_at</td></tr>
                                <tr><td>DEPARTMENT</td><td>$result3->name</td></tr>
                                <tr><td>SUBJECT</td><td>$result2->name</td></tr>
                                <tr><td>TERM</td><td>term $result->term</td></tr>
                                <tr><td>DATE TO FINISH</td><td>$result->ex_date</td></tr>
                                ";
                                

                                ?>

                            </tbody>

                        </table>
                        <?php echo "<a href='task_answer.php?task_id=$result->id' class='btn btn-info'>Answers</a>
                        "; ?>

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
