<div style="margin-top: -30px;">
<h1 style="display: inline-block;">	 آپريشن :   &nbsp;&nbsp;&nbsp;&nbsp;</h1>
	 ساڄي اک   
	 <input type="checkbox" name="right_eye" value="True">&nbsp;&nbsp;&nbsp;&nbsp;
	  کاٻي اک
	<input type="checkbox" name="left_eye" value="True"></h1>
</div>
</form>

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
				<th>تبديلي ڪريو</th>
			</thead>
			<tr>
<?php
	if($result->num_rows() > 0 ){
		foreach($result->result() as $patient):
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
				<td>
				<a class="btn btn-sm btn-primary text-light" href="<?php echo base_url() ."operation/update/$patient->opt_id"; ?>">اضافو</a>

				<button class="btn btn-sm btn-danger text-light" onclick="_delete(this);" id="<?php echo $patient->opt_id; ?>">ڊاهيو  <i class="fa fa-"></i></button>
				
				<button class="btn btn-sm btn-warning" onclick="print_operation(this)" id="<?php echo $patient->opt_id; ?>">پرنٽ  آپريشن فارم</button>	
				
				</td> 
			</tr>
<?php 
		endforeach;

	}else{
		echo "No record";
	}

?>

</table>
	
</div>

