<?php 
require 'admin/connection.php';

require 'header.php';
require 'admin/connection.php';
?>

<!-- Start Content -->
<div id="content">
	<div class="container">
		<div class="page-content">
			<div class="row">
				<div class="col-md-7">
					<!-- Classic Heading -->
					<h4 class="classic-title"><span>MET Academy </span></h4>
					<!-- Some Text -->
					<?php
					$sql="SELECT * FROM about";
					$query=$conn->query($sql);
					while ($result=$query->fetch(PDO::FETCH_ASSOC)){
						extract($result);
						echo "$content" ;
					}
					?>

					

				</div>

				<div class="col-md-5"> 

					<!-- Start Touch Slider -->
					<div class="touch-slider" data-slider-navigation="true" data-slider-pagination="true">
						<?php 
						$sql="SELECT * FROM about";
						$query=$conn->query($sql);
						while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
							extract($result);
							echo "<div class='item center-block'><img width='100%' class='center-block' alt='' src='admin/image/".$image1."'></div>
							<div class='item center-block'><img alt='' width='100%' class='center-block' src='admin/image/".$image2."'></div>
							<div class='item center-block'><img alt='' width='100%' class='center-block' src='admin/image/".$image3."'></div>";
						}


						?>

						
					</div>
					<!-- End Touch Slider -->

				</div>

			</div>




			<!-- Divider -->
			<div class="hr1" style="margin-bottom:50px;"></div>



		</div>
	</div>
</div>
<!-- End content -->



<?php 
require 'footer.php';
require 'scripts.php';

?>


</body>
</html>