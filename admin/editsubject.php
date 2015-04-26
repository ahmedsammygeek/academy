 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        add new subject

    </h1>

</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">enter data of subject</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                $id=$_GET['id'];

                require 'connection.php';
                $sql="SELECT * FROM subjects WHERE id=$id ";
                $query=$conn->query($sql);
                while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                 extract($result);
             }


             ?>
             <a href="showsubject.php"> <button class="btn btn-primary" >subjects</button></a>

             <form role="form" action="updatesubject.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" ><br>
                <div class="box-body">
                    <?php 
                    if (isset($_GET['msg'])) {
                        switch ($_GET['msg']) {
                            case 'empty_data':
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b>   you leave input empty please complete inputs and try again.
                            </div>';
                            break;
                            case 'error_update':
                            echo '<div class="alert alert-danger alert-dismissable">
                            <i class="fa fa-ban"></i>
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                            <b>Alert!</b>   an error in your update please try again.
                            </div>';
                            break;
                            
                            default:
                                # code...
                            break;
                        }
                    }

                    ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">subject name</label>
                        <input type="text" name="name" value="<?php echo "$name"; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter title of slider">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">description</label>
                        <input type="text" class="form-control" value="<?php echo "$description"; ?>" name="description" id="exampleInputPassword1" placeholder="enter description">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">doctor :</label>
                        <div class="btn-group">
                            <select name="doctor" id="" class="btn btn-default dropdown-toggle">
                             <?php 
                                   //connection with db(met)
                             include 'connection.php';
                             $sql="SELECT * FROM staff WHERE type=2";
                             $query=$conn->query($sql);
                             while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                               extract($result);
                               echo "<option value='$id'>$name</option>";

                           }

                           ?>
                       </select>
                   </div>
                   <label for="exampleInputPassword1">term :</label>
                   <div class="btn-group">
                    <select name="term" id="" class="btn btn-default dropdown-toggle">
                     <option value="1">term 1</option>
                     <option value="2">term 2</option>

                 </select>
             </div>
             <label for="exampleInputPassword1">year  :</label>
             <div class="btn-group">
                <select name="year" id="" class="btn btn-default dropdown-toggle">
                 <option value="1">class 1</option>
                 <option value="2">class 2</option>
                 <option value="3">class 3</option>
                 <option value="4">class 4</option>
             </select>
         </div>
         <label for="exampleInputPassword1">department :</label>
         <div class="btn-group">
            <select name="department" id="" class="btn btn-default dropdown-toggle">
             <?php 
                                   //connection with db(met)
             include 'connection.php';
             $sql="SELECT * FROM departments";
             $query=$conn->query($sql);
             while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
               extract($result);
               echo "<option value='$id'>$name</option>";

           }

           ?>
       </select>
   </div>

</div>


</div><!-- /.box-body -->

<div class="box-footer">
    <button type="submit" name="submit" class="btn btn-primary">update</button>
</div>
</form>
</div><!-- /.box -->


</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>