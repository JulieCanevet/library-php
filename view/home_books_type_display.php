<section id="home">
  <?php
      foreach ($bookType as $key => $value) {
  ?>
  <div class="books">
      <h3><?php echo $value['title'] ?></h3>

      <h6>Auteur : <?php echo $value['author'] ?></h6>
      <h6>Résumé : <?php echo $value['summary'] ?></h6>
      <h6>Catégories : <?php echo $value['category'] ?></h6>
      <?php if($value['availability'] == 1){ ?> 
              <h6 class="disponible">Disponible</h6> 
      <?php }
           else{ ?> 
            <h6 class="indisponible">Indisponible</h6>
      <?php } ?>
      <div>
          <a href="detail.php?id_book=<?php echo $value['id_book']?>&amp;available=<?php echo $value['availability']?>" class="card-link">Voir</a>                 
      </div>
  </div>
 <?php } ?>
</section>