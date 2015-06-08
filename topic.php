<?php 
require 'admin/connection.php';

$active = "blog";
// $id = filter_input(INPUT_GET, 'id' , FILTER_VALIDATE_INT);

if(!isset($_GET['id']) || empty($_GET['id'])) {
  header("location: index.php");
  die();
}

$id = filter_input(INPUT_GET, 'id' , FILTER_SANITIZE_NUMBER_INT);
$query = $conn->prepare("SELECT * FROM news WHERE id = ?");
$query->bindValue(1,$id , PDO::PARAM_INT);
$query->execute();

if(!$query->rowCount()) {
  header("location: index.php");
  die();
}
$topic = $query->fetch(PDO::FETCH_OBJ);
require 'header.php';
 ?>


<!-- Start Page Banner -->
<div class="page-banner">
 <div class="container">
  <div class="row">
   <div class="col-md-6">
    <h2>Blog</h2>
    <p>Blog Subtitle</p>
  </div>
  <div class="col-md-6">
    <ul class="breadcrumbs">
     <li><a href="#">Home</a></li>
     <li><a href="#">Blog</a></li>
     <li><?php echo $topic->title; ?></li>
   </ul>
 </div>
</div>
</div>
</div>
<!-- End Page Banner -->




<!-- Start Content -->
<div id="content">
 <div class="container">
  <div class="row blog-post-page">
   <div class="col-md-9 blog-box">
    
    <!-- Start Single Post Area -->
    <div class="blog-post gallery-post">
      
      <!-- Start Single Post (Gallery Slider) -->
      <div class="post-head">
        <div class="item">
          <a class="lightbox" title="<?php echo $topic->title; ?>" href="admin/image/<?php echo $topic->image; ?>" data-lightbox-gallery="gallery1">
            <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
            <img alt="" class="center-block" src="admin/image/<?php echo $topic->image; ?>">
          </a>
        </div>
    </div>
    <!-- End Single Post (Gallery) -->
    
    <!-- Start Single Post Content -->
    <div class="post-content">
     <div class="post-type"><i class="fa fa-picture-o"></i></div>
     <h2><?php echo $topic->title; ?></h2>
     <ul class="post-meta">
       <li>By <a href="#">MET Site Admin</a></li>
       <li><?php echo $topic->date; ?></li>

     </ul>
     
     
     
     <p>
       <?php echo $topic->content; ?>
     </p>
     
 </div>
 <!-- End Single Post Content -->
 
</div>
<!-- End Single Post Area -->


</div>




</div>

</div>
</div>
<!-- End content -->


<?php 
include 'footer.php';
require 'scripts.php';

?>
