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
                            New Enquiry
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
                                      <?php echo form_open('enquiry/new_enquiry');?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Student Name</label>
                                            <input class="form-control" name="sname" value="<?php echo set_value('sname'); ?>">
                                            <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Address</label>
                                            <input class="form-control" name="address" value="<?php echo set_value('address'); ?>">
                                             <?php if(form_error('address')) { 
                                             	echo form_error('address','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Mobile</label>
                                            <input class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Qualification</label>
                                            <input class="form-control" name="education" value="<?php echo set_value('education'); ?>">
                                             <?php if(form_error('education')) { 
                                             	echo form_error('education','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 <div style="clear:both;"></div>
										 <div class="col-md-4">
                                           <div class="form-group">
                                             <label>Course Code</label>
                                            <select name="course_code" class="form-control" onchange="load_more(this.value);">
                                            <option value=""> Select Course Code</option>
                                            <?php  
                                            	  $ci =&get_instance();
                                            	  $ci->load->model('Course_model');
												  $all_course = $ci->Course_model->all_courses();    
                                            		foreach($all_course AS $course_data) 
                                            		{
                                            			echo "<option value='".$course_data['course_code']."' ". set_select('course_code', $course_data['course_code']).">".$course_data['course_code']."</option>"; 
															   }                                    		
                                            		?>
                                            </select>
                                             <?php if(form_error('course_code')) { 
                                             	echo form_error('course_code','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>										
                                         <div class="col-md-5">                                     
                                          <div class="form-group">
                                             <label>Course Name</label>
                                            <select name="course_name" class="form-control" id='course_name'>
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
                                         <div class="col-md-3">
                                          <div class="form-group">
                                             <label>Refer By</label>
                                           	<select class="form-control" name="reffer_by">
                                            <?php 
                                               $ci->load->model('Common_model');
                                               $all_reff = $ci->Common_model->all_refferby();    
                                            		foreach($all_reff AS $reff_data) 
                                            		{
                                            			echo "<option value='".$reff_data['reffer_by']."' ". set_select('reffer_by', $reff_data['reffer_by']).">".$reff_data['reffer_by']."</option>"; 
															   }                                    		
                                            		?>
                                           
                                             <?php if(form_error('reffer_by')) { 
                                             	echo form_error('reffer_by','<p class="text-danger">','</p>'); 
                                            } ?>
                                           </select>
                                         </div>
                                         </div>
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
                                        
                                        <button type="submit" class="btn btn-success" name="submit" value="sbumit">Submit</button>
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
