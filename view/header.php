<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>production</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel = "stylesheet" href = "font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Raleway" rel="stylesheet">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
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
        
        </header>