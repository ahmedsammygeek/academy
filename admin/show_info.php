<?php 
// include 'header.php';
require 'sidebar.php';

?>

<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">site information</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
         <?php 
         if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

          switch ($_GET['msg']) {

            case 'error':
            echo '<div class="alert alert-danger alert-dismissable">
            <i class="fa fa-ban"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b>   an error in your delete please try again.
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
            break;
          }
        }


        ?>

        <table class="table table-hover">

          <tbody>
          <?php
          include 'connection.php';
          $sql="SELECT * FROM site_info ";
          $query=$conn->query($sql);
          $result=$query->fetch(PDO::FETCH_ASSOC);
           extract($result);
           echo "
           <tr>
           <td>phone</td>
           <td>$phone</td>
           </tr> 
           <tr>
           <td>mail</td>
           <td>$mail</td>
           </tr> 
           <tr>
           <td>facebook</td>
           <td>$facebook</td>
           </tr> 
           <tr>
           <td>twitter</td>
           <td>$twitter</td>
           </tr> 
           <tr>
           <td>linked-in</td>
           <td>$linkedin</td>
           </tr> 
           <tr>
           <td>address</td>
           <td>$address</td>
           </tr>
           <tr>
           <td>map link</td>
           <td>$map</td>
           </tr> 
           ";
           
         ?>


       </tbody></table>
     </div><!-- /.box-body -->
   </div><!-- /.box -->
   <a href="edit_info.php<?php echo "?id=$id"; ?>"> <button class="btn btn-success btn-lg">edit info</button></a>

 </div>
</div>
</section><!-- /.content --> 

<?php
require 'footer.php'; 
?>