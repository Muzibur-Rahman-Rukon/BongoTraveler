<div class="container">
  <div class="row">
    <div style="margin-top:30px;margin-left: 150px;">
    <!--Material textarea-->

  <?php echo form_open_multipart('Admin/placeAdd','','') ?>
  <h2>Add Place</h2>
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
<input name="addedBy" type="hidden" value="<?php echo $this->session->userdata('name') ?>">
<div class="form-group">
    <label>Place Name</label>
    <input type="text" name="place_name" class="form-control">
</div>
<div class="form-group">
    <i class="ti-pencil-alt2 menu-icon"></i>
  <label for="exampleFormControlTextarea1">Description</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="place_description"></textarea>
</div>
   <label for="pic">Image</label>
  <div class="form-group">
        <?php echo form_upload('img','',''); ?>
      </div>
      


  <div class="form-group">
      <label for="sel1">Place Type</label>
      <select class="form-control" id="division" name="category">
        <option>Select Place</option>
        <?php
    foreach($addPlaceType as $row)
    {
     echo '<option value="'.$row->id.'">'.$row->ptype_name.'</option>';
    }
    ?>
      </select>
  </div>
  <div class="form-group">
              <label style="color:black">Location</label>
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
        <?php echo form_submit('Add Place','Add Place','class="btn btn-primary"'); ?>
      </div>
      



</div>
  </div>
</div>