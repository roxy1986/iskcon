<?php $this->load->view('common/header');?>  
<style type="text/css">
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
  button { display:none;}
}

#name{
	font-weight: bold;
}
#copyname{
	
	font-weight: bold;
}
#record {
	padding-top: 6px;
}
</style> 
<button onclick="window.print();">Print</button>
<page size="A4">
<div class="col-xs-12" >
	<div class="col-xs-7" >
		<h2 id="name">Excel Computer Classes</h2>
		<p>1st Floor Dharam Plaza, Shiv Colony Railway Road, Palwal</p>
		<p> <b>M.</b> 9991 252 252 &nbsp; &nbsp; <b> Website:</b> www.excelclass.in</p>
	</div>
	<div class="col-xs-5">
		<p style="text-align:right; margin-top:25px;"> Fee Receipt( Student Copy)</p>
		<p style="text-align:right; font-weight:bold;"> TID: ----</p> 
		<p style="text-align:right; font-weight:bold;">Date: <?php echo date('d-M-Y', strtotime($receipt_data['deposite_date']));?></p>
	</div>
	<div class="col-xs-12" style="border-bottom:2px solid #ccc;"></div>	
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Enrollment Number</div>
	<div class="col-xs-6"><?php echo $student_data['enrollment'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Student Name</div>
	<div class="col-xs-6"><?php echo $student_data['student_name'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Father’s Name</div>
	<div class="col-xs-6">Shri <?php echo $student_data['father_name'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Code</div>
	<div class="col-xs-6"><?php echo $student_data['course_code'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Name</div>
	<div class="col-xs-6">
		<?php
				$ci =&get_instance();
            $ci->load->model('Enquiry_model');
            echo $ci->Enquiry_model->course_name($student_data['course_code']);
      ?>  	
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Total Fee</div>
	<div class="col-xs-6">&#8377; <?php echo $student_data['amount_to_paid'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Amount</div>
	<div class="col-xs-6">&#8377; <?php echo $receipt_data['amount'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Balance</div>
	<div class="col-xs-6">&#8377; <?php echo $student_data['amount_to_paid'] - $amount_deposited; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Due Date</div>
	<div class="col-xs-6"><?php echo date('d-M-Y', strtotime($receipt_data['due_date']));?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Remark</div>
	<div class="col-xs-6"><?php echo $receipt_data['remark'];?></div>
</div>

<div class="col-xs-12" > <div class="col-xs-12" style="border-bottom:2px solid #ccc; padding-bottom:6px; padding-top:20px;">&nbsp;</div> </div>
<div class="col-xs-12" style="padding-top:10px;">
	<div class="col-xs-8">
		<p>Make all checks payable to EXCEL COMPUTER CLASSES</p>	
		<p><b>Thank you for your business!</b></p>	
		<p style="text-align:right;">Authorize Signatory</p>	
	</div>
	<div class="col-xs-4" style="text-align:right;">
		<?php 	echo '<img src="'.base_url().'tes.png" />'; ?>
	</div>
</div>
<!--end of block one -->
<div class="col-xs-12"> 
<div class="col-xs-12" style="border-bottom:2px dotted #000; padding:15px 0"></div>
</div>
<!-- start of block tow -->

<div class="col-xs-12" >
	<div class="col-xs-7" >
		<h2 id="name">Excel Computer Classes</h2>
		<p>1st Floor Dharam Plaza, Shiv Colony Railway Road, Palwal</p>
		<p> <b>M.</b> 9991 252 252 &nbsp; &nbsp; <b> Website:</b> www.excelclass.in</p>
		
	</div>
	<div class="col-xs-5">
		<p style="text-align:right; margin-top:25px;"> Fee Receipt(Centre Copy)</p>
		<p style="text-align:right; font-weight:bold;"> TID: -----</p> 
		<p style="text-align:right; font-weight:bold;">Date: <?php echo date('d-M-Y', strtotime($receipt_data['deposite_date']));?></p>
		</div>
	<div class="col-xs-12" style="border-bottom:2px solid #ccc;"></div>	
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Enrollment Number</div>
	<div class="col-xs-6"><?php echo $student_data['enrollment'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Student Name</div>
	<div class="col-xs-6"><?php echo $student_data['student_name'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Father’s Name</div>
	<div class="col-xs-6">Shri <?php echo $student_data['father_name'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Code</div>
	<div class="col-xs-6"><?php echo $student_data['course_code'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Course Name</div>
	<div class="col-xs-6">
		<?php
				$ci =&get_instance();
            $ci->load->model('Enquiry_model');
            echo $ci->Enquiry_model->course_name($student_data['course_code']);
      ?>  	
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Total Fee</div>
	<div class="col-xs-6"> &#8377; <?php echo $student_data['amount_to_paid'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Amount</div>
	<div class="col-xs-6">&#8377; <?php echo $receipt_data['amount'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Balance</div>
	<div class="col-xs-6">&#8377; <?php echo $student_data['amount_to_paid'] - $amount_deposited; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Due Date</div>
	<div class="col-xs-6"> <?php echo date('d-M-Y', strtotime($receipt_data['due_date']));?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Remark</div>
	<div class="col-xs-6"><?php echo $receipt_data['remark'];?></div>
</div>

<div class="col-xs-12" > <div class="col-xs-12" style="border-bottom:2px solid #ccc; padding-bottom:6px; padding-top:20px;">&nbsp;</div> </div>
<div class="col-xs-12" style="padding-top:10px;">
	<div class="col-xs-8">
		<p>Make all checks payable to EXCEL COMPUTER CLASSES</p>	
		<p><b>Thank you for your business!</b></p>	
		<p style="text-align:right;">Authorize Signatory</p>	
	</div>
	<div class="col-xs-4" style="text-align:right;">
		<?php echo '<img src="'.base_url().'tes.png" />'; ?>
	</div>
</div>
<!-- end of page -->
</page>

</div>
    <!-- /#wrapper -->
</body>
</html>