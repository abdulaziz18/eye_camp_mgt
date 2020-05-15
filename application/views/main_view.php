		<?php
			//Display the total number of records on the top of the page 

			//$data['gender'] = $gender;
			

			if(isset($result)){

			$data['result'] = $result;
			echo "<p class='text-danger' style='margin-top: -40px;'>ٽوٽل ريڪارڊس : ".$data['result']->num_rows()."</p>";		
			}else{
				echo "No record found";
			}
		?>


	<div class="row">
		<!-- this is the data entry area -->
		<div class="col-md-3 col-sm-4 text-right">

			<?php 
				if(isset($single_record))
				{
					$data['single'] = $single_record;
					$this->load->view('templates/opd_update_form',$data); 	
				}else if(isset($opd_insert))
				{
					$this->load->view("templates/$opd_insert",$data); 
				}else if(isset($load_patient))
				{
					$data['opd_single'] = (isset($opd_single))?$opd_single:NULL;
					
					$this->load->view("operation_view/$load_patient",$data);
				}
			?>

		</div>

<!-- this is the record showing div -->
		<div class="col-md-9 col-sm-8 text-right">	
		
			<div class="table-container">
				
				<?php 
					if(isset($opt_display)){

						$this->load->view("operation_view/$opt_display",$data); 	
					}else{
						$this->load->view('templates/opd_records',$data); 
					}
						

				?>

			</div> <!-- table overflow container -->

		</div><!-- record showing div ends here -->

	</div><!-- End of row -->
	

