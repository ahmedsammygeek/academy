       
<?php 
require 'admin/connection.php';
include 'header.php';
?>


<!-- Start Page Banner -->




<div class="page-banner">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2>Blog</h2>
				<p>MET Academy news</p>
			</div>
			<div class="col-md-6">
				<ul class="breadcrumbs">
					<li><a href="#">Home</a></li>
					<li>Blog</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- End Page Banner -->




<!-- Start Content -->
<div id="content">
	<div class="container">
		<div class="row blog-page">

			<!-- Start Blog Posts -->
			<div class="col-md-12 blog-box">

				<!-- Start Post -->

				<?php $sql="SELECT * FROM news";
				$news=$conn->query($sql);
				$count = $news->rowCount();
				echo $count;
				while ($topic=$news->fetch(PDO::FETCH_OBJ)) {
					echo '<div class="blog-post image-post">
					<!-- Post Thumb -->
					<div class="post-head">
					<div class="post-content">
					<div class="post-type"><i class="fa fa-picture-o"></i></div>
					<h2><a href="topic.php?id='.$topic->id.'">'.$topic->title.'</a></h2>
					<ul class="post-meta">
					<li>By <a href="#">MET Academy</a></li>
					<li>'.$topic->date.'</li>

					<li><a href="topic.php?id='.$topic->id.'">4 Comments</a></li>
					</ul>
					<p>'.substr($topic->content, 0,600).'</p>
					<a class="main-button" href="topic.php?id='.$topic->id.'">Read More <i class="fa fa-angle-right"></i></a>
					</div>
					</div>							
					</div>';
				} ?>


				<!-- Start Pagination -->
				<!-- <div id="pagination">
					<span class="all-pages">Page 1 of 3</span>
					<span class="current page-num">1</span>
					<a class="page-num" href="#">2</a>
					<a class="page-num" href="#">3</a>
					<a class="next-page" href="#">Next</a>
				</div> -->
				<!-- End Pagination -->

			</div>
			<!-- End Blog Posts -->


			


		</div>
	</div>
</div>
<!-- End Content -->






<?php 
include 'footer.php';
require 'scripts.php';

?>


</body>
</html>