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
                                    <th>Edit</th>
                                    <th>Delete</th>
                                    <th>Details</th>
                                    <th>Students Answers</th>

                                </tr>
                            </thead>
                            <tbody>
                               
                                   
                                     
                                                <tr>
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 4.5</td>
                                                    <td>Mac OS 8-9</td>
                                                    <td>-</td>
                                                    <td>X</td>
                                                    <td><a href="edit_task.php" class="btn btn-warning">Edit</a></td>
                                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                                    <td><a href="" class="btn btn-success">DeTails</a></td>
                                                    <td><a href="answers.php" class="btn btn-info">Answers</a></td>
                                                </tr>


 <tr>
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 4.5</td>
                                                    <td>Mac OS 8-9</td>
                                                    <td>-</td>
                                                    <td>X</td>
                                                    <td><a href="edit_task.php" class="btn btn-warning">Edit</a></td>
                                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                                    <td><a href="" class="btn btn-success">DeTails</a></td>
                                                    <td><a href="answers.php" class="btn btn-info">Answers</a></td>
                                                </tr>



 <tr>
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 4.5</td>
                                                    <td>Mac OS 8-9</td>
                                                    <td>-</td>
                                                    <td>X</td>
                                                    <td><a href="edit_task.php" class="btn btn-warning">Edit</a></td>
                                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                                    <td><a href="" class="btn btn-success">DeTails</a></td>
                                                    <td><a href="answers.php" class="btn btn-info">Answers</a></td>
                                                </tr>


 <tr>
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 4.5</td>
                                                    <td>Mac OS 8-9</td>
                                                    <td>-</td>
                                                    <td>X</td>
                                                    <td><a href="edit_task.php" class="btn btn-warning">Edit</a></td>
                                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                                    <td><a href="" class="btn btn-success">DeTails</a></td>
                                                    <td><a href="answers.php" class="btn btn-info">Answers</a></td>
                                                </tr>


 <tr>
                                                    <td>Tasman</td>
                                                    <td>Internet Explorer 4.5</td>
                                                    <td>Mac OS 8-9</td>
                                                    <td>-</td>
                                                    <td>X</td>
                                                    <td><a href="edit_task.php" class="btn btn-warning">Edit</a></td>
                                                    <td><a href="" class="btn btn-danger">Delete</a></td>
                                                    <td><a href="" class="btn btn-success">DeTails</a></td>
                                                    <td><a href="answers.php" class="btn btn-info">Answers</a></td>
                                                </tr>

                                               
                                               
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
