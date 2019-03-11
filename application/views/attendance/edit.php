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
                            Edit Student
                        </div>
             <div class="col-md-12"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                      <?php echo form_open('student/edit');?>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input type="hidden" name="student_id" value="<?php  if(set_value('student_id')) { echo set_value('student_id'); } else { echo $student_data['id'];} ?>" />
                                            <input class="form-control" readonly="" name="enrollement" value="<?php  if(set_value('enrollement')) { echo set_value('enrollement'); } else { echo $student_data['enrollment'];} ?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Student Name</label>
                                            <input class="form-control" name="sname" value="<?php  if(set_value('sname')) { echo set_value('sname'); } else { echo $student_data['student_name'];} ?>">
                                             <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" name="fname" value="<?php  if(set_value('fname')) { echo set_value('fname'); } else { echo $student_data['father_name'];} ?>">
                                             <?php if(form_error('fname')) { 
                                             	echo form_error('fname','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" id="datepicker" readonly="" name="dob" value="<?php  if(set_value('dob')) { echo set_value('dob'); } else { echo $student_data['dob'];} ?>">
                                             <?php if(form_error('dob')) { 
                                             	echo form_error('dob','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Address</label>
                                            <input class="form-control" name="address" value="<?php  if(set_value('address')) { echo set_value('address'); } else { echo $student_data['address'];} ?>">
                                             <?php if(form_error('address')) { 
                                             	echo form_error('address','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Mobile</label>
                                            <input class="form-control" name="mobile" value="<?php  if(set_value('mobile')) { echo set_value('mobile'); } else { echo $student_data['phone'];} ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Alternate Mobile</label>
                                            <input class="form-control" name="alt_mobile" value="<?php  if(set_value('alt_mobile')) { echo set_value('alt_mobile'); } else { echo $student_data['alt_mobile'];} ?>">
                                             <?php if(form_error('alt_mobile')) { 
                                             	echo form_error('alt_mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       <!-- <div style="clear:both;"></div> -->
										  <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Email</label>
                                            <input class="form-control" name="email" value="<?php  if(set_value('email')) { echo set_value('email'); } else { echo $student_data['email'];} ?>">
                                             <?php if(form_error('email')) { 
                                             	echo form_error('email','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">                                   
                                          <div class="form-group">
                                             <label>Type of Devotee</label>
                                            <select name="type_of_devotee" class="form-control">
                                            <option value=""> Select Type</option>
                                          <option value="First Time" <?php echo set_select('type_of_devotee', 1); ?>> First Time</option>
											<option value="Some Time" <?php echo set_select('type_of_devotee', 2); ?>> Some Time</option>
											<option value="Regular" <?php echo set_select('type_of_devotee', 3); ?> > Regular</option>
                                            
                                            </select>
                                             <?php if(form_error('type_of_devotee')) { 
                                             	echo form_error('type_of_devotee','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 <div class="col-md-4">
                                     
                                          <div class="form-group">
                                             <label>Gender</label>
                                            <select name="gender" class="form-control">
                                            <option value=""> Select Gender</option>
											<option value="1" <?php if($student_data['gender'] == 1){ echo "selected"; } ?>> Male</option>
											<option value="2" <?php if($student_data['gender'] == 2){ echo "selected"; } ?>> Female</option>
											<option value="3" <?php if($student_data['gender'] == 3){ echo "selected"; } ?> > Transgender</option>
                                            
                                            </select>
                                             <?php if(form_error('gender')) { 
                                             	echo form_error('gender','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
 										 
										
 
										 <div class="col-md-4">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php  if(set_value('remark')) { echo set_value('remark'); } else { echo $student_data['remark'];} ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="edit_student" value="sbumit">Submit</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </div>
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
