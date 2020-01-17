<?php
include("header.php");
require_once("../config/connect.php");

$connect = new Connect();
$connexion = $connect->connection();
$requete = $connexion->prepare("SELECT * FROM utilisateur");
$requete->execute();
$utilisateurs = $requete->fetchAll();

if(isset($_POST["modifier"])){
  header("Location: modifier-un-utilisateur.php?id=".$_POST["id"]."");
}

if(isset($_POST["supprimer"])){
  $connect = new Connect();
  $connexion = $connect->connection();
  $requete = $connexion->prepare("DELETE FROM utilisateur WHERE id=?");
  $requete->execute([$_POST["id"]]);
  header("Location: index.php");
}
?>

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <a class="" href="index.php">
                          <i class="icon_documents_alt"></i>
                          <span>Nouvelles</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="utilisateurs.php">
                          <i class="icon_documents_alt"></i>
                          <span>Utilisateurs</span>
                      </a>
          </li>
          <li>
            <a class="" href="informations.php">
                          <i class="icon_documents_alt"></i>
                          <span>Informations</span>
                      </a>
          </li>
          <li>
            <a class="" href="informations.php">
                          <i class="icon_documents_alt"></i>
                          <span>Vos informations</span>
                      </a>
          </li>

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Utilisateurs / 
                <a href="inscription.php">Créer</a>
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th><i class=""></i> Nom</th>
                    <th><i class=""></i>Prénom</th>
                    <th><i class=""></i>Email</th>
                    <th><i class=""></i>Téléphone</th>
                    <th><i class=""></i>Date de création</th>
                  </tr>
                  <?php
                    foreach($utilisateurs as $utilisateur){
                      echo 
                      "
                        <form method='POST'>
                          <input type=\"text\" name=\"id\" value=".$utilisateur["id"]." hidden=\"hidden\">
                          <tr>
                            <td>".$utilisateur["nom"]."</td>
                            <td>".$utilisateur["prenom"]."</td>
                            <td>".$utilisateur["email"]."</td>
                            <td>".$utilisateur["telephone"]."</td>
                            <td>".$utilisateur["datedecreation"]."</td>
                            <td>
                              <div class=\"btn-group\">
                                <button type=\"submit\" class=\"btn btn-primary\" name=\"modifier\">Modifier</button>
                                <button type=\"submit\" class=\"btn btn-danger\" name=\"supprimer\">Supprimer</button>
                              </div>
                            </td>
                          </tr>
                        <form>
                      ";
                    }
                  ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>

      </section>
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
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
