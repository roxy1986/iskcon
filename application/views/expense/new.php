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
                            New Expense
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
                                      <?php echo form_open('expense/new_expense');?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Particular</label>
                                            <input class="form-control" name="particular" value="<?php echo set_value('particular'); ?>">
                                            <?php if(form_error('particular')) { 
                                             	echo form_error('particular','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                           <label>Amount</label>
                                            <input class="form-control" id="amount" onkeyup="all_expense();"  name="amount" value="<?php echo set_value('amount'); ?>">
                                             <?php if(form_error('amount')) { 
                                             	echo form_error('amount','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Quantity</label>
                                            <input class="form-control" id="qnty" onkeyup="all_expense();"  name="quantity" value="<?php echo set_value('quantity'); ?>" >
                                             <?php if(form_error('quantity')) { 
                                             	echo form_error('quantity','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                         <div class="form-group">
                                            <label>Total Amount</label>
                                            <input class="form-control" id="total_expense" name="total" value="<?php echo set_value('total'); ?>">
                                             <?php if(form_error('total')) { 
                                             	echo form_error('total','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Date</label>
                                            <input class="form-control" id="join_date" name="pdate" value="<?php echo set_value('pdate'); ?>">
                                             <?php if(form_error('pdate')) { 
                                             	echo form_error('pdate','<p class="text-danger">','</p>'); 
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