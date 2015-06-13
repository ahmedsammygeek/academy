


<!-- Start Footer Section -->
<footer>
    <div class="container">
        <div class="row footer-widgets">
            <?php if (isset($_GET['msg'])) {
                switch ($_GET['msg']) {
                    case 'em_let':
                    echo '<div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-ban"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b>please enter your email.
                    </div>';
                    break;
                    case 'sent':
                    echo '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b> thanks about your subscribe.
                    </div>';
                    break;
                    
                    default:
                        # code...
                    break;
                }
            } ?>


            <!-- Start Subscribe & Social Links Widget -->
            <div class="col-md-4 col-xs-12">
                <div class="footer-widget mail-subscribe-widget">
                    <h4>Get in touch<span class="head-line"></span></h4>
                    <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                    <form class="subscribe" action="newsletter.php" method="post">
                        <input type="text" name="email" placeholder="mail@example.com">
                        <input type="submit" name="submit" class="main-button" value="Send">
                    </form>
                </div>
                <?php require 'admin/connection.php';
                $site_info = $conn->query("SELECT * FROM site_info");
                $info = $site_info->fetch(PDO::FETCH_OBJ); ?>
                <div class="footer-widget social-widget">
                    <h4>Follow Us<span class="head-line"></span></h4>
                    <ul class="social-icons">
                        <li>
                            <a class="facebook" href="<?php echo "$info->facebook"; ?>"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a class="twitter" href="<?php echo "$info->twitter"; ?>"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="<?php echo "$info->linkedin"; ?>"><i class="fa fa-linkedin"></i></a>
                        </li>
                        
                    </ul>
                </div>
            </div><!-- .col-md-3 -->
            <!-- End Subscribe & Social Links Widget -->
            


            <!-- Start Flickr Widget -->
            <div class="col-md-4 col-xs-12">
                <iframe src="<?php echo "$info->map"; ?>" width="100%" height="300" frameborder="0" style="border:0"></iframe>
            </div> 




            <!-- Start Contact Widget -->
            <div class="col-md-4 col-xs-12">
                <div class="footer-widget contact-widget">
                    <h4>M.E.T<span class="head-line"></span></h4>
                    <p>how arrive to us :
                        mansoura-Ring road(sndoub road)</p>
                        <ul>
                            <li><span>Phone Number:</span><?php echo "$info->phone"; ?></li>
                            <li><span>Email:</span><?php echo "$info->mail"; ?></li>

                        </ul>
                    </div>
                </div><!-- .col-md-3 -->
                <!-- End Contact Widget -->


            </div><!-- .row -->

            <!-- Start Copyright -->
            <div class="copyright-section">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; graduation project 4 cs .. <a>students</a> </p>
                    </div><!-- .col-md-6 -->
                    <div class="col-md-6">
                        <ul class="footer-nav">
                            <li><a href="index.php">home</a>
                            </li>
                            <li><a href="contact.php">contact</a>
                            </li>
                            
                        </ul>
                    </div><!-- .col-md-6 -->
                </div><!-- .row -->
            </div>
            <!-- End Copyright -->

        </div>
    </footer>
    <!-- End Footer Section -->


</div>
<!-- End Full Body Container -->

<!-- Go To Top Link -->
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<div id="loader">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>

