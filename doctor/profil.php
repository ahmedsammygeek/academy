<?php 
require 'check_user.php';
require 'header.php';

require '../admin/connection.php';?>


<aside class="right-side">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        add new department

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
                <?php 
                $query=$conn->prepare("SELECT * FROM staff WHERE id = ?");
                $query->bindValue(1,$_SESSION['system_user_id'],PDO::PARAM_INT);
                $query->execute();
                $result=$query->fetch(PDO::FETCH_OBJ);
                ?>
                <form role="form" action="update_info.php" method="post" enctype="multipart/form-data" >
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
                                case 'error_update':
                                echo '<div class="alert alert-danger alert-dismissable">
                                <i class="fa fa-ban"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <b>Alert!</b>   an error in your update please try again.
                                </div>';
                                break;
                                
                                default:
                                
                                break;
                            }
                        }

                        ?>
                        <div class="form-group">
                            <label for="exampleInputEmail1">name</label>
                            <input type="text" name="name" value='<?php echo "$result->name"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter department name"> 

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">image</label>
                            <input type="file" name="file"  class="form-control" id="exampleInputEmail1"> 

                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">description</label>
                            <input type="text" name="description" value='<?php echo "$result->description"; ?>' class="form-control" id="exampleInputEmail1"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">facebook</label>
                            <input type="text" name="facebook" value='<?php echo "$result->facebook"; ?>' class="form-control" id="exampleInputEmail1"> 

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">email</label>
                            <input type="text" name="email" value='<?php echo "$result->email"; ?>' class="form-control" id="exampleInputEmail1"> 
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">username</label>
                            <input type="text" name="username" value='<?php echo "$result->username"; ?>' class="form-control" id="exampleInputEmail1"> 

                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">new password</label>
                            <input type="text" name="password1"  class="form-control" id="exampleInputEmail1" placeholder="new password"> 

                        </div><div class="form-group">
                            <label for="exampleInputEmail1">confirm new password</label>
                            <input type="text" name="password2"  class="form-control" id="exampleInputEmail1" placeholder="new password again"> 

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