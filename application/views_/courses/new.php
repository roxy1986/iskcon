<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
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
                            New Course
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
                                      <?php echo form_open('course/new_course');?>
                                        <div class="form-group">
                                            <label>Course Code</label>
                                            <input class="form-control" name="ccode" value="<?php echo set_value('ccode'); ?>">
                                            <?php if(form_error('ccode')) { 
                                             	echo form_error('ccode','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        <div class="form-group">
                                           <label>Course Name</label>
                                            <input class="form-control" name="cname" value="<?php echo set_value('cname'); ?>">
                                             <?php if(form_error('cname')) { 
                                             	echo form_error('cname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        <div class="form-group">
                                             <label>Course Fee</label>
                                            <input class="form-control" name="cfee" value="<?php echo set_value('cfee'); ?>">
                                             <?php if(form_error('cfee')) { 
                                             	echo form_error('cfee','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                         <div class="form-group">
                                             <label>Course Duration</label>
                                            <input class="form-control" name="duration" value="<?php echo set_value('duration'); ?>">
                                             <?php if(form_error('duration')) { 
                                             	echo form_error('duration','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                          
                                        
                                        <button type="submit" class="btn btn-default" name="new_course" value="change password">Add Course</button>
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
 <?php $this->load->view('common/footer');?>
