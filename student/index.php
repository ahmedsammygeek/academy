<?php  

require 'check_user.php';
require 'header.php';

require '../admin/connection.php';
$subjects = $conn->prepare("SELECT name ,  id FROM subjects WHERE year = ? AND department = ? ");
$subjects->bindValue(1,$_SESSION['student_user_year'],PDO::PARAM_INT);
$subjects->bindValue(2,$_SESSION['student_user_department'],PDO::PARAM_INT);
$subjects->execute();



$notifications = $conn->prepare("SELECT count(*) As noti_number FROM notifications_users WHERE user_id = ? AND seen = ?");
$notifications->bindValue(1,$_SESSION['student_user_id'],PDO::PARAM_INT);
$notifications->bindValue(2,0,PDO::PARAM_INT);
$notifications->execute();

$notification = $notifications->fetch(PDO::FETCH_OBJ);

?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

         <div class="col-md-12">
            <!-- Application buttons -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Control Panel</h3>
                </div>
                <div class="box-body"><?php if (isset($_GET['id'])) {
                    $id=$_GET['id'];
                } ?>
                  
                    <a href="tasks.php" class="btn btn-app ">
                        <i class="fa fa-tasks"></i> tasks
                    </a> 
                    <a href="profil.php" class="btn btn-app">
                        
                        <i class="fa fa-envelope"></i> profile                                        
                    </a>
                    <a href="notifications.php" class="btn btn-app ">
                        <span class="badge bg-yellow"><?php echo $notification->noti_number; ?></span>
                        <i class="fa fa-bullhorn"></i> Notifications
                    </a>      
                  


                </div><!-- /.box-body -->
            </div><!-- /.box -->


        </div>
    </div>

    <div class="row">

     <div class="col-md-12">
       <div class="box">
        <div class="box-header" style="cursor: move;">
            <h3 class="box-title">My subjects</h3>
        </div>
        <div class="box-body">
            <?php 
            if($subjects->rowCount()) {
                while ($user_subjects = $subjects->fetch(PDO::FETCH_OBJ)) {
                    echo '<a href="subject.php?id='.$user_subjects->id.'" class="btn btn-app ">
                <i class="fa fa-book"></i> '.$user_subjects->name.'
            </a>';
                }
            }
            else {
                echo "sorry ! no subject now you teach it to be shown here";
            }
             ?>
        </div><!-- /.box-body -->
    </div>

</div>
</div>
    <div class="row">

     <div class="col-md-12">
       <div class="box">
        <div class="box-header" style="cursor: move;">
            <h3 class="box-title">schedule</h3>
        </div>
        <div class="box-body">
            <?php 
            $depart_id = $_SESSION['student_user_department'] ;
            $year = $_SESSION['student_user_year'] ;
           $table = $conn->query("SELECT table_image FROM tables WHERE year_id=$year AND department_id=$depart_id");
           $result = $table->fetch(PDO::FETCH_OBJ);

           if($table->rowCount()) {
             echo '<img class="img-thumbnail" with="100%" src="../admin/image/'.$result->table_image.'">';
           }

          
             ?>
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

<!-- AdminLTE App -->
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>

</body>
</html>
