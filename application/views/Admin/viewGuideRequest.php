<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <br>

      <center>
      <h2 >Guide Request</h2>
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
      
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">User Name</th>
      <th scope="col">Nationality</th>
      <th scope="col">Address</th>
      <th scope="col">Mobaile</th>
      <th scope="col">Guide Area</th>
    
     
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $i=1;
        if ($allUser) {
          # code...
       
        foreach ($allUser as $p) {
          # code...
       

     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
       <td><?php echo $p->name ?></td>
      <td><img width="80" height="80px" src="<?php echo base_url('assets/images/'.$p->pic) ?>" alt="Card image cap"></td>
      <td><?php echo $p->user_name ?></td>
      <td><?php echo $p->nationality ?></td>
      <td><?php echo $p->address ?></td>
      <td><?php echo $p->mobailenumber ?></td>
      <td><?php echo $p->area ?></td>
      <td><button class="btn btn-success"><a style="color:#ffff" href="<?php echo base_url('admin/updateStateForGR/'.$p->id) ?>">Accept</a></button></td>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/deleteGuideRequest/'.$p->id) ?>">Delete</a></button></td>
      
    </tr>
<?php }
} ?>
  </tbody>
</table>
  </div>
</div>