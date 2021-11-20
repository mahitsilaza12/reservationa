<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>
	<meta charset="utf-8">
	<title>Reservation</title>
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
            <link rel="stylesheet" href=" <?= base_url() ?>assets/css/login.css">

			<!-- <link rel="stylesheet" href="<?= base_url() ?>assets\fontawesome\css\all.css">
   			<link rel="stylesheet" href=" <?= base_url() ?>assets\fontawesome\css\fontawesome.min.css"> -->


</head>

<style>
 body{
    background-image: url('https://www.cadre-dirigeant-magazine.com/wp-content/uploads/2017/11/La-voiture-de-luxe-au-service-de-l%E2%80%99image-de-marque-de-votre-entrepriseCDM.jpg') ;
  }
</style>

<body>
<header id="header">

            <div style="margin-top:700px;" class=" alert-primary" role="alert">
            <div class="signin"  style="box-shadow: 0px 20px 30px;">
            <form method="post"  action="<?php echo base_url(). 'admin/log_in/'; ?>" >
            <h2 style="color:yellow;">Transco-plus</h2>
            <div class="col-lg-4 col-md-4">
								<?php   
									$success =$this->session->userdata("success");
									if($success !=''){?>
								<div class="alert alert-success"> <h3> <?php echo $success; ?></h3></div>
								<?php
									}
									?>
									<?php   
								$failure =$this->session->userdata("failure");
								if($failure !=''){?>
								<div class="alert alert-success"><?php echo $failure; ?></div>
								<?php
								}
								?>
							</div>
            <label style="color: #fff">Email</label>
                    <input type="email"  required class="form-control col-md-12" name="mail" id="mail" placeholder="Entree votre mail">
                    <label style="color: #fff">votre mot de passe</label>
                    <input type="password"  required class="form-control" name="mdp" id="mdp" placeholder="mot de pasee">
                
                    <button class="btn btn-primary" tybe="submit" style="margin-top:10px;">Connecter</button><br>
                
            </form>

            </div>
            </div>

<script src="<?= base_url()?>assets/js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?= base_url()?>assets/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/js/easing.min.js"></script>
<script src="<?= base_url()?>assets/js/hoverIntent.js"></script>
<script src="<?= base_url()?>assets/js/superfish.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url()?>assets/js/jquery-ui.js"></script>
<script src="<?= base_url()?>assets/js/jquery.nice-select.min.js"></script>
<script src="<?= base_url()?>assets/js/mail-script.js"></script>
<script src="<?= base_url()?>assets/js/main.js"></script>
<script src="<?= base_url()?>assets/datatables/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url()?>assets/datatables/js/jquery.dataTables.min.js"></script>
<script>
      $(document).ready(function(){
          $("#crou").DataTable();
      });
  </script>

</body>
</html>