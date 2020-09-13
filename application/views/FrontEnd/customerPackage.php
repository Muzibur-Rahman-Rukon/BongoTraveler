</div>
<br>
<br>
<br>
<br>
<br>
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
    
    
    <table class="table table-bordered" style="margin-bottom: 20%">

  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" style="color:black">User Name</th>
      <th scope="col" style="color:black">Package Name</th>
      <th scope="col" style="color:black">Booked Date</th>
      <th scope="col" style="color:black">Delegate</th>
      <th scope="col" style="color:black">Image</th>
      <th scope="col" style="color:black">Price</th>
      <th scope="col" style="color:black">Time</th>
      <th scope="col" colspan="2" style="color:black">Action</th>
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
      <th scope="row" style="color:black"><?php echo $i++; ?></th>
       <td style="color:black"><?php echo $p->user_name ?></td>
       <td style="color:black"><?php echo $p->package_name ?></td>
       <td style="color:black"><?php echo $p->bookingDate ?></td>
       <td style="color:black"><?php echo $p->delegate ?></td>
      <td style="color:black"><img width="80" height="80px" src="<?php echo base_url('assets/images/'.$p->img) ?>" alt="Card image cap"></td>
      
      <td style="color:black"><?php echo $p->price ?></td>
      <td><span style="color: red"><?php echo $p->time ?></span></td>
<?php

$ck=$p->time;
$endtime = date('Y-m-d H:i:s', strtotime("+05 minutes", strtotime($ck))); 

 ?>
      <?php 
           if ($p->state=='0') {

       ?>
      <td><span style="color:green">Still Pending To Accept By Owner</span></td>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('admin/denyBoPackByCustomer/'.$p->id) ?>">Cancel Order</a></button></td>
      

    <?php }elseif($p->state=='1'){ ?>
      
      
  
      <td><span style="color:green">This Package is Running</span></td>
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