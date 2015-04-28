<?php 
require 'header.php';
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
                    <?php
                     if (isset($_GET['task_id'])) {
                        $id=$_GET['task_id'];
                    } 
                     require '../admin/connection.php';
                     $query3=$conn->query("SELECT * FROM tasks WHERE id=$id");
                     $result3=$query3->fetch(PDO::FETCH_ASSOC);
                     extract($result3);
                     ?>

                    <!-- form start -->
                    <form role="form" action="update_task<?php echo "?id=$id"; ?>" method="POST" enctype="multipart/form-data" >
                        <div class="box-body">

                            <div class="row">
                                <div class="col-md-6"> <div class="form-group">
                                    <label for="exampleInputEmail1">Task Title</label>
                                    <input type="text" name='title' value='<?php echo "$task_title"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter Task Title">
                                </div>

                                <div class="form-group files">
                                    <label for="exampleInputFile">Task attachments (Optional)</label>
                                    <input type="file"  name="task_files[]" >
                                    <a class="btn btn-primary pull-right add_more_files" href="">add more files</a>
                                    
                                </div>

                                <div class="form-group">
                                    <label>Date range:</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" name='date' value='<?php echo "$created_at - $ex_date"; ?>' class="form-control pull-right" id="reservation"/>
                                    </div><!-- /.input group -->
                                </div><!-- /.form group -->


                            </div>
                            <div class="col-md-6">
                             <div class="form-group">
                                <label>Department</label>
                                <select class='form-control' name='department'>
                                    <?php 
                                    $sql="SELECT * FROM departments";
                                    $query=$conn->query($sql);
                                    while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                                     extract($result);
                                     echo "<option value='$id'>$name</option>";

                                 }

                                 ?>
                             </select>

                         </div>

                         <div class="form-group">
                            <label>Year </label>
                            <select class="form-control" name='year'>
                                <option value='1'>year1</option>
                                <option value='2'>year2</option>
                                <option value='3'>year3</option>
                                <option value='4'>year4</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <select class="form-control" name='subject'>
                                <?php 
                                $query2=$conn->query("SELECT * FROM subjects");
                                while ($result2=$query2->fetch(PDO::FETCH_ASSOC)) {
                                    extract($result2); 
                                    echo "<option value='$id'>$name</option>";
                                }

                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                     <label>Task Content</label>
                     <textarea class="textarea"  name='content' placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo "$task_content"; ?></textarea>
                 </div>
             </div>



         </div><!-- /.box-body -->

         <div class="box-footer">
            <input type="submit" class="btn btn-success" value="Edit Task">
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
<script src="../admin/js/AdminLTE/dashboard.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->

<!-- date-range-picker -->
<script src="../admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script type="text/javascript">

$(function () {
    $('#reservation').daterangepicker();

    $('a.add_more_files').on('click'  , function(event) {
        event.preventDefault();

        $("div.files").append('<input type="file" class="lecture_files" name="task_files[]">');


    });
});



</script>

</body>
</html>
