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