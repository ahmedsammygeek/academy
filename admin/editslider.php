 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        add new image to slider

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
               $sql="SELECT * FROM slider WHERE id=$id ";
               $query=$conn->query($sql);
               while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                   extract($result);
               }
                ?>
                <a href="showslider.php"> <button class="btn btn-primary" >gellery of sliders</button></a>

                <form role="form" action="updateslider.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" ><br>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputFile">add image</label>
                            <input type="file" name="file" id="exampleInputFile">
                            <p class="help-block">click to choose image</p>
                            <?php echo '<img src="image/'.$image.'"><h3>'.$image.'</h3>'  ; ?>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">title</label>
                            <input type="text" name="title" value='<?php echo "$title"; ?>' class="form-control" id="exampleInputEmail1" placeholder="Enter title of slider">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">link</label>
                            <input type="text" class="form-control" name="link" value='<?php echo "$link"; ?>' id="exampleInputPassword1" placeholder="www.exampel.com">
                        </div>


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                       <button  name="submit" type="submit" class="btn btn-primary">update</button>
                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>