<?php 

require 'check_user.php';
require 'functions.php';
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $subject_id = $_GET['id'];
    $doctor_id = $_SESSION['system_user_id'];
    require '../admin/connection.php';
    $select = $conn->prepare("SELECT * FROM subjects WHERE id = ? AND doctor_id = ?");
    $select->bindValue(1,$subject_id, PDO::PARAM_INT);
    $select->bindValue(2,$doctor_id, PDO::PARAM_INT);
    $select->execute();
    if(!$select->rowCount()) {
        safe_redirect('index');
    }
}

require 'header.php';

?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <div class="row">
        <div class="col-md-10"></div>
    </div>

    <!-- Main content -->
    <section class="content">

        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#lecture" data-toggle="tab">Lecturess</a></li>
                    <li><a href="#section" data-toggle="tab">Sections</a></li>
                    <li><a href="#task" data-toggle="tab">Tasks</a></li>
                    <li><a href="#ask" data-toggle="tab">Ask A qustions</a></li>


                </ul>
                <div class="tab-content">
                    <!-- lecture tab  -->
                    <?php 
                    if(isset($_GET['msg']) && !empty($_GET['msg'])) {
                        switch ($_GET['msg']) {
                            case 'done':
                            echo '<div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b> Success alert preview. This alert is dismissable.
                            </div>';
                            break;
                            case 'invalid':
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Wrong!</b> sorry we only accpet those type (jpg , jpeg , png , rar , zip , doc , docx ,ppt , ppxt)
                            </div>';
                            break;

                            case 'done':
                            echo '<div class="alert alert-success alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b> Success alert preview. This alert is dismissable.
                            </div>';
                            break;

                            case 'missing':
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-check"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b> please enter all required data
                            </div>';
                            break;


                        }
                    }
                    ?>
                    <div class="tab-pane active" id="lecture">
                     <div class="row">
                        <div class="col-md-12">
                          <form role="form" enctype="multipart/form-data" method="post" action="insert_lecture.php?subject_id=<?php echo $subject_id; ?>">
                            <div class="box-body">
                                <div class="callout callout-warning">
                                    
                                    <p>we only accpet those type (jpg , jpeg , png , rar , zip , doc , docx ,ppt , ppxt)</p>
                                </div>
                                <div class="form-group files">
                                    <label>Lecture' files </label>
                                    <input type="file"  name="lecture_files[]">
                                    <a class="btn btn-primary pull-right add_more_files" href="">add more files</a>
                                </div>
                                <div class="form-group">
                                    <label> Lecture summary </label>
                                    <textarea name="lecture_summary" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                                </div>
                            </div><!-- /.box-body -->
                            <div class="box-footer">
                                <input type="submit" class="btn btn-primary pull-right" value="Add Lectur">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">   
                    <div class="col-md-12">
                        <ul class="timeline">

                            <?php 
                            $lectures = $conn->prepare("SELECT l.id , l.summary , l.date  , s.name as doctor_name FROM lectures as l left join staff as s on l.doctor_id = s.id WHERE subject_id = ?");
                            $lectures->bindValue(1,$subject_id , PDO::PARAM_INT);
                            $lectures->execute();

                            
                            while ($lecture = $lectures->fetch(PDO::FETCH_OBJ)) {
                                
                            


                             ?>
                         <li>
                            <i class="fa fa-envelope bg-blue"></i>
                            <div class="timeline-item">

                                <span class="time"> <i class="fa
                                   fa-calendar-o"></i> <?php echo $lecture->date ?></span>
                                   <h3 class="timeline-header"><a href="#"> <?php echo $lecture->doctor_name ?></a> </h3>
                                   <div class="timeline-body">
                                     <?php echo $lecture->summary ?>
                                </div>
                                <div class="attachment"> 
                                    <h4>Attachments:</h4>
                                    <ul>
                                        <li><a href="">Lorem ipsum dolor sit amet</a></li>
                                        <li>Consectetur adipiscing elit</li>
                                    </ul>

                                </div>
                            </div>
                        </li>

                        <?php } ?>

                    </ul>
                </div>

            </div>
        </div> <!--lecutre tab -->
        <!-- ask questions tab ection -->
        <div class="tab-pane" id="ask">
            <div class="row">
                <div class="col-md-12">

                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">

                            <div class="form-group">
                                <label>Write the question</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="ask">
                        </div>
                    </form>
                </div>
            </div>
            <div class="box-header">
                <h3 class="box-title">The Questions</h3>
            </div><!-- /.box-header -->
            <blockquote>
                <p>doctor please till me how to do this ?!.</p>
                <div class="callout callout-info">

                    <p>the nswer of the doctor will be showen here .</p>
                    <small><span class="time"><i class="fa fa-clock-o"></i> 12:05</span></small>
                    <div class="attachment">
                        <h4>Attachments:</h4>
                        <ul>
                            <li><a href="">Lorem ipsum dolor sit amet</a></li>
                            <li>Consectetur adipiscing elit</li>
                        </ul>

                    </div>
                </div>
            </blockquote>
        </div> <!-- ask questions tab ection -->

        <div class="tab-pane" id="task">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Responsive Hover Table</h3>
                            
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive no-padding">
                            <table class="table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Reason</th>
                                </tr>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-success">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Jane Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-warning">Pending</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-primary">Approved</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>11-7-2014</td>
                                    <td><span class="label label-danger">Denied</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div><!-- /.tab-pane -->


        <!-- section tab -->
        <div class="tab-pane" id="section">
          <div class="row">
            <div class="col-md-12">
              <form role="form" enctype="multipart/form-data" method="post" action="insert_lecture.php?subject_id=<?php echo $subject_id; ?>">
                <div class="box-body">
                     <div class="callout callout-warning">
                                    
                                    <p>we only accpet those type (jpg , jpeg , png , rar , zip , doc , docx ,ppt , ppxt)</p>
                                </div>
                    <div class="form-group files">
                        <label>Lecture' files </label>
                        <input type="file"  name="lecture_files[]">
                        <a class="btn btn-primary pull-right add_more_files" href="">add more files</a>
                    </div>
                    <div class="form-group">
                        <label> Lecture summary </label>
                        <textarea name="lecture_summary" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn btn-primary pull-right" value="Add Lectur">
                </div>
            </form>
        </div>
    </div>
    <div class="row">   
        <div class="col-md-12">
            <ul class="timeline">
             <li>
                <i class="fa fa-envelope bg-blue"></i>
                <div class="timeline-item">

                    <span class="time"> Lecture date <i class="fa
                       fa-calendar-o"></i> 12:05</span>
                       <h3 class="timeline-header"><a href="#">Doctor name</a> </h3>
                       <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                    </div>
                    <div class="attachment"> 
                        <h4>Attachments:</h4>
                        <ul>
                            <li><a href="">Lorem ipsum dolor sit amet</a></li>
                            <li>Consectetur adipiscing elit</li>
                        </ul>

                    </div>

                    <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Dwonload All</a>

                    </div>
                </div>
            </li>


        </ul>
    </div>

</div>
</div><!-- section tab -->
</div><!-- /.tab-content -->
</div><!-- nav-tabs-custom -->
</div><!-- /.col -->
</div>
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<script src="../admin/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>

<script>
$(function () {
    $('a.add_more_files').on('click'  , function(event) {
        event.preventDefault();

        $("div.files").append('<input type="file" class="lecture_files" name="lecture_files[]">');


    });


    var url = document.location.toString();
if (url.match('#')) {
    $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
} 

// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})

});

</script>
</body>
</html>
