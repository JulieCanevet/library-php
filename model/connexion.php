<?php
try //Connexion to database
{
    $db = new PDO('mysql:host=localhost;dbname=library;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}