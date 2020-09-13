</div>
<br>
<br>
<br>
<br>
<br>

<dir class="col-lg-12" ><center><h3 style="color: #563d7c;">Explore Best Place From Beautiful Bangladesh</h3></center></dir>
<div class="container">
	<div class="row">
		<?php 
		$divCount=0;
                 if ($allPlace) {

                 	foreach ($allPlace as $p) {
                 	
			 ?>
		<div class="col-lg-8">
			<span class="card" style="margin-bottom: 2%">
				<img style="width: 700px;height: 300px" src="<?php echo base_url('assets/images/'.$p->img) ?>">
			<center><h5><?php echo $p->place_name ?></h5></center>
			<h3 style="color:black"><?php echo $p->place_name ?></h3>
			<p  style="color:black"><?php echo $p->place_description ?>
			<p><a href="<?php echo base_url('home/fetchGuideByPlaceName/'.$p->area) ?>" class="btn btn-primary" style="margin-bottom: 15px">Contract Our Local Guide</a></p>
			</span>
			

		</div>
		<div class="col-lg-4">
			<?php 
                if ($divCount==0) {
                	# code...
                
			 ?>
			<br>
			<h3 style="color: #563d7c;margin-top: 8%">Different Type of Place</h3>
		<ul class="list-group list-group-flush" style="color:black">
				<?php if ($placeType) {
					foreach ($placeType as $p) {
						
				 ?>
		<li class="list-group-item" style="font-weight: bold;color:black"><a style="color: black" href="<?php echo base_url('home/fetchCatById/'.$p->id) ?>"><?php echo $p->ptype_name; ?></a></li>
				
			
		<?php }
		} ?>
		</ul>

	<?php $divCount++;
} ?>
		</div>
	<?php }
	}else{ ?>
		<div class="col-lg-8">
			<span class="card" style="margin-top: 10%">
				<div class="alert danger alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <h3 style="color:red">Sorry!This Type Of Place Not Exist's Now!! </h3>
  
  
    
</div>
			</span>
			

		</div>
				<div class="col-lg-4">
			<?php 
                if ($divCount==0) {
                	# code...
                
			 ?>
			<br>
			<h3 style="color: #563d7c;margin-top: 8%">Different Type of Place</h3>
		<ul class="list-group list-group-flush" style="color:black">
				<?php if ($placeType) {
					foreach ($placeType as $p) {
						
				 ?>
		<li class="list-group-item" style="font-weight: bold;color:black"><a style="color: black" href="<?php echo base_url('home/fetchCatById/'.$p->id) ?>"><?php echo $p->ptype_name; ?></a></li>
				
			
		<?php }
		} ?>
		</ul>

	<?php $divCount++;
} ?>
		</div>
	<?php } ?>
	</div>
</div>