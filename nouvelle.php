<?php
  include("header.php");
  require_once("config/connect.php");

  $connect = new Connect();
  $connexion = $connect->connection();
  $requete = $connexion->prepare("SELECT nouvelle.*, utilisateur.nom, utilisateur.prenom FROM nouvelle JOIN utilisateur ON nouvelle.auteur=utilisateur.id WHERE nouvelle.id=?");
  $requete->execute([$_REQUEST['id']]);
  $nouvelle = $requete->fetch();
  $media="";
  if(empty($nouvelle["media"])){
   $media="assets/site/img/logo1.gif";
  }else{
     $media=$nouvelle["media"];
  }
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="breadcrumb_iner">
               <div class="breadcrumb_iner_item text-center">
                  <h2>Nouvelle</h2>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- breadcrumb start-->

<!--================Blog Area =================-->
<section class="blog_area single-post-area section_padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 posts-list">
            <div class="single-post">
               <div class="feature-img">
                  <img class="img-fluid" src=<?php echo "".$media.""; ?> alt="">
               </div>
               <div class="blog_details">
                  <h2><?php echo $nouvelle["titre"]; ?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><i class="far fa-comments"></i> Posté par <?php echo $nouvelle["prenom"]." ".$nouvelle["nom"]; ?></li>
                     </ul>
                     <p class="excert"><?php echo $nouvelle["contenu"];?></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->
<?php
  include("footer.php");
?>