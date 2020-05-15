<!DOCTYPE html>
<html lang="sd">
<head>
	<title>Eye Camp Management System</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="Abdulaziz Ansari">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css">
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<style>
	/*background:url('assets/images/eye_ph.jpg');*/
		.hero{
			background:url('<?php echo base_url(); ?>assets/images/hero.jpg');
			background-size: 50%;
			background-repeat: no-repeat;
			background-size: cover;
			font-size:26px!important;

		}
		.h1-shadow{
			text-shadow: 5px 0px 10px 10px!important;
			text-shadow: #060303 5px 4px 10px;
		}
		
	</style>
</head>
<body>

<div class="container-fluid" dir="rtl">
	<nav class="navbar bg-dark navbar-expand-sm">
		<ul class="navbar-nav navbar-fixed p-1 ">
			<li class="nav-item">

				<a class="nav-link text-light" href="<?php echo base_url();?>opd"><i class="fa  fa-medkit"></i><br/>او پي ڊي </a> 
			</li>

			<li class="nav-item border-r">
				<a class="nav-link text-light" href="<?php echo base_url();?>operation"><i class="fa  fa-ambulance"></i><br/>آپريشن</a>
			</li>
			<li class="nav-item border-r">
				<a class="nav-link text-light" href=""><i class="fa fa-paste"></i><br/>
				مريض جون ٽيسٽون</a>
			</li>
			<li class="nav-item border-r">
				<a class="nav-link text-light" href="<?php echo base_url();?>patient_quantity"><i class="fa fa-list"></i><br/>مريضن جو تعداد</a>
			</li>
			<li class="nav-item border-r">
				<a class="nav-link text-light" href=""><i class="fa fa-user-md"></i><br/>ڊاڪٽر</a>
			</li>
			<li class="nav-item border-r">
				<a class="nav-link text-light" href="<?php echo base_url().'opd/gender_setup'?>"><i class="fa fa-cog"></i><br/>ايپليڪيشن سيٽپ</a>
			</li>
			<li class="nav-item border-r">
				<a class="nav-link text-light" href=""><i class="fa fa-user"></i><br/>سافٽويئر استعمال ڪندڙ</a>
			</li>
			<li class="nav-item border-r">
				<a class="nav-link text-light" href="<?php echo base_url().'home/logout'?>"><i class="fa fa-window-close"></i><br/>ٻاهر</a>

			</li>
		</ul>
	</nav>

	<div class="jumbotron text-center hero">
	<h1 class="text-light h1-shadow" style="font-size: 60px!important;">سرڳواسي دريانو مل کيمناڻي ميموريل مفت اکين جي ڪيمپ</h1>
	 
	</div>

