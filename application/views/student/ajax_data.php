<div class="col-md-6">
   <div class="form-group">
   	<label>Aadhar Number</label>
      <input class="form-control" name="mobile" value="<?php echo set_value('mobile'); ?>">
      <?php if(form_error('mobile')) { 
               echo form_error('mobile','<p class="text-danger">','</p>'); 
       } ?>
     </div>
</div>