<?php
  include("header.php");
  require_once("config/connect.php");

  $connect = new Connect();
  $connexion = $connect->connection();
  $requete = $connexion->prepare("SELECT nouvelle.*, utilisateur.nom, utilisateur.prenom FROM nouvelle JOIN utilisateur ON nouvelle.auteur=utilisateur.id ORDER BY nouvelle.datedepublication DESC");
  $requete->execute();
  $nouvelles = $requete->fetchAll();
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>Nouvelles</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php
                        foreach($nouvelles as $nouvelle){
                            $date = date_parse($nouvelle["datedepublication"]);
                            $jour = $date["day"];
                            $mois = $date["month"];
                            $annee = $date["year"];
                            echo 
                            "
                                <article class=\"blog_item\">
                                    <div class=\"blog_item_img\">
                                        <img class=\"card-img rounded-0\" src=\"\" alt=\"\">
                                        <a href=\"nouvelle.php?id=".$nouvelle["id"]."\" class=\"blog_item_date\">
                                            <h3>".$nouvelle["titre"]."</h3>
                                        </a>
                                    </div>

                                    <div class=\"blog_details\">
                                        <a class=\"d-inline-block\" href=\"nouvelle.php?id=".$nouvelle["id"]."\">
                                            <h2>Posté le ".$jour." / ".$mois." / ".$annee."</h2>
                                        </a>
                                        ".$nouvelle["contenu"]."
                                    </div>
                                </article>
                            ";
                        }
                    ?>
                </div>
            </div>  
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php
  include("footer.php");
?>