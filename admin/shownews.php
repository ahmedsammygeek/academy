<?php 
// include 'header.php';
require 'sidebar.php';

?>

<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">news in database</h3>

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
            <b>Alert!</b>   an error in your delete please try again.
            </div>';
            break;
            case 'data_inserted':
            //this case data inserted (sucsseful case)
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> successful in your data inserted.
            </div>';
            break;
            case 'deleted':
            //this case data deleted successful
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>

            <b>Alert!</b> ssful in your data deleted.
            </div>' ;
            break;
            case 'not_exist':
               echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b>  this image not exist in this file.
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
            <th>TITLE</th>
            <th>CONTENT</th>
            <th>IMAGE</th>
            <th>DATA</th>
            <th>OPTIONS</th>

          </tr>
          <?php
          include 'connection.php';
          $sql="SELECT * FROM news ";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           echo " <tr>
           <td>$i</td>
           <td>$title</td>
           <td>$content</td>
           <td><img src='image/".$image."' width='50px' height='50px'></td>
           <td>$date</td>
           <td><a href='deletenews.php?id=$id&img=$image' class='btn btn-danger btn-sm'>DELETE</a>
            <a href='editnews.php?id=$id' class='btn btn-warning btn-sm'>update</a>
            </td>


           </tr>";
           $i++;

         } 



         ?>


       </tbody></table>
     </div><!-- /.box-body -->
   </div><!-- /.box -->
   <a href="news.php"> <button class="btn btn-success btn-lg">insert new news</button></a>

 </div>
</div>
</section><!-- /.content --> 

<?php
require 'footer.php'; 
?>