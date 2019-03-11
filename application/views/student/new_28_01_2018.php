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
                            New Student
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
                                <div class="col-lg-12">
                                      <?php echo form_open('student/new_student');?>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control" readonly="" name="enrollement" value="<?php echo 'ECR'.date('Ymdhis');?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Aadhar Number</label>
                                            <input class="form-control" name="aadhar" value="<?php echo set_value('aadhar'); ?>">
                                             <?php if(form_error('aadhar')) { 
                                             	echo form_error('aadhar','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Student Name</label>
                                            <input class="form-control" name="sname" value="<?php echo set_value('sname'); ?>">
                                             <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" name="fname" value="<?php echo set_value('fname'); ?>">
                                             <?php if(form_error('fname')) { 
                                             	echo form_error('fname','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Mother Name</label>
                                            <input class="form-control" name="mname" value="<?php echo set_value('mname'); ?>">
                                             <?php if(form_error('mname')) { 
                                             	echo form_error('mname','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Date of Birth</label>
                                            <input class="form-control" id="datepicker" readonly="" name="dob" value="<?php echo set_value('dob'); ?>">
                                             <?php if(form_error('dob')) { 
                                             	echo form_error('dob','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                         <div style="clear:both;"></div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Address</label>
                                            <input class="form-control" name="address" value="<?php echo set_value('address'); ?>">
                                             <?php if(form_error('address')) { 
                                             	echo form_error('address','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Mobile</label>
                                            <input class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Alternate Mobile</label>
                                            <input class="form-control" name="alt_mobile" value="<?php echo set_value('alt_mobile'); ?>">
                                             <?php if(form_error('alt_mobile')) { 
                                             	echo form_error('alt_mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
										 <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                                             <?php if(form_error('email')) { 
                                             	echo form_error('email','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										 <div class="col-md-4">
                                     
                                          <div class="form-group">
                                             <label>Caste</label>
                                            <select name="caste_name" class="form-control">
                                            <option value=""> Select Caste</option>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Common_model');
                                               $all_caste = $ci->Common_model->all_castes();    
                                            		foreach($all_caste AS $caste_data) 
                                            		{
                                            			echo "<option value='".$caste_data['caste_name']."' ". set_select('caste_name', $caste_data['caste_name']).">".$caste_data['caste_name']."</option>"; 
															   }                                    		
                                            		?>
                                            </select>
                                             <?php if(form_error('caste_name')) { 
                                             	echo form_error('caste_name','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
 									    <div class="col-md-4">
                                           
                                         </div>
                                        <div style="clear:both;"></div>
                                         <div class="col-md-4">
                                           <div class="form-group">
                                             <label>Course Name</label>
                                            <select name="course_name" class="form-control" id='course_name' onchange="load_more(this.value);" >
                                            <option value=""> Select Course</option>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Course_model');
                                               $all_course = $ci->Course_model->all_courses();    
                                            		foreach($all_course AS $course_data) 
                                            		{
                                            			echo "<option value='".$course_data['course_code']."' ". set_select('course_name', $course_data['course_code']).">".$course_data['course_name']."</option>"; 
															   }                                    		
                                            		?>
                                            </select>
                                             <?php if(form_error('course_name')) { 
                                             	echo form_error('course_name','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Course Fee</label>
                                            <input class="form-control" id="course_fee" readonly="" name="course_fee" value="<?php echo set_value('course_fee'); ?>">
                                             <?php if(form_error('course_fee')) { 
                                             	echo form_error('course_fee','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Tax (18% GST))</label>
                                            <input class="form-control" id="tax" readonly="" name="tax" value="<?php echo set_value('tax'); ?>">
                                             <?php if(form_error('tax')) { 
                                             	echo form_error('tax','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Course Duration</label>
                                            <input class="form-control" id="course_duration" readonly="" name="course_duration" value="<?php echo set_value('course_duration'); ?>">
                                             <?php if(form_error('course_duration')) { 
                                             	echo form_error('course_duration','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Discount</label>
                                            <input class="form-control" name="discount" value="<?php echo set_value('discount'); ?>">
                                             <?php if(form_error('discount')) { 
                                             	echo form_error('discount','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Join Date</label>
                                            <input class="form-control" id="join_date" readonly="" name="join_date" value="<?php echo set_value('join_date'); ?>">
                                             <?php if(form_error('join_date')) { 
                                             	echo form_error('join_date','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div style="clear:both;"></div>
                                         <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php echo set_value('remark'); ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="register" value="sbumit">Submit</button>
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
