
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Contact 				
							</h1>	
							<p class="text-white link-nav"><a href="<?= base_url()?>welcome">Accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url()?>contact"> Contact</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->				  

			<!-- Start contact-page Area -->
			<section class="contact-page-area section-gap">
				<div class="container">
					<div class="row">
						<div class="map-wrap" style="width:100%; height: 445px;" id="map"></div>
						<div class="col-lg-4 d-flex flex-column address-wrap">
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-home"></span>
								</div>
								<div class="contact-details">
									<h5>Siege du Transco-plus, Tananarivo Ankazomanga</h5>
									<p>
										4343 Effectif de l'incription onligne depuis 2021
									</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-phone-handset"></span>
								</div>
								<div class="contact-details">
									<h5>034 22 859 34</h5>
									<p>Contact du DG du Trasco-plus</p>
								</div>
							</div>
							<div class="single-contact-address d-flex flex-row">
								<div class="icon">
									<span class="lnr lnr-envelope"></span>
								</div>
								<div class="contact-details">
									<h5>transco-plus@gmail.com</h5>
									<p>Envoyer votre besoin!</p>
								</div>
							</div>														
						</div>
						<div class="col-lg-8">
							<!-- <form class="form-area contact-form text-right" id="myForm" action="<?php echo base_url(). 'contact/insertC'; ?>" method="POST"> -->
							<form class="form" method="POST" action="<?php echo base_url(). 'contact/insertC'; ?>">
					
							<div class="row">	
									<div class="col-lg-6 form-group">
										<input name="nomC" placeholder="votre nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Votre nom'" class="common-input mb-20 form-control" required="" type="text">
									
										<input name="email" placeholder=" email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

										<input name="sugestion" placeholder="sugestion" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter sugestion'" class="common-input mb-20 form-control"  type="text">
									</div>
									<div class="col-lg-6 form-group">
										<textarea class="common-textarea form-control" name="message" placeholder="Entre Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entre Messege'" required=""></textarea>				
									</div>
									<div class="col-lg-12">
										<div class="alert-msg" style="text-align: left;"></div>
										<button type="submit" class="genric-btn primary" style="float: right;">Envoyer Message</button>											
									
									</div>
									<div class="col-lg-10 col-md-10">
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
								</div>
							</form>	
						</div>
					</div>
				</div>	
			</section>