<center>
	<button class="btn btn-md btn-primary" id="opd">OPD Patients</button>
	<button class="btn btn-md btn-danger" id="operation">Operation Patients</button>

	<h1 id="opd_no">ٽوٽل او پي ڊي : <?php echo $opd->num_rows(); ?> </h1>
	<h1 id="operation_no">ٽوٽل آپريشن : <?php echo $operation->num_rows(); ?> </h1>
	</center>
<div class="container">
	<div class="row">
		<div class="col-md-12" id="opd_record">
			<table class="table table-sm table-bordered table-hover">
			<thead>
				<th>او پي ڊي</th>
				<th>مريض جو نالو</th>
				<th>پيءُ جو نالو</th>
				<th>ذات</th>
				<th>عمر</th>
				<th>جنس</th>
				<th>ڪارڊ نمبر</th>
				<th>ڳوٺ</th>
			</thead>
			<tr>
<?php
	if($opd->num_rows() > 0 ){
		foreach($opd->result() as $patient):
?>
				<td><?php echo $patient->id; ?></td>
				<td><?php echo $patient->pname; ?></td>
				<td><?php echo $patient->fname; ?></td>
				<td><?php echo $patient->caste; ?></td>
				<td><?php echo $patient->age; ?></td>
				<td><?php echo $patient->gender; ?></td>
				<td>-</td>
				<td><?php echo $patient->city; ?></td>
				
			</tr>
<?php 
		endforeach;

	}else{
		echo "No record";
	}

?>

	</table>


		</div>

<!-- Display Operation record  -->
		<div class="col-md-12" id="operation_record">
			<table class="table table-sm table-bordered table-hover">
			<thead>
				<th>او پي ڊي</th>
				<th>مريض جو نالو</th>
				<th>پيءُ جو نالو</th>
				<th>عمر</th>
				<th>جنس</th>
				<th>ڪارڊ نمبر</th>
				<th>اجازت ڏيندڙ</th>
				<th>رشتو</th>
				<th> ساڄي اک</th>
				<th>کاٻي اک</th>
			</thead>
			<tr>
<?php
	if($operation->num_rows() > 0 ){
		foreach($operation->result() as $patient):
?>
				<td><?php echo $patient->opt_id; ?></td>
				<td><?php echo $patient->pname; ?></td>
				<td><?php echo $patient->fname; ?></td>
				<td><?php echo $patient->age; ?></td>
				<td><?php echo $patient->gender; ?></td>
				<td>-</td>
				<td><?php echo $patient->allowed_name; ?></td>
				<td><?php echo $patient->relation; ?></td>
				<td><?php echo isset($patient->right_eye)?$patient->right_eye:""; ?></td>
				<td><?php echo isset($patient->left_eye)?$patient->left_eye:""; ?></td>
				
			</tr>
<?php 
		endforeach;

	}else{
		echo "No record";
	}

?>

</table>
		</div>


	</div>
</div>

</body>
</html>



<script>
	$(document).ready(function(){
		$('#opd_record').hide();
			$('#opd_no').hide();
			$('#operation_no').hide();
			$('#operation_record').hide();

		$('#opd').click(function(){
			$('#opd_record').fadeIn();
			$('#opd_no').fadeIn();
			$('#operation_no').hide();
			$('#operation_record').fadeOut();
		});

		$('#operation').click(function(){
			$('#operation_record').fadeIn();
			$('#operation_no').fadeIn()
			$('#opd_no').hide()
			$('#opd_record').fadeOut();
		});
	});
</script>