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
      <th scope="col" style="color:black">Guide Name</th>
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
       <?php 
       $d=$this->modUser->chekGuideInfo($p->guide_id);
       ?>
        <td style="color:black"><?php echo $d->user_name ?></td>
      <?php 
           if ($p->state=='0') {

       ?>
       <td><span style="color:red">Guide yet not accept customer's request</span></td>
      
    <?php }elseif($p->state=='1'){ ?>
      <td><span style="color:green">This Journey is Running</span></td>
      
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