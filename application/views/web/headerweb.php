<!DOCTYPE html>
<!--
Template Name: Academic Education V2
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Desa Sentul | portal desa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url(); ?>/asset/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<div id="fb-root"></div>

<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
  

<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="<?php echo base_url().'index.php' ?>">|Home|</a></li>
        <!--<li><a href="<?php echo base_url().'weladmin/login' ?>">Login Admin</a></li>-->
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="<?php echo base_url(); ?>index.php">DESA SENTUL</a></h1>
      <p>Portal Resmi Desa Sentul</p>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <!--menu home--------------------------------------------------------------------->
        <li class="active"><a href="<?php echo base_url(); ?>index.php">Home</a></li>
        <!--menu tentang desa------------------------------------------------------------->
        <li><a class="drop" href="#">Tentang Desa</a>
          <ul>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/2">Sejarah Desa</a></li>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/3">Biografi Kepala Desa</a></li>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/4">Susunan Organisasi</a></li>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/5">Visi dan Misi </a></li>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/6">Keadaan Ekonomi</a></li>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/7">Keadan Demografis</a></li>
            <li><a href="<?php echo base_url(); ?>halamanControler/desa/8">Potensi Desa</a></li>
            <!--<li><a href="asset/pages/sidebar-right-2.html">Sidebar Right 2</a></li>-->
            <!--<li><a href="asset/pages/basic-grid.html">Basic Grid</a></li>-->
          </ul>
        </li>
        
        <!--menu drop down---------------------------------------------------------------->
        <!--
        <li><a class="drop" href="#">Dropdown</a>
          <ul>
            <li><a href="#">Level 2</a></li>
            <li><a class="drop" href="#">Level 2 + Drop</a>
              <ul>
                <li><a href="#">Level 3</a></li>
                <li><a href="#">Level 3</a></li>
              </ul>
            </li>
          </ul>
        </li>-->
        <!--menu agenda------------------------------------------------------------------->
        <li><a href="<?php echo base_url(); ?>weltemplate/agenda">AGENDA dan INFORMASI</a></li>
        <!--menu galery------------------------------------------------------------------->
        <li><a href="<?php echo base_url(); ?>weltemplate/galery">GALERY</a></li>
        <!--menu blog--------------------------------------------------------------------->
        <!-- <li><a href="<?php echo base_url(); ?>index.php/weltemplate/blog">BLOG</a></li>-->
        <!--<li><a href="#">lal</a></li>-->
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>