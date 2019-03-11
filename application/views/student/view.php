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
                            View Student
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
                                      <?php echo form_open('student/view');?>
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
                                             <label>Aadhar Number</label>
                                            <input class="form-control" readonly="" name="aadhar" value="<?php  if(set_value('aadhar')) { echo set_value('aadhar'); } else { echo $student_data['aadhar_no'];} ?>">
                                             <?php if(form_error('aadhar')) { 
                                             	echo form_error('aadhar','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Student Name</label>
                                            <input class="form-control" readonly="" name="sname" value="<?php  if(set_value('sname')) { echo set_value('sname'); } else { echo $student_data['student_name'];} ?>">
                                             <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" readonly="" name="fname" value="<?php  if(set_value('fname')) { echo set_value('fname'); } else { echo $student_data['father_name'];} ?>">
                                             <?php if(form_error('fname')) { 
                                             	echo form_error('fname','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                         <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Mother Name</label>
                                            <input class="form-control" name="mname" readonly="" value="<?php  if(set_value('mname')) { echo set_value('mname'); } else { echo $student_data['mname'];} ?>">
                                             <?php if(form_error('mname')) { 
                                             	echo form_error('mname','<p class="text-danger">','</p>'); 
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
                                        <div style="clear:both;"></div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Address</label>
                                            <input class="form-control" name="address" readonly="" value="<?php  if(set_value('address')) { echo set_value('address'); } else { echo $student_data['address'];} ?>">
                                             <?php if(form_error('address')) { 
                                             	echo form_error('address','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Mobile</label>
                                            <input class="form-control" name="mobile" readonly="" value="<?php  if(set_value('mobile')) { echo set_value('mobile'); } else { echo $student_data['phone'];} ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Alternate Mobile</label>
                                            <input class="form-control" name="alt_mobile" readonly="" value="<?php  if(set_value('alt_mobile')) { echo set_value('alt_mobile'); } else { echo $student_data['alt_mobile'];} ?>">
                                             <?php if(form_error('alt_mobile')) { 
                                             	echo form_error('alt_mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
										  <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Email</label>
                                            <input class="form-control" name="email" readonly="" value="<?php  if(set_value('email')) { echo set_value('email'); } else { echo $student_data['email'];} ?>">
                                             <?php if(form_error('email')) { 
                                             	echo form_error('email','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">                                   
                                          <div class="form-group">
                                             <label>Caste</label>
                                            <select name="caste_name" class="form-control" disabled>
                                            <option value=""> Select Caste</option>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Common_model');
                                               $all_caste = $ci->Common_model->all_castes();    
                                            		foreach($all_caste AS $caste_data) 
                                            		{
                                            			if(set_select('caste_name', $caste_data['caste_name'])) {
																		$selected='selected';                                            			
                                            			} elseif($student_data['caste'] == $caste_data['caste_name']){
																		$selected='selected';
                                            			} else {
                                            				$selected='';
                                            			}
                                            			echo "<option value='".$caste_data['caste_name']."' ". $selected .">".$caste_data['caste_name']."</option>"; 
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
                                             <label>Course</label>
                                            <select name="course_name" class="form-control" disabled onchange="load_more(this.value);" readonly onclick="this.readonly = false" onblur="this.readonly = true">
                                            <option value=""> Select Course</option>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Course_model');
                                               $all_course = $ci->Course_model->all_courses();    
                                            		foreach($all_course AS $course_data) 
                                            		{
                                            			if(set_select('course_name', $course_data['course_code'])) {
																		$selected='selected';                                            			
                                            			} elseif($course_data['course_code']==$student_data['course_code']){
																		$selected='selected';
                                            			} else {
                                            				$selected='';
                                            			}
                                            			echo "<option value='".$course_data['course_code']."' ". $selected .">".$course_data['course_name']."</option>"; 
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
                                            <input class="form-control" id="course_fee" readonly="" name="course_fee" value="<?php  if(set_value('course_fee')) { echo set_value('course_fee'); } else { echo $student_data['course_fee'];} ?>">
                                             <?php if(form_error('course_fee')) { 
                                             	echo form_error('course_fee','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Tax (18% GST))</label>
                                            <input class="form-control" id="tax" readonly="" name="tax" value="<?php  if(set_value('tax')) { echo set_value('tax'); } else { echo $student_data['tax_amount'];} ?>">
                                             <?php if(form_error('tax')) { 
                                             	echo form_error('tax','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Course Duration</label>
                                            <input class="form-control" id="course_duration" readonly="" name="course_duration" value="<?php  if(set_value('course_duration')) { echo set_value('course_duration'); } else { echo $student_data['course_duration'];} ?>">
                                             <?php if(form_error('course_duration')) { 
                                             	echo form_error('course_duration','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Discount</label>
                                            <input class="form-control" name="discount" readonly="" value="<?php  if(set_value('discount')) { echo set_value('discount'); } else { echo $student_data['course_discount'];} ?>">
                                             <?php if(form_error('discount')) { 
                                             	echo form_error('discount','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Join Date</label>
                                            <input class="form-control" id="join_date" readonly="" name="join_date" value="<?php  if(set_value('join_date')) { echo set_value('join_date'); } else { echo $student_data['join_date'];} ?>">
                                             <?php if(form_error('join_date')) { 
                                             	echo form_error('join_date','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div style="clear:both;"></div>
                                         <div class="col-md-12">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" readonly="" value="<?php  if(set_value('remark')) { echo set_value('remark'); } else { echo $student_data['remark'];} ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        
                                        
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
