<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <br>

      <center>
      <h2 >Available Place</h2>
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
      <th scope="col">Place Name</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $i=1;
        foreach ($allGuide as $p) {
          # code...
       

     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
       <td><?php echo $p->place_name ?></td>
      <td><img width="80" height="80px" src="<?php echo base_url('assets/images/'.$p->img) ?>" alt="Card image cap"></td>
       <?php 
          $des = $p->place_description;
          $descri = word_limiter($des, 5);

       ?>
      <td><?php echo $descri ?></td>
      <td><button class="btn btn-success"><a style="color:#ffff" href="<?php echo base_url('admin/editPlace/'.$p->id) ?>">Edit</a></button></td> 
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/deleteGuide/'.$p->id) ?>">Delete</a></button></td>
      
    </tr>
<?php } ?>
  </tbody>
</table>
  </div>
</div>