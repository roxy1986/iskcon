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
                            Edit Book
                            <span style="float:right;" > <a href='<?php echo base_url();?>/books/new_book' title='Add New Book'>Add Book <a></span>
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
                                       <?php echo form_open('books/edit/'.$book_data['id']);?>
                                      <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Book Name</label>
                                            <input type="hidden" class="form-control" name="book_id" value="<?php echo $book_data['id'];?>">
                                            <input class="form-control" name="bname" value="<?php  if(set_value('sname')) { echo set_value('bname'); } else { echo $book_data['book_name'];} ?>">
                                            <?php if(form_error('bname')) { 
                                             	echo form_error('bname','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Book Code</label>
                                            <input class="form-control" name="bcode" value="<?php  if(set_value('bocde')) { echo set_value('bcode'); } else { echo $book_data['book_code'];} ?>">
                                             <?php if(form_error('bcode')) { 
                                             	echo form_error('bcode','<p class="text-danger">','</p>'); 
                                            } ?>
                                        </div>
                                        </div>
                                      	<div style="clear:both;"></div>
                                      	
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label> New Quantity ( <span style="color:red;">in stock <?php echo $book_data['book_quantity'];?> books </span>)</label>
                                            <input class="form-control" name="quantity" value="<?php  if(set_value('quantity')) { echo set_value('quantity'); } else { echo '0'; } ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('quantity','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                
                                         <div class="col-md-6">
                                          <div class="form-group">
                                             <label>Remark</label>
                                            <input class="form-control" name="remark" value="<?php  if(set_value('remark')) { echo set_value('remark'); } else { echo $book_data['remark'];} ?>">
                                             <?php if(form_error('remark')) { 
                                             	echo form_error('remark','<p class="text-danger">','</p>'); 
                                            } ?>
                                         </div>
                                         </div>
                                       <div class="col-md-12">   
                                        <button type="submit" class="btn btn-success" name="edit_book" value="sbumit">Submit</button>
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
