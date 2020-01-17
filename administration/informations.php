<?php
include("header.php");
require_once("../config/connect.php");

$connect = new Connect();
$connexion = $connect->connection();
$requete = $connexion->prepare("SELECT * FROM contact WHERE id=1");
$requete->execute();
$information = $requete->fetch();

if(isset($_POST["modifier"])){
  $connect = new Connect();
	$connexion = $connect->connection();
	$requete = $connexion->prepare("UPDATE contact SET numeroderue=?, rue=?, codepostal=?, ville=?, telephonemobile=?, telephonefixe=?, fax=?, email=?, siteweb=? WHERE id=?");
	$requete->execute([$_POST["numeroderue"], $_POST["rue"], $_POST["codepostal"], $_POST["ville"], $_POST["telephonemobile"], $_POST["telephonefixe"], $_POST["fax"], $_POST["email"], $_POST["siteweb"], 1]);
  header("Location: informations.php");
}
?>

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li>
            <a class="" href="accueil.php">
                          <i class="icon_documents_alt"></i>
                          <span>Nouvelles</span>
                      </a>
          </li>
          <li>
            <a class="" href="utilisateurs.php">
                          <i class="icon_documents_alt"></i>
                          <span>Utilisateurs</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="informations.php">
                          <i class="icon_documents_alt"></i>
                          <span>Informations</span>
                      </a>
          </li>
          <li>
            <a class="" href="vos-informations.php">
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
              Informations de contact de l'association
            </header>
          </section>
        </div>
      </div>
      <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Informattions
              </header>
              <div class="panel-body">
                <form class="form-horizontal " method="POST">
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Numéro de rue</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="numeroderue" value="<?php echo $information["numeroderue"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Rue</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="rue" value="<?php echo $information["rue"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Code postal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="codepostal" value="<?php echo $information["codepostal"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Ville</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="ville" value="<?php echo $information["ville"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Téléphone mobile</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telephonemobile" value="<?php echo $information["telephonemobile"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Téléphone fixe</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="telephonefixe" value="<?php echo $information["telephonefixe"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Fax</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="fax" value="<?php echo $information["fax"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="email" value="<?php echo $information["email"]; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Site web</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="siteweb" value="<?php echo $information["siteweb"]; ?>">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
                </form>
              </div>
            </section>
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
