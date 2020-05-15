<br/>
<footer class="text-center bg-dark text-light p-2">
سڀ حق ۽ واسطا محفوظ آهن  |  <span> ڊولپر : عبدالعزيز انصاري</span>
</footer>
</div>


	<script>	

		//Following functions have been used in Operation records page
		function print_report(report) {
  		window.open("<?php echo base_url();?>opd/report/"+report.id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=600,height=800");
  
		}
	
		function print_operation(report) {
 		 window.open("<?php echo base_url();?>operation/report/"+report.id, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=700,height=800");
  
		}
		function _delete(rec){

		var resp = confirm('ڇا توهان هي ريڪارڊ ختم ڪرڻ چاهيو ٿا ؟');
		if(resp){
			window.location.href="<?php echo base_url();?>operation/delete/"+rec.id;
			
		}else{
			console.log('cancelled');
		}

		return false;
		};
		//Ends Operation records function


		//This jQuery code is used in opt_insert_form page
			$(document).ready(function(){
				$('#load_patient').click(function(e){
					e.preventDefault();

					var patient_id = $("#p_id").val();
					if(patient_id ==""){
						alert('برائي مهرباني...مريض جو او پي ڊي نمبير داخل ڪندا');
					}else{
						window.location.href="<?php echo base_url();?>operation/load_patient/"+patient_id;	
					}
					
					
				});

				var date = $('#date').val("22/22/2020");

				
			}); //Ends here



	//this function is used in OPD Display Record page
		function delete_opd(rec){

		var resp = confirm('ڇا توهان هي ريڪارڊ ختم ڪرڻ چاهيو ٿا ؟');
		if(resp){
			window.location.href="<?php echo base_url();?>opd/delete/"+rec.id;
			
		}else{
			console.log('cancelled');
		}

		return false;
	};



	</script>
</body>
</html>


