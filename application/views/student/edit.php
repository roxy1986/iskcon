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
                                            <label>Date of Anniversary</label>
                                            <input class="form-control" name="date_of_anniversary" value="<?php  if(set_value('date_of_anniversary')) { echo set_value('date_of_anniversary'); } else { echo $student_data['date_of_anniversary'];} ?>">
                                             <?php if(form_error('date_of_anniversary')) { 
                                             	echo form_error('date_of_anniversary','<p class="text-danger">','</p>'); 
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
                                            <select name="type_of_devotee" class="form-control" ">
                                            <option value="<?php  if(set_value('type_of_devotee')) { echo set_value('type_of_devotee'); } else { echo $student_data['type_of_devotee'];} ?>" selected="selected"><?php echo $student_data['type_of_devotee']?></option> 
                                          <option value="First Time" <?php echo set_select('type_of_devotee', 1); ?>> First Time</option>
											<option value="Some Time" <?php echo set_select('type_of_devotee', 2); ?>> Some Time</option>
											<option value="Regular" <?php echo set_select('type_of_devotee', 3); ?> > Regular</option>
                                            <option value="Festival" <?php echo set_select('type_of_devotee', 4); ?> > Festival</option>
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
                                            <option value="<?php  if(set_value('gender')) { echo set_value('gender'); } else { echo $student_data['gender'];} ?>" selected="selected"><?php if($student_data['gender']==1) echo "Male"; else echo "Female";?></option>
											<option value="1" <?php if($student_data['gender'] == 1) ?>> Male</option>
											<option value="2" <?php if($student_data['gender'] == 2) ?>> Female</option>
											<option value="3" <?php if($student_data['gender'] == 3) ?> > Transgender</option>
                                            
                                            </select>
                                             <?php if(form_error('gender')) { 
                                             	echo form_error('gender','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
 										 
										<div class="col-md-4">
                                          <div class="form-group">
                                             <label>Chanting</label>
											
											<select name="chanting" id="" class="form-control">
											 <option value="<?php  if(set_value('chanting')) { echo set_value('chanting'); } else { echo $student_data['chanting'];} ?>" selected="selected"><?php echo $student_data['chanting']?></option>
											<?php 
												for($i = 0; $i <= 64; $i++){
													//echo $i.' =='. set_value('chanting');
											?>
												<option value="<?php echo $i; ?>" <?php if( $i == set_value('chanting')) ?>><?php echo $i; ?></option>
											<?php 
												}
											?>	
											</select>
											 
                                            
                                             <?php if(form_error('chanting')) { 
                                             	echo form_error('chanting','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										
										<div class="col-md-4">
                                          <div class="form-group">
                                             <label>Hearing</label>
                                            <input class="form-control" name="hearing" value="<?php  if(set_value('hearing')) { echo set_value('hearing'); } else { echo $student_data['hearing'];} ?>">
                                             <?php if(form_error('hearing')) { 
                                             	echo form_error('hearing','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										 <div class="col-md-4">
                                          <div class="form-group">
                                             <label>Reading Books</label>
                                            <input class="form-control" name="reading_books" value="<?php  if(set_value('reading_books')) { echo set_value('reading_books'); } else { echo $student_data['reading_books'];} ?>">
                                             <?php if(form_error('reading_books')) { 
                                             	echo form_error('reading_books','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										 <div class="col-md-4">
                                          <div class="form-group">
										  <label>Ashray Member</label>
										   <select name="ashray_member" class="form-control" >
                                            <option value="<?php  if(set_value('ashray_member')) { echo set_value('ashray_member'); } else { echo $student_data['ashray_member'];} ?>" selected="selected"><?php echo $student_data['ashray_member']?></option>
											<option value="Yes" <?php echo set_select('ashray_member', 1); ?>> Yes</option>
											<option value="No" <?php echo set_select('ashray_member', 2); ?>> No</option>
											
                                            
                                            </select>
											 <?php if(form_error('ashray_member')) { 
                                             	echo form_error('ashray_member','<p class="text-danger">','</p>'); 
                                            } ?>
										  
                                             
                                            
                                         </div>
                                         </div>
										 
										 <div class="col-md-4">
                                          <div class="form-group">
                                             <label>Seva</label>
                                            <input class="form-control" name="seva" value="<?php  if(set_value('seva')) { echo set_value('seva'); } else { echo $student_data['seva'];} ?>">
                                             <?php if(form_error('seva')) { 
                                             	echo form_error('seva','<p class="text-danger">','</p>'); 
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
