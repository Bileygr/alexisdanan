<?php
  include("header.php");
  require_once("config/connect.php");

  if(isset($_POST["envoyer"])){
    if(!empty($_POST["objet"]) && !empty($_POST["message"]) && !empty($_POST["nom"]) && !empty($_POST["email"])){
      if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $connect = new Connect();
		    $connexion = $connect->connection();
		    $requete = $connexion->prepare("INSERT INTO message(nom, objet, message, email, dateenvoi) VALUES(?, ?, ?, ?, NOW())");
        $requete->execute([$_POST["nom"], $_POST["objet"], $_POST["message"], $_POST["email"]]);
      }else{
        echo "2";
      }
    }else{
      echo "1";
    }          
  }
?>
  <!-- breadcrumb start-->
  <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner">
            <div class="breadcrumb_iner_item text-center">
              <h2>contact</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Entrer en contact</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" method="POST" id="contactForm"
            novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">

                  <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mesage'"
                    placeholder='Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="nom" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Nom'" placeholder='Nom'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Email'" placeholder='Email'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="objet" id="subject" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Objet'" placeholder='Objet'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" name="envoyer" class="button button-contactForm btn_1" value>Envoyer <i class="flaticon-right-arrow"></i> </button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>222, rue La Fayette</h3>
              <p>75010 Paris</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>07 81 63 94 38</h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>federation@pourlaprotectiondelenfance.com</h3>
              <p>Envoyez nous un message!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
<?php
  include("footer.php");
?>