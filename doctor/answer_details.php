<?php 
require 'check_user.php';

require '../admin/connection.php';
require '../classes/helper.php';

require 'header.php';

?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>answer student details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">answers</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">show answer</h3>
                    </div>
                    <div class="box-footer">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                            </thead>
                            <tbody>
                                <?php 
                                if (isset($_GET['answer_id'])) {
                                    $answer_id = $_GET['answer_id'];      
                                }
                                
                                $student_answer = $conn->query("SELECT * FROM tasks_answers WHERE id=$answer_id");
                                $result5 = $student_answer->fetch(PDO::FETCH_OBJ);
                                $details = $conn->prepare("SELECT * FROM tasks WHERE id=?");
                                $details->bindValue(1,$result5->task_id,PDO::PARAM_INT);
                                $details->execute();
                                $result = $details->fetch(PDO::FETCH_OBJ);
                                $subject = $conn->query("SELECT name FROM subjects WHERE 
                                    id=$result->subject_id");
                                $result2 = $subject->fetch(PDO::FETCH_OBJ);
                                $depart = $conn->query("SELECT name FROM departments WHERE 
                                    id=$result->department_id");
                                $result3 = $depart->fetch(PDO::FETCH_OBJ);
                                $student = $conn->query("SELECT name FROM students WHERE id =$result5->student_id");
                                $result4 = $student->fetch(PDO::FETCH_OBJ);
                                
                                echo "
                                <tr><td>TASK TITLE</td><td>$result->task_title</td></tr>
                                <tr><td>CREATED AT</td><td>$result->created_at</td></tr>
                                <tr><td>DEPARTMENT</td><td>$result3->name</td></tr>
                                <tr><td>SUBJECT</td><td>$result2->name</td></tr>
                                <tr><td>DATE TO FINISH</td><td>$result->ex_date</td></tr>
                                <tr><td>STUDENT  </td><td>$result4->name</td></tr>
                                ";
                                
                                $answer_files = $conn->prepare("SELECT * FROM tasks_answers_files WHERE answer_id = ?");
                                $answer_files->bindValue(1,$answer_id , PDO::PARAM_INT);
                                $answer_files->execute();
                                $i = 1;
                                while ($answer_file = $answer_files->fetch(PDO::FETCH_OBJ)) {
                                    echo "<tr><td>file </td><td><a href='down_answer_file.php?id=".$answer_file->id."'> download file number $i </a></td></tr>";
                                $i++;
                                }

                                ?>
                                <form action="mark.php<?php echo "?answer_id=$result5->id"; ?>" method="post">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">mark</label>
                                        <input type="number" name="mark" placeholder="enter from 1 to 10 only !"  class="form-control" id="exampleInputEmail1"> 

                                    </div>
                                    
                                    <button type="submit" name="submit" class="btn btn-primary">mark </button>
                                </form>

                                

                            </tbody>

                        </table>

                    </div><!-- /.box-body -->


                </div>
                <div class="callout callout-info">
                    <h4>TASK CONTENT</h4>
                    <p><?php echo "$result->task_content"; ?>.</p>
                </div>
                <div class="callout callout-warning">
                    <h4><?php echo "$result4->name"; ?> ANSWER</h4>
                    <p><?php echo "$result5->content"; ?>.</p>
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
