<?php 
require 'check_user.php';
require '../classes/helper.php';
require '../admin/connection.php';
if(isset($_GET['id']) && !empty($_GET['id'])) {
    $subject_id = $_GET['id'];

    if(!check_if_exists($subject_id , 'id' , 'subjects')) {
        header('location: index.php');
        die();
    }
    if (!is_subject_belongs_to_student($subject_id ,$_SESSION['student_user_department'] , $_SESSION['student_user_year'] )) {
        header('location: index.php');
        die();
    }
    $select = $conn->prepare("SELECT * FROM subjects WHERE id = ?");
    $select->bindValue(1,$subject_id, PDO::PARAM_INT);
    $select->execute();
    if(!$select->rowCount()) {
        header('location: index.php');
        die();
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
                   
                    <li><a href="#ask" data-toggle="tab">Ask A qustions</a></li>


                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="lecture">

                        <div class="row">   
                            <div class="col-md-12">
                                <ul class="timeline">

                                    <?php 
                                    $lectures = $conn->prepare("SELECT l.type ,  l.has_file , l.id , l.summary , 
                                        l.date  , s.name as doctor_name FROM lectures as l 
                                        left join staff as s on l.doctor_id = s.id WHERE subject_id = ? AND l.type='lecture'");
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
                                                <?php if($lecture->has_file == 1) {echo "<h4>Attachments:</h4>";} ?>
                                                <ul>
                                                    <?php echo get_lecture_files($lecture->id , $lecture->has_file); ?>

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
                                <form role="form" method="post" action="insert_question.php?subject_id=<?php echo $_GET['id']; ?>">
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label>Write the question</label>
                                            <textarea id="textarea" name="question" cols="20" class="form-control" rows="3" placeholder="Enter ..."></textarea>
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
                        <div class="box-group" id="accordion">
                         <?php 

                         $questions = $conn->prepare("SELECT id , content FROM student_questions WHERE subject_id = ? AND answered = 1");
                         $questions->bindValue(1,$subject_id, PDO::PARAM_INT);
                         $questions->execute();

                         if($questions->rowCount()) {
                            $i = 1;
                            while ($question = $questions->fetch(PDO::FETCH_OBJ)) {
                                echo '<div class="panel box box-primary">
                                <div class="box-header">
                                <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$i.'"> Question : 
                                '.$question->content.'
                                </a>
                                </h4>
                                </div>
                                <div id="collapse'.$i.'" class="panel-collapse collapse in">
                                <div class="box-body">
                                <div class="callout callout-info">
                                '.get_question_answer($question->id).'
                                </div>
                                </div>
                                </div>
                                </div>';
                                $i++;
                            }
                        }

                        ?>
                    </div>
                </div> <!-- ask questions tab ection -->


                <!-- section tab -->
                <div class="tab-pane" id="section">

                    <div class="row">   
                        <div class="col-md-12">
                            <ul class="timeline">
                               <?php 
                               $Sections = $conn->prepare("SELECT l.type , l.has_file ,
                                   l.id , l.summary , l.date  , s.name as doctor_name FROM 
                                   lectures as l left join staff as s on l.doctor_id = s.id WHERE subject_id = ? AND l.type= 'section' ");
                               $Sections->bindValue(1,$subject_id , PDO::PARAM_INT);
                               $Sections->execute();


                               while ($Section = $Sections->fetch(PDO::FETCH_OBJ)) {




                                 ?>
                                 <li>
                                    <i class="fa fa-envelope bg-blue"></i>
                                    <div class="timeline-item">

                                        <span class="time"> <i class="fa
                                           fa-calendar-o"></i> <?php echo $Section->date ?></span>
                                           <h3 class="timeline-header"><a href="#"> <?php echo $Section->doctor_name ?></a> </h3>
                                           <div class="timeline-body">
                                             <?php echo $Section->summary ?>
                                         </div>
                                         <div class="attachment"> 
                                            <?php if($Section->has_file == 1) {echo "<h4>Attachments:</h4>";} ?>
                                            <ul>
                                                <?php echo get_lecture_files($Section->id , $Section->has_file); ?>

                                            </ul>

                                        </div>
                                    </div>
                                </li>

                                <?php } ?>


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
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>
<!-- <script src="../admin/js/AdminLTE/dashboard.js" type="text/javascript"></script> -->
<script src="../admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

<script>
$(function () {

    $("#textarea").wysihtml5();
    $("#textarea2").wysihtml5();
    $("#textarea3").wysihtml5();
    var url = document.location.toString();
    if (url.match('#')) {
        $('.nav-tabs a[href=#'+url.split('#')[1]+']').tab('show') ;
    } 

// Change hash for page-reload
$('.nav-tabs a').on('shown', function (e) {
    window.location.hash = e.target.hash;
})



$('a.add_more_files').on('click'  , function(event) {
    event.preventDefault();

    $("div.files").append('<input type="file" class="lecture_files" name="lecture_files[]">');


});




});

</script>
</body>
</html>
