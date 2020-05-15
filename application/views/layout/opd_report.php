<!DOCTYPE html>
<html>
<head>
	<title>OPD Report</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">

	<style>
		.rep-line-space{
			line-height: 18px;
			font-size: 18px;
		}
		.eye_box{
			border:1px solid black;
			
			
		}
	</style>
</head>
<body>
<div class="container-fluid" dir="rtl">
	
	<div class="row">
		<div class="col-md-3"></div>


		<div class="col-md-6" style="border:1px solid black; padding:3px; height: 700px;" >

			<h1 style="font-size:40px!important;" class="text-center">سرڳواسي دريانومل کيمناڻي ميموريل</h1>

			<br/>
			<br/>
			
			<div class="bg-dark">
				<h1 class="text-light text-center">مفت اکين جي ڪيمپ</h1>
			</div>

			

			<div class="rep-line-space text-right pr-4 pl-4">
				<p style="display:inline-block;"> او پي ڊي نمبر  :   <span><?php echo $result->id; ?></span></p>
				<p  style="float:left;" class="">تاريخ : <span><?php echo date("Y-m-d",strtotime($result->date)); ?></span></p>
			</div>

			<div class="rep-line-space text-right pr-4 pl-4">
				<p style="display:inline-block;"> مريض جو نالو : 
					<span><?php echo $result->pname; ?></span></p>
				<p  style="float:left" dir="rtl"> پيءُ/مڙس جو نالو : 
					<span><?php echo $result->fname; ?></span></p>
			</div>


			<div class="rep-line-space text-right pr-4 pl-4">
				<p style="display:inline-block;"> جنس : <span><?php echo $result->gender; ?></span></p>
				<p  style="float:left">عمر: <span><?php echo $result->age; ?></span></p>
			</div>


			<div class="rep-line-space pr-4 pl-4">
			<p class="text-right">ڳوٺ : <span><?php echo $result->city; ?></span></p>
			</div>

			<hr style="background: black;" class="mb-1">
			<div>
				<p class="text-right pr-4">آپريشن :

					&nbsp;	&nbsp;ساڄي اک : 	
					<span class="eye_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>

					&nbsp;	&nbsp; کاٻي اک :	

					<span class="eye_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</p>
			
			</div>
			<hr style="background: black;">
			<div>
				<p class="ml-4" style="display: inline-block;"> Prescription </p>
				<p class="mr-4" style="float:right;"> ٽيسٽون : </p>
			</div>
			
			<div style="float:right;">
				
				<p> شگر:  
					<span class="eye_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</p>
				<p> بلڊ پريشر :  
					<span class="eye_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</p>
				<p> هيپاٽائيٽس :  
					<span class="eye_box">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
				</p>
			</div>

	


			<br>
			<!-- <button id="print" onclick="window.print()">Print this page</button> -->
		</div>


		<div class="col-md-3"></div>
	</div>
</div>
</body>
</html>
