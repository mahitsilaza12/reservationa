
			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">Contactez cette numero </h6>
							<h1 class="text-uppercase">
								034 22 859 34			
							</h1>
							<p class="pt-10 pb-10 text-white">
							cette service de reservation en ligne vous present et donne le meilleur qualite du travail avec plaisir!!! 	
							</p>
							<div class="col-lg-10 col-md-10">
							</div>
							<a href="<?= base_url()?>welcome" class="primary-btn text-uppercase" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Reservation Transco-plus</a>
						</div>
						<div class="col-lg-6  col-md-6 header-right">
							<h1 class="pb-30" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> <strong><i> cliquer ici !!! </i></strong> 
							<br>
							<small>inscription</small> 
							
							</h1>
							<div class="collapse" id="collapseExample">
							<form class="form" method="POST" action="<?php echo base_url(). 'Welcome/insertion'; ?>">
							    <div class="from-group">
									<div class="row">
										<div class="col">
										<input class="form-control txt-field" required type="text" name="nomT" placeholder="Nom(Père,Mère)"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom du (père,mère)'">

										</div>
										<div class="col">
										<input class="form-control txt-field"  type="text" name="prenomT" placeholder="Prenom(Père,Mère)"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prenom du (père,mère)'">
										</div>
									</div>
									<div class="row">
										<div class="col">
										<input class="form-control txt-field" required type="text" name="nomE" placeholder="nom enfant"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nom enfant'">
										</div>
										<div class="col">
										<input class="form-control txt-field"  type="text" name="prenomE" placeholder="prenom enfant"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Prenom enfant'">
										</div>
									</div>
									<div class="row">
										<div class="col">
										<input class="form-control txt-field" required type="email" name="email" placeholder="Email address"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'">
									</div>
										<div class="col">
										<input class="form-control txt-field" required type="number" name="phoneT" placeholder="phone (Père,Mère)"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'numero Père,Mère'">
									    </div>
									</div>
									<div class="row">
										<div class="col">
										<input class="form-control txt-field" required type="text" name="ramassage" placeholder="Adresse de ramassage"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse de ramassage'">
										</div>
										<div class="col">
										<input class="form-control txt-field" required type="text" name="remisage" placeholder="Adresse de remisage"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adresse de remisage'">
										</div>
									</div>
							    </div>	
								<div class="row form-group">
									<div class="col">
							       	<div class="default-select" id="default-select">
										<select name="ecole" required>
											<option value=""  disabled selected hidden>Ecole</option>
											<option value="EPFA">EPFA</option>
											<option value="EPFB">EPFB</option>
											<option value="EPFC">EPFC</option>
										</select>
									</div>
									</div>
							  
									<div class="col">
									<div class="default-select" id="default-select2">
										<select name="class" required>
											<option value=""  disabled selected hidden>Class</option>
											<option value="PS">PS</option>
											<option value="MS">MS</option>
											<option value="GS">GS</option>
											<option value="CP">CP</option>
											<option value="CE1">CE1</option>
											<option value="CE2">CE2</option>
											<option value="CM1">CM1</option>
											<option value="CM2">CM2</option>
										</select>
									</div>
								</div>
								</div>
							    
								<div class="form-group">
								<div class="default-select" id="default-select2">
										<select name="axe" required>
											<option value=""  disabled selected hidden>Axe</option>
											<option value="1">Destination One</option>
											<option value="2">Destination Two</option>
											<option value="3">Destination Three</option>
										</select>
									</div>
							    </div>
								<div class="form-group">
										<input required  name="dateR"  class="form-control" type="date">                        
							    </div>							    
							    <div class="form-group">
									<a href="ajout.html">
							            <button class="btn btn-dark btn-lg btn-block text-center text-uppercase">Ajouter une reservation</button>

									</a>
									<div class="mt-1 text-muted">
									<strong ><i>Année scolaire 2021-2022</i></strong>
									</div>
										
							    </div>
							</form>
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
							<a href="www.cvb-shop.mg"><h4>Autre service </h4></a>
							<p>
								service,vente en ligne avec le CVB-SHOP
							</p>
							
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
						<div class="col-lg-4 col-md-6"  data-toggle="modal" data-target="#exampleModal">
							<div class="single-review">
								<h4>BUS 1</h4>
								<p>
								Liste des trajectoires avec l'arret
								</p>
								<div class="star">
								</div>
							</div>
						</div>	


<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:yellow ;">
        <h5 class="modal-title" id="exampleModalLabel" >Liste du trajet 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul>
		  <li>trajet A</li>
		  <li>trajet B</li>
		  <li>trajet C</li>
		  <li>trajet D</li>
		  <li>trajet E</li>
		  <li>trajet F</li>
	  </ul>
      </div>
    </div>
  </div>
</div>




<!-- modal -->
<div class="modal fade" id="trajet2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:yellow ;">
        <h5 class="modal-title" id="exampleModalLabel" >Liste du trajet 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul>
		  <li>trajet A</li>
		  <li>trajet B</li>
		  <li>trajet C</li>
		  <li>trajet D</li>
		  <li>trajet E</li>
		  <li>trajet F</li>
	  </ul>
      </div>
    </div>
  </div>
</div>



<!-- modal -->
<div class="modal fade" id="trajet3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:yellow ;">
        <h5 class="modal-title" id="exampleModalLabel" >Liste du trajet 3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <ul>
		  <li>trajet A</li>
		  <li>trajet B</li>
		  <li>trajet C</li>
		  <li>trajet D</li>
		  <li>trajet E</li>
		  <li>trajet F</li>
	  </ul>
      </div>
    </div>
  </div>
</div>



						<div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#trajet2">
							<div class="single-review">
								<h4>Bus 2</h4>
								<p>
							Liste des trajectoires avec l'arret
								</p>
								<div class="star">
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6" data-toggle="modal" data-target="#trajet3">
							<div class="single-review">
								<h4>Bus 3</h4>
								<p>
									Liste des trajectoires avec l'arret
								</p>
								<div class="star">
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
		