        <section id="home">       
          <?php
          if(isset($books)){
              foreach ($books as $key => $value) {
          ?>
          <div class="card">
              <h3><?php echo $value['title'] ?></h3>
    
              <h6 class="body">Auteur : <?php echo $value['author'] ?></h6>
              <h6 class="body">Résumé : <?php echo $value['summary'] ?></h6>
              <h6 class="body">Catégories : <?php echo $value['category'] ?></h6>
              <?php if($value['availability'] == 1){ 
              ?> <h6 class="disponible">Disponible</h6> 
              <?php }
              else{
                ?> <h6 class="indisponible">Indisponible</h6>
              <?php } ?>
              <div class="footer">
                  <a href="detail.php?id_book=<?php echo $value['id_book']?>&amp;available=<?php echo $value['availability']?>" class="card-link">Voir</a>
      
                  <form class="card-button" id="edit" method="POST" action="index.php">
                    <input type="hidden" name="id_book" value="<?php echo $value['id_book']?>">
                    <button type="submit" name="edit">Emprunté</button>
                    <button type="submit" name="returned">Rendu</button>
                  </form>
              </div>
          </div>
<?php          if(isset($_POST['edit'])){ ?>
      <form method="post" action="index.php">
          <div class="form-group">
            <select name="edition">
              <?php foreach ($users as $key => $value){
?>              <option value="<?php echo $value['id_customer'] ?>"><?php echo $value['name'] ?></option>
  <?php } ?>
            </select>
            <input type="hidden" name="id_book" value="<?php echo $_POST['id_book']?>">
            <input type="submit" value="edition">
          </div>
        </form>

          <?php }}} ?>
        </section>