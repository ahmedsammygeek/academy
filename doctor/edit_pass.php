<?php 
require 'check_user.php';
require 'header.php';

require '../admin/connection.php';?>


<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            doctor profile

        </h1>

    </section>
    <!-- Main content -->
    <section class="content">
     <div class="row">
      <!-- left column -->
      <div class="col-md-12">
       <!-- general form elements -->
       <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">update your information</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
       
        <form role="form" action="update_pass.php" method="post" enctype="multipart/form-data" >
            <div class="box-body">
                <?php 
                if (isset($_GET['msg'])) {
                    switch ($_GET['msg']) {
                        case 'empty_data':
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b>   you leave input empty please complete inputs and try again.
                        </div>';
                        break;
                        case 'err_pass':
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> please enter your password right ! .
                        </div>';
                        break;
                        case 'no_eq_pass':
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> your new password not equal your confirm .
                        </div>';
                        break;
                        case 'error':
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> pleace contact with support! .
                        </div>';
                        break;
                        case 'updated':
                        echo '<div class="alert alert-success alert-dismissable">
                        <i class="fa fa-check"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> password updated .
                        </div>';  
                        break;

                        default:

                        break;
                    }
                }

                ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input type="password" name="password"  class="form-control" id="exampleInputEmail1" placeholder="Enter your password"> 

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">new password</label>
                    <input type="password" name="password1"  class="form-control" id="exampleInputEmail1" placeholder="Enter new password"> 

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">confirm new password</label>
                    <input type="password" name="password2"  class="form-control" id="exampleInputEmail1" placeholder="Enter new password again"> 

                </div>
                
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary">update</button>

            </div>
        </form>
    </div><!-- /.box -->


</div><!--/.col (right) -->
</div>   <!-- /.row -->
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