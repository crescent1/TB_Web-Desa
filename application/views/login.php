<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Desa Sentul | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/login.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <!--<img src="<?php echo base_url(); ?>asset/admin/assets/img/logo.png" id="logoimg" alt=" Logo" />-->
    </div>
    <div class="tab-content">
        <!-login----------------------------------------------------------------------------------------------------->
        <div id="login" class="tab-pane active">
            <form method="post" action="<?php echo base_url().'index.php/weladmin/get_login' ?>" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Masukkan username dan password
                </p>
                <input type="text" required="required" placeholder="Username" name="username" class="form-control" />
                <input type="password" required="required" placeholder="Password" name="password" class="form-control" />
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            </form>
        </div>
        
        <!-lupa sandi---------------------------------------------------------------------------------------------------------->
        <!--
        <div id="forgot" class="tab-pane">
            <form action="index.html" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control" />
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
        -->
        <!-daftar---------------------------------------------------------------------------------------------------------->
        <div id="signup" class="tab-pane">
            <form method="post" action="<?php echo base_url().'index.php/weladmin/daftar' ?>" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Buat Admin Baru</p>
                 <input type="text" placeholder="First Name" name="nama_depan" class="form-control" />
                 <input type="text" placeholder="Last Name" name="nama_belakang" class="form-control" />
                <input type="text" placeholder="Username" name="username" class="form-control" />
                <input type="email" placeholder="Your E-mail" name="email" class="form-control" />
                <input type="password" placeholder="password" name="password" class="form-control" />
                <!--<input type="password" placeholder="Re type password" class="form-control" />-->
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
    <!------------------------------------------------------------------------------------------------------>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <!--<li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li> -->
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="<?php echo base_url(); ?>asset/admin/assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
