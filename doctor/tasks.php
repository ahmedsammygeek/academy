<?php 
require 'check_user.php';

require '../admin/connection.php';
require '../classes/helper.php';


// if(!isset($_GET['task_id']) || empty($_GET['task_id'])) {
//     header('location: tasks.php?id');
//     die();
// }


// $task_id = filter_input(INPUT_GET, 'task_id' , FILTER_SANITIZE_NUMBER_INT);

// if(!check_if_exists($task_id ,'id' , 'tasks')) {
//    header('location: tasks.php?idd');
//    die();
// }

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
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tasks</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">
            <?php 
            if(isset($_GET['msg']) && !empty($_GET['msg'])) {
                switch ($_GET['msg']) {
                    case 'done':
                    echo '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b> task has been deleted successfully.
                    </div>';
                    break;
                    case 'inserted':
                    echo '<div class="alert alert-success alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Alert!</b> task insert successfully.
                    </div>';
                    break;
                    case 'db_error':
                    echo '<div class="alert alert-danger alert-dismissable">
                    <i class="fa fa-check"></i>
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <b>Wrong!</b> somethng went wrong please try again 
                    </div>';
                    break;

                }
            }
            ?>
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Manage tasks</h3>
                    </div>
                    <div class="box-footer">
                        <a  href="add_task.php" class="btn btn-info ">Add New Task</a>
                    </div>
                    <div class="box-body table-responsive">
                        <table id="tasks" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Task title</th>
                                    <th>Department</th>
                                    <th>Subject</th>
                                    <th>Year</th>
                                    <th>made by</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Details</th>
                                    <th>Students Answers</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php 

                                $subjects = get_doctor_subjects($_SESSION['system_user_id']);
                                $tasks = $conn->prepare("SELECT t.id as task_id ,  st.name as who_made_it ,  t.made_by a , t.year as stu_year ,  d.name as department_name ,  t.id  , s.name as subject_name , t.task_title ,d.name, t.subject_id , t.made_by
                                   FROM tasks as t 
                                   LEFT JOIN departments as d on t.department_id = d.id LEFT JOIN subjects as s on t.subject_id = s.id
                                   LEFT JOIN staff as st on st.id = t.made_by
                                   WHERE subject_id IN ('$subjects')
                                   ");
                                $tasks->execute();

                                $i = 1;
                                while ($task = $tasks->fetch(PDO::FETCH_OBJ)) {
                                    echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$task->task_title.'</td>
                                    <td>'.$task->department_name.'</td>
                                    <td>'.$task->subject_name.'</td>
                                    <td>'.$task->stu_year.'</td>
                                    <td>'.$task->who_made_it.'</td>
                                    <td><a href="edit_task.php?task_id='.$task->task_id.'" class="btn btn-warning">Edit</a></td>
                                    <td><a href="delete_task.php?task_id='.$task->task_id.'" class="btn btn-danger">Delete</a></td>
                                    <td><a href="task_details.php?task_id='.$task->task_id.'" class="btn btn-success">DeTails</a></td>
                                    <td><a href="answers.php?task_id='.$task->task_id.'" class="btn btn-info">Answers</a></td>
                                    </tr>';
                                    $i++;
                                }

                                
                                

                                ?>


                                

                            </tbody>

                        </table>
                    </div><!-- /.box-body -->


                </div>
            </div>
        </div>
    </section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script src="../admin/js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>

<script src="../admin/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="../admin/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

<script>
$(function () {
    $("#tasks").dataTable();
});
</script>
</body>
</html>
