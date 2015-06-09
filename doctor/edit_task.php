<?php session_start();


require '../admin/connection.php';

if(!isset($_GET['task_id']) || empty($_GET['task_id'])) {
    header('location: tasks.php?id');
    die();
}

require '../classes/helper.php';


$task_id = filter_input(INPUT_GET, 'task_id' , FILTER_SANITIZE_NUMBER_INT);

if(!check_if_exists($task_id ,'id' , 'tasks')) {
   header('location: tasks.php?idd');
   die();
}
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
               <?php 
               if(isset($_GET['msg']) && !empty($_GET['msg'])) {
                switch ($_GET['msg']) {
                    case 'done':
                    echo '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b> task has been updated successfully.
                    </div>';
                    break;
                    case 'invalid':
                    echo '<div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Wrong!</b> this is an invalid file type 
                    </div>';
                    break;

                    case 'missing':
                    echo '<div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Wrong!</b> please fil out all inputs 
                    </div>';
                    break;

                }
            }
            ?>
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add New Task</h3>
                </div>
                <?php
                $select = $conn->prepare("SELECT * FROM tasks WHERE id = ?");
                $select->bindValue(1,$task_id , PDO::PARAM_INT);
                $select->execute();

                $task = $select->fetch(PDO::FETCH_OBJ);

                ?>

                <!-- form start -->
                <form role="form" action="update_task.php?id=<?php echo $task_id;?>" method="POST" enctype="multipart/form-data" >
                    <div class="box-body">

                        <div class="row">
                            <div class="col-md-6"> <div class="form-group">
                                <label for="exampleInputEmail1">Task Title</label>
                                <input type="text" name='title' value='<?php echo $task->task_title; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter Task Title">
                            </div>

                            <div class="form-group files">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>the current files</tr>
                                        <tr>
                                            <th style="width: 10px">#</th>
                                            <th style="width: 40px">file name</th>

                                            <th style="width: 40px">delete</th>
                                        </tr>

                                        <?php 
                                        $i =1 ;

                                        $files = $conn->prepare("SELECT * FROM tasks_files WHERE task_id = ?");
                                        $files->bindValue(1,$task_id , PDO::PARAM_INT);
                                        $files->execute();

                                        while ($file = $files->fetch(PDO::FETCH_OBJ)) {
                                           echo '<tr>
                                           <td>'.$i.'</td>
                                           <td>'.$file->file.' </td>
                                           <td><a href="delete_task_file.php?task_id='.$task_id.'&task_file_id='.$file->id.'&task_file_name='.$file->file.'"><span class="badge bg-red">delete</span></a></td>
                                           </tr>';
                                           $i++;
                                       }



                                       ?>



                                   </tbody></table>
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
                                    <input type="text" name='task_date' value='<?php echo "$task->created_at - $task->ex_date"; ?>' class="form-control pull-right" id="reservation"/>
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
                                 if($task->department_id == $id) {
                                     echo "<option value='".$id."'  SELECTED >$name</option>";

                                 }
                                 else  {
                                    echo "<option value='".$id."'>$name</option>";

                                }
                            }
                            ?>
                        </select>

                    </div>

                    <div class="form-group">
                        <label>Year </label>
                        <select class="form-control" name='year'>
                            <option <?php if($task->year == '1') echo"selected"; ?> value='1'>year1</option>
                            <option <?php if($task->year == '2') echo"selected"; ?> value='2'>year2</option>
                            <option <?php if($task->year == '3') echo"selected"; ?> value='3'>year3</option>
                            <option <?php if($task->year == '4') echo"selected"; ?> value='4'>year4</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Subject</label>
                        <select class="form-control" name='subject'>
                            <?php 
                            $subjects=$conn->query("SELECT * FROM subjects");
                            while ($subject=$subjects->fetch(PDO::FETCH_ASSOC)) {
                                if ($subject['id'] == $task->subject_id) {
                                    echo "<option value='".$subject['id']."' selected>".$subject['name']."</option>";
                                }
                                else  {
                                    echo "<option value='".$subject['id']."' >".$subject['name']."</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                 <label>Task Content</label>
                 <textarea class="textarea"  name='content' placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo html_entity_decode($task->task_content); ?></textarea>
             </div>
         </div>



     </div><!-- /.box-body -->

     <div class="box-footer">
        <input type="submit"  name="task_btn" class="btn btn-success" value="Edit Task">
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

<!-- date-range-picker -->
<script src="../admin/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

<script type="text/javascript">

$(function () {
    $('#reservation').daterangepicker({
        singleDatePicker: true,
        format: 'YYYY-MM-DD'
    });

    $('a.add_more_files').on('click'  , function(event) {
        event.preventDefault();

        $("div.files").append('<input type="file" class="lecture_files" name="task_files[]">');


    });
});



</script>

<script src="../admin/js/AdminLTE/dashboard.js" type="text/javascript"></script>
</body>
</html>
