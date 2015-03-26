       
<?php 
include 'header.php';

require 'admin/connection.php';


$slides = $conn->prepare("SELECT * FROM slider");
$slides->execute();



?>
<!-- Start Home Page Slider -->
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">


        <!-- Carousel inner -->
        <div class="carousel-inner">
         <?php 
         $i = 0;
         while ($row = $slides->fetch(PDO::FETCH_OBJ)) {

             if($i == 0) {
                echo '<div class="item active">
                <img class="img-responsive" src="admin/image/'.$row->image.'" alt="slider">
                <div class="slider-content">
                <div class="col-md-12 text-center">
                <h2 class="animated4">
                </h2>
                <h3 class="animated5">
                <span>'.$row->title.'</span>
                </h3>   
                
                
                </div>
                </div>
                </div>';
                $i++;
            }
            else {
               echo '<div class="item ">
                <img class="img-responsive" src="admin/image/'.$row->image.'" alt="slider">
                <div class="slider-content">
                <div class="col-md-12 text-center">
                <h2 class="animated4">
                </h2>
                <h3 class="animated5">
                <span>'.$row->title.'</span>
                </h3>   
                
                
                </div>
                </div>
                </div>';
            
            }
        }
        ?>
        <!--/ Carousel item end -->

        <!--/ Carousel item end -->

    </div>
    <!-- Carousel inner end-->

    <!-- Controls -->
    <a class="left carousel-control" href="#main-slide" data-slide="prev">
        <span><i class="fa fa-angle-left"></i></span>
    </a>
    <a class="right carousel-control" href="#main-slide" data-slide="next">
        <span><i class="fa fa-angle-right"></i></span>
    </a>
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
                <h4>High Quality Theme</h4>
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem Ipsum is simply dummy text of the printing.</p>
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
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem Ipsum is simply dummy text of the printing.</p>
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
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem Ipsum is simply dummy text of the printing.</p>
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
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem Ipsum is simply dummy text of the printing.</p>
</div>
</div>
</div>
<!-- End Service Icon 4 -->

</div>  <!-- the end of row -->

<div class="section" style="padding-top:60px; padding-bottom:60px; border-top:1px solid #eee; border-bottom:1px solid #eee; background:#f9f9f9;">
    <div class="container">

        <div class="row">

            <!-- Start Left Side -->
            <div class="col-md-6">

                <!-- Start Big Heading -->
                <div class="big-title">
                    <h1><strong>More</strong> About Us</h1>
                    <p class="title-desc">Some Words About Our Company</p>
                </div>
                <!-- End Big Heading -->

                <!-- Some Text -->
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:14px;"></div>

                <!-- Start Icons Lists -->
                <div class="row">
                    <div class="col-md-6">
                        <ul class="icons-list">
                            <li><i class="fa fa-check-circle"></i> Duis aute irure dolor in reprehenderit.</li>
                            <li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text.</li>
                            <li><i class="fa fa-check-circle"></i> Excepteur sint occaecat cupidatat.</li>
                            <li><i class="fa fa-check-circle"></i> Sed ut perspiciatis unde omnis.</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="icons-list">
                            <li><i class="fa fa-check-circle"></i> Duis aute irure dolor in reprehenderit.</li>
                            <li><i class="fa fa-check-circle"></i> Lorem Ipsum is simply dummy text.</li>
                            <li><i class="fa fa-check-circle"></i> Excepteur sint occaecat cupidatat.</li>
                            <li><i class="fa fa-check-circle"></i> Sed ut perspiciatis unde omnis.</li>
                        </ul>
                    </div>
                </div>
                <!-- End Icons Lists -->

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:20px;"></div>

                <!-- Button -->
                <a href="#" class="btn-system btn-small">Read More About Us</a>
            </div>
            <!-- End Left Side -->

            <!-- Vimeo Iframe -->
            <div class="col-md-6">
                <div class="fluid-width-video-wrapper" style="padding-top: 56.25%;"><iframe src="https://player.vimeo.com/video/63322694?title=0&amp;byline=0&amp;portrait=0" id="fitvid227256"></iframe></div>  
            </div>

        </div>

    </div>
</div>
<!-- Start Recent Posts Carousel -->
<div class="latest-posts">
    <h4 class="classic-title"><span>Latest News</span></h4>
    <div class="latest-posts-classic custom-carousel touch-carousel" data-appeared-items="3">

        <!-- Post 1 -->
        <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">28</span><span class="month">Dec</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="#">Standard Post With Image</a></h3>
            <div class="post-content">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
            </div>
        </div>

        <!-- Post 2 -->
        <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="#">Link Post</a></h3>
            <div class="post-content">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
            </div>
        </div>

        <!-- Post 3 -->
        <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="#">Iframe Video Post</a></h3>
            <div class="post-content">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
            </div>
        </div>

        <!-- Post 4 -->
        <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="#">Gallery Post</a></h3>
            <div class="post-content">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
            </div>
        </div>

        <!-- Post 5 -->
        <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="#">Standard Post without Image</a></h3>
            <div class="post-content">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
            </div>
        </div>

        <!-- Post 6 -->
        <div class="post-row item">
            <div class="left-meta-post">
                <div class="post-date"><span class="day">26</span><span class="month">Dec</span></div>
                <div class="post-type"><i class="fa fa-picture-o"></i></div>
            </div>
            <h3 class="post-title"><a href="#">Iframe Audio Post</a></h3>
            <div class="post-content">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit. <a class="read-more" href="#">Read More...</a></p>
            </div>
        </div>

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