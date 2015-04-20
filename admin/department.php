<?php 
require 'sidebar.php';
?>

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
					<h3 class="box-title">enter data of department</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<?php 
				if (isset($_GET['msg'])) {
                    //if exist msg in link get this message and do deffrent action in every case and show alert
					switch ($_GET['msg']) {
						case 'empty_data':
                        //here user left eny input place empty
						echo '<div class="alert alert-danger alert-dismissable">
						<i class="fa fa-ban"></i>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<b>Alert!</b> you leave some data an empty please complete inputs and try again.
						</div>';
						break;
						case 'error_data':
                        //this case error in sql request
						echo '<div class="alert alert-danger alert-dismissable">
						<i class="fa fa-ban"></i>
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<b>Alert!</b> erro in your data inserted please try again.
						</div>';
						break;
					
						default:
                                            # code...
						break;
					}
				}


				?>
				<form role="form" action="adddepartment.php" method="post" enctype="multipart/form-data" >
					<div class="box-body">
						<div class="form-group">
							<label for="exampleInputEmail1">department name</label>
							<input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter department name"> 

						</div>
							<div class="form-group">
							<label for="exampleInputEmail1">descreption of department</label>
							<textarea rows="4" cols="50" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description of department"></textarea> 

						</div>
						
						



					</div><!-- /.box-body -->

					<div class="box-footer">
						<button type="submit" name="submit" class="btn btn-primary">add department</button>
					</div>
				</form>
			</div><!-- /.box -->


		</div><!--/.col (right) -->
	</div>   <!-- /.row -->
</section><!-- /.content -->



<?php 
require 'footer.php';
?>