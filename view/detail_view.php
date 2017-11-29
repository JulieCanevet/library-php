<body>
        
        <div class="card">
          <h4 class="body">Titre : <?php echo $detail['title'] ?></h4>
          <h4 class="body">Auteur : <?php echo $detail['author'] ?></h4>
          <p class="body">Résumé : <?php echo $detail['summary'] ?></p>

          <?php if($detail['availability'] == 1){ 
              ?> <h6 class="disponnible">Disponible</h6> 
              <?php }
              else{
                ?> <h6 class="indisponnible">Indisponible</h6>
              <?php } ?>
        </div>
        <?php 
        if($_GET['available'] != 1 ){
        	//foreach ($userDetail as $key => $value) {
        		?>
        		<h3>Emprunté par <?php echo $userDetail['name']; ?>, habitant de <?php echo $userDetail['city']; ?></h3>
        		<?php
        	//}
        }
        ?>        <a href="index.php">Retour</a>
