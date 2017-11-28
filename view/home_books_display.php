        <section id="home">
          <?php
          if(isset($books)){
              foreach ($books as $key => $value) {
          ?>
          <div class="card">
              <h3><?php echo $value['title'] ?></h3>
    
              <h6 class="body">Auteur : <?php echo $value['author'] ?></h6>
              <h6 class="body">Résumé : <?php echo $value['summary'] ?></h6>
              <div class="footer">
                  <a href="detail.php?id=<?php echo $value['id_book']?>" class="card-link">Voir</a>
      
                  <form class="card-button" id="edit" method="POST" action="index.php">
                    <input type="hidden" name="id" value="<?php echo $value['id_book']?>">
                    <button type="submit" name="edit">Libre ou pas</button>
                  </form>
              </div>
          </div>
          <?php }} ?>
        </section>