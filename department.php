<?php 
require 'admin/connection.php';
if(!isset($_GET['id']) || empty($_GET['id'])) {
	header("location: index.php");
	die();
}

$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
$department = $conn->prepare("SELECT name , description FROM departments WHERE id = ?");
$department->bindValue(1,$id , PDO::PARAM_INT);
$department->execute();

if(!$department->rowCount()) {
	header("location: index.php");
	die();
}

$dept_details = $department->fetch(PDO::FETCH_OBJ);

$first_year = $conn->prepare("SELECT id ,  name , description FROM subjects WHERE department = ? && year = 1");
$first_year->bindValue(1,$id , PDO::PARAM_INT);
$first_year->execute();

$second_year = $conn->prepare("SELECT id ,   name , description FROM subjects WHERE department = ? && year = 2 ");
$second_year->bindValue(1,$id , PDO::PARAM_INT);
$second_year->execute();


$third_year = $conn->prepare("SELECT id , name , description FROM subjects WHERE department = ? && year = 3");
$third_year->bindValue(1,$id , PDO::PARAM_INT);
$third_year->execute();

$forth_year = $conn->prepare("SELECT id , name , description FROM subjects WHERE department = ? && year = 4");
$forth_year->bindValue(1,$id , PDO::PARAM_INT);
$forth_year->execute();


$active = "department";

require 'header.php';




?>


<!-- Start Content -->
<div id="content" class="boxed-page">
	<div class="container">
		<div class="big-title text-center animated fadeInDown delay-01.5" data-animation="fadeInDown" data-animation-delay="01">
			<h1><?php echo $dept_details->name; ?> <strong>Department</strong></h1>
		</div>

		<p class="text-center"><?php echo $dept_details->description; ?></p>
		<div class="row">
			<div class="col-md-6">
				<h4 class="classic-title"><span>Business Administration subjects</span></h4>
			</div>
		</div>
		<div class="row">
			<!-- start of col-md-6 -->
			<div class="col-md-6">

				<h4 class="classic-title"><span>First Year</span></h4>

				<!-- Accordion -->
				<div class="panel-group" id="accordion">
					<?php 
					while ($row = $first_year->fetch(PDO::FETCH_OBJ)) {
						echo '<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$row->id.'" class="collapsed">
									<i class="fa fa-angle-down control-icon"></i>
									<i class="fa fa-tint"></i> '.$row->name.'
								</a>
							</h4>
						</div>
						<div id="collapse-'.$row->id.'" class="panel-collapse collapse">
							<div class="panel-body"><strong>Duis</strong> '.$row->description.'</div>
						</div>
					</div>';
					}
					?>
				</div>
				<!-- End Accordion -->

			</div>
			<!-- the end of col-md-6 -->

			<div class="clear"></div>

			<div class="col-md-6">

				<h4 class="classic-title"><span>second Year</span></h4>

				<!-- Accordion -->
				<div class="panel-group" id="accordion">
<?php 
					while ($row = $second_year->fetch(PDO::FETCH_OBJ)) {
						echo '<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$row->id.'" class="collapsed">
									<i class="fa fa-angle-down control-icon"></i>
									<i class="fa fa-tint"></i> '.$row->name.'
								</a>
							</h4>
						</div>
						<div id="collapse-'.$row->id.'" class="panel-collapse collapse">
							<div class="panel-body"><strong>Duis</strong> '.$row->description.'</div>
						</div>
					</div>';
					}
					?>

				</div>
				<!-- End Accordion -->

			</div>
			<!-- the end of col-md-6 -->
	<div class="clear"></div>


			<div class="col-md-6">

				<h4 class="classic-title"><span>third Year</span></h4>

				<!-- Accordion -->
				<div class="panel-group" id="accordion">

<?php 
					while ($row = $third_year->fetch(PDO::FETCH_OBJ)) {
						echo '<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$row->id.'" class="collapsed">
									<i class="fa fa-angle-down control-icon"></i>
									<i class="fa fa-tint"></i> '.$row->name.'
								</a>
							</h4>
						</div>
						<div id="collapse-'.$row->id.'" class="panel-collapse collapse">
							<div class="panel-body"><strong>Duis</strong> '.$row->description.'</div>
						</div>
					</div>';
					}
					?>
				</div>
				<!-- End Accordion -->

			</div>
			<!-- the end of col-md-6 -->

	<div class="clearFix"></div>

			<div class="col-md-6">

				<h4 class="classic-title"><span>fourth Year</span></h4>

				<!-- Accordion -->
				<div class="panel-group" id="accordion">


<?php 
					while ($row = $forth_year->fetch(PDO::FETCH_OBJ)) {
						echo '<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordion" href="#collapse-'.$row->id.'" class="collapsed">
									<i class="fa fa-angle-down control-icon"></i>
									<i class="fa fa-tint"></i> '.$row->name.'
								</a>
							</h4>
						</div>
						<div id="collapse-'.$row->id.'" class="panel-collapse collapse">
							<div class="panel-body"><strong>Duis</strong> '.$row->description.'</div>
						</div>
					</div>';
					}
					?>
				</div>
				<!-- End Accordion -->

			</div>
			<!-- the end of col-md-6 -->
	<div class="clear"></div>


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