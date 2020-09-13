</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<center><h1>Our Packages</h1>
        <div id="order_modal" class="modal fade" role="dialog">


<!-- start of order confirm modal -->
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4>Congratulations!</h4>
      </div>
      <div class="modal-body">
        <p> <?php  
          if($this->session->flashdata('order')){ echo $this->session->flashdata('order'); }
          ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
        
      </center>

		</div>
    <?php 
    if ($allPackage) {
      # code...
   
        $i=1;

        foreach ($allPackage as $p) {
          # code...
       

     ?>
            <?php 
          $des = $p->body;
          $descri = word_limiter($des, 20);

       ?>
    

		<div class="col-lg-4">
			<div class="card" style="width: 18rem;">
  <img height="200px" class="card-img-top" src="<?php echo base_url('assets/images/'.$p->img) ?>" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title"><?php echo $p->package_name ?></h5></center>
    <p class="card-text"><?php echo $descri ?></p>
    <center>
      <details>
  <summary style="color:green">See Detail's.</summary>
  <p> -Package Price: <span style="color: #007bff;font-weight: bold"> <?php echo $p->price ?></span></p>
  <p> -Guide :<span style="color: #007bff;font-weight: bold">Free</span></p>
  <p> -Lunch :<span style="color: #007bff;font-weight: bold">Free</span></p>
  <p> -Internet :<span style="color: #007bff;font-weight: bold">Free</span></p>
</details>
    </center>
    <center>
      
    <a style="margin-top: 20px;margin-bottom: 10px" href="<?php 
            if($this->session->userdata('id')){
              echo site_url('home/packageBooking/'.$p->id."/".$this->session->userdata('id'));
            }else{
              echo base_url('home/signin');
            }



     ?>" class="btn btn-primary">Book This Pakage</a>
    </center>
  </div>
</div>
		</div>
		
		<?php }
    } ?>
	</div>
</div>