<body>
        <button type="submit" name="plus" class="plus"><i class="fa fa-plus" aria-hidden="true"></i></button>
        <a href="index.php">Retour</a>
        
        <div class="card">
          <h2><?php echo $detail['title'] ?></h2>
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