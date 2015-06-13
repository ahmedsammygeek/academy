<?php session_start();
require 'header.php';
require '../admin/connection.php';
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
                            <div class="box box-info">
                                <div class="box-header">
                                    <i class="fa fa-bullhorn"></i>
                                    <h3 class="box-title">Callouts</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <?php 
                                    $notifications = $conn->prepare("SELECT N.content , N.date N_S.notification_id 
                                     FROM notifications_users AS N_S  LEFT JOIN notifications AS N on N.id = N_S.notification_id 
                                     WHERE user_id = ? AND seen = 0 ")

                                     ?>
                                    <div class="callout callout-info">
                                        <h4>I am an info callout!</h4>
                                        <p>Follow the steps to continue to payment.</p>
                                    </div>
                                    <div class="callout callout-warning">
                                        <h4>I am a warning callout!</h4>
                                        <p>This is a yellow callout.</p>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
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
