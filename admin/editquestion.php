<?php 
require 'sidebar.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		edit questions

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
					<h3 class="box-title">enter questions</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				<?php 
				$id=$_GET['id'];
				require 'connection.php';
				$sql="SELECT * FROM questions WHERE id=$id ";
				$query=$conn->query($sql);
				while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
					extract($result);
				}


				?>
				<form role="form" action="updatequestion.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
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
							<label for="exampleInputEmail1">question</label>
							<input type="text" name="question" value='<?php echo "$question"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter quastion ?"> 

						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">answer</label>
							<textarea type="text" name="answer"  class="form-control" id="exampleInputEmail1" placeholder="Enter answer of question" cols="30"  rows="5"><?php echo "$answer"; ?></textarea>

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