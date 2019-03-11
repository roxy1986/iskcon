<?php 
	$this->load->view('common/header');
	$this->load->view('common/leftmenu');
?> 
<div id="page-wrapper" style="min-height: 300px;">
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
                            New Student
                        </div>
             <div class="col-md-8"> <br>          
           				</div>
                        <div class="panel-body">
                            <div class="row">
							
                                <div class="col-lg-12">
                                      <form action="<?php echo base_url(); ?>SetUp/update" onSubmit="return validate();"  method="post" accept-charset="utf-8">
										<div class="col-md-4">
											<div class="form-group">
												<label>Paper Code</label>
												<input class="form-control" name="id" type="hidden" value="<?php echo $data->id; ?>">
												<input class="form-control" type="text" name="paper_code" value="<?php echo $data->paper_code;  ?>">
											</div>
											<div class="form-group">
												<label>Subject</label>
												<input class="form-control" type="text" name="subject" value="<?php echo $data->subject; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Min Marks</label>
												<input class="form-control" type="text" name="min_marks" value="<?php echo $data->min_marks; ?>">
											</div>
											<div class="form-group">
												<label>Max Marks</label>
												<input class="form-control" type="text" name="max_marks" value="<?php echo $data->max_marks; ?>">
											</div>
										</div>
										<div style="clear:both;"></div>
										<div class="col-md-12">   
                                        	
											<button type="submit" class="btn btn-success" name="save" value="sbumit">Update</button>
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
 
    <script>
	
	function validate(){
		alert("ok");
	}
	
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true,
            "ordering": false
        });
    });
      
    $( function() {
   	 $( "#datepicker" ).datepicker({
    	  changeMonth: true,
    	  changeYear: true,
    	  dateFormat: 'yy-mm-dd',
		  yearRange: "-50:+0", // last hundred years
   	 });
  	});
	$( function() {
    $( "#join_date" ).datepicker({
     	 changeMonth: true,
     	 changeYear: true,
     	 dateFormat: 'yy-mm-dd'
    });
  	} );  	
  	
	var i = '<?php echo $i; ?>';
	function appendHtml(){
		
		//i++;
		html = '<div id=\"increaseDiv_'+i+'\">';
		html += '<div class="col-md-12">';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
							<?php
								$codeArr = array(
									"1" => "P001",
									"2" => "P002",
									"3" => "P003",
									"4" => "P004",
									"5" => "P005",
									"6" => "P006",
									"7" => "P007",
									"8" => "P008",
									"9" => "P009",
								);			
							?>
		html +='					<select name="code" id=\"code_'+i+'\" class="form-control">';
		html +='						<option value=""> Select Caste</option>';
								<?php foreach($codeArr as $key => $val){ ?>
		html +='						<option value="<?php echo $key; ?>"><?php echo $val; ?></option>';
								<?php } ?>
		html +='					</select>';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
							<?php
								$subArr = array(
									'1' => 'computor',
									'2' => 'Excel',
									'3' => 'HTML/CSS',
									'4' => 'Javascript',
									'5' => 'Viva',
									'6' => 'Practical',
								);			
							?>
		html +='					<select name="subject" id=\"subject_'+i+'\" class="form-control">';
		html +='						<option value=""> Select Caste</option>';
								<?php foreach($subArr as $key => $val){ ?>
		html +='						<option value="<?php echo $key; ?>"><?php echo $val; ?></option>';
								<?php } ?>
		html +='					</select>';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" id=\"marks_obtain_'+i+'\" name="marks_obtain" value="">';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" id=\"min_marks_'+i+'\" name="min_marks" value="40">';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-2">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" id=\"max_marks_'+i+'\" name="max_marks" value="100">';
		html +='				</div>';
		html +='			</div>';
		html +='			<div class="col-md-1">';
		html +='				<div class="form-group">';
		
		html +='					<input class="form-control" type="button" name="Demove" onclick="removeHtml();" value="-">';
		html +='				</div>';
		html +='			</div>';
		html +='		</div>';
		html +='		</div>';
		
		i++;
		
		$(".appendDiv").append(html);
	}
	
	function removeHtml(){
		i--;
		$("#increaseDiv_"+i).remove();
		
	}
	
  	function load_more(course_code)
  	{
		$('#course_name').attr("readonly", true);
  		$.ajax({
        url : "http://www.excelclass.in/erp2/student/ajax_load",
        type: "POST",
        data: 'course_code='+course_code,
        dataType: "JSON",
        success: function(html) {     	
        		$('#course_fee').val(html.course_fee);
        		$('#course_duration').val(html.course_duration);
				$('#tax').val(html.tax);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }
    function all_expense() {
    		var all_qty = $('#qnty').val();
    		var all_amt = $('#amount').val();
    		if (all_qty == '') {
    			all_qty = 1;    			
    		}
    		if (all_amt == '') {
    			all_amt = 1;    			
    		}
    		var all_total = (all_qty * all_amt);
    		$('#total_expense').val(all_total);
    }
	
  $( function() {
    $( "#course_suggest" ).autocomplete({
		maxShowItems: 5,
		source: 'http://www.excelclass.in/erp2/course/suggest_courses'
    });
  } );

  </script>
    



<?php $this->load->view('common/footer');?>