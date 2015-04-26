<?php 
require 'header.php';
?>
<!-- Right side column. Contains the navbar and content of the page -->
<aside class="right-side">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Tasks</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Tasks</li>
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
                                    <tr class="unread">
                                        <td class="small-col"><input type="checkbox" name="msg_check[]" /></td>
                                 
                                        <td class="name"><a href="#">John Doe</a></td>
                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                        <td> <button data-toggle="modal" data-target="#more-modal" class="btn btn-primary btn-sm">more</button></td>
                                        <td> <button   class="btn btn-danger btn-sm">delete</button></td>
                                        <td> <button data-toggle="modal" data-target="#replay-modal" class="btn btn-info btn-sm">replay</button></td>
                                        
                                        <td class="time">12:30 PM</td>
                                    </tr>

                                     <tr class="unread">
                                        <td class="small-col"><input type="checkbox" name="msg_check[]" /></td>
                                 
                                        <td class="name"><a href="#">John Doe</a></td>
                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                        <td> <button data-toggle="modal" data-target="#more-modal" class="btn btn-primary btn-sm">more</button></td>
                                        <td> <button   class="btn btn-danger btn-sm">delete</button></td>
                                        <td> <button data-toggle="modal" data-target="#replay-modal" class="btn btn-info btn-sm">replay</button></td>
                                        
                                        <td class="time">12:30 PM</td>
                                    </tr>

                                     <tr class="unread">
                                        <td class="small-col"><input type="checkbox" name="msg_check[]" /></td>
                                 
                                        <td class="name"><a href="#">John Doe</a></td>
                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                        <td> <button data-toggle="modal" data-target="#more-modal" class="btn btn-primary btn-sm">more</button></td>
                                        <td> <button   class="btn btn-danger btn-sm">delete</button></td>
                                        <td> <button data-toggle="modal" data-target="#replay-modal" class="btn btn-info btn-sm">replay</button></td>
                                        
                                        <td class="time">12:30 PM</td>
                                    </tr>

                                     <tr class="unread">
                                        <td class="small-col"><input type="checkbox" name="msg_check[]" /></td>
                                 
                                        <td class="name"><a href="#">John Doe</a></td>
                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                        <td> <button data-toggle="modal" data-target="#more-modal" class="btn btn-primary btn-sm">more</button></td>
                                        <td> <button   class="btn btn-danger btn-sm">delete</button></td>
                                        <td> <button data-toggle="modal" data-target="#replay-modal" class="btn btn-info btn-sm">replay</button></td>
                                        
                                        <td class="time">12:30 PM</td>
                                    </tr>

                                     <tr >
                                        <td class="small-col"><input type="checkbox" name="msg_check[]" /></td>
                                 
                                        <td class="name"><a href="#">John Doe</a></td>
                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                        <td> <button data-toggle="modal" data-target="#more-modal" class="btn btn-primary btn-sm">more</button></td>
                                        <td> <button   class="btn btn-danger btn-sm">delete</button></td>
                                        <td> <button data-toggle="modal" data-target="#replay-modal" class="btn btn-info btn-sm">replay</button></td>
                                        
                                        <td class="time">12:30 PM</td>
                                    </tr>

                                  
                        
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
<!-- Bootstrap -->
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../admin/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="../admin/js/AdminLTE/app.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {

    "use strict";

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox" name="msg_check[]"]').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                });

                //When unchecking the checkbox
                $("#check-all").on('ifUnchecked', function(event) {
                    //Uncheck all checkboxes
                    $("input[type='checkbox']", ".table-mailbox").iCheck("uncheck");
                });
                
                

            });
</script>
<?php 
require 'scripts.php';
?>
</body>
</html>
