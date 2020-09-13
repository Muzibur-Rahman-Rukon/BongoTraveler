<div class="content-wrapper">
	<div class="row padtop">
		
		<div class="col-md-6 col-md-offset-2" style="margin-left: 150px;margin-top: 30px">
			<h2>Edit Guide</h2>
			<?php echo form_open_multipart('admin/updateGuide','','') ?>
<input name="id" type="hidden" value="<?php echo $allGuide[0]['id']; ?>">
           <div class="form-group">
							<label style="color:black">Name</label>
							<input type="text" name="name" class="form-control" required="" value="<?php echo $allGuide[0]['name'] ?>">
			</div>
			
			<div class="form-group">
							<label style="color:black">Nationality</label>
							<input type="text" name="nationality" class="form-control" required="" value="<?php echo $allGuide[0]['nationality'] ?>">
						</div>
			<div class="form-group">
							<label style="color:black">Address</label>
							<input type="text" name="address" class="form-control" required="" value="<?php echo $allGuide[0]['address'] ?>">
						</div>
						<div class="form-group">
							<label style="color:black">Mobaile Number</label>
							<input type="text" name="mobailenumber" class="form-control" required="" value="<?php echo $allGuide[0]['mobailenumber'] ?>">
						</div>
						<div class="form-group">
							<label style="color:black">Location</label>
							<select class="form-control" id="division" name="area">
        <option><?php echo $allGuide[0]['area'] ?></option>
        <?php
    foreach($allLocation as $row)
    {
     echo '<option value="'.$row->city_name.'">'.$row->city_name.'</option>';
    }
    ?>
      </select>
						</div>
						<div class="form-group">
							<label style="color:black">User Name</label>
							<input type="text" name="user_name" class="form-control" required="" value="<?php echo $allGuide[0]['user_name'] ?>">
						</div>
			<div class="form-group">
				
				<img width="200px" height="150px" src="<?php echo base_url('assets/images/'.$allGuide[0]['pic']) ?>" alt="Card image cap">
			</div>
			
  <div class="form-group">

    <label for="pic">Your Photo</label>
    <input type="file" class="form-control" id="pic" name="pic">

  </div>
						<div class="form-group">
							<label style="color:black">Password</label>
							<input type="password" name="password" class="form-control" required="">
						</div>
      
			
			
			

			<div class="form-group">
				<?php echo form_submit('Update','Update','class="btn btn-primary"'); ?>
			</div>
			<div>
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
    </div>
			<?php echo form_close(); ?>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>