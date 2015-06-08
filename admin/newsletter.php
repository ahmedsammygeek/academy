<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
	<h1 class="text-center">
		SUBSCRIBE
	</h1>
</section>
<section class="content">
	<!-- MAILBOX BEGIN -->
	<div class="mailbox row">
		<div class="col-xs-12">
			<div class="box box-solid">
				<div class="box-body">
					<div class="row">

						<div class="col-md-12 col-sm-8">

							<div class="table-responsive"><?php 
							if (isset($_GET['msg'])) {
								switch ($_GET['msg']) {

									case 'error':
									echo '<div class="alert alert-danger alert-dismissable">
									<i class="fa fa-ban"></i>
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
									<b>Alert!</b>   an error in your delete please try again.
									</div>';
									break;
									case 'deleted':
									echo '<div class="alert alert-success alert-dismissable">
									<i class="fa fa-check"></i>

									<b>Alert!</b> data deleted successfully.
									</div>' ;
									break;


									default:

									break;
								}
							}


							?>


							<!-- THE MESSAGES -->
							<table class="table table-mailbox">
								<tr>
									<th>#</th>
									<th>email</th>
									<th>DELETE</th>

								</tr>
								<?php 
								require 'connection.php';
								$sql="SELECT * FROM newsletter";
								$query=$conn->query($sql);
								$i=1;
								while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
									extract($result);
									echo "<tr>
									<td>$i</td>
									<td>$email</td>
									<td><a href='delete_sub.php?id=$id' class='btn btn-danger btn-sm'>DELETE</a>
									</tr>";
									$i++;
								}

								?>



							</table>
						</div><!-- /.table-responsive -->
					</div><!-- /.col (RIGHT) -->
				</div><!-- /.row -->
			</div><!-- /.box-body -->

		</div><!-- /.box -->
	</div><!-- /.col (MAIN) -->
</div>
<!-- MAILBOX END -->

</section><!-- /.content -->
<?php require 'footer.php';
?>