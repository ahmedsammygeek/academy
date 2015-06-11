<?php 
require 'check_user.php';
require 'header.php';
?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Tasks</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tasks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage tasks</h3>
                    </div>

                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task title</th>
                                    <th>Subject</th>                                 
                                    <th>end date</th>                                 
                                    <th>Made by </th>                                 
                                    <th>Details</th>
                                    <th> Answer it</th>
                                    <th>status</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                require '../admin/connection.php';
                                $tasks = $conn->prepare("SELECT T.id , T.year ,  ST.name As creator ,  S.name as subject_name ,  T.task_title , T.ex_date , T.subject_id , T.made_by FROM tasks as T
                                 LEFT JOIN subjects as S on S.id = T.subject_id 
                                 LEFT JOIN staff as ST on T.made_by = ST.id

                                 WHERE T.year = ? ");
                                $tasks->bindValue(1,$_SESSION['student_user_year'] , PDO::PARAM_INT);
                                $tasks->execute();
                                $i = 1;
                                while ($task = $tasks->fetch(PDO::FETCH_OBJ)) {
                                    $answer = $conn->query("SELECT answerd FROM tasks_answers WHERE task_id=$task->id");
                                    $result = $answer->fetch(PDO::FETCH_OBJ);
                                    $count = $answer->rowCount();
                                    if ($count != 0) {
                                        $status = "answerd";
                                    }
                                    else
                                    {
                                        $status = "not answerd";
                                    }
                                    echo " <tr>
                                    <td>$i</td>
                                    <td>$task->task_title</td>
                                    <td>$task->subject_name</td>
                                    <td>$task->ex_date</td>
                                    <td>$task->creator</td>
                                    <td><a href='task_details.php?task_id=".$task->id."' class='btn btn-success'>DeTails</a></td>
                                    <td><a href='task_answer.php?task_id=$task->id' class='btn btn-info'>Answers</a></td>
                                    <td>$status</td>
                                    </tr>
                                    ";
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

<!-- AdminLTE App -->
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>

<script>
$(function () {
    $("#tasks").dataTable();
});
</script>
</body>
</html>
