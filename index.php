<?php 
require 'admin/connection.php';
$active = "home";

include 'header.php';



$slides = $conn->prepare("SELECT * FROM slider");
$slides->execute();



?>
<!-- Start Home Page Slider -->
<section id="home">
	<!-- Carousel -->
	<div id="main-slide" class="carousel slide" data-ride="carousel">

		<div class="bp-hs" id="demo-default"  >
			<div class="bp-hs_inner"  >
				<?php 
				$i = 0;
				while ($row = $slides->fetch(PDO::FETCH_OBJ)) {


					if($i = 0) {
						echo '<div class="bp-hs_inner__item" data-transform="scale">
						<img style="width:1220px;height:436px;" src="admin/image/'.$row->image.'" alt="..."/>
						</div>';
						$i++;
					}
					else {
						echo '<div class="bp-hs_inner__item" data-transform="scale">
						<img style="width:1220px;height:436px;" src="admin/image/'.$row->image.'" alt="..."/>
						</div>';
					}



				}
				?>

			</div>
		</div>
		<!-- Carousel inner end-->
		<!-- Controls -->
	
	</div>
	<!-- /carousel -->
</section>
<!-- End Home Page Slider -->


<div id="content">

    <div class="container">

        <div class="row">
            <div class="big-title text-center animated fadeInDown delay-01" data-animation="fadeInDown" data-animation-delay="01">
                <h1>Why  <strong>MET Academy</strong></h1>
            </div>
            <!-- Start Service Icon 1 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
               <div class="service-boxed">
                  <div class="service-icon" style="margin-top:-25px;">
                    <i class="fa fa-magic icon-medium-effect icon-effect-2"></i>
                </div>
                <div class="service-content">
                    <h4>live right</h4>
                    <p>Our university is a sophisticated University are developing programs to comply with the requirements of the market, and choose lecturers listen to the needs of their students. The university believes in the importance of knowledge and understanding comes from experience that allows to adapt and employ what I have learned to take advantage of the opportunities that can be found. Because when your role is not limited to just life in this world, you live right.</p>
                </div>
            </div>
        </div>
        <!-- End Service Icon 1 -->

        <!-- Start Service Icon 2 -->
        <div class="col-md-3 col-sm-6 service-box service-center">
         <div class="service-boxed">
            <div class="service-icon" style="margin-top:-25px;">
              <i class="fa fa-eye icon-medium-effect icon-effect-2"></i>
          </div>
          <div class="service-content">
              <h4>Retina Display Ready</h4>
              <p>Our university is a sophisticated University are developing programs to comply with the requirements of the market, and choose lecturers listen to the needs of their students. The university believes in the importance of knowledge and understanding comes from experience that allows to adapt and employ what I have learned to take advantage of the opportunities that can be found. Because when your role is not limited to just life in this world, you live right.</p>
          </div>
      </div>
  </div>
  <!-- End Service Icon 2 -->

  <!-- Start Service Icon 3 -->
  <div class="col-md-3 col-sm-6 service-box service-center">
   <div class="service-boxed">
      <div class="service-icon" style="margin-top:-25px;">
        <i class="fa fa-code icon-medium-effect icon-effect-1"></i>
    </div>
    <div class="service-content">
        <h4>Clean Modern Code</h4>
        <p>Our university is a sophisticated University are developing programs to comply with the requirements of the market, and choose lecturers listen to the needs of their students. The university believes in the importance of knowledge and understanding comes from experience that allows to adapt and employ what I have learned to take advantage of the opportunities that can be found. Because when your role is not limited to just life in this world, you live right.</p>
    </div>
</div>
</div>
<!-- End Service Icon 3 -->

<!-- Start Service Icon 4 -->
<div class="col-md-3 col-sm-6 service-box service-center">
   <div class="service-boxed">
      <div class="service-icon" style="margin-top:-25px;">
        <i class="fa fa-rocket icon-medium-effect icon-effect-1"></i>
    </div>
    <div class="service-content">
        <h4>Fast &amp; Light Theme</h4>
        <p>Our university is a sophisticated University are developing programs to comply with the requirements of the market, and choose lecturers listen to the needs of their students. The university believes in the importance of knowledge and understanding comes from experience that allows to adapt and employ what I have learned to take advantage of the opportunities that can be found. Because when your role is not limited to just life in this world, you live right.</p>
    </div>
</div>
</div>
<!-- End Service Icon 4 -->

</div>  <!-- the end of row -->



<!-- Start Recent Posts Carousel -->
<div class="latest-posts">
    <h4 class="classic-title"><span>Latest News</span></h4>
    <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">


        <?php $sql="SELECT * FROM news";
        $news=$conn->query($sql);
        while ($topic=$news->fetch(PDO::FETCH_OBJ)) {
            $date = $topic->date;
            $date = explode(" ", $date);
            echo ' <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">'.$date[1].'</span><span class="month">'.$date[0].'</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="topic.php?id='.$topic->id.'">'.substr($topic->title , 0,80 ).'</a></h3>
            <div class="post-content">
                <p>'.substr($topic->content , 0 , 125 ).' <a class="read-more" href="topic.php?id='.$topic->id.'">Read More...</a></p>
            </div>
        </div>';
            
        } ?>
        <!-- Post 6 -->
       

    </div>
</div>
<!-- End Recent Posts Carousel -->
</div> <!-- end of container -->

</div> <!-- end of content -->


<!-- Start Testimonials Section -->

<?php 
include 'footer.php';
require 'scripts.php';

?>


</body>

</html>