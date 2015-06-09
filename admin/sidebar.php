<?php session_start();

if(!isset($_SESSION['logged']) || $_SESSION['logged'] != 'true') {
   header('location: login.php'); die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MET | Adminpanel</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
      </head>
      <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                AdminLTE
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span> ADMIN <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <p>sign out now !</p>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="showadmin.php">
                                <i class="fa fa-dashboard"></i> <span>admins</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>slider</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showslider.php"><i class="fa fa-angle-double-right"></i> sliders </a></li>
                                <li><a href="slider.php"><i class="fa fa-angle-double-right"></i> add slider</a></li>
                                <li><a href="../index.php"><i class="fa fa-angle-double-right"></i> slider in website</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>about us</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showabout.php"><i class="fa fa-angle-double-right"></i> about academy</a></li>
                                <li><a href="about.php"><i class="fa fa-angle-double-right"></i>add to about</a></li>
                                <li><a href="../about.php"><i class="fa fa-angle-double-right"></i>about us in website</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>questions</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showquestion.php"><i class="fa fa-angle-double-right"></i> questions</a></li>
                                <li><a href="question.php"><i class="fa fa-angle-double-right"></i>add question</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>departments</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showdepartment.php"><i class="fa fa-angle-double-right"></i> departments</a></li>
                                <li><a href="department.php"><i class="fa fa-angle-double-right"></i>add new department</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>subjects</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showsubject.php"><i class="fa fa-angle-double-right"></i> subjects</a></li>
                                <li><a href="subject.php"><i class="fa fa-angle-double-right"></i>add to subjects</a></li>
                                
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>news</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="shownews.php"><i class="fa fa-angle-double-right"></i>news</a></li>
                                <li><a href="news.php"><i class="fa fa-angle-double-right"></i>add news</a></li>
                                <li><a href="../blog.php"><i class="fa fa-angle-double-right"></i>our news in website</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>schedule</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showtable.php"><i class="fa fa-angle-double-right"></i>schdules </a></li>
                                <li><a href="table.php"><i class="fa fa-angle-double-right"></i>add schdule</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>staff</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showstaff.php"><i class="fa fa-angle-double-right"></i>staff</a></li>
                                <li><a href="staff.php"><i class="fa fa-angle-double-right"></i>add to staff</a></li>
                            </ul>
                        </li>
                         <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>last exam</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="showlastexam.php"><i class="fa fa-angle-double-right"></i>last tasks </a></li>
                                <li><a href="lastexam.php"><i class="fa fa-angle-double-right"></i>add last task</a></li>
                            </ul>
                        </li>
                          <li>
                            <a href="show_info.php">
                                <i class="fa fa-bar-chart-o"></i>
                                <span>site info</span>
                            </a>
                        </li>
                        
                         <li>
                            <a href="newsletter.php">
                                <i class="fa fa-envelope"></i> <span>subscribe</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="message.php">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            </a>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <aside class="right-side">