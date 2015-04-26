 <?php 
 require 'sidebar.php';
 include 'connection.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    add new exam
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
          <h3 class="box-title">enter data of exam</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php 
        if (isset($_GET['msg'])) {
                    //if exist msg in link get this message and do deffrent action in every case and show alert
          switch ($_GET['msg']) {
            case 'empty_data':
                        //here user left eny input place empty
            echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> you leave some data an empty please complete inputs and try again.
            </div>';
            break;
            case 'error_data':
                        //this case error in sql request
            echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> erro in your data inserted please try again.
            </div>';
            break;

            default:


            break;
          }
        }


        ?>
        <a href="showlastexam.php"> <button class="btn btn-primary" >last exams</button></a>


        <form role="form" action="addlastexam.php" method="post" enctype="multipart/form-data" ><br>
          <div class="box-body">
            <div class="form-group">
              <label for="exampleInputFile">add file</label>
              <input type="file" name="file" id="exampleInputFile">
              <p class="help-block">click to choose file</p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">year  :</label>
              <div class="btn-group">
                <select name="year" id="" class="btn btn-default dropdown-toggle">
                 <option value="1">class 1</option>
                 <option value="2">class 2</option>
                 <option value="3">class 3</option>
                 <option value="4">class 4</option>
               </select>
             </div>
           </div>

           <div class="form-group">
            <label for="exampleInputPassword1">department :</label>
            <div class="btn-group">
              <select name="department" id="" class="btn btn-default dropdown-toggle">
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
         </div>
          <div class="form-group">
            <label for="exampleInputPassword1">subject :</label>
            <div class="btn-group">
              <select name="subject" id="" class="btn btn-default dropdown-toggle">
               <?php 
               $sql="SELECT * FROM subjects";
               $query=$conn->query($sql);
               while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                 extract($result);
                 echo "<option value='$id'>$name</option>";

               }

               ?>
             </select>
           </div>
         </div>
           <div class="form-group">
            <label for="exampleInputPassword1">term :</label>
            <div class="btn-group">
              <select name="term" id="" class="btn btn-default dropdown-toggle">
             <option value='1'>frist term</option>
             <option value='2'>second term</option>     
             </select>
           </div>
         </div>
       </div>
       <div class="box-footer">
        <button type="submit" name="submit" class="btn btn-primary">add last exam</button>
      </div>
    </div><!-- /.box-body -->


  </form>
</div><!-- /.box -->


</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>