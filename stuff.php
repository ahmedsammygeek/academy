       
<?php 
require 'admin/connection.php';

$active = "staff";
include 'header.php';
?>






<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
	<div class="container">



		<!-- Divider -->
		<div class="hr5" style="margin-top:30px; margin-bottom:40px;"></div>

		<!-- Start Team Members -->
		<div class="row">
			<div class="projects-carousel touch-carousel">
				<!-- Start Memebr 1 -->
				<div class="col-md-12 col-sm-6 col-xs-12">
					<div class="team-member">
						<!-- Memebr Photo, Name & Position -->
						<?php 
						if (isset($_GET['type'])) {
							$type = $_GET['type'];
							switch ($type) {
								case '1':
								$domen = $conn->query("SELECT * FROM staff WHERE type = 1");
								while ($res = $domen->fetch(PDO::FETCH_OBJ)) {
									var_dump($res->name);die();
									echo '<div class="member-photo">
									<a href=""><img alt="" src="admin/image/'.$res->image.'"></a>
									<div class="member-name">'.$res->name.'<span>Developer</span></div>
									</div>
									<!-- Memebr Words -->
									<div class="member-info">
									<p>'.$res->description.'</p>
									</div>
									</div>' ;
								}

								break;

								default:
								# code...
								break;
							}
						}
						?>

					</div>
				</div>
				<!-- End Memebr 1 -->

			</div>



		</div>
		<!-- End Team Members -->

	</div>
</div>












<?php 
include 'footer.php';
require 'scripts.php';

?>


</body>

</html>