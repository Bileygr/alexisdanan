<?php
require_once("../config/connect.php");
session_start();
if(!isset($_SESSION["utilisateur"])){
  header("Location: login.php");
}

$connect = new Connect();
$connexion = $connect->connection();
$requete = $connexion->prepare("SELECT * FROM nouvelle WHERE id=?");
$requete->execute([$_REQUEST["id"]]);
$nouvelle = $requete->fetch();
$nouvelle_media = $nouvelle["media"];

if(isset($_POST["enregistrer"])){
    if(!empty($_FILES["fileToUpload"]["name"])){
        $target_dir = "../uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        }else {
            echo "Sorry, there was an error uploading your file.";
        }

        $nouvelle_media = "uploads/".basename( $_FILES["fileToUpload"]["name"]);
    }

    $connect = new Connect();
    $connexion = $connect->connection();
    $requete = $connexion->prepare("UPDATE nouvelle SET titre=?, contenu=?, media=? WHERE id=?");
    $requete->execute([$_POST["titre"], $_POST["contenu"], $nouvelle_media, $_REQUEST["id"]]);
    header("Location: ../nouvelle.php?id=".$_REQUEST["id"]."");
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
        <h1>Modifier une nouvelle</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="titre">Titre</label>
            <textarea name="titre" placeholder="Titre"><?php echo $nouvelle["titre"]; ?></textarea><br/>
            <label for="contenu">Contenu</label>
            <textarea name="contenu" id="contenu" placeholder="Contenu"><?php echo $nouvelle["contenu"]; ?></textarea><br>
            <input type="file" name="fileToUpload"><br>
            <input type="submit" name="enregistrer" value="Enregistrer">
        </form>
        
        <script>
            CKEDITOR.replace( 'titre' );
            CKEDITOR.replace( 'contenu' );
        </script>
    </body>
</html>