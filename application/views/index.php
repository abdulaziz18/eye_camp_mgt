
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Eye camp Management system">
  <meta name="author" content="Abdulaziz Ansari">

  <title>Eye Camp Management System - Login</title>

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/custom.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fontawesome/css/all.min.css">
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

  <style>
  body{
    background: url('<?php echo base_url() . 'assets/images/eye_bg.jpg'?>')!important;
    background-size:cover!important;;
    background-repeat: no-repeat!important;;

  }

  h1{
    font-size:40px!important;
  }

</style>
</head>

<body class="bg-dark">

  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <br/>
<div class="text-center"><h1>سرڳواسي دريانومل ميمور يل مفت اکين جي ڪيمپ</h1></div>

    <div class="card card-login mx-auto mt-3">
      <div class="card-header">Login</div>
      <div class="card-body">
        <form method="post" action="<?php echo base_url().'home/login'?>">
          <div class="form-group">
            <div class="form-label-group">
              <label>Email or username :</label>
              <input type="text" class="form-control" name="username" placeholder="Email address" required="required" value="<?php echo set_value('username'); ?>" autofocus="autofocus">
              
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <label>Password :</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required="required">
              
            </div>
          </div>
          
        <div class="form-group">
            <div class="form-label-group">
              <label>Role :</label>
              <select name="role" class="form-control" required>
                <option value="مرد">Entry for male</option>
                <option value="عورت">Entry for female</option>
              </select>
              
            </div>
          </div>


          <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login">
        </form>
        <br/>
        <div class="text-center text-danger">

          <?php 

            if($this->session->flashdata('login_failed')){
              echo $this->session->flashdata('login_failed');
            }
         ?>
          
        </div>
      </div>
    </div>
  
    </div>
    <div class="col-md-3"></div>
    </div> 
  </div>

</body>
</html>
