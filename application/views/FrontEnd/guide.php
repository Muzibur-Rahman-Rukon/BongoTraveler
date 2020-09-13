</div>
<br>
<br>
<br>
<br>
<br>
<div class="container">
	<div class="row">
    <?php if ($this->session->userdata('User_type')){ ?>
		
  <?php } elseif ($this->session->userdata('user_name')) {
    # code...
  }  elseif(!$this->session->userdata('logged_in')){ ?>
           <div class="col-lg-8"></div>
    <div class="col-lg-4">
      <div class="card">
  
 
 
  <div class="card-body">
    <a href="<?php echo base_url('home/guidesignin') ?>" class="btn btn-success">Register As A Guide</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a href="<?php echo base_url('home/guidesignin') ?>" class="btn btn-info">Sign in</a>
  </div>
</div>

    </div>
  <?php } ?>
 <div class="col-lg-12" style="margin-bottom: 3%;margin-top:3%">
    <center>
    
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
            
    </center>
 </div>
  <?php 
       if ($allGuide) {
         foreach ($allGuide as $p) {
           # code...
        
   ?>

		<div class="col-lg-4">
			<div class="card" >
  <img class="card-img-top" style="height: 200px" src="<?php echo base_url('assets/images/'.$p->pic) ?>" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title" style="color:green;font-weight: bold"><?php echo $p->name ?></h5></center>
    <h6 class="card-text" style="color:black">Nationality- <?php echo $p->nationality ?></h6>
    <h6 class="card-text" style="color:black">Address- <?php echo $p->address ?></h6>
    <h6 class="card-text" style="color:black">Mobaile- <span style="color:#643153">0<?php echo $p->mobailenumber ?></span> </h6>
    <h6 class="card-text" style="color:black">Guided Area- <span style="color: green;font-weight: bold"><?php echo $p->area ?></span> </h6>
  </div>
 
  <div class="card-body">
    <a href="<?php 
            if($this->session->userdata('id')){
              echo site_url('home/guideBooking/'.$p->id);
            }else{
              echo base_url('home/signin');
            }



     ?>" class="btn btn-primary">Book Him</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
  </div>
</div>
		</div>
  <?php }
  }else{ ?>
    <div class="col-lg-12">
      <span class="card" style="margin-top: 15%;margin-bottom: 15%">
        <div class="alert danger alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <h1 style="color:red"><center>Sorry!No Guide Available There!!</center>  </h1>
  
  
    
</div>
      </span>
      

    </div>
  <?php } ?>
				
				
	</div>
</div>