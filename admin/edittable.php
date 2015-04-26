 <?php 
 require 'sidebar.php';
 include 'connection.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
  <h1>
    update this schdule
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
          <h3 class="box-title">enter new data of schdule</h3>
        </div><!-- /.box-header -->
        <!-- form start -->
        <?php
        if (isset($_GET['id'])) {
          $id=$_GET['id'];

        }
        require 'connection.php';
        $query=$conn->query("SELECT table_image FROM tables WHERE id='$id'");
        $result=$query->fetch(PDO::FETCH_ASSOC);
        extract($result); 
        
        ?>
        <a href="showtable.php"> <button class="btn btn-primary" >schdules</button></a>


        <form role="form" action="updatetable.php<?php echo "?id=$id&&img=$table_image"; ?>" method="post" enctype="multipart/form-data" ><br>
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

               default:
                                     # code...
               break;
             }
           } 
           ?>

           <div class="form-group">
            <label for="exampleInputFile">update schdule</label>
            <input type="file" name="file" id="exampleInputFile">
            <p class="help-block">click to choose another schdule</p>
            <?php
            
            echo '<img src="image/'.$table_image.'"><h3>'.$table_image.'</h3>'  ; ?>
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
                                   //connection with db(met)
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
       
     </div>
     <div class="box-footer">
      <button type="submit" name="submit" class="btn btn-primary">update</button>
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