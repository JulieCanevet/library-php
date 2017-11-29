<?php
              foreach ($bookType as $key => $value) {
          ?>
          <div class="card">
              <h3><?php echo $value['title'] ?></h3>
    
              <h6 class="body">Auteur : <?php echo $value['author'] ?></h6>
              <h6 class="body">Résumé : <?php echo $value['summary'] ?></h6>
              <h6 class="body">Catégorie : <?php echo $value['category'] ?></h6>
              <?php if($value['availability'] == 1){ 
              ?> <h6 class="disponnible">Disponible</h6> 
              <?php }
              else{
                ?> <h6 class="indisponnible">Indisponible</h6>
              <?php } ?>              <div class="footer">
                  <a href="detail.php?id_book=<?php echo $value['id_book']?>" class="card-link">Voir</a>
      
                  <form class="card-button" id="edit" method="POST" action="index.php">
                    <input type="hidden" name="id" value="<?php echo $value['id_book']?>">
                    <button type="submit" name="edit">Libre ou pas</button>
                  </form>
              </div>
          </div>
          <?php } ?>