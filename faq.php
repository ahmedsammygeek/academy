<?php 
require 'admin/connection.php';

$active = "faq";
require 'header.php';
?>


<!-- Start Content -->
<div id="content">
	<div class="container">
		<div class="row sidebar-page">

			<!-- Page Content -->
			<div class="col-md-9 page-content">

				<!-- Toggle -->
				<div class="panel-group">


					<?php 
					$questions  = $conn->prepare("SELECT * FROM questions");
					$questions->execute();
					$i = 1;
					while ($question = $questions->fetch(PDO::FETCH_OBJ)) {
						echo '<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$i.'" class="collapsed">
									<i class="fa fa-angle-down control-icon"></i>
									'.$question->question.'
								</a>
							</h4>
						</div>
						<div id="collapse-'.$i.'" class="panel-collapse collapse">
							<div class="panel-body"> '.$question->answer.' </div>
						</div>
					</div>';
					$i++;
					}

					?>



				</div>
				<!-- End Toggle -->

				<!-- Divider -->
				<div class="hr5" style=" margin-top:45px; margin-bottom:40px;"></div>


			</div>
			<!-- End Page Content-->

			<!--Sidebar-->

			<!--End sidebar-->


		</div>
	</div>
</div>
<!-- End Content -->

<?php 
require 'footer.php';
require 'scripts.php';

?>
</body>
</html>