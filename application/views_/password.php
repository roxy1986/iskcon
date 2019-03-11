<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php 
	include('common/header.php');
	include('common/leftmenu.php');
?>        

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                  &nbsp;
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Change Your Password
                        </div>
             <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                      <?php echo form_open('user/password');?>
                                        <div class="form-group">
                                            <label>Old Password</label>
                                            <input class="form-control" name="opass" value="<?php echo set_value('opass'); ?>">
                                            <?php if(form_error('opass')) { 
                                             	echo form_error('opass','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        <div class="form-group">
                                           <label>New Password</label>
                                            <input class="form-control" name="npass" value="<?php echo set_value('npass'); ?>">
                                             <?php if(form_error('npass')) { 
                                             	echo form_error('npass','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        <div class="form-group">
                                             <label>Confirm Password</label>
                                            <input class="form-control" name="cpass" value="<?php echo set_value('cpass'); ?>">
                                             <?php if(form_error('cpass')) { 
                                             	echo form_error('cpass','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                          
                                        
                                        <button type="submit" class="btn btn-default" name="change_password" value="change password">Change Password</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include('common/footer.php');?>
