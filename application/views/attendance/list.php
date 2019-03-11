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
                            Devotees List
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
                                        <th>Sno.</th>
                                        <th>Enroll. No.</th>
                                        <th>Devotee Name</th>
                                        <th>Fname</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                <?php $ii=1; foreach($all_students as $cdata) { ?>
                                    <tr class="odd gradeX">
                                    	 <td><?php echo $ii;?></td>
 													<td class="center"><?php $enrollment = $cdata['enrollment']; echo $cdata['enrollment'];?></td>
                                        <td><?php echo $cdata['student_name'];?></td>
                                        <td><?php echo $cdata['father_name'];?></td>
                                        <td><?php echo $cdata['phone'];?></td>
                                        </td>
                                       
                                        <td class="center" style="width:20%;">
                                                <input type="hidden" name="id" value="<?php echo  $cdata['id']; ?>" id="id_<?php echo $ii; ?>">
                                                <input type="hidden" name="enr_no" value="<?php echo  $cdata['enrollment']; ?>" id="enNo_<?php echo $ii; ?>">
												<label><input type="radio" name="attendance" id="pre_<?php echo $ii; ?>" value = "1" >Present</label>
												<label><input type="radio" name="attendance" id="abs_<?php echo $ii; ?>" value = "0" >Absent</label>
                                        		<a href="javascript:void(0);" class="label label-success label-sm"  onclick="saveAtt(<?php echo $ii; ?>);">Submit</a> 
                                        		<!--<input type="submit" name="submit" class="label label-success label-sm" onclick="saveAtt(<?php echo $ii; ?>);" value="Submit">-->
										
											                                         
                                        </td>
                                    </tr>
                              <?php $ii++; } ?>
                                   
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
        <script>
            
            function saveAtt(i){
               //var a = $("#pre_"+i+" :checked").val();	
                var b = $("#id_"+i).val();	
            	var radioValue = $("input[name='attendance']:checked").val();
            	var c = $("#enNo_"+i).val();	
            	var dataStr = "a="+radioValue+"&c="+c+"&b="+b;
            	if(radioValue != "undefine"){
                	$.ajax({
                		url:'attendance/saveAtt',
                		data: dataStr,
                		type : "POST",
                	  success:function(data) {
                	     alert("Attandence Submited Successfully");
                		 window.location.reload();
                	  }
                	});
            	} else{
					alert("Please Select Attandence.");
				}
            }
            
        </script>
        <!-- /#page-wrapper -->
        <?php $this->load->view('common/footer');?>