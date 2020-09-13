<div class="container">
  <div class="row">
    <div style="margin-top:30px;margin-left: 150px;">

  <?php echo form_open_multipart('Admin/packageAdd','','') ?>
  <h2>Add Package</h2>
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
    <label>Package Name</label>
    <input type="text" name="package_name" class="form-control">
</div>


   <label for="pic">Image</label>
  <div class="form-group">
        <?php echo form_upload('img','',''); ?>
      </div>


<div class="form-group">
    <i class="ti-pencil-alt2 menu-icon"></i>
  <label for="exampleFormControlTextarea1">Description</label>
  <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10" name="body"></textarea>
</div>

<div class="form-group">
        <?php echo form_submit('Add Package','Add Package','class="btn btn-primary"'); ?>
      </div>
      



</div>
  </div>
</div>