<?php 
require 'sidebar.php';
?>

<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    add information about us

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
          <h3 class="box-title">enter data</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php 
        if (isset($_GET['id'])) {
         $id=$_GET['id'];
       }
       require 'connection.php';
       $query = $conn->query("SELECT * FROM about WHERE id=$id ");
       while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
         extract($result);
       }


       ?>
       <form role="form" action="updateabout.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
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
             case 'error_data':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> enter this file as image .
             </div>';
             break;
             case 'error_update':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b>   an error in your update please try again.
             </div>';
             break;
             case 'small_image':
             echo '<div class="alert alert-danger alert-dismissable">
             <i class="fa fa-ban"></i>
             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             <b>Alert!</b> enter image bigger than this image .
             </div>';
             break;

             default:
                                     # code...
             break;
           }
         } 
         ?>
         <div class="form-group">
          <label for="exampleInputEmail1">content</label>
          <input type="text" name="content" value='<?php echo "$content" ; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter content about our academy"> 

        </div>
        <?php 
        echo "<img src='image/".$image1."'><h4>".$image1."</h4> ";
        echo "<img src='image/".$image2."'><h4>".$image2."</h4> ";
        echo "<img src='image/".$image3."'><h4>".$image3."</h4> ";
        for ($i=1; $i < 4; $i++) { 
          echo "<div class='form-group'>

          <!-- <label for='exampleInputFile'>add image</label> -->
          <input type='file' name='image$i' id='exampleInputFile'>
          <p class='help-block'>click to choose image$i</p>

          </div> " ;
        }

        ?>





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