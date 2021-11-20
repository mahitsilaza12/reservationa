
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Page admin du transco-plus				
							</h1>	
                            <p>Liste de client passe des reservation </p>
                        </div>	
					</div>
				</div>
			</section>
<div class="container">
    <h1 class="alert alert-dark">Liste des enfants avec parent</h1>
<table style="left:40px;" id="crou" class="table table-striped table-bordered">
    <thead>
        <tr>
          <td>id</td>
          <td>nom titulaire</td>
          <td>prenom titulaire</td>
          <td>Nom enfant</td>
          <td>prenom enfant</td>
          <td>phone</td> 
          <td>ecole</td>  
          <td>class</td>
          <td>date reseravtion</td>  
          <td>ramassage</td>   
          <td>remisage</td>      
          <td>prix</td>  
          <td>Action</td>            
        </tr>
    </thead>
    <tbody >
    <?php if(!empty($service)){ foreach($service as $services){ 
      
      if($services['prix']==0){
        $class='btn btn-danger';
      }else{
        $class='btn btn-success';
      }
      ?>

      <tr>
        <td><?php echo $services['idreserve'] ?></td>
        <td><?php echo $services['nomT'] ?></td>
        <td><?php echo $services['prenomT'] ?></td>
        <td><?php echo $services['nomE'] ?></td>
        <td><?php echo $services['prenomE'] ?></td>
        <td><?php echo $services['phoneT'] ?></td>
        <td><?php echo $services['ecole'] ?></td>
        <td><?php echo $services['class'] ?></td>
        <td><?php echo $services['dateR'] ?></td>
        <td> <?php echo $services['ramassage'] ?></td>
        <td><?php echo $services['remisage'] ?></td>
        <td class="<?= $class ?>" > <?php echo number_format($services['prix']) ?> Ariary</td>
        <!-- <td>
        <?php echo $services['approuver'] ?>
    
        <a onclick="return confirm('approuver cette client?');" href="<?php echo base_url().'admin/edit/' .$services['idreserve']?> "  class="genric-btn danger-border small" ><?php echo $services['approuver'] ?></a>
         </td> -->

        <td>
        <a href="<?php echo base_url().'admin/affichage/' .$services['idreserve'] ?>"> <button  type="button"   style="margin-left:0px;" id="ajou" class="genric-btn info-border small">Afficher</button></a>
        </td>
      </tr>
<?php } } else { ?>
<td colspan= "S">Element non trouvee</td>
<?php    }  ?>  

    </tbody>
</table>
</div>



