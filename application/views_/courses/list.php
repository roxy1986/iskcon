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
                            Course List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Course Fee</th>
                                        <th>Duration</th>
                                        <th>Modified</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach($all_courses as $cdata) { ?>
                                    <tr class="odd gradeX">
                                        <td><?php echo $cdata['course_code'];?></td>
                                        <td><?php echo $cdata['course_name'];?></td>
                                        <td><?php echo $cdata['course_fee'];?></td>
                                        <td><?php echo $cdata['course_duration'];?></td>
                                        <td class="center"><?php echo $cdata['modify_date'];?></td>
                                        <td class="center">
														<a href="<?php echo base_url();?>course/edit/<?php echo $cdata['id'];?>" class="label label-success label-sm">Edit</a> &nbsp;
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