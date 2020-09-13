<div class="container">
  <div class="row">
    <div class="col-lg-12">
      <br>

      <center>
      <h2 >Booked Package</h2>
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
      <th scope="col">User Name</th>
      <th scope="col">Package Name</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Time</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        $i=1;
        if ($allBookedPackage) {
          # code...
        
        foreach ($allBookedPackage as $p) {
          # code...
       

     ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
       <td><?php echo $p->user_name ?></td>
       <?php 
                        
                        $package_name = $p->package_name;
                         $package_name = word_limiter($package_name, 2);

             ?>
       <td><?php echo $package_name ?></td>
      <td><img width="80" height="80px" src="<?php echo base_url('assets/images/'.$p->img) ?>" alt="Card image cap"></td>
      
      <td><?php echo $p->price ?></td>
      <td><span style="color: red"><?php echo $p->time ?></span></td>
      <?php 
           if ($p->state=='0') {

       ?>
       <?php 
            if ($p->payment_state=='0') {
              # code...
            
        ?>
      <td><button class="btn btn-success"><a style="color:#ffff" href="<?php echo base_url('admin/changeBOState/'.$p->id) ?>">Accept Booking Order</a></button></td>
    <?php }else{ ?>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/changePaymentState/'.$p->id) ?>">Payment Incomplete</a></button></td>
    <?php } ?>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/denyBoPack/'.$p->id) ?>">Deny</a></button></td>
    <?php }elseif($p->state=='1'){ ?>
      <td><span style="color:green">Running With Customer</span></td>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/finishBoPackRunning/'.$p->id) ?>">Finish Running</a></button></td>
      <?php }else{ ?>
      <td><span style="color:green">This Package is Used</span></td>
      <?php } ?>
    </tr>
<?php }
} ?>
  </tbody>
</table>
  </div>
</div>