<?php 
require 'sidebar.php';
?>
<section class="content-header no-margin">
                    <h1 class="text-center">
                        Mailbox
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

							<div class="table-responsive">
								<!-- THE MESSAGES -->
								<table class="table table-mailbox">
									<tr>
										<th>id</th>
										<th>name</th>
										<th>emial</th>
										<th>content</th>
										<th>date & time</th>
										<th>option</th>
									</tr>
									<?php 
									require 'connection.php';
									$sql="SELECT * FROM messages";
									$query=$conn->query($sql);
									$i=1;
									while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
										extract($result);
										echo "<tr>
										<td>$i</td>
										<td>$name</td>
										<td>$email</td>
										<td>$contant</td>
										<td>$time</td>
										<td><a href='deletemessage.php?id=$id' class='btn btn-danger btn-sm'>DELETE</a></td>
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