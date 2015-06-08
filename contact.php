<?php 
require 'admin/connection.php';
$active = "contact";
require 'header.php';
 ?>

		
		
		
		<!-- Start Map -->
		<div id="content">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d7323128.552528785!2d17.2692101!3d26.3347113!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2seg!4v1424659483270" width="100%" height="470" frameborder="0" style="border:0"></iframe>
					</div>
				</div>
			</div>
		</div>

<!-- Start Content -->
<div id="content">
	<div class="container">
		
		<div class="row">
			
			<div class="col-md-8">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Contact Us</span></h4>
				
				<!-- Start Contact Form -->
				<div id="contact-form" class="contatct-form">
					<div class="loader"></div>
					<form action="mail.php" class="contactForm" name="cform" method="post">
						<div class="row">
							<div class="col-md-4">
								<label for="name">Name<span class="required">*</span></label>
								<span class="name-missing">Please enter your name</span>  
								<input id="name" name="name" type="text" value="" size="30">
							</div>
							<div class="col-md-4">
								<label for="e-mail">Email<span class="required">*</span></label>
								<span class="email-missing">Please enter a valid e-mail</span> 
								<input id="e-mail" name="email" type="text" value="" size="30">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="message">Add Your Comment</label>
								<span class="message-missing">Say something!</span>
								<textarea id="message" name="content" cols="45" rows="10"></textarea>
								<input type="submit" name="submit" class="button" id="submit_btn" value="Send Message">
							</div>
						</div>
					</form>
				</div>
				<!-- End Contact Form -->
				
			</div>
			
			<div class="col-md-4">
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Information</span></h4>
				
				<!-- Some Info -->
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum.</p>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:10px;"></div>
				
				<!-- Info - Icons List -->
				<ul class="icons-list">
					<li><i class="fa fa-globe">  </i> <strong>Address:</strong> 1234 Street Name, Bangladesh.</li>
					<li><i class="fa fa-envelope-o"></i> <strong>Email:</strong> info@yourcompany.com</li>
					<li><i class="fa fa-mobile"></i> <strong>Phone:</strong> +12 345 678 001</li>
				</ul>
				
				<!-- Divider -->
				<div class="hr1" style="margin-bottom:15px;"></div>
				
				<!-- Classic Heading -->
				<h4 class="classic-title"><span>Working Hours</span></h4>
				
				<!-- Info - List -->
				<ul class="list-unstyled">
					<li><strong>Monday - Friday</strong> - 9am to 5pm</li>
					<li><strong>Saturday</strong> - 9am to 2pm</li>
					<li><strong>Sunday</strong> - Closed</li>
				</ul>
				
			</div>
			
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