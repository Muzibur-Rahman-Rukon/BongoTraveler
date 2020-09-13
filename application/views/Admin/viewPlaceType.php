<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <br>

      <center>
      <h2 >Place Type</h2>
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
    </center>
    <br>
    </div>
    
    
    <table class="table table-bordered">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Place Type</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $i=1;
        foreach ($allPlaceType as $p) {
          # code...
       

     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
       <td><?php echo $p->ptype_name ?></td>
      <td><button class="btn btn-success"><a style="color:#ffff" href="<?php echo base_url('admin/editPlaceType/'.$p->id) ?>">Edit</a></button></td> 
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/deletePlaceType/'.$p->id) ?>">Delete</a></button></td>
      
    </tr>
<?php } ?>
  </tbody>
</table>
  </div>
</div>