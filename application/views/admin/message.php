
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Message 		
							</h1>	
							<p class="text-white link-nav"><a href="<?= base_url()?>admin">client accueil </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url()?>admin/message"> message</a></p>
						</div>	
					</div>
				</div>
			</section>
		

<div class="portlet-body" style="height:460px;overflow:scroll;box-shadow: 0px 20px 30px;" >
				<div class="card-group">
				<div class="card">
					<div class="card-body text-white bg-dark mb-3">
					<?php if(!empty($contact)){ foreach($contact as $contacts){ ?>
					<h5 class="card-title"><?php echo $contacts['idcontact'] ?>  </h5>
					<p class="card-text" > <i style="font-size:30px;"> Nom :</i> <i class="badge rounded-pill bg-primary" style="font-size:40px;"> <?php echo $contacts['nomC'] ?> </i></p>
					<p class="card-text" ><i style="font-size:30px;">message  :</i> <i class="badge rounded-pill bg-warning text-dark" style="font-size:20px;"> <?php echo $contacts['message'] ?></i></p>
					<p class="card-text" ><i style="font-size:30px;">sugestion :</i><?php echo $contacts['sugestion'] ?></p>
					<p class="card-text" ><i style="font-size:30px;">Date d'envoye : </i> </i class=""><?php echo $contacts['dateEnvoye'] ?></i></p>
				
					<p class="card-text"><small   class="text-center"> <i style="font-size:20px;"> Email : </small></i> <strong><?php echo $contacts['email'] ?> </strong> 
					<a onclick="return confirm('ete vous sur pour supprimer cette Client?');" href="<?php echo base_url().'admin/delete/' .$contacts['idcontact'] ?> "  class="btn btn-outline-danger btn-xr" >Supprimer</a>
					<?php } } else { ?>
									>Element non trouvee
									<?php    }  ?> 
					</div>
				</div>
				</div>



            </div>


		