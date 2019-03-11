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
                            New Book
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
                                      <?php echo form_open('books/new_book');?>
									  
									  <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Book Code</label>
                                            <input class="form-control" name="bcode" value="<?php echo set_value('bcode'); ?>">
                                             <?php if(form_error('bcode')) { 
                                             	echo form_error('bcode','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
										
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Book Name</label>
                                            <input class="form-control" name="bname" value="<?php echo set_value('bname'); ?>">
                                            <?php if(form_error('bname')) { 
                                             	echo form_error('bname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       
                                        
                                      	<div style="clear:both;"></div>
                                      	
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Quantity</label>
                                            <input class="form-control" name="quantity" value="<?php if(set_value('quantity')) { echo set_value('quantity'); } else { echo '0'; } ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('quantity','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                
                                         <div class="col-md-6">
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
