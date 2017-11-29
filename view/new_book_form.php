<!-- Form to add new account -->
<section class="newBook">
    <div class="container col-12 col-sm-6 col-md-6">
        <div class="form-wrap">
        	<h1>Ajouter un livre</h1>
            <form method="post" action="index.php">
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Titre du livre">
                </div>
                <div class="form-group">
                    <input type="text" name="author" class="form-control" placeholder="Nom de l'auteur">
                </div>
                <div class="form-group">
                    <input type="text" name="summary" class="form-control" placeholder="Résumé du livre">
                </div>  
                <div class="form-group">
                    <input type="text" name="release_date" class="form-control" placeholder="Année de sortie du livre (ex: 1987)">
                </div>                
                <div class="form-group">
                    <select name="category">
                        <option value="novel" selected>Roman</option>
                        <option value="poetry">Poésie</option>
                        <option value="adventure">Aventure</option>
                        <option value="scienceFiction">Science-fiction</option>
                    </select>
                </div>
                <div class="form-group">
                    
                </div>                

                <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Ajouter" name="add">
            </form>
            <hr>
        </div>
    </div> <!-- /.container -->

</section>