<?php 
require 'check_user.php';
require 'header.php';

require '../admin/connection.php';?>


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            student profile

        </h1>

    </section>
    <!-- Main content -->
   <section class="content-header">
        <h1>
            Dashboard
            <small>details</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">profile</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        
                    </div>
                    <div class="box-footer">
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                            </thead>
                            <tbody>
                                <?php 
                                $details = $conn->prepare("SELECT * FROM students WHERE id=?");
                                $details->bindValue(1,$_SESSION['student_user_id'],PDO::PARAM_INT);
                                $details->execute();
                                $result = $details->fetch(PDO::FETCH_OBJ);
                                $depart = $conn->prepare("SELECT name FROM departments WHERE id =?");
                                $depart->bindValue(1,$result->department_id,PDO::PARAM_INT);
                                $depart->execute();
                                $result2 = $depart->fetch(PDO::FETCH_OBJ);
                                echo "
                                <tr><td>NAME</td><td>$result->name</td></tr>
                                <tr><td>YEAR</td><td>year$result->year</td></tr>
                                <tr><td>CARD ID</td><td>$result->card_id</td></tr>
                                <tr><td>DEPARTMENT</td><td>$result2->name</td></tr>
                                <tr><td>PASSWORD</td><td><a href='edit_pass.php'>*E**D**I**T</a></td></tr>
                                ";
                                

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
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="../admin/js/AdminLTE/dashboard.js" type="text/javascript"></script>


</body>
</html>