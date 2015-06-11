<?php session_start();
require 'header.php';
?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>answers</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">answers</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <?php if (isset($_GET['task_id'])) {
                    $task_id = $_GET['task_id'];
                }
                require '../admin/connection.php';
                $tasks_name = $conn->query("SELECT task_title FROM tasks WHERE id=$task_id");
                $task_name = $tasks_name->fetch(PDO::FETCH_OBJ);
                ?>

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Answers Of {<?php echo "$task_name->task_title"; ?>} Task</h3>
                    </div>

                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th> CONTENT </th>
                                    <th> DETAILS </th>

                                    
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $answers = $conn->query("SELECT * FROM tasks_answers WHERE task_id=$task_id");
                                $i=1;
                                while ($answer = $answers->fetch(PDO::FETCH_OBJ)) {
                                   $students = $conn->query("SELECT name FROM students WHERE id=$answer->student_id");
                                   $student = $students->fetch(PDO::FETCH_OBJ);
                                   $content = substr($answer->content, 0,20);
                                   echo ' <tr>
                                   <td>$i</td>
                                   <td>$student->name</td>
                                   <td>$content</td>                    
                                   <td><a href="answer_details.php?answer_id='.$answer->id.'" class="btn btn-success">DeTails</a></td>

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
