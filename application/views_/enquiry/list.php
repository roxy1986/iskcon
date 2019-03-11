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
                            Enquiry List	
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <div class="col-md-12"> <br/>          
           <?php if($this->session->flashdata('success_msg')) { ?>
				<div class="alert alert-success"> <?php echo $this->session->flashdata('success_msg');  ?></div>
				<?php } if($this->session->flashdata('error_msg_msg')) { ?>
					<div class="alert alert-danger" > <?php echo $this->session->flashdata('error_msg_msg'); ?></div>
				<?php }  ?>
				</div>
				<div class="col-md-12" style="text-align:center;">
				<?php echo form_open('enquiry/search');?>
					<input  type="text" name="sdate" id="join_date" required="" readonly="" />
					<input type="submit" name="submit" value="Filter" />		
				</form>		
				</div>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Course</th>
                                        <th>Mobile</th>
                                        <th>Address</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all_courses as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $cdata['student_name'];?></td>
                                        <td>
                                        		<?php
                                        			  
                                        			  	echo $this->Enquiry_model->course_name($cdata['course']);
                                        		?>
                                        </td>
                                        <td><?php echo $cdata['mobile'];?></td>
                                        <td><?php echo $cdata['address'];?></td>
                                        <td class="center"><?php echo $cdata['create_date'];?></td>
                                        <td class="center">
														<a href="<?php echo base_url();?>enquiry/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
														<a href="<?php echo base_url();?>enquiry/delenquiry/<?php echo $cdata['id'];?>" onclick="return confirm('Do you want to remove this?');" class="label label-danger label-sm">Delete</a>                                        
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