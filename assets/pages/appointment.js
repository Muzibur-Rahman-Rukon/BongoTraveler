/*
 Template Name: Doctorist - Patient Management System
 Author: Lndinghub(Themesbrand)
 File: Appointment
 */
	$(document).ready(function(){
        
        $('.dt').on('change',function(){
        	//alert();
        	$("#btn_create").removeAttr('disabled');
        }); 

        $('#btn_create').on('click',function(e){
        	e.preventDefault();
        	var p_id = $('#myselect2').val();
        	var date = $('#datepicker-autoclose').val();
        	var time = $('#timepicker1').val();
        	//alert(time);

        	$.ajax({
				type:'POST',
				url:'../user_operation/chkappointment',
				dataType:'json',
				data:{p_id:p_id,
					  date:date,
					  time:time
					 },
				success: function(data){
						if(data.status == 1)
						{
							$(".status").css('color','red');
							$(".status").text("Appointment booked on this day");
							$("#btn_create").prop('disabled','true');
							//console.log('success');
						}
						else if(data.status == 2)
						{
							$(".status").css('color','red');
							$(".status").text("Time slot allocated to other patient");
						}
						else
						{
							$(".status").css('color','green');
							$(".status").text("Appointment booked Successfully");	
						}
				},
				error:function(data)
				{
					alert('oops! Something Went Wrong!!!');
				}
			});
        });

    });
