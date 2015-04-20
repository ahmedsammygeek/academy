<?php 
require 'sidebar.php';
?>
<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">slider in database</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
         <?php 
         if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

          switch ($_GET['msg']) {

            case 'error_delete':
            //this case error in sql request to delete this data
            echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b>   an error in your deletion please try again.
            </div>';
            break;
            case 'data_inserted':
            //this case data inserted (sucsseful case)
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> data inserted successfully.
            </div>';
            break;
            case 'deleted':
            //this case data deleted successful
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>

            <b>Alert!</b>  data deleted successfully.
            </div>' ;
            break;
            case 'not_exist':
            echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b>  this image not exist in this file.
            </div>';
            break;
            case 'updated':
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> data updated successfully.
            </div>';  
            break;

            default:
                                      # code...
            break;
          }
        }


        ?>

        <table class="table table-hover">

          <tbody><tr>
            <th>ID</th>
            <th>CONTENT</th>
            <th>IMAGE1</th>
            <th>IMAGE2</th>
            <th>IMAGE3</th>
            <th>OPTIONS</th>

          </tr>
          <?php
          include 'connection.php';
          $sql="SELECT * FROM about ";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           echo " <tr>
           <td>$i</td>
           <td>$content</td>
           <td><img src='image/".$image1."' width='60px' height='60px'></td>
           <td><img src='image/".$image2."' width='60px' height='60px'></td>
           <td><img src='image/".$image3."' width='60px' height='60px'></td>
           <td><a href='deleteabout.php?id=$id&img1=$image1&img2=$image2&img3=$image3' class='btn btn-danger btn-sm'>DELETE</a>
           <a href='editabout.php?id=$id&img1=$image1&img2=$image2&img3=$image3' class='btn btn-warning btn-sm'>update</a>
           </td>
           </tr>" ;
           $i++;

         } 



         ?>


       </tbody></table>
     </div><!-- /.box-body -->
   </div><!-- /.box -->
   <a href="about.php"> <button class="btn btn-success btn-lg">insert new slide</button></a>

 </div>
</div>
</section><!-- /.content --> 

<?php 
require 'footer.php';
?>