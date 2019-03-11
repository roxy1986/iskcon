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
                            All Books
                            <span style="float:right;" > <a href='<?php echo base_url();?>/books/new_book' title='Add New Book'>Add Book <a></span>
                        </div>
                        <!-- /.panel-heading -->
             <div class="panel-body">
            <div class="col-md-8"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
			
				</div>
				
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Book Name</th>
                                        <th>Book Code</th>
                                        <th>Quantity</th>
                                        <th>Remark</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all_books as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $cdata['book_name'];?></td>
                                        <td><?php echo $cdata['book_code']; ?></td>
                                        <td><?php echo $cdata['book_quantity']; ?></td>
                                        <td><?php echo $cdata['remark']; ?></td>
                                        
                                        
                                        <td class="center">
														<a href="<?php echo base_url();?>books/sale/<?php echo $cdata['id'];?>" class="label label-primary label-sm">Sale</a> &nbsp;
														
														<a href="<?php echo base_url();?>books/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
														<a href="#" class="label label-danger label-sm">Delete</a>                                        
                                        </td>
                                    </tr>
                              <?php } ?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                        
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