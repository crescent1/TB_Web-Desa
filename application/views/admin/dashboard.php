﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Dashboard Admin | Desa Sentul</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/bootstrap-fileupload.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->

    <link href="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/fullcalendar-1.6.2/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/calendar.css" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

        <!-- HEADER SECTION ------------------------------------------------------------------------------------------------------------->
        <div id="top">
        

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <header class="navbar-header">
                        <a href="<?php echo base_url();?>" class="navbar-brand">
                        <h4>Lihat Website</h4>            
                        </a>
                    </header>
                <ul class="nav navbar-top-links navbar-right">
                    <!--ADMIN SETTINGS SECTIONS -->
                    
                    

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url().'weladmin/login' ?>"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION ---------------------------------------------------------------------------------------------------------->



    <!-- MENU SECTION --------------------------------------------------------------------------------------------------------------->
       <div id="left" >
            <ul id="menu" class="collapse">

                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel active">
                    <a href="<?php echo base_url(); ?>weladmin/dashboard" >
                        <i class="icon-home"></i> Dashboard
	   
                       
                    </a>                   
                </li>
                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> Slide     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                       &nbsp; <span class="label label-default">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="<?php echo base_url().'weladmin/slider' ?>"><i class="icon-angle-right"></i> Slide Baru </a></li>
                        <li class=""><a href="<?php echo base_url().'weladmin/allslider' ?>"><i class="icon-angle-right"></i> Semua Slide </a></li>
                        
                    </ul>
                </li>
                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle collapsed" data-target="#form-nav">
                        <i class="icon-pencil"></i> Post
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-success">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="form-nav">
                        <li class=""><a href="<?php echo base_url().'weladmin/post' ?>"><i class="icon-angle-right"></i> Post Baru</a></li>
                        <li class=""><a href="<?php echo base_url().'weladmin/allpost' ?>"><i class="icon-angle-right"></i> Semua  Post </a></li>
                        
                    </ul>
                </li>
                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#pagesr-nav">
                        <i class="icon-table"></i> Halaman
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-info">1</span>&nbsp;
                    </a>
                    <ul class="collapse" id="pagesr-nav">
                        <!--<li><a href="<?php echo base_url().'weladmin/page' ?>"><i class="icon-angle-right"></i> Tulis Halaman </a></li>-->
                        <li><a href="<?php echo base_url().'weladmin/allpage' ?>"><i class="icon-angle-right"></i> Semua Halaman </a></li>
                    </ul>
                </li>
                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#chart-nav">
                        <i class="icon-book"></i> Buku Induk
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-danger">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="chart-nav">
                        <li><a href="<?php echo base_url().'weladmin/buku' ?>"><i class="icon-angle-right"></i> Tulis Baru </a></li>
                        <li><a href="<?php echo base_url().'weladmin/allbuku' ?>"><i class="icon-angle-right"></i> Semua Buku Induk</a></li>
                    </ul>
                </li>
                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#error-nav">
                        <i class="icon-picture"></i> Gallery
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                          &nbsp; <span class="label label-warning">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="error-nav">
                        <li><a href="<?php echo base_url().'weladmin/agalery' ?>"><i class="icon-angle-right"></i> Tambah Gambar  </a></li>
                        <li><a href="<?php echo base_url().'weladmin/allgalery' ?>"><i class="icon-angle-right"></i> Semua Gambar  </a></li>
                    </ul>
                </li>
                <!--bbbb---------------------------------------------------------------------------------------------------------------->
                <li class="panel">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#DDL4-nav">
                        <i class=" icon-folder-open-alt"></i> Link Download
	   
                        <span class="pull-right">
                            <i class="icon-angle-left"></i>
                        </span>
                        &nbsp; <span class="label label-warning">2</span>&nbsp;
                    </a>
                    <ul class="collapse" id="DDL4-nav">
                        <li><a href="<?php echo base_url().'weladmin/linkView' ?>"><i class="icon-angle-right"></i> Tambah Link</a></li>
                        <li><a href="<?php echo base_url().'weladmin/alllink' ?>"><i class="icon-angle-right"></i> Semua Link</a></li>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--END MENU SECTION ------------------------------------------------------------------------------------------------------------->
        <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body class="padTop53 " >

   <!-- MAIN WRAPPER -->
    <div id="wrap">


 


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Dashboard </h2>



                    </div>
                </div>

                <hr />
                  <div class="row">
                    <div class="col-lg-12">

                <div class="box">
  <header>
      <h5>Calendar</h5>
  </header>
  <div class="body">
      <div class="row">
	  <div id="calendar" class="col-lg-9"></div>
      </div>
  </div>


            </div>

</div>
                      </div>
                </div>


        </div>
         <!--PAGE CONTENT -->
    </div>

  
    
    
 <!--END MAIN WRAPPER -->

<!-- FOOTER -->
    <div id="footer">
        <p>&copy;  Admin Desa &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->

     <!-- GLOBAL SCRIPTS -->
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

     <!-- PAGE LEVEL SCRIPTS -->\
     <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/jasny/js/bootstrap-fileupload.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/fullcalendar-1.6.2/fullcalendar/fullcalendar.min.js"></script>  
    <script src="<?php echo base_url(); ?>asset/admin/assets/js/calendarInit.js"></script>
        <script>
            $(function () { CalendarInit(); });
        </script>
     <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>

