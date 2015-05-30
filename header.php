
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

    <!-- Basic -->
    <title>MET Academy| Home</title>

    <!-- Define Charset -->
    <meta charset="utf-8">

    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Page Description and Author -->
    <meta name="description" content="Margo - Responsive HTML5 Template">
    <meta name="author" content="iThemesLab">

    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Margo CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">


    <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />


    <link rel="stylesheet" href="css/bpHS.min.css">
    <link rel="stylesheet" href="css/custom.css">



    <!-- Margo JS  -->
    
    <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

    <!-- Full Body Container -->
    <div id="container" class="boxed-page">


        <!-- Start Header Section --> 
        <div class="hidden-header"></div>
        <header class="clearfix">

            <!-- Start Top Bar -->
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <!-- Start Contact Info -->
                            <ul class="contact-details">
                                <li><a href="#"><i class="fa fa-map-marker"></i> mansoura,sndoub-road</a>
                                </li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>metmansoura.com</a>
                                </li>
                                <li><a href="#"><i class="fa fa-phone"></i> +1062300489</a>
                                </li>
                            </ul>
                            <!-- End Contact Info -->
                        </div><!-- .col-md-6 -->
                        <div class="col-md-5">
                            <!-- Start Social Links -->
                            <ul class="social-list">
                                <li>
                                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/groups/met.cs3/"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a>
                                </li>

                                <li>
                                    <a class="linkdin itl-tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                </li>
                                
                            </ul>
                            <!-- End Social Links -->
                        </div><!-- .col-md-6 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .top-bar -->
            <!-- End Top Bar -->
            
            
            <!-- Start  Logo & Naviagtion  -->
            <div class="navbar navbar-default navbar-top">
                <div class="container">
                    <div class="navbar-header">
                        <!-- Stat Toggle Nav Link For Mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- End Toggle Nav Link For Mobiles -->
                        <a class="navbar-brand" href="index.php">
                            <img alt="" width="40" src="images/logo.png">
                        </a>
                    </div>
                    <div class="navbar-collapse collapse">

                        <!-- Start Navigation List -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- home page -->
                            <li>
                                <a <?php if($active=="home") { echo 'class="active"';} ?> href="index.php">Home</a>
                            </li>
                            <!-- about page -->
                            <li>
                                <a  <?php if($active=="about" || $active=="student" || $active=="faq"  ) { echo 'class="active"';} ?>  href="about.php">About us</a>
                                <ul class="dropdown">

                                    <li>
                                     <a   href="about.php">about academy</a>
                                 </li>
                                 <li>
                                     <a  href="student.php">Student Affairs</a>
                                 </li>
                                 <li>
                                     <a  href="faq.php">FAQ</a>
                                 </li>

                             </ul>
                         </li>
                         <!-- departments page -->
                         <li>
                            <a  <?php if($active=="department"   ) { echo 'class="active"';} ?>  href="#">Departments</a>
                            <ul class="dropdown">
                                <?php
                                $departments = $conn->prepare("SELECT id , name FROM departments") ;
                                $departments->execute();
                                while ($department = $departments->fetch(PDO::FETCH_OBJ)) {
                                    echo '<li><a href="department.php?id='.$department->id.'">'.$department->name.'</a>
                                    </li>';
                                }
                                ?>
                            </ul>
                        </li>
                        <li>
                            <a  <?php if($active=="staff" ) { echo 'class="active"';} ?>  href="#">Stuff</a>
                            <ul class="dropdown">

                                <li><a href="stuff.php?type=1">doctors</a>
                                </li>
                                <li><a href="stuff.php?type=2">demonestrator</a>
                                </li>
                            </ul>
                        </li>

                        <li> <!-- new section -->
                            <a href="blog.php">Our News</a>
                        </li>
                        <li><a href="contact.php">Contact us</a>
                        </li>

                    </ul>
                    <!-- End Navigation List -->
                </div>
            </div>
        </div>
        <!-- End Header Logo & Naviagtion -->

    </header> 
        <!-- End Header Section -->