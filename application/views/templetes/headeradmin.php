<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
	<meta charset="utf-8">
	<title>Resrvation</title>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Reservation Ofligne</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
            <link rel="stylesheet" href="<?= base_url()?>assets\css\linearicons.css">
            <link rel="stylesheet" href="<?= base_url()?>assets\css\font-awesome.min.css">
            <link rel="stylesheet" href="<?= base_url()?>assets\css\bootstrap.css">
            <link rel="stylesheet" href="<?= base_url()?>assets\css\magnific-popup.css">
            <link rel="stylesheet" href="<?= base_url()?>assets\css\nice-select.css"/>
            <link rel="stylesheet" href="<?= base_url()?>assets\css\animate.min.css"/>
            <link rel="stylesheet" href="<?= base_url()?>assets\css\jquery-ui.css"/>
            <link rel="stylesheet" href="<?= base_url()?>assets\css\main.css"/>
			<link rel="stylesheet" href="<?= base_url()?>assets\datatables\css\dataTables.bootstrap.css"/>
			<link rel="stylesheet" href="<?= base_url()?>assets\datatables\css\jquery.dataTables.min.css"/>
			<!-- <link rel="stylesheet" href="<?= base_url() ?>assets\fontawesome\css\all.css">
   			<link rel="stylesheet" href=" <?= base_url() ?>assets\fontawesome\css\fontawesome.min.css"> -->


</head>

<body>
<header id="header">
		  		<div class="header-top">
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
					<!-- <img src="assets/img/log.jpg" alt="" title="" /> -->
			    	<h1 > <strong><i> <a href="<?= base_url()?>admin/" style="color:yellow;">Transco-plus</a></i></strong>	</h1><small style="margin-right: 250px;text-size:20px;"> <h3 style="color:greenyellow;"> Admin </h3></small>	
						<nav id="nav-menu-container">
							 <ul class="nav-menu">
							  <li class="menu-active"><a href="<?= base_url()?>admin/">Client </a></li>
							  <li class="menu-active"><a href="<?= base_url()?>admin/message">Message</a></li>
							  <li class="menu-active"><a href="<?= base_url()?>admin/logout"><button class="btn btn-danger">Deconnection</button></a></li>
							<!--  <li><a href="<?= base_url()?>service">Services</a></li>
							  <li><a href="<?= base_url()?>element">Elements</a></li>							  			          	          
							  <li><a href="<?= base_url()?>contact">Contact</a></li>
							</ul> -->
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->