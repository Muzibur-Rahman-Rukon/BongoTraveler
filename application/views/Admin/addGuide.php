<div class="container">
  <div class="row">
    <div style="margin-top:30px;margin-left: 150px;">
    <!--Material textarea-->

  <?php echo form_open_multipart('Admin/guideAdd','','') ?>
  <h2>Add Guide</h2>
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
<div class="form-group">
              <label style="color:black">Name</label>
              <input type="text" name="name" class="form-control" required="">
            </div>
            <div class="form-group">
              <label style="color:black">Nationality</label>
              <input type="text" name="nationality" class="form-control" required="">
            </div>
            <div class="form-group">
              <label style="color:black">Address</label>
              <input type="text" name="address" class="form-control" required="">
            </div>
            <div class="form-group">
              <label style="color:black">Mobaile Number</label>
              <input type="text" name="mobailenumber" class="form-control" required="">
            </div>
            
            <div class="form-group">
              <label style="color:black">Intended Location For Guide</label>
              <select class="form-control" id="division" name="area">
        <option>Select Place</option>
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
              <input type="text" name="user_name" class="form-control" required="">
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
        <?php echo form_submit('Add Guide','Add Guide','class="btn btn-primary"'); ?>
      </div>
      



</div>
  </div>
</div>