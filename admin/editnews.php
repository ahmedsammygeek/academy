 <?php 
 require 'sidebar.php';

 ?>


 <!-- Content Header (Page header) -->
 <section class="content-header">
    <h1>
        add new news

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
                    <h3 class="box-title">enter information about news</h3>

                </div><!-- /.box-header -->
                <!-- form start -->
                <?php 
                $id=$_GET['id'];
               
               require 'connection.php';
               $sql="SELECT * FROM news WHERE id=$id ";
               $query=$conn->query($sql);
               while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                   extract($result);
               }

                ?>
                <a href="shownews.php"> <button class="btn btn-primary" >gellery of news</button></a>

                <form role="form" action="updatenews.php<?php echo "?id=$id"; ?>" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">title</label>
                            <input type="text" name="title" value="<?php echo "$title"; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter title of news">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">content</label>
                            <input type="text" name="content" value="<?php echo "$content"; ?>" class="form-control" id="exampleInputEmail1" placeholder="Enter content of news">
                        </div>
                        <div class="form-group">
                            <!-- <label for="exampleInputFile">add image</label> -->
                            <input type="file" name="file" id="exampleInputFile">
                            <p class="help-block">click to choose image</p>
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