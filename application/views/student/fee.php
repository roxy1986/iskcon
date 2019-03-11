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
                        Devotee Calling Detail
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
                                       <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control" readonly="" name="enrollement" value="<?php echo $student_data['enrollment'];?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        
                                     
                                        <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Student Name</label>
                                            <input class="form-control" readonly="" name="sname" value="<?php echo $student_data['student_name'];?>">
                                             
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Father Name</label>
                                            <input class="form-control" readonly="" name="fname" value="<?php echo $student_data['father_name'];?>">
                                            
                                         </div>
                                         </div>
                                          
										<div class="col-md-4">
                                         <div class="form-group">
                                            <label>Mobile Number </label>
                                            <label class="form-control" ><a href="tel:<?php echo $student_data['phone']; ?>"><?php echo $student_data['phone'];?></a>
											</label>
                                            
                                         </div>
                                         </div>
                                                                                
										<div class="col-md-4">
                                         <div class="form-group">
                                            <label>Alternate Mobile Number </label>
                                            <label class="form-control" ><a href="tel:<?php echo $student_data['alt_mobile']; ?>"><?php echo $student_data['alt_mobile'];?></a>
											</label>
                                            
                                            
                                         </div>
                                         </div>
										 
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Date of Birth </label>
                                            <input class="form-control" readonly="" name="phone" value="<?php echo $student_data['dob'];?>">
                                            
                                         </div>
                                         </div>
										 
										 
										 
										 <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Address </label>
                                            <input class="form-control" readonly="" name="phone" value="<?php echo $student_data['address'];?>">
                                            
                                         </div>
                                         </div>
										 
										 <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Type of Devotee </label>
                                            <input class="form-control" readonly="" name="phone" value="<?php echo $student_data['type_of_devotee'];?>">
                                            
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
                                        <th>Date</th>
                                        <th>Remark</th>
										<th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php $ii=1; foreach($student_fee as $cdata) { ?>
                                    <tr class="odd gradeX">
                                    	 <td><?php echo $ii;?></td>
 													<td class="center"><?php echo date('d-M-Y', strtotime($cdata['deposite_date']));?></td>
													<td class="center"><?php echo $cdata['remark'];?></td>
													
                                        <td class="center">
                                        <!--	<a href="<?php echo base_url();?>student/receipt/<?php echo $cdata['enrollment'].'/'.$cdata['id'];?>" target="_blank" class="label label-danger label-sm">View</a> &nbsp; -->
											<a href="<?php echo base_url();?>student/editfee/<?php echo $cdata['enrollment'].'/'.$cdata['id'];?>" class="label label-success label-sm">Edit</a>                                        
											<a href="<?php echo base_url();?>student/editfee/<?php echo $cdata['enrollment'].'/'.$cdata['id'];?>" class="label label-danger label-sm">Delete</a>     
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
