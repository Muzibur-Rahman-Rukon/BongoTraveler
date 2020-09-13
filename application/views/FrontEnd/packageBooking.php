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
			<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">BKash Payment System</h4>
        </div>
        <div class="modal-body">
          <p>Personal Number:01748613498(Send Money)</p>
          <p>-Type Your User Name And Mobaile Number in Refference</p>
          <p>-Untill Payment Clear,Booking will be on pending</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
			
			<table class="table">
				
  <thead>
    <tr>
    
      <th scope="col">Your Name</th>
      <th scope="col">Package Name</th>
      <th scope="col">Booking Date</th>
      <th scope="col">Delegate</th>
      <th scope="col">Package price(Per Person)</th>
      <th scope="col">Payment Methood</th>
      <th scope="col" colspan="2">Action</th>
    </tr>
  </thead>
  <tbody>
  
    <tr >
    		<?php echo form_open_multipart('admin/bookPackage','','') ?>
<input name="user_id" type="hidden" value="<?php echo $user[0]['id']; ?>">
<input name="package_id" type="hidden" value="<?php echo $package[0]['id']; ?>">
<input name="img" type="hidden" value="<?php echo $package[0]['img']; ?>">
			
			<td style="height: 200px">
		<input class="form-control rounded-0" id="exampleFormControlTextarea1"  name="user_name" value="<?php echo $user[0]['user_name'] ?>" readonly>
			</td>
			<td style="height: 200px">
		<input class="form-control rounded-0" id="exampleFormControlTextarea1"  name="package_name" value="<?php echo $package[0]['package_name'] ?>" readonly >
			</td>
			<td style="height: 200px"><input class="form-control rounded-0" type="" id="to" name="to"/>
				<td style="height: 200px"><input class="form-control rounded-0" type="int"  onkeypress="restrictMinus(event); if(this.value.length==2) return false;" name="delegate" />

			</td>
			<td style="height: 200px">
		<input class="form-control rounded-0" id="exampleFormControlTextarea1"  name="package_price" value="<?php echo $package[0]['price'] ?>" readonly>
			</td>
			<td style="height: 200px">
		
      <select class="form-control" id="myselect" name="payment_methood">
        <option value="1" selected>Cash</option>
        <option value="2">BKash</option>
      </select>
   
			</td>
			
			
			
			
			

				<td>
				<?php echo form_submit('Update','Confirm Booking','class="btn btn-primary"'); ?>
			</td>
			<td >
				<button class="btn btn-danger"><a style="color:#ffff" href="<?php echo base_url('home/package') ?>">Delete</a></button>
			</td>
			<div>
      <?php if ($this->session->flashdata('class')): ?>
        <div class="alert <?php echo $this->session->flashdata('class') ?> alert-dismissible" role="alert">

  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>

  </button>
  <?php echo $this->session->flashdata('message'); ?>
  
    
</div>
              
            <?php endif; ?>
    </div>
			<?php echo form_close(); ?>
		</div>
      
    </tr>

    
  </tbody>
</table>

		</div>
	</div>
</div>

<!-- <label for="from">From</label> 
<input type="text" id="from" name="from"/> 

<label for="to">to</label>  -->
<!-- <input type="text" id="to" name="to"/> -->
<script type="text/javascript">
	$('#myselect').change(function() {
    var opval = $(this).val();
    if(opval=="2"){
        $('#myModal').modal("show");
    }
});
	var dateToday = new Date();
var dates = $("#from, #to").datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "from" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
    }
});
</script>