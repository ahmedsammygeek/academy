<?php 
require 'admin/connection.php';

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
       <li>By <a href="#">MET Academy</a></li>
       <li><?php echo $topic->date; ?></li>
     
       <li><a href="#">4 Comments</a></li>
     </ul>
     
     
     
     <p>
       <?php echo $topic->content; ?>
     </p>
     
 </div>
 <!-- End Single Post Content -->
 
</div>
<!-- End Single Post Area -->

<!-- Start Comment Area -->
<div id="comments">
 <h2 class="comments-title">(4) Comments</h2>
 <ol class="comments-list">
   <li>
     <div class="comment-box clearfix">
       <div class="avatar"><img alt="" src="images/avatar.png" /></div>
       <div class="comment-content">
         <div class="comment-meta">
           <span class="comment-by">John Doe</span>
           <span class="comment-date">February 15, 2013 at 11:39 pm</span>
           <span class="reply-link"><a href="#">Reply</a></span>
         </div>
         <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
       </div>
     </div>
     
     <ul>
      <li>
        <div class="comment-box clearfix">
          <div class="avatar"><img alt="" src="images/avatar.png" /></div>
          <div class="comment-content">
            <div class="comment-meta">
              <span class="comment-by">John Doe</span>
              <span class="comment-date">February 15, 2013 at 11:39 pm</span>
              <span class="reply-link"><a href="#">Reply</a></span>
            </div>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
          </div>
        </div>
      
      </li>
    </ul>
  </li>
  
  <li>
   <div class="comment-box clearfix">
     <div class="avatar"><img alt="" src="images/avatar.png" /></div>
     <div class="comment-content">
       <div class="comment-meta">
         <span class="comment-by">John Doe</span>
         <span class="comment-date">February 15, 2013 at 11:39 pm</span>
         <span class="reply-link"><a href="#">Reply</a></span>
       </div>
       <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia desrut mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
     </div>
   </div>
 </li>
 
</ol>

<!-- Start Respond Form -->
<div id="respond">
 <h2 class="respond-title">Leave a reply</h2>
 <form action="#">
   <div class="row">
     <div class="col-md-4">
       <label for="author">Name<span class="required">*</span></label>
       <input id="author" name="author" type="text" value="" size="30" aria-required="true">
     </div>
     <div class="col-md-4">
       <label for="email">Email<span class="required">*</span></label>
       <input id="email" name="author" type="text" value="" size="30" aria-required="true">
     </div>
    
   </div>
   <div class="row">
     <div class="col-md-12">
      <label for="comment">Add Your Comment</label>
      <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
      <input name="submit" type="submit" id="submit" value="Submit Comment">
    </div>
  </div>
</form>
</div>
<!-- End Respond Form -->

</div>
<!-- End Comment Area -->

</div>




</div>

</div>
</div>
<!-- End content -->


<?php 
include 'footer.php';
require 'scripts.php';

?>
