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
                            Export Data
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
                                      <?php echo form_open('settings/csv_export');?>          
                                         <div class="col-md-6">                                
                                          <div class="form-group">
                                             <label>Course</label>
                                            <select name="tbl_name" class="form-control">
                                            <option value=""> Select List</option>
                                            <?php  
                                            	 
                                            		foreach($all_tabels AS $table_date) 
                                            		{
                                            			echo "<option value='".$table_date."' ". set_select('tbl_name', $table_date).">".$table_date."</option>"; 
															   }                                    		
                                            		?>
                                            </select>
                                             <?php if(form_error('tbl_name')) { 
                                             	echo form_error('tbl_name','<p class="text-danger">','</p>'); 
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
