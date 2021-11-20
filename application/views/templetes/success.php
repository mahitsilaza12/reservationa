
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">Transco-plus rappel quelque minute</h6>
							<h1 class="text-uppercase">
								034 22 797 94			
							</h1>
						
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
                            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                  <h3> cliquer ici pour voir leur trajet  </h3> 
                                </a>
                            
						</div>
						<div class="col-lg-4  col-md-6 header-right collapse" id="collapseExample">
							<h4 class="pb-30">Trajet du vehicule</h4>
							<div >
                                <p> <span> <strong> <h5> Trajet 1 </h5> </strong> </span>
                               <ul>
                                   <li>: ambohipo</li>
                                   <li>ambanidia</li>
                                   <li>ambohijatovo</li>
                                   <li>analakely</li>
                               </ul></p><br>
                               <p> <span> <strong> <h5> Trajet 2 </h5> </strong> </span>
                               <ul>
                                   <li>: ambohipo</li>
                                   <li>ambanidia</li>
                                   <li>ambohijatovo</li>
                                   <li>analakely</li>
                               </ul></p><br>
                               <p> <span> <strong> <h5> Trajet 3 </h5> </strong> </span>
                               <ul>
                                   <li>: ambohipo</li>
                                   <li>ambanidia</li>
                                   <li>ambohijatovo</li>
                                   <li>analakely</li>
                               </ul></p><br>
                                  </div>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="https://www.cvb-shop.mg/wp-content/uploads/2021/10/Affiche-TEP_AVANA-MAIVANA-scaled.jpg" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>Service de la location de voiture</h1>
							<h4>  </h4>
							<p>On a beaucoup des voitures pour la location avec une prix abordable et materiel bien confortable</p>
							<a class="text-uppercase primary-btn" href="#">Plus d'information</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row section-title">
						<h1>Plus des services offert a tous cet client</h1>
						<p>Vous avec des deux choix maintenant=> <small>Reservation du bus scolaire</small> et <small>location du voiture</small>.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<a href="#"><h4>Reservation bus scolaire</h4></a>
							<p> transport scolaire
							<p> transport scolaire
								 <br>
								remplir le formaile ci dessous ou voir le detail sur cette page de la reservation <br> <small><strong>Voir detail</strong></small>
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-briefcase"></span>
							<a href="#"><h4>Autre service </h4></a>
							
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-bus"></span>
							<a href="#"><h4>location du voiture</h4></a>
							<p>
							Si vous faite une ou plus organisation des evenement on a beaucoup des voiture pour la location  <br>
							<small><strong>Voir detail</strong></small>
							</p>
						</div>												
					</div>	
				</div>	
			</section>
			<!-- End services Area -->
			
			<!-- Start image-gallery Area -->
			<section class="image-gallery-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Photo et gallery de voiture </h1>
						<p>Extrait des voitures en travail.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 single-gallery">
							<a href="img/g1.jpg" class="img-gal"><img class="img-fluid" src="<?= base_url()?>assets/img/g1.jpg" alt=""></a>
							<a href="img/g4.jpg" class="img-gal"><img class="img-fluid" src="<?= base_url()?>assets/img/g4.jpg" alt=""></a>
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g2.jpg" class="img-gal"><img class="img-fluid" src="<?= base_url()?>assets/img/g2.jpg" alt=""></a>
							<a href="img/g5.jpg" class="img-gal"><img class="img-fluid" src="img/g5.jpg" alt=""></a>						
						</div>	
						<div class="col-lg-4 single-gallery">
							<a href="img/g3.jpg" class="img-gal"><img class="img-fluid" src="<?= base_url()?>assets/img/g3.jpg" alt=""></a>
							<a href="img/g6.jpg" class="img-gal"><img class="img-fluid" src="<?= base_url()?>assets/img/g6.jpg" alt=""></a>
						</div>				
					</div>
				</div>	
			</section>
			<!-- End image-gallery Area -->
			
			<!-- Start reviews Area -->
			<section class="reviews-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Cher client,voici leur trajet pour le reservation dans la bus scolaire</h1>
						<p>Vous ete besoin de cette trajet et l'arret du transport scolaire.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>BUS 1</h4>
								<p>
								Liste des trajectoire avec l'arret
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Bus 2</h4>
								<p>
							Liste des trajectoire avec l'arret
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Bus 3</h4>
								<p>
									Liste des trajectoire avec l'arret
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Bus 4</h4>
								<p>
									Liste des trajectoire avec l'arret
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Bus 5</h4>
								<p>
									Liste des trajectoire avec l'arret
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>bus 6</h4>
								<p>
									Liste des trajectoire avec l'arret
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>																															
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
							
			<!-- Start home-calltoaction Area -->
			<section class="home-calltoaction-area relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row align-items-center section-gap">
						<div class="col-lg-8">
							<h1>L'avenir des enfants est depandre a leur parent</h1>
							<p>
							Merci de votre confiance
							</p>
						</div>
						<div class="col-lg-4 btn-left">
							<a href="#" class="primary-btn">Detail</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-calltoaction Area -->
			
			<!-- Start latest-blog Area -->
			<section class="latest-blog-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Liste des voitures</h1>
						<p>L'information chaque voiture de reservation.</p>
					</div>						
					<div class="row">
						<div class="col-lg-6">
							<div class="single-latest-blog">
								<div class="thumb">
									<img class="img-fluid" src="<?= base_url()?>assets/img/b1.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">Voir plus</a></li>
									<li><a href="#">Gallery</a></li>
								</ul>
								<a href="#">
									<h4>Nom du voiture</h4>
								</a>
								<p>
								capacite du voiture 
								</p>
								<p class="date"> dernier entretient 31st January, 2018</p>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="single-latest-blog">
								<div class="thumb">
									<img class="img-fluid" src="<?= base_url()?>assets/img/b2.jpg" alt="">
								</div>
								<ul class="tags">
									<li><a href="#">voir plus</a></li>
									<li><a href="#">Gallery</a></li>
								</ul>
								<a href="#">
									<h4>nom du voiture</h4>
								</a>
								<p>
								capacite du voiture
								</p>
								<p class="date">dernier entretient 31st January, 2018</p>
							</div>
						</div>						
					</div>
				</div>	
			</section>
			<!-- End latest-blog Area -->
			
			<!-- start footer Area -->		
		