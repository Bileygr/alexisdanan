<?php
require_once("../config/connect.php");
session_start();
if(!isset($_SESSION["utilisateur"])){
  header("Location: login.php");
}

if(isset($_POST["ajouter"])){
	$target_dir = "../uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    }else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    $connect = new Connect();
    $connexion = $connect->connection();
    $requete = $connexion->prepare("INSERT INTO nouvelle(auteur, titre, contenu, media) VALUES(?, ?, ?, ?)");
    $requete->execute([$_SESSION["utilisateur"]["id"], $_POST["titre"], $_POST["contenu"], "uploads/".basename($_FILES["fileToUpload"]["name"])]);
    $dernier_id = $connexion->lastInsertId();
    header("Location: ../nouvelle.php?id=".$dernier_id."");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Pour la protection de l'enfance</title>
        <link rel="icon" href="../assets/site/img/logo2.png">
        <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    </head>
    <body> 
        <h1>Ajouter une nouvelle</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="titre">Titre</label>
            <textarea name="titre" placeholder="Titre"></textarea><br/>
            <label for="contenu">Contenu</label>
            <textarea name="contenu" id="contenu" placeholder="Contenu"></textarea>
            <input type="file" name="fileToUpload"><br>
            <input type="submit" name="ajouter" value="Ajouter">
        </form>
        
        <script>
            CKEDITOR.replace( 'titre' );
            CKEDITOR.replace( 'contenu' );
        </script>
    </body>
</html>