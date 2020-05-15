
<?php
if(isset($opd_single)){
	$opt_id = $opd_single->opt_id;
	$pName = $opd_single->pname;
	$fName = $opd_single->fname;
	$gender = $opd_single->gender;
	$age = $opd_single->age;
	$allowed_name = $opd_single->allowed_name;
	$relation = $opd_single->relation;

}

?>
<form action="<?php echo base_url(); ?>operation/insert" method="post">
			<table>
			<tr>
				<td>آپريشن نمبر</td>
				<td>
					<input type="hidden" name="opt_id" value="<?php echo $opd_single->opt_id;?>">

					<input type="text" name="opd_id" class="form-control" placeholder="OPD Id" id="p_id" style="width: 95px; display: inline-block;" require>
				<button class="btn btn-sm btn-info" id="load_patient">Load Patient</button>
				</td>
				
			</tr>
			<tr>
				<td>مريض جو نالو:</td>
				<td><input type="text" name="pName" class="form-control" placeholder="مريض جو نالو" value="<?php echo (isset($pName))?$pName:""; ?>" required></td>
			</tr>
			<tr>
				<td>پيءُ جو نالو:</td>
				<td><input type="text" name="fName" class="form-control" placeholder="پيءُ جو نالو" value="<?php echo (isset($fName))?$fName:""; ?>"required></td>
			</tr>
			
			<tr>
				<td>عمر:</td>
				<td><input type="text" name="age" class="form-control" placeholder="عمر" value="<?php echo (isset($age))?$age:""; ?>" required></td>
			</tr>
			<tr>
				<td>جنس: </td>
				<td>
					<select class="form-control" name="gender" placeholder="جنس">
					<?php if($gender == "مرد"){ ?>
					<option selected>مرد</option>
					<?php }else{; ?>
					<option>عورت</option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
			<td>سڃاڻپ ڪارڊ نمبر: </td>
			<td><input type="text" name="cnic" class="form-control" placeholder="سڃاڻپ ڪارڊ نمبر"></td>
			</tr>
			<tr>
				<td>اجازت ڏيندڙ</td>
				<td><input type="text" name="allow_name" class="form-control" placeholder="اجازت ڏيندڙ جو نالو" value="<?php echo $allowed_name; ?>"></td>
			</tr>
			<tr>
				<td>رشتو :</td>
				<td><input type="text" name="relation" class="form-control" placeholder="مريض سان رشتو" value="<?php echo $relation; ?>"></td>
			</tr>
			<tr>
				<td>تاريخ: </td>
				<td><input type="date" id="date" name="date" class="form-control"></td>
			</tr>

			<tr>
			<td>&nbsp;</td>
			
			<td><br/>
			<input style="width: 220px;" type="submit" name="update" class="btn btn-md btn-primary" value="اضافو ڪريو"> </td>
		</tr>
		</table>
		

		<script>
			
		</script>