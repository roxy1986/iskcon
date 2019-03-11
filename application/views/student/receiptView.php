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
	<div class="col-xs-12" >
		<h2 id="name">ISKCON PALWAL</h2>
		<h5>Founder Acharya: HDG A.C. Bhaktivedanta Swami Prabhupada</h5>
		<h4>Chant Hare Krishna and Be Happy</h4>
		<p> Dharam Plaza, Shiv Colony Railway Road, Palwal</p>
		<p> <b>M.</b> 981030 53977 &nbsp; &nbsp; <b> Give a Like us:</b> www.facebook.com/iskconpalwal1</p>
	</div>
	<div class="col-xs-5">
		<p style="text-align:right; margin-top:25px;"> 
			
		</p>
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
	<div class="col-xs-6">Gender</div>
	<div class="col-xs-6">
		<?php 
			if($student_data['gender'] == 1) { 
				echo 'Male'; 
			} else if($student_data['gender'] == 2) { 
				echo 'Female';
			} else if($student_data['gender'] == 3) {
				echo 'Transgender';
			} else {
				echo '';
			}
		?>
	</div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Mobile No.</div>
	<div class="col-xs-6"><?php echo $student_data['phone'];?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Alt. Mobile No.</div>
	<div class="col-xs-6"><?php echo $student_data['alt_mobile'];?></div>
</div>	
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Address.</div>
	<div class="col-xs-6"><?php echo $student_data['address'];?></div>
</div>

<div class="col-xs-12" id="record">
	<div class="col-xs-6">Date of Birth</div>
	<div class="col-xs-6"><?php echo date('d-M-Y', strtotime($student_data['dob'])); ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Email ID</div>
	<div class="col-xs-6"><?php echo $student_data['email']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Chanting</div>
	<div class="col-xs-6"><?php echo $student_data['chanting']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Hearing</div>
	<div class="col-xs-6"><?php echo $student_data['hearing']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Reading Books</div>
	<div class="col-xs-6"><?php echo $student_data['reading_books']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Ashray Member</div>
	<div class="col-xs-6"><?php echo $student_data['ashray_member']; ?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Date of Joining</div>
	<div class="col-xs-6"><?php echo date('d-M-Y', strtotime($student_data['join_date']));?></div>
</div>
<div class="col-xs-12" id="record">
	<div class="col-xs-6">Remark</div>
	<div class="col-xs-6"><?php echo $student_data['remark'];?></div>
</div>

<!--end of block one -->
<div class="col-xs-12"> 
<div class="col-xs-12" style="border-bottom:2px dotted #000; padding:15px 0"></div>
</div>
<!-- start of block tow -->


</page>

</div>
    <!-- /#wrapper -->
</body>
</html>