<form action="<?php echo base_url(); ?>opd/insert" method="post">
	
			<table>
			<tr>
				<input type="hidden" name="id" value="<?php echo $single->id; ?>">
				<td>مريض جو نالو:</td>
				<td><input type="text" name="pName" class="form-control" placeholder="مريض جو نالو" value="<?php echo $single->pname; ?>" required></td>
			</tr>
			<tr>
				<td>پيءُ جو نالو:</td>
				<td><input type="text" name="fName" class="form-control" value="<?php echo $single->fname; ?>" required></td>
			</tr>
			<tr>
				<td>ذات: </td>
				<td><input type="text" name="caste" class="form-control" value=
					"<?php echo $single->caste; ?>"></td>
			</tr>
			<tr>
				<td>عمر:</td>
				<td><input type="text" name="age" class="form-control" value=
					"<?php echo $single->age; ?>" required></td>
			</tr>
			<tr>
				<td>جنس: </td>
				<td><select class="form-control" name="gender" placeholder="جنس">
					<?php if($gender == "مرد"){ ?>
					<option selected>مرد</option>
					<?php }else{ ?>
					<option selected>عورت</option>
					<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
			<td>سڃاڻپ ڪارڊ نمبر: </td>
			<td><input type="text" name="cnic" class="form-control" value=
					"<?php echo $single->cnic; ?>"></td>
			</tr>
			<tr>
				<td>ڳوٺ جو نالو:</td>
				<td><input type="text" name="city" class="form-control" value=
					"<?php echo $single->city; ?>"></td>
			</tr>
			<tr>
				<td>موبائل نمبر:</td>
				<td><input type="text" name="contact" class="form-control" value=
					"<?php echo $single->contact; ?>"></td>
			</tr>
			<tr>
				<td>تاريخ: </td>
				<td><input type="date" name="date" class="form-control"><br/></td>
			</tr>

			<tr>
			<td>&nbsp;</td>

			<td>
			<input style="width: 220px;" type="submit" name="update" class="btn btn-md btn-primary" value="اضافو ڪريو"> </td>
		</tr>
		</table>
		</form>