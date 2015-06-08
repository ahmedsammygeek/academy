<?php 
require 'sidebar.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		edit site information

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
					<h3 class="box-title">enter new information</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<?php 
				$id=$_GET['id'];
				require 'connection.php';
				$sql="SELECT * FROM site_info WHERE id=$id ";
				$query=$conn->query($sql);
				$result=$query->fetch(PDO::FETCH_OBJ);


				?>
				<form role="form" action="update_info.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
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
							<label for="exampleInputEmail1">phone</label>
							<input type="text" name="phone" value='<?php echo "$result->phone"; ?>' class="form-control" id="exampleInputEmail1"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">email</label>
							<input type="text" name="email" value='<?php echo "$result->mail"; ?>' class="form-control" id="exampleInputEmail1"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">facebook</label>
							<input type="text" name="facebook" value='<?php echo "$result->facebook"; ?>' class="form-control" id="exampleInputEmail1"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">twitter</label>
							<input type="text" name="twitter" value='<?php echo "$result->twitter"; ?>' class="form-control" id="exampleInputEmail1"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">linked-in</label>
							<input type="text" name="linkedin" value='<?php echo "$result->linkedin"; ?>' class="form-control" id="exampleInputEmail1"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">address</label>
							<input type="text" name="address" value='<?php echo "$result->address"; ?>' class="form-control" id="exampleInputEmail1"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">map link</label>
							<input type="text" name="map" value='<?php echo "$result->map"; ?>' class="form-control" id="exampleInputEmail1"> 

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