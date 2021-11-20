
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Information 		
							</h1>	
							<p class="text-white link-nav"><a href="<?= base_url()?>admin">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="<?= base_url()?>admin"> information</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- End Button -->
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container ">
					<div class="section-top-border">
						<h3 class="mb-30" style="font-size:60px;">Contenu de cette client</h3>
                        <form action="<?php echo base_url(). 'admin/modifier/'.$service['idreserve']; ?>" method="POST">
						<div class="row">
							<div class="col-md-6">
								<div class="single-defination">
									<h4 class="mb-20" style="font-size:40px;">informatio titulaire <?php echo set_value('idreserve',$service['idreserve']); ?></h4>
									<p>
                                        <ul>
                                            <p style="font-size:30px;"> Nom : <strong style="font-size:40px;" >  <?php echo set_value('nomT',$service['nomT']); ?> </strong></p>
                                            <p>email :  <strong  style="font-size:30px;"> <?php echo set_value('email',$service['email']); ?> </strong></p>
                                            <p>Phone titulair : <strong style="font-size:30px;" > <?php echo set_value('phoneT',$service['phoneT']); ?> </strong></p>
                                            <p>date de commande : <strong style="font-size:30px;"> <?php echo set_value('dateDefault',$service['dateDefault']); ?> </strong></p>
                                            <p>date de reservation : <strong style="font-size:30px;"> <?php echo set_value('dateR',$service['dateR']); ?> </strong></p>

                                        </ul>
                                 
                              

                                    </p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="single-defination">
									<h4 class="mb-20"  style="font-size:40px;">Information de l'enfant</h4>
									<p>
                                    <p>Nom : <strong  style="font-size:40px;"> <?php echo set_value('nomE',$service['nomE']); ?> </strong></p>
                                    <p>class enfant : <strong  style="font-size:30px;"> <?php echo set_value('class',$service['class']); ?> </strong></p>
                                    <p>ecole enfant : <strong  style="font-size:30px;"> <?php echo set_value('ecole',$service['ecole']); ?> </strong></p>
                                    <p>adress de ramassage : <strong  style="font-size:30px;"> <?php echo set_value('ramassage',$service['ramassage']); ?> </strong></p>
                                    <p>adress de remisage : <strong  style="font-size:40px;"> <?php echo set_value('remisage',$service['remisage']); ?> </strong></p>
                                    <p>Axe : <strong  style="font-size:30px;"> <?php echo set_value('axe',$service['axe']); ?> </strong></p>
                                    <p>Prix frais : <input  style="font-size:40px;" type="number" required class="form-control" value="<?php echo set_value('prix',$service['prix']); ?>" name="prix"></p>
                                    </p>
								</div>
							</div>
						</div>
                        <button type="submit" class="btn btn-dark">enregistrer</button>
					<a onclick="return confirm('ete vous sur pour supprimer cette Client?');" href="<?php echo base_url().'admin/deletR/' .$service['idreserve'] ?> "  class="btn btn-outline-danger btn-xr">Supprimer</a>
					<a  href="<?php echo base_url().'admin/' ?> "  class="btn btn-outline-info btn-xr" >Retour</a>
					
                        </form>
					</div>
				</div>
			</div>
		