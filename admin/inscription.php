<?php
require_once("../config/connect.php");
session_start();
if(!isset($_SESSION["utilisateur"])){
  header("Location: login.php");
}

  if(isset($_POST["inscrire"])){
    if(!empty($_POST["nom"]) && !empty($_POST["prenom"]) && !empty($_POST["password"]) && !empty($_POST["password2"]) && !empty($_POST["email"]) && !empty($_POST["telephone"]) ){
      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        if($_POST["password"] == $_POST["password2"]){
            $encryptedpassword = password_hash($_POST["password"], PASSWORD_BCRYPT);

            $connect = new Connect();
		        $connexion = $connect->connection();
		        $requete = $connexion->prepare("INSERT INTO utilisateur(nom, prenom, motdepasse, email, telephone, datedecreation) VALUES(:nom, :prenom, :mot_de_passe, :email, :telephone, NOW())");
		        $requete->execute(["nom"=>$_POST["nom"], "prenom"=>$_POST["prenom"], "mot_de_passe"=>$encryptedpassword, "email"=>$_POST["email"], "telephone"=>$_POST["telephone"]]);
            header("Location: login.php");
          }
      }
    }            
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/logo2.png">

  <title>Pour la protection de l'enfance</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">
    <form method="POST" class="login-form">
      <div class="login-wrap">
        <div  class="input-group">
          <input type="text" class="form-control" name="nom" placeholder="Nom" autofocus>
        </div>
        <div class="input-group">
          <input type="text" class="form-control" name="prenom" placeholder="Prénom" autofocus>
        </div>
        <div class="input-group">
          <input type="password" class="form-control" name="password" placeholder="Mot de passe">
        </div>
        <div class="input-group">
          <input type="password" class="form-control" name="password2" placeholder="Mot de passe">
        </div>
        <div class="input-group">
          <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <input type="text" class="form-control" name="telephone" placeholder="Téléphone" autofocus>
        </div>
        <button class="btn btn-primary btn-lg btn-block" name="inscrire" type="submit">Inscrire</button>
      </div>
    </form>
    
    <div class="text-right">
      <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </div>
  </div>
</body>

</html>
