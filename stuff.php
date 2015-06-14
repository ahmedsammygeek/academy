       
<?php 
require 'admin/connection.php';

$active = "staff";
$type = filter_input(INPUT_GET , 'type' , FILTER_SANITIZE_NUMBER_INT);

if(!$type) {
	header("location: index.php");
	die;
}

include 'header.php';



?>






<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
	<div class="container">



		<!-- Divider -->
		<div class="hr5" style="margin-top:30px; margin-bottom:40px;"></div>

		<!-- Start Team Members -->
		<div class="row">
			<div class="projects-carousel touch-carousel">

				<?php 

				$staff = $conn->prepare("SELECT * FROM staff WHERE type = ? ");
				$staff->bindValue(1,$type , PDO::PARAM_INT);
				$staff->execute();



				while ($member = $staff->fetch(PDO::FETCH_OBJ)) {
					echo '<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="team-member">
						
						<div class="member-photo">
							<img alt="" src="uploaded/staff/'.$member->image.'">
							<div class="member-name">'.$member->name.'</span></div>
						</div>
						
						<div class="member-info">
							<p>'.$member->description.'</p>
						</div>
						
						<div class="member-socail">
							<a class="twitter" href="'.$member->facebook.'"><i class="fa fa-twitter"></i></a>
							
							<a class="mail" href="mailto:'.$member->email.'"><i class="fa fa-envelope"></i></a>
						</div>
					</div>
				</div>';
				}

				?>

				


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