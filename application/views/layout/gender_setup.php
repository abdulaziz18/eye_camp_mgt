<div class="container" dir="rtl">
	<div class="row">
		<div class="col-md-3"></div>

		<div class="col-md-6">
			<h1 class="text-right">جنس :</h1>
			<form action="<?php echo base_url().'opd/gender_setting'; ?>" method="post">
				<select name="gender" class="form-control">
					<?php if($gender == "مرد"){ ?>
					<option selected>مرد</option>
					<option>عورت</option>
				<?php }else{ ?>
					<option selected>عورت</option>
					<option>مرد</option>
				<?php } ?>
				</select>
				<br/>
				<input type="submit" name="change_gender" class="btn btn-md btn-primary" value="تبديل ڪريو">
			</form>
		</div>
		
		<div class="col-md-3"></div>

	</div>
</div>