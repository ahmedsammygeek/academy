<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Student | account</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="../admin/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    
    <!-- Daterange picker -->
    <link href="../admin/css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../admin/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../admin/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <link href="../admin/css/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
                        <?php  
                        require '../admin/connection.php';
                        $info = $conn->prepare("SELECT name , pic , department_id , year FROM students WHERE id = ?");
                        $info->bindValue(1,$_SESSION['student_user_id'],PDO::PARAM_INT);
                        $info->execute();
                        $result = $info->fetch(PDO::FETCH_OBJ); ?>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span><?php echo "$result->name"; ?> <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="<?php echo "../uploaded/student/$result->pic"; ?>" class="img-circle" alt="User Image" />
                                    <?php $department = $conn->prepare("SELECT name FROM departments WHERE id=?");
                                    $department->bindValue(1,$result->department_id,PDO::PARAM_INT);
                                    $department->execute();
                                    $result2 = $department->fetch(PDO::FETCH_OBJ); ?>
                                    <p>
                                        <?php echo "$result2->name"; ?>
                                        <small>year <?php echo "$result->year"; ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="inbox.php">inbox</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="tasks.php">tasks</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="index.php">home</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="profil.php" class="btn btn-default btn-flat">Profile</a>
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
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?php echo "$result->name"; ?></p>

                        </div>
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="">
                            <a href="profil.php">
                                <i class="fa fa-dashboard"></i> <span>profil</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="index.php">
                                <i class="fa fa-dashboard"></i> <span>home</span>
                            </a>
                        </li>




                        <li class="active">
                            <a href="tasks.php">
                                <i class="fa fa-dashboard"></i> <span>Tasks</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="last_exam.php">
                                <i class="fa fa-dashboard"></i> <span>last exams</span>
                            </a>
                        </li>


                        <li class="active">
                            <a href="notifications.php">
                                <i class="fa fa-dashboard"></i> <span>notification</span>
                            </a>
                        </li>


                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
