<!DOCTYPE html>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Pour la protection de l'enfance</title>
    <link rel="icon" href="assets/site/img/logo2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/site/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/site/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="assets/site/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="assets/site/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="assets/site/css/flaticon.css">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="assets/site/css/magnific-popup.css">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="assets/site/css/nice-select.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="assets/site/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="assets/site/css/style.css">
  </head>

  <body>
    <!--::header part start::-->
    <header class="main_menu home_menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="{% url 'accueil' %}"> <img src="assets/site/img/logo1.gif" alt="logo"> </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
              </button>

              <div class="collapse navbar-collapse main-menu-item justify-content-end"
                id="navbarSupportedContent">
                <ul class="navbar-nav align-items-center">
                  <li class="nav-item">
                    <a class="nav-link" href="{% url 'accueil' %}">Accueil</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{% url 'droits' %}">Droits</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{% url 'actions et objectifs' %}">Actions/objectifs</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown"
                      role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Fédération
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{% url 'la fédération' %}">La Fédération<a>
                      <a class="dropdown-item" href="{% url 'historique' %}">Historique</a>
                      <a class="dropdown-item" href="{% url 'comités en france' %}">Comités en France</a>
                      <a class="dropdown-item" href="{% url 'accueil' %}#partenaires">Partenaires</a>
                      <a class="dropdown-item" href="{% url 'liens utile' %}">Liens utile</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#nouvelles">Nouvelles</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{% url 'contact' %}">Contact</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header part end-->

    <!-- banner part start-->
    <section class="banner_part">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 offset-lg-5">
            <div class="banner_text">
              <div class="banner_text_iner">
                <h1>Bienvenue au comité de Paris</h1>
                <p>"L'enfant qui souffre n'a pas le temps d'attendre" <b>Alexis Danan</b></p>
                <a href="#" class="btn_2">Faire un don</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part" id="signalement">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8">
            <div class="section_tittle text-center">
              <h2>Comment aider un enfant en danger?</h2>
            </div>
          </div>
        </div> 
        <div class="row justify-content-center">
          <div class="col-lg-5 col-sm-6">
            <div class="single_feature">
              <div class="single_feature_part">
                <div class=" d-flex align-items-center">
                  <img src="{% static "img/icon/warning.svg" %}" alt="">
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
                <div class="col-lg-6">
                    <div class="single_blog">
                        <div class="appartment_img">
                            <img src="assets/site/img/cocktail_vision.gif" alt="">
                        </div>
                        <div class="single_appartment_content">
                            <a href="blog.html">
                                <h4>First cattle which earth unto let health for
                                    can get and see what you
                                </h4>
                            </a>
                            <ul class="list-unstyled">
                                <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right_single_blog">
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <p><a href="#">healthy food</a></p>
                                    <a href="blog.html">
                                        <h5 class="mt-0"> Man does day divided morning after give .</h5>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                        <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <p><a href="#">healthy food</a></p>
                                    <a href="blog.html">
                                        <h5 class="mt-0"> To greater divide day hath fly moved was </h5>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                        <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="single_blog">
                            <div class="media">
                                <div class="media-body align-self-center">
                                    <p><a href="#">healthy food</a></p>
                                    <a href="blog.html">
                                        <h5 class="mt-0"> That likeness isn't air earth seas had cattle </h5>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li><a href=""> <span class="flaticon-calendar"></span> </a> May 10, 2019</li>
                                        <li><a href=""> <span class="flaticon-comment"></span> </a> 1 comments</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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