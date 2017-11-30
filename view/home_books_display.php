        <section id="home">       
          <?php
          if(isset($books)){
              foreach ($books as $key => $value) {
          ?>
          <div class="books">
              <h3><?php echo $value['title'] ?></h3>
    
              <h6>Auteur : <?php echo $value['author'] ?></h6>
              <h6>Résumé : <?php echo $value['summary'] ?></h6>
              <h6>Catégories : <?php echo $value['category'] ?></h6>
              <?php if($value['availability'] == 1){ 
              ?> <h6 class="disponible">Disponible</h6> 
              <form class="card-button" id="edit" method="POST" action="index.php">
                    <input type="hidden" name="id_book" value="<?php echo $value['id_book']?>">
                    <button type="submit" name="edit">Emprunté</button>
              </form>
            
              <?php }
              else{
                ?> <h6 class="indisponible">Indisponible</h6>
          
              
      
                  <form class="card-button" id="edit" method="POST" action="index.php">
                    <input type="hidden" name="id_book" value="<?php echo $value['id_book']?>">
                    <button type="submit" name="returned">Rendu</button>
                  </form>

                  <?php } ?>
                   <div class="voir">
                  <a href="detail.php?id_book=<?php echo $value['id_book']?>&amp;available=<?php echo $value['availability']?>" class="card-link">Voir</a>
              </div>
<?php if(!isset($_POST['edit'])){
?> </div>
<?php }
if(isset($_POST['edit'])){ ?>
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
      </div>
          <?php }}} ?>

        </section>
