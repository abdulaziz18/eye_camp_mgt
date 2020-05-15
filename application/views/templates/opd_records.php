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
				<th>تبديلي ڪريو</th>
			</thead>
			<tr>
<?php
	if($result->num_rows() > 0 ){
		foreach($result->result() as $patient):
?>
				<td><?php echo $patient->id; ?></td>
				<td><?php echo $patient->pname; ?></td>
				<td><?php echo $patient->fname; ?></td>
				<td><?php echo $patient->caste; ?></td>
				<td><?php echo $patient->age; ?></td>
				<td><?php echo $patient->gender; ?></td>
				<td>-</td>
				<td><?php echo $patient->city; ?></td>
				<td>
				<a class="btn btn-sm btn-primary text-light" href="<?php echo base_url()."opd/update/$patient->id"; ?>">اضافو</a>

				<button class="btn btn-sm btn-danger text-light" onclick="delete_opd(this);" id="<?php echo $patient->id; ?>">ڊاهيو  <i class="fa fa-"></i></button>
				
				<button class="btn btn-sm btn-warning" onclick="print_report(this)" id="<?php echo $patient->id; ?>">پرنٽ او پي ڊي فارم</button>		
				</td>
			</tr>
<?php 
		endforeach;

	}else{
		echo "No record";
	}

?>

</table>
