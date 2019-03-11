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
                            Edit Call
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
                                      <?php echo form_open('calling/edit/'.$call_data['id']);?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input type="hidden" class="form-control" name="call_id" value="<?php echo $call_data['id'];?>">
                                            <input class="form-control" name="sname" value="<?php  if(set_value('sname')) { echo set_value('sname'); } else { echo $call_data['student_name'];} ?>">
                                            <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Mobile</label>
                                            <input class="form-control" name="mobile" value="<?php  if(set_value('mobile')) { echo set_value('mobile'); } else { echo $call_data['mobile'];} ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       <div style="clear:both;"></div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Course</label>
                                            <select name="course_name" class="form-control">
                                            <option value=""> Select Course</option>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Course_model');
                                               $all_course = $ci->Course_model->all_courses();    
                                            		foreach($all_course AS $course_data) 
                                            		{
                                            			if(set_select('course_name', $course_data['course_code'])) {
																		$selected ='selected';                                            			
                                            			} elseif($course_data['course_code']==$call_data['course']){
																		$selected ='selected';
                                            			} else {
                                            				$selected ='';
                                            			}
                                            			echo "<option value='".$course_data['course_code']."' ". $selected.">".$course_data['course_name']."</option>"; 
															   }                                    		
                                            		?>
                                            </select>
                                             <?php if(form_error('course_name')) { 
                                             	echo form_error('course_name','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Date of Enquiry</label>
                                            <input class="form-control" name="doe" value="<?php  if(set_value('doe')) { echo set_value('doe'); } else { echo $call_data['call_date'];} ?>">
                                             <?php if(form_error('doe')) { 
                                             	echo form_error('doe','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div style="clear:both;"></div>
                                       <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Next Date of Calling </label>
                                            <input class="form-control" id="join_date" readonly="" name="ndoc" value="<?php  if(set_value('ndoc')) { echo set_value('ndoc'); } else { echo $call_data['next_call_date'];} ?>">
                                             <?php if(form_error('ndoc')) { 
                                             	echo form_error('ndoc','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php  if(set_value('remark')) { echo set_value('remark'); } else { echo $call_data['remark'];} ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        <button type="submit" class="btn btn-success" name="edit_call" value="sbumit">Submit</button>
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
