<?php 
require 'check_user.php';

require 'header.php';
require '../admin/connection.php';
$staff = $conn->prepare("SELECT * FROM staff");
$staff->execute();
?>
<aside class="right-side">
    <section class="content-header">
        <h1>
            Dashboard
            <small>inbox</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">inbox</li>
        </ol>
    </section>

    <section class="content">

        <!-- MAILBOX BEGIN -->
        <div class="mailbox row">
            <div class="col-xs-12">
                <div class="box box-solid">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-lg-4">
                               <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> Compose Message</a>
                           </div>
                       </div>
                       <div class="row">

                        <div class="col-xs-12">

                            <div class="table-responsive">
                                <!-- THE MESSAGES -->
                                <table class="table table-mailbox">

                                    <?php 
                                    $to = $_SESSION['system_user_id'];
                                    $tos = $conn->prepare("SELECT   DISTINCT `to`  FROM system_messages ");
                                    $tos->execute();
                                    $ids = array();

                                    while ($one = $tos->fetch(PDO::FETCH_OBJ)) {
                                        $ids[] = $one->to;
                                    }

                                    $the_ides = implode(',', $ids);

                                    $msgs = $conn->prepare("SELECT  DISTINCT S_M.to  , S_M.seen ,  S_M.id as msg_id , S_M.msg_content , S_M.when , S_M.to , S_M.sender , S.*
                                       FROM system_messages as S_M LEFT JOIN staff as S on S_M.to = S.id
                                       WHERE S_M.to = ?  || sender IN($the_ides) order by seen ASC");
                                    $msgs->bindValue(1,$to , PDO::PARAM_INT);
                                    // var_dump($msgs); die;
                                    $msgs->execute();
                                    while ($msg = $msgs->fetch(PDO::FETCH_OBJ)) {
                                        if($msg->seen == 0 ) {
                                            echo '<tr class="unread">';
                                        }
                                        else  {
                                            echo '<tr >';
                                        }
                                        echo '<td class="name"><a href="#">'.$msg->name.' </a></td>
                                        <td class="subject"><a href="#">'.substr($msg->msg_content, 1 , 90).'</a></td>
                                        <td> <button data-toggle="modal" data-target="#more-modal" class="btn btn-primary btn-sm">more</button></td>
                                        <td> <button   class="btn btn-danger btn-sm">delete</button></td>
                                        <td> <button data-toggle="modal" data-target="#replay-modal" class="btn btn-info btn-sm">replay</button></td>
                                        
                                        <td class="time">12:30 PM</td>';
                                        echo "</tr>";
                                    }

                                    ?>



                                    
                                    
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /.col (RIGHT) -->
                    </div><!-- /.row -->
                </div><!-- /.box-body -->

            </div><!-- /.box -->
        </div><!-- /.col (MAIN) -->
    </div>
    <!-- MAILBOX END -->

</section><!-- /.content -->
</aside><!-- /.right-side -->
</div><!-- ./wrapper -->

<!-- COMPOSE MESSAGE MODAL -->
<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
            </div>
            <form action="send_msg.php" method="post">
                <div class="modal-body">
                  <div class="form-group ">
                    <label>Select</label>
                    <select  name="to" class="form-control">
                        <?php while ($member = $staff->fetch(PDO::FETCH_OBJ)) {
                            echo '<option value='.$member->id.'>'.$member->name.'</option>';
                        } ?>
                    </select>
                </div>

                <div class="form-group">
                    <textarea name="message" id="email_message" class="form-control" placeholder="Message content " style="height: 120px;"></textarea>
                </div>


            </div>
            <div class="modal-footer clearfix">

                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                <div class="loader">Loading...</div>
                <button type="submit" name="send_msg" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
            </div>
        </form>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- COMPOSE MESSAGE MODAL -->
<div class="modal fade" id="replay-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">TO:</span>
                            <input name="email_to" type="email" class="form-control" placeholder="Email TO">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">CC:</span>
                            <input name="email_to" type="email" class="form-control" placeholder="Email CC">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon">BCC:</span>
                            <input name="email_to" type="email" class="form-control" placeholder="Email BCC">
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
                    </div>
                    <div class="form-group">                                
                        <div class="btn btn-success btn-file">
                            <i class="fa fa-paperclip"></i> Attachment
                            <input type="file" name="attachment"/>
                        </div>
                        <p class="help-block">Max. 32MB</p>
                    </div>

                </div>
                <div class="modal-footer clearfix">

                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>

                    <button type="submit" class="btn btn-primary pull-left"><i class="fa fa-envelope"></i> Send Message</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="modal fade" id="more-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><i class="fa fa-envelope-o"></i> Compose New Message</h4>
            </div>
            <div class="box box-solid">
                <div class="box-header">
                    <i class="fa fa-text-width"></i>
                    <h3 class="box-title">Block Quotes</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </blockquote>
                </div><!-- /.box-body -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</aside><!-- /.right-side -->
</div><!-- ./wrapper -->


<script src="../admin/js/jquery.min.js"></script>
<script src="../admin/js/messages.js"></script>
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>
<script src="../admin/js/select.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {

    // $("select").select2();

    "use strict";

                //iCheck for checkbox and radio inputs
                // $('input[type="checkbox" name="msg_check[]"]').iCheck({
                //     checkboxClass: 'icheckbox_minimal-blue',
                //     radioClass: 'iradio_minimal-blue'
                // });

                //When unchecking the checkbox
                // $("#check-all").on('ifUnchecked', function(event) {
                //     //Uncheck all checkboxes
                //     $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
                // });



});
</script>

</body>
</html>
