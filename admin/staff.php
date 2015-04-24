 <?php 
 require 'sidebar.php';
 include 'connection.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    add staff(doctor,domenstrator).
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
          <h3 class="box-title">enter data of staff</h3>
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
               case 'no_uploaded':
                        //here user left eny input place empty
            echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> image not upoaded.
            </div>';
            break;

            default:
                                            # code...
            break;
          }
        }


        ?>
        <a href="showstaff.php"> <button class="btn btn-primary" >gellery of staff</button></a>


        <form role="form" action="addstaff.php" method="post" enctype="multipart/form-data" ><br>
          <div class="box-body">
            <div class="form-group">
                 <div class="form-group">
              <label for="exampleInputPassword1">type :</label>
              <div class="btn-group">
                <select name="staff_type" id="" class="btn btn-default dropdown-toggle">
                 
                   <option value='1'>domenstrator</option>
                   <option value='2'>doctor</option>

                 
               </select>
             </div>

           </div>
           <div>
              <label for="exampleInputEmail1">name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name of doctor or domenestor">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">image</label>
              <input type="file" name="file" class="form-control" name="file" id="exampleInputPassword1" >
            </div>
            <div>
              <label for="exampleInputEmail1">description</label>
              <textarea type="text" name="description" class="form-control" id="exampleInputEmail1" placeholder="Enter description"></textarea>
            </div>
            <div>
              <label for="exampleInputEmail1">facebook</label>
              <input type="text" name="facebook" class="form-control" id="exampleInputEmail1" placeholder="Enter facebook">
            </div>
            <div>
              <label for="exampleInputEmail1">email</label>
              <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div>
              <label for="exampleInputEmail1">username</label>
              <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter user name">
            </div>
            <div>
              <label for="exampleInputEmail1">password</label>
              <input type="password" name="password" class="form-control" id="exampleInputEmail1" placeholder="Enter password">
            </div>


           
 </div>
</div><!-- /.box-body -->

<div class="box-footer">
  <button type="submit" name="submit" class="btn btn-primary">add to staff</button>
</div>
</form>
</div><!-- /.box -->


</div><!--/.col (right) -->
</div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>