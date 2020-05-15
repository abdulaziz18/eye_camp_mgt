<!DOCTYPE html>
<html>
<head>
	<title>Operation Report</title>
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
			
			
			
		}
		.name_field{
			text-decoration: underline;
			font-size: 18px;
		}

		.eye_operation_area{	
		   border: 1px solid black;
		    width: 400px;
		    float: left;
		    height: 100px;
		    margin-left: 20px;
		}
		.opt{
			 float: right;
 			  margin: 10px
		}

		.eye_box{
			width: 300px;
    		margin-top: 36px;
		}

		.eye1,.eye2{
			 width: 50px;
    border: 1px solid;
    padding: 6px;
		}

		.last_area{

		}
	</style>
</head>
<body>
<div class="container-fluid" dir="rtl">
	
	<div class="row">
		<div class="col-md-1"></div>


		<div class="col-md-10" style="border:1px solid black; padding:3px; height: 900px;" >

			<h1 style="font-size:40px!important;" class="text-center">سرڳواسي دريانومل کيمناڻي ميموريل</h1>

			<br/>
			<br/>
			
			<div class="bg-dark">
				<h1 class="text-light text-center">مفت اکين جي ڪيمپ</h1>
			</div>
			<h1 class="text-center">آپريشن جو اجازت نامو</h1>
			
			<br/>

			<div class="text-right pr-4 pl-4">
				<p>مان   _______________<span class="name_field"><?php echo $result->allowed_name; ?></span>__________________ ماءُ/والد/زال/ڌيءُ   ________________<span class="name_field"><?php echo $result->pname; ?></span>________________ <br/>
				پنهنجي اکين جي آپريشن جي اجازت پنهنجي مرضي سان ڏيان ٿو/ٿي مون کي آپريشن جا سڀ فائدا ۽ نقصان ٻڌايا ويا آهن هر نفعي ۽ نقصان جو مان پاڻ ذميوار آهيان.
				</p>
			</div>

			<br/><br/><br/>
			<div class="eye_operation_area">
				<p class="opt">آپريشن </p>

				<p class="eye_box">ساڄي اک <span class="eye1"><?php echo $result->right_eye; ?></span> 
				کاٻي اک  <span class="eye2"><?php echo $result->left_eye; ?></span>
				</p>
			</div>
			<br/><br/><br/><br/><br/><br/>

		<div class="pl-4">
				<p>آڱوٺي جو نشان  صحيح: _______________________</p>
				<br/>

				<p>اجازت ڏيڻ واري جو نالو : __________<span><?php echo $result->allowed_name; ?></span>_____________</p>

				<p>مريض سان رشتو :  ___________<span><?php echo $result->relation; ?></span>____________</p>
				<p>شناختي ڪارڊ : _______________________</p>	
				
			</div>



			</div>

			
			

			<br>
			<!-- <button id="print" onclick="window.print()">Print this page</button> -->
		</div>


		<div class="col-md-1"></div>
	</div>
</div>
</body>
</html>
