<body>
        <section id="detail">
          <article id="delailText">
          <h3 class="body"><?php echo $detail['title'] ?></h3>
          <h5 class="body">Auteur : <?php echo $detail['author'] ?></h5>
          <p class="body">Résumé : <?php echo $detail['summary'] ?></p>

          <?php if($detail['availability'] == 1){ 
              ?> <h6 class="disponible">Disponible</h6> 
              <?php }
              else{
                ?> <h6 class="indisponible">Indisponible</h6>
              <?php } ?>
        <?php 
        if($_GET['available'] != 1 ){
        		?>
        		<p>En ce moment ce livre est emprunté par <?php echo $userDetail['name']; ?>, habitant de <?php echo $userDetail['city']; ?></p>
        		<?php
        	        }
        ?>        <a href="index.php">Retour</a>
</article>
</section>