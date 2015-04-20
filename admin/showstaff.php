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

     

                <div class="row">
                  <div class="col-xs-12">
                    <div class="box">
                      <div class="box-header">
                       
                        <div class="box-tools">
                          <div class="input-group">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                            <div class="input-group-btn">
                              <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                          </div>
                        </div>
                      </div><!-- /.box-header -->
                      <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                          <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>IMAGE</th>
                            <th>TITLE</th>
                            <th>DESCRIPTION</th>
                            <th>FACEBOOK</th>
                            <th>EMAIL</th>
                            <th>USERNAME</th>
                            <th>PASSWORD</th>
                            <th>option</th>
                          </tr>
                        <?php require 'connection.php';
                        /*
                        show the data in staff table (about doctors and domestrator)

                        */
                        $query=$conn->query("SELECT * FROM staff");
                        $i=1;
                        while ($result=$query->fetch(PDO::FETCH_ASSOC)) {
                          extract($result);
                          echo "  <tr>
                            <th>$i</th>
                            <th>$name</th>
                            <th><img src='image/".$image."' width='45' height='60'></th>
                            <th>$title</th>
                            <th>$description</th>
                            <th>$facebook</th>
                            <th>$email</th>
                            <th>$username</th>
                            <th>*********</th>
                            <th><a href='deletestaff.php?id=$id' class='btn btn-danger btn-sm'>DELETE</a></th>
                            
                          </tr>";
                          $i++;
                        }

                         ?>
                          
                        </table>
                      </div><!-- /.box-body -->
                    </div><!-- /.box -->
                  </div>
                </div>
              </div><!-- /.box-body -->
            </div><!-- /.box -->
            <a href="subject.php"> <button class="btn btn-success btn-lg">insert new data</button></a>

          </div>
        </div>
      </section><!-- /.content --> 

      <?php
      require 'footer.php'; 
      ?>
    