<!DOCTYPE html>
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
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/main.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/theme.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/admin/assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">
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



  
        <!--PAGE CONTENT -->
        <div id="">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Semua Slider </h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th >Id Slide</th>
                                            <th >Judul Slide</th>
                                            <th >Alamat Gambar</th>
                                            <th >Pesan Slide</th>
                                            <th >Edit</th>
                                            <th >Delete</th>
                                        </tr> 
                                    </thead>
                                    <tbody>
                                        <?php foreach($gambarHeader as $row){?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $row->id_slide;?></td>
                                            <td class="center"><?php echo $row->judul_slide;?></td>
                                            <td class="center"><img src="<?php echo base_url().'asset/images/slider/'.$row->gambar_slide.''?>" style="width:300px"></td>
                                            <td class="center"><?php echo $row->pesan_slide;?></td>
                                            <td class="center">
                                                <div class="col-lg-8">
                                                    <a href="<?php echo base_url().'index.php/file_upload/editslider/'.$row->id_slide; ?>" class="btn btn-danger btn-sm btn-grad">Edit</a>
                                                </div>
                                            </td>
                                            <td class="center">
                                                <div class="col-lg-8">
                                                    <a href="<?php echo base_url().'index.php/file_upload/slide_delete/'.$row->id_slide.'' ?>" class="btn btn-danger btn-sm btn-grad">Delete</a>
                                                </div>
                                            </td>
                                            
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                                <a href="<?php echo base_url().'weladmin/dashboard/' ;?>" class="btn btn-primary btn-sm btn-grad">Back to Dashboard</a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
            
            </div>




        </div>
       <!--END PAGE CONTENT -->


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
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>asset/admin/assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
    <!-- END BODY -->
</html>