<div id="down">
<form method="post" action="index.php">
          <div class="form-group">
            <label>Trier par </label>
            <select name="ordre">
              <option value="books">livres</option>
              <option value="users">Utilisateur</option>
            </select>
            <input type="submit" value="ok">
          </div>
        </form>


        <form method="post" action="index.php">
          <div class="form-group">
            <label>Trier les livres par genre : </label>
            <select name="type">
                <option value="novel">Roman</option>
                <option value="poetry">Poésie</option>
                <option value="adventure">Aventure</option>
                <option value="scienceFiction">Science-fiction</option>
            </select>

            <input type="submit" value="ok">
          </div>
        </form>
<label>Entrer un nouveau livre</label> <button type="submit" name="plus" class="add"><i class="fa fa-plus" aria-hidden="true"></i></button>          
</div>