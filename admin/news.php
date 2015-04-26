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
                        case 'small_image':
                        //in this case image is smaller than we need 
                        echo '<div class="alert alert-danger alert-dismissable">
                        <i class="fa fa-ban"></i>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <b>Alert!</b> this image is small please enter bigger than this image.
                        </div>';
                        break;
                        default:
                                            # code...
                        break;
                    }
                }


                ?>
                <a href="shownews.php"> <button class="btn btn-primary" >news</button></a>

                <form role="form" action="addnews.php" method="post" enctype="multipart/form-data" >
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">title</label>
                            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter title of news">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">content</label>
                            <textarea type="text" name="content" class="form-control" id="exampleInputEmail1" placeholder="Enter content of news" cols="30" rows="5"></textarea>
                        </div>
                        <div class="form-group">
                            <!-- <label for="exampleInputFile">add image</label> -->
                            <input type="file" name="file" id="exampleInputFile">
                            <p class="help-block">click to choose image</p>
                        </div>
                       <!--  <div class="form-group">
                            <label for="exampleInputEmail1">date of this news</label>
                            <input type="date" name="date" class="form-control" id="exampleInputEmail1" placeholder="Enter date of news">
                        </div>
                         -->


                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" name="submit" class="btn btn-primary">add news</button>

                    </div>
                </form>
            </div><!-- /.box -->


        </div><!--/.col (right) -->
    </div>   <!-- /.row -->
</section><!-- /.content -->

<?php 

require 'footer.php';
?>