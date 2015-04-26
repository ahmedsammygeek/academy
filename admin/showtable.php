<?php 
// include 'header.php';
require 'sidebar.php';

?>

<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">tables</h3>

        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
         <?php 
         if (isset($_GET['msg'])) {
        //if exist msg in link get this message and do defferent action in every case and show alert

          switch ($_GET['msg']) {

            case 'data_inserted':
            //this case data inserted (sucsseful case)
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b>  data inserted successfully.
            </div>';
            break;
            case 'deleted':
            //this case data deleted successful
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>

            <b>Alert!</b> data deleted successfully.
            </div>' ;
            break;
            case 'data_updated':
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

          <tbody><tr>
            <th>ID</th>
            <th>IMAGE</th>
            <th>DEPARTMENT</th>
            <th>YEAR</th>
            <th>options</th>


          </tr>
          <?php
          include 'connection.php';
          $sql="SELECT * FROM tables";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           $query2=$conn->query("SELECT name FROM departments WHERE id=$department_id");
           $result2=$query2->fetch(PDO::FETCH_ASSOC);
           extract($result2);
           echo " <tr>
           <td>$i</td>
           <td><img src='image/".$table_image."' width='50px' height='50px'></td>
           <td>$name</td>
           <td>year$year_id</td>
           <td>
           <a href='edittable.php?id=$id&img=$table_image' class='btn btn-warning btn-sm'>update</a>
           </td>
           </tr>";
           $i++;

         } 



         ?>


       </tbody></table>
     </div><!-- /.box-body -->
   </div><!-- /.box -->
   <a href="table.php"> <button class="btn btn-success btn-lg">add new table</button></a>

 </div>
</div>
</section><!-- /.content --> 

<?php
require 'footer.php'; 
?>