<?php 
require  'check_user.php';
require 'header.php';
require '../admin/connection.php';
//get departments from DB
$departments = $conn->prepare("SELECT id , name FROM departments");
$departments->execute();

$subjects = $conn->prepare("SELECT id , name FROM subjects WHERE doctor_id = ?");
$subjects->bindValue(1,$_SESSION['system_user_id'],PDO::PARAM_INT);
$subjects->execute();


?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Tasks</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tasks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New Task</h3>
                    </div>

                    <!-- form start -->
                    <form role="form" enctype="multipart/form-data" action="insert_task.php" method="post">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6"> <div class="form-group">
                                    <label for="exampleInputEmail1">Task Title</label>
                                    <input type="text" name="task_title" class="form-control" id="exampleInputEmail1" placeholder="Enter Task Title">
                                </div>

                          

                                  <div class="form-group files">
                                   <label for="exampleInputFile">Task attachments (Optional)</label>
                                    <input type="file"  name="task_files[]">
                                    <a class="btn btn-primary pull-right add_more_files" href="">add more files</a>
                                </div>

                               


                            </div>
                            <div class="col-md-6">
                                 <div class="form-group">
                                    <label>Date range:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name="task_date" class="form-control pull-right" id="reservation"/>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->
                       
                           

                            <div class="form-group">
                                <label>Subject</label>
                                <select name="subject" class="form-control">
                                    <?php 
                                    while ($subject = $subjects->fetch(PDO::FETCH_OBJ)) {
                                       echo '<option value='.$subject->id.'>'.$subject->name.'</option>';
                                    }
                                     ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                           <label>Task Content</label>
                           <textarea id="textarea" name="task_content" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                       </div>
                   </div>



               </div><!-- /.box-body -->

               <div class="box-footer">
                <input type="submit" name="task_btn" class="btn btn-success" value="Add Task">
            </div>
        </form>




    </div>
</div>
</div>
</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->
<script src="../admin/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
<script src="../admin/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
    $("#textarea").wysihtml5();
    $('#reservation').daterangepicker({
        singleDatePicker: true,
        format: 'YYYY-MM-DD'
    });
});
$(function () {
    $('a.add_more_files').on('click'  , function(event) {
        event.preventDefault();
        $("div.files").append('<input type="file" class="lecture_files" name="task_files[]">');
    });
});
</script>

</body>
</html>
