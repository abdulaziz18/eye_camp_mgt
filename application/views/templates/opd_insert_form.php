<form action="<?php echo base_url(); ?>opd/insert" method="post">
			
			<table>
			<tr>
				<td>مريض جو نالو:</td>
				<td><input type="text" name="pName" class="form-control" placeholder="مريض جو نالو" required></td>
			</tr>
			<tr>
				<td>پيءُ جو نالو:</td>
				<td><input type="text" name="fName" class="form-control" placeholder="پيءُ جو نالو" required></td>
			</tr>
			<tr>
				<td>ذات: </td>
				<td><input type="text" name="caste" class="form-control" placeholder="ذات"></td>
			</tr>
			<tr>
				<td>عمر:</td>
				<td><input type="text" name="age" class="form-control" placeholder="عمر" required></td>
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
			<td><input type="text" name="cnic" class="form-control" placeholder="سڃاڻپ ڪارڊ نمبر"></td>
			</tr>
			<tr>
				<td>ڳوٺ جو نالو:</td>
				<td><input type="text" name="city" class="form-control" placeholder="ڳوٺ جو نالو"></td>
			</tr>
			<tr>
				<td>موبائل نمبر:</td>
				<td><input type="text" name="contact" class="form-control" placeholder="موبائل نمبر"></td>
			</tr>
			<tr>
				<td>تاريخ: </td>
				<td><input type="date" name="date" class="form-control"></td>
			</tr>

			<tr>
			<td>&nbsp;</td>

			<td>
				<br/>
			<input style="width: 220px;" type="submit" name="insert" class="btn btn-md btn-primary" value="محفوظ ڪريو"> </td>
		</tr>
		</table>
		</form>