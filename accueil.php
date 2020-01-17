<?php
  include("header.php");
  require_once("config/connect.php");

  $connect = new Connect();
  $connexion = $connect->connection();
  $requete = $connexion->prepare("SELECT nouvelle.*, utilisateur.nom, utilisateur.prenom FROM nouvelle JOIN utilisateur ON nouvelle.auteur=utilisateur.id ORDER BY nouvelle.datedepublication DESC LIMIT 3");
  $requete->execute();
  $nouvelles = $requete->fetchAll();

  $media="";
  if(empty($nouvelles[0]["media"])){
   $media="assets/site/img/logo1.gif";
  }else{
     $media=$nouvelles[0]["media"];
  }

  $datepremier = date_parse($nouvelles[0]["datedepublication"]);
  $jour1 = $datepremier["day"];
  $mois1 = $datepremier["month"];
  $annee1 = $datepremier["year"];
?>
    <!-- banner part start-->
    <section class="banner_part">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 offset-lg-5">
            <div class="banner_text">
              <div class="banner_text_iner">
                <h1>Bienvenue au comité de Paris</h1>
                <p>"L'enfant qui souffre n'a pas le temps d'attendre" <b>Alexis Danan</b></p>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                  <input type="hidden" name="cmd" value="_s-xclick">
                  <input type="hidden" name="hosted_button_id" value="FXDTAVPJZR6B4">
                  <input type="submit" name="submit" value="Faire un don" class="btn_2">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="section_tittle text-center" id="signalement">
              <h2>Comment aider un enfant en danger?</h2>
            </div>
          </div>
        </div> 
        <div class="row justify-content-center">
          <div class="col-lg-5 col-sm-6">
            <div class="single_feature">
              <div class="single_feature_part">
                <div class=" d-flex align-items-center">
                  <img src="assets/site/img/icon/warning.svg" alt="">
                  <h4>Signalement</h4>
                </div>
                <p>
                  <br>Dans le but de signaler le cas d'un enfant en danger, contactez le comité le plus proche de chez vous <a href="listeComites.htm">(liste des comités)</a>.
                </p>
                <p>Contactez la <a href="federation.htm" class=lien> Fédération des comités Alexis Danan </a><br><strong>Tél: 07 81 63 94 38</strong></p><br>
                <h3>Autres Numéros d'appel</h3>
                <p>
                  Il existe aussi un Service National d'Accueil Téléphonique pour l'Enfance Maltraitée: <br> 
                  <a href="http://www.allo119.gouv.fr/" class=lien>Appellez le 119 (24h/24) </a>
                </p>
                <p>En cas d'extrême urgence, la Police ou la Gendarmerie (suivant le secteur)... &nbsp;<br><strong>Tél: 17</strong><br></p>
                <p>Numéro d'urgence européen, à réserver vraiment à des situations extérieures! (depuis un fixe ou un portable)...&nbsp; <br><strong>Tél: 112</strong></p>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- feature_part start-->

    <!-- top_service part start-->
    <section class="be_part">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="be_part_text">
                      <h2>Message</h2>
                        <p>Notre association a travaillé et aurait souhaité disparaître dans une République qui aurait garanti bien-traitance à chacunde ses citoyens « enfants » à travers la volonté de chacun de ses citoyens "adultes".</p>
                        <p>Liberté de dire, de vivre heureux, de grandir.</p>
                        <p>Egalité de parole avec celle de l’adulte qui peut mentir et se protéger…</p>
                        <p>Fraternité reconnue à travers le respect, la confiance, le partage pour les avoir rencontrés…</p>
                        <p>Protection, comme l’engagement formel de chaque adulte en qui l’enfant commence par croire…</p>
                        <p>Il y a urgence au contraire dans notre société en pleine évolution afin que l’enfant ne soit pas oublié en  ant que PERSONNE.</p>
                        <p>Merci  à  tous  ceux  qui  nous  aident  et  nous  aideront  en  affirmant  une  telle  République !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top_service part end-->

    <!--::blog_part start::-->
    <section class="blog_part padding_bottom" id="nouvelles">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                      <br>
                      <h2>Nouvelles</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                  echo 
                  "
                    <div class=\"col-lg-6\">
                      <div class=\"single_blog\">
                        <div class=\"appartment_img\">
                          <img src=\"".$media."\" alt=\"\">
                        </div>
                        <div class=\"single_appartment_content\">
                          <a href=\"nouvelle.php?id=".$nouvelles[0]["id"]."\">
                            <h4>".$nouvelles[0]["titre"]."</h4>
                          </a>
                          <ul class=\"list-unstyled\">
                            <li><span class=\"flaticon-calendar\"></span> ".$jour1." / ".$mois1." / ".$annee1."</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  ";
                  unset($nouvelles[0]);
                  echo 
                  "<div class=\"col-lg-6\">
                    <div class=\"right_single_blog\">";
                    foreach($nouvelles as $nouvelle){
                      $date = date_parse($nouvelle["datedepublication"]);
                      $jour = $date["day"];
                      $mois = $date["month"];
                      $annee = $date["year"];
                        echo 
                        "
                            <div class=\"single_blog\">
                                <div class=\"media\">
                                    <div class=\"media-body align-self-center\">
                                        <a href=\"nouvelle.php?id=".$nouvelle["id"]."\">
                                            <h5 class=\"mt-0\"> ".$nouvelle["titre"]."</h5>
                                        </a>
                                        <ul class=\"list-unstyled\">
                                            <li><a href=\"\"> <span class=\"flaticon-calendar\"></span> </a> ".$jour." / ".$mois." / ".$annee."</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
                    }
                    echo 
                    "
                    <div class=\"single_blog\">
                    <div class=\"media\">
                        <div class=\"media-body align-self-center\">
                            <a href=\"nouvelles.php\">
                                <h5 class=\"mt-0\" style=\"text-align: center\"> Toute les nouvelles</h5>
                            </a>
                        </div>
                    </div>
                </div>
                        </div>
                      </div>
                    "
                ?>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::our client part start::-->
    <section id="partenaires" class="client_part padding_bottom">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Partenaires</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p>Aucun pour le moment :(</p>
                </div>
            </div>
        </div>
    </section>
    <!--::our client part end::-->

<?php
  include("footer.php");
?>