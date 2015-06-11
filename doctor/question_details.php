<?php 
require 'check_user.php';

require '../admin/connection.php';



if(!isset($_GET['question_id']) || empty($_GET['question_id'])) {
    header('location: questions.php');
    die();
}


require 'header.php';

?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>question details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">questions</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">show question</h3>
                    </div>
                    <div class="box-footer">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                            </thead>
                            <tbody>
                                <?php 
                                if (isset($_GET['question_id'])) {
                                    $question_id = $_GET['question_id'];
                                }
                                $questions = $conn->query("SELECT * FROM student_questions WHERE id=$question_id");
                                $question = $questions->fetch(PDO::FETCH_OBJ);
                                $students = $conn->query("SELECT name FROM students WHERE id=$question->student_id");
                                $student = $students->fetch(PDO::FETCH_OBJ);
                                $subjects = $conn->query("SELECT name , department , year FROM subjects WHERE id=$question->subject_id");
                                $subject = $subjects->fetch(PDO::FETCH_OBJ);
                                $departments = $conn->query("SELECT name FROM departments WHERE id=$subject->department");
                                $department = $departments->fetch(PDO::FETCH_OBJ);
                                echo "
                                <tr><td>YEAR</td><td>YEAR$subject->year</td></tr>
                                <tr><td>DEPARTMENT</td><td>$department->name</td></tr>
                                <tr><td>SUBJECT</td><td>$subject->name</td></tr>
                                <tr><td>STUDENT</td><td>$student->name</td></tr>
                                

                                ";


                                ?>



                            </tbody>


                        </table>
                        <div class="callout callout-info">
                        <h4>QUSTION !</h4>
                        <p><?php echo "$question->content"; ?>.</p>
                    </div>
                        <form role="form" enctype="multipart/form-data" action="answer_question.php<?php echo "?q_id=$question_id"; ?>" method="post">
                            <div class="box-body">

                                <div class="row">
                                    <div class="col-md-12"> 
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">answer </label>
                                            <textarea type="text" name="answer" rows="12" class="form-control" id="exampleInputEmail1" placeholder="Enter your answer "></textarea>
                                        </div>
                                    </div>

                                </div>




                            </div><!-- /.box-body -->

                            <div class="box-footer">
                                <input type="submit" name="submit" class="btn btn-success" value="answer">
                            </div>
                        </form>

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
