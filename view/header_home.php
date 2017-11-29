        <header>
            <h3>Bibliothèque</h3>
        <form method="post" action="index.php">
          <div class="form-group">
            <select name="ordre">
              <option value="books">livres</option>
              <option value="users">Utilisateur</option>
            </select>
            <input type="submit" value="tri">
          </div>
        </form>


        <form method="post" action="index.php">
          <div class="form-group">
            <select name="type">
                <option value="novel">Roman</option>
                <option value="poetry">Poésie</option>
                <option value="adventure">Aventure</option>
                <option value="scienceFiction">Science-fiction</option>
            </select>
            <input type="submit" value="go">
          </div>
        </form>
 <button type="submit" name="plus" class="add"><i class="fa fa-plus" aria-hidden="true"></i>Nouveau livre</button>          
        </header>