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
                            Update Student Fee
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
                                      <?php echo form_open('student/editfee/'.$student_data['enrollment'].'/'. $receipt_data['id']);?>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control" readonly="" name="enrollement" value="<?php echo $student_data['enrollment'];?>">
											<input type='hidden' class="form-control" readonly="" name="fee_id" value="<?php echo $receipt_data['id'];?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                       
                                     
                                        <div class="col-md-3">
                                        <div class="form-group">
                                             <label>Student Name</label>
                                            <input class="form-control" readonly="" name="sname" value="<?php echo $student_data['student_name'];?>">
                                             
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-3">
                                         <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" readonly="" name="fname" value="<?php echo $student_data['father_name'];?>">
                                            
                                         </div>
                                         </div>
                                          
                                         <div class="col-md-6">
                                           <div class="form-group">
                                             <label>Course</label>
                                               <select name="course_name" class="form-control" disabled="">
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
                                            
                                         </div>
                                         </div>
                                           <div style="clear:both;"></div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Course Fee</label>
                                            <input class="form-control" id="course_fee" readonly="" name="course_fee" value="<?php echo $student_data['course_fee'];?>">
                                           
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Tax (18% GST))</label>
                                            <input class="form-control" id="tax" readonly="" name="tax" value="<?php echo $student_data['tax_amount'];?>">
                                           
                                        </div>
                                        </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Discount ( <?php echo $student_data['course_discount'];?>% )</label>
                                            <input class="form-control" id="tax" readonly="" name="discount" value="<?php echo $student_data['discount_price'];?>">
                                            
                                        </div>
                                        </div>
                                         <div class="col-md-3">
                                        <div class="form-group">
                                           <label>Total Amount to Paid </label>
                                            <input class="form-control" id="tax" readonly="" name="amount_to_paid" value="<?php echo $student_data['amount_to_paid'];?>">
                                            
                                        </div>
                                        </div>
                                        <div style="clear:both;"></div>
                                        
                                      
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Change Received Amount</label>
                                            <input class="form-control"  name="amount_add" value="<?php echo $receipt_data['amount']; ?>">
                                             <?php if(form_error('amount_add')) { 
                                             	echo form_error('amount_add','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div style="clear:both;"></div>
                                         <div class="col-md-8">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php echo $receipt_data['remark']; ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                          <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Due Date </label>
                                            <input class="form-control" id="join_date" readonly="" name="due_date" value="<?php echo $receipt_data['due_date'];?>">
                                           <?php if(form_error('due_date')) { 
                                             	echo form_error('due_date','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="update_fee" value="sbumit">Update</button>
                                        <button type="reset" class="btn btn-danger">Reset Button</button>
                                        </div>
                                    </form>
                                </div>
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                            <div style="clear:both;"></div>
                            
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
