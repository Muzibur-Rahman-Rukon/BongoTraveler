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
      <th scope="col" style="color:black">Pic</th>
      <th scope="col" style="color:black">Mobaile Number</th>
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
     <?php 
       $d=$this->modUser->chekUserInfo($p->user_id);
       ?>
    <tr>
      <th scope="row" style="color:black"><?php echo $i++; ?></th>
       <td style="color:black"><?php echo $p->user_name ?></td>
       <td style="color:black"><img width="80" height="80px" src="<?php echo base_url('assets/images/'.$d->pic) ?>" alt="Card image cap">
       </td>
       <td style="color:black"><?php echo $d->mobaile_number ?></td>
       
      <?php 
           if ($p->state=='0') {

       ?>
       <td><button class="btn btn-info"><a style="color:#ffff" href="<?php echo base_url('home/acceptRequestOfCustomer/'.$p->id) ?>">Accept</a></button></td>
      <td><button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('home/deleteRequestOfCustomer/'.$p->id) ?>">Ignore</a></button></td>
      
    <?php }elseif($p->state=='1'){ ?>
      <td><span style="color:green">You are now with this customer</span></td>
      <td><button class="btn btn-success"><a style="color:#ffff" href="<?php echo base_url('home/guideServiceToSuccess/'.$p->id) ?>">Finish</a></button></td>
      <?php }else{ ?>
      <td><span style="color:green">This contact is Successfull</span></td>
      <?php } ?>
    </tr>
<?php }
} ?>
  </tbody>
</table>
  </div>
</div>