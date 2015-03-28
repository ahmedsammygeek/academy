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
				$id=$_GET['id'];
				require 'connection.php';
				$sql="SELECT * FROM departments WHERE id=$id ";
				$query=$conn->query($sql);
				while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
					extract($result);
				}


				?>
				<form role="form" action="updatedepartment.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
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
									# code...
								break;
							}
						}

						?>
						<div class="form-group">
							<label for="exampleInputEmail1">department name</label>
							<input type="text" name="name" value='<?php echo "$name"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter department name"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">descreption of department</label>
							<input type="text" name="description" value='<?php echo "$description"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter description of department"> 

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



<?php 
require 'footer.php';
?>