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
                        Student Fee
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
                                      <?php echo form_open('student/fee/'.$student_data['enrollment']);?>
                                       <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control" readonly="" name="enrollement" value="<?php echo $student_data['enrollment'];?>">
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
                                           <label>Amount Deposited </label>
                                            <input class="form-control" id="amount_deposited" readonly="" name="amount_deposited" value="<?php echo $amount_deposited; ?>">
                                           
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Amount Pending</label>
                                            <input class="form-control" readonly="" name="amount_pending" value="<?php echo $student_data['amount_to_paid'] - $amount_deposited; ?>">
                                             <?php if(form_error('amount_pending')) { 
                                             	echo form_error('amount_pending','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Amount Received</label>
                                            <input class="form-control"  name="amount_add" value="<?php echo set_value('amount_add'); ?>">
                                             <?php if(form_error('amount_add')) { 
                                             	echo form_error('amount_add','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                         <div style="clear:both;"></div>
                                         <div class="col-md-8">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php echo set_value('remark'); ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                          <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Due Date </label>
                                            <input class="form-control" id="join_date" readonly="" name="due_date" value="<?php echo date('Y-m-d', strtotime('next month'));?>">
                                           <?php if(form_error('due_date')) { 
                                             	echo form_error('due_date','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       <div class="col-md-12">   
                                        
                                        <button type="submit" class="btn btn-success" name="submit_fee" value="sbumit">Submit</button>
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
             <div class="row">
                <div class="col-lg-12"> 
                <br/>
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sno.</th>
                                        <th>Enrollment No.</th>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php $ii=1; foreach($student_fee as $cdata) { ?>
                                    <tr class="odd gradeX">
                                    	 <td><?php echo $ii;?></td>
 													<td class="center"><?php echo $cdata['enrollment'];?></td>
                                        <td><?php echo $cdata['amount'];?></td>
                                        <td><?php echo $cdata['deposite_date'];?></td>
 										<td class="center">
                                        	<a href="<?php echo base_url();?>student/receipt/<?php echo $cdata['enrollment'].'/'.$cdata['id'];?>" target="_blank" class="label label-danger label-sm">View</a> &nbsp; 
											<a href="<?php echo base_url();?>student/editfee/<?php echo $cdata['enrollment'].'/'.$cdata['id'];?>" class="label label-success label-sm">Edit</a>                                        
                                        </td>
                                    </tr>
                              <?php $ii++; } ?>
                                   
                                </tbody>
                            </table>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /#page-wrapper -->
 <?php $this->load->view('common/footer');?>
