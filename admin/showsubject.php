<?php 
// include 'header.php';
require 'sidebar.php';

?>

<section class="content">             

  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">

          <h3 class="box-title">subjects in database</h3>

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
            case 'updated':
            echo '<div class="alert alert-success alert-dismissable">
            <i class="fa fa-check"></i>
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <b>Alert!</b> successful in your data updated.
            </div>';
            break;
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
            <th>DOCTOR_ID</th>
            <th>SUBJECT NAME</th>
            <th>DESCRIPTION</th>
            <th>YEAR_ID</th>
            <th>DEPARTMENT_ID</th>
            <th>TERM</th>
            <th>options</th>

          </tr>
          <?php
          include 'connection.php';
          $sql="SELECT * FROM subjects ";
          $query=$conn->query($sql);
          $i=1;
          while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
           extract($result);
           echo " <tr>
           <td>$i</td>
           <td>$doctor_id</td>
           <td>$name</td>
           <td>$description</td>
           <td>$year</td>
           <td>$department</td> 
           <td>$term</td>         
           <td><a href='deletesubject.php?id=$id' class='btn btn-danger btn-sm'>DELETE</a><br><br>
           <a href='editsubject.php?id=$id' class='btn btn-warning btn-sm'>update</a>
           </td>
           

           


           </tr>";
           $i++;

         } 



         ?>


       </tbody></table>
     </div><!-- /.box-body -->
   </div><!-- /.box -->
   <a href="subject.php"> <button class="btn btn-success btn-lg">insert new data</button></a>

 </div>
</div>
</section><!-- /.content --> 

<?php
require 'footer.php'; 
?>