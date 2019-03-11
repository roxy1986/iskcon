
<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
?>       
<style type="text/css">
.required{
      color:red;
}
</style>
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
                            New Devotee
                        </div>
             <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
				<div class="col-md-12">
                                        <div class="form-group">
                                             <label>All (<span class="required">*</span>) Fields are Compulsory</label>
                                            
                                        </div>
                                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                      <?php echo form_open('student/new_student', 'enctype=multipart/form-data' );?>
                                      <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Enrollment Number</label>
                                            <input class="form-control" readonly="" name="enrollement" value="<?php echo 'HK'.date('Ymdhis');?>">
                                            <?php if(form_error('enrollement')) { 
                                             	echo form_error('enrollement','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                        <div class="form-group">
                                             <label>Devotee Name<span class="required">*</span></label>
                                            <input class="form-control" name="sname" value="<?php echo set_value('sname'); ?>">
                                             <?php if(form_error('sname')) { 
                                             	echo form_error('sname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <!-- <div style="clear:both;"></div> -->
                                        <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Father Name<span class="required">*</span></label>
                                            <input class="form-control" name="fname" value="<?php echo set_value('fname'); ?>">
                                             <?php if(form_error('fname')) { 
                                             	echo form_error('fname','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                        
                                         <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Date of Birth<span class="required">*</span></label>
                                            <input class="form-control" id="datepicker" readonly="" name="dob" value="<?php echo set_value('dob'); ?>">
                                             <?php if(form_error('dob')) { 
                                             	echo form_error('dob','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										<div class="col-md-4">
                                         <div class="form-group">
                                            <label>Date of Anniversary</label>
											<input class="form-control" name="date_of_anniversary" readonly="" id="datepicker1" value="<?php echo set_value('date_of_anniversary'); ?>">
                                            <!--<input class="form-control" id="datepicker" readonly="" name="date_of_anniversary" value="<?php echo set_value('date_of_anniversary'); ?>"> -->
                                             <?php if(form_error('date_of_anniversary')) { 
                                             	echo form_error('date_of_anniversary','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										 
                                         <!-- <div style="clear:both;"></div> -->
                                        <div class="col-md-4">
                                        <div class="form-group">
                                           <label>Address<span class="required">*</span></label>
                                            <input class="form-control" name="address" value="<?php echo set_value('address'); ?>">
                                             <?php if(form_error('address')) { 
                                             	echo form_error('address','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Mobile<span class="required">*</span></label>
                                            <input class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
                                             <?php if(form_error('mobile')) { 
                                             	echo form_error('mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
 										<div class="col-md-4">
                                        <div class="form-group">
                                           <label>Alternate Mobile (Optional)</label>
                                            <input class="form-control" name="alt_mobile" value="<?php echo set_value('alt_mobile'); ?>">
                                             <?php if(form_error('alt_mobile')) { 
                                             	echo form_error('alt_mobile','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       <!-- <div style="clear:both;"></div> -->
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
                                             <label>Gender<span class="required">*</span></label>
                                            <select name="gender" class="form-control">
                                            <option value=""> Select Gender</option>
											<option value="1" <?php echo set_select('gender', 1); ?>> Male</option>
											<option value="2" <?php echo set_select('gender', 2); ?>> Female</option>
											<option value="3" <?php echo set_select('gender', 3); ?> > Transgender</option>
                                            
                                            </select>
                                             <?php if(form_error('gender')) { 
                                             	echo form_error('gender','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										  <div class="col-md-4">
                                                                                                        
                                          <div class="form-group">
                                             <label>Type of Devotee<span class="required">*</span></label>
                                            <select name="type_of_devotee" class="form-control">
                                            <option value=""> Select Type</option>
											<option value="First Time" <?php echo set_select('type_of_devotee', 1); ?>> First Time</option>
											<option value="Some Time" <?php echo set_select('type_of_devotee', 2); ?>> Some Time</option>
											<option value="Regular" <?php echo set_select('type_of_devotee', 3); ?> > Regular</option>
											<option value="Festival" <?php echo set_select('type_of_devotee', 3); ?> > Festival</option>
                                            
                                            </select>
                                             <?php if(form_error('type_of_devotee')) { 
                                             	echo form_error('type_of_devotee','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
 									    <div class="col-md-4">
                                          <div class="form-group">
                                             <label>Chanting</label>
                                            
											<select name="chanting" id="" class="form-control">
											<?php 
												for($i = 0; $i <= 64; $i++){
											?>
												<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
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
                                            <input class="form-control" name="hearing" value="<?php echo set_value('hearing'); ?>">
                                             <?php if(form_error('hearing')) { 
                                             	echo form_error('hearing','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										 <div class="col-md-4">
                                          <div class="form-group">
                                             <label>Reading Books</label>
                                            <input class="form-control" name="reading_books" value="<?php echo set_value('reading_books'); ?>">
                                             <?php if(form_error('reading_books')) { 
                                             	echo form_error('reading_books','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										
										<div class="col-md-4">
                                          <div class="form-group">
                                             <label>Ashray Member</label>
                                            
                                             
											 <select name="ashray_member" class="form-control">
                                            <option value=""> Select Ashray</option>
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
                                            <input class="form-control" name="seva" value="<?php echo set_value('seva'); ?>">
                                             <?php if(form_error('seva')) { 
                                             	echo form_error('seva','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
										 
										 <div class="col-md-4">
                                         <div class="form-group">
                                            <label>Date of Joining<span class="required">*</span></label>
                                            <input class="form-control" name="date_of_joining" id="join_date" readonly="" value="<?php echo set_value('date_of_joining'); ?>">
                                         </div>
                                         </div>
										 
                                         <div class="col-md-4">
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
