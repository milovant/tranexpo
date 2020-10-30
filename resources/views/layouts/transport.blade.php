<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" lang="en"
    content="Enjoy up to 75% discount for your parcel consignments and compare the best offers for free for express carriers such as DHL, UPS or Fedex.">
  <meta name="language" content="en">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta property="og:title" content="Upela: price comparison for sending parcels worldwide" />
  <meta property="og:description"
    content="Enjoy up to 75% discount for your parcel consignments and compare the best offers for free for express carriers such as DHL, UPS or Fedex." />
  <meta property="og:image" content="./assets/images/header-img.svg" />

  <title>
    Upela: price comparison for sending parcels worldwide
  </title>

  <!-- Fotnawesome Kit -->
  <script src="https://kit.fontawesome.com/ec1b2f3dde.js" crossorigin="anonymous"></script>

  <!-- Datepicker -->

  <link rel="stylesheet" type="text/css" href="./assets/css/custom-select-responsive.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/custom-address.css">
  <link rel="stylesheet" href="./assets/css/login.css">
  <link rel="stylesheet" href="./assets/css/responsive.css">
  <link rel="shortcut icon"
    href="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="./assets/js/config.js"></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

  <script>
    var locale = "en";
  </script>
</head>

<body>

  <script type="text/javascript" src="./assets/js/cookie-util.js"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    let dataLayerObj = { 'lang': configuration.getCurrentLocale() };
    let dataLayerData = getCookie('upl_datalayer');
    if (dataLayerData !== '') {
      dataLayerData = JSON.parse(dataLayerData.replace(/&quot;/g, '"'));
      let pro = (dataLayerData.pro === 'true') ? 'pro' : 'particulier';
      var dataLayerUserObj = {
        'user_type': pro,
        'user_status': dataLayerData.status,
        'user_segment': dataLayerData.status + ' ' + pro,
        'is_top_customer': dataLayerData.isTop
      };

      if (typeof dataLayerEvent !== 'undefined') {
        dataLayerUserObj.event = dataLayerEvent;
      }
      Object.assign(dataLayerObj, dataLayerUserObj);
    }
    dataLayer.push(dataLayerObj);
  </script>



  <!-- menuLangHtml -->

  <header>

    <nav class="navbar navbar-general navbar-expand-md fixed-top">
      <div class="container">
        <a class="navbar-brand" href="https://www.upela.com/en/">
          <img src="./assets/images/logo-upela.svg" alt="">
        </a>
        <button class="navbar-toggler navbar-toggler-user" type="button" data-toggle="collapse"
          data-target="#navbarCollapseRight" aria-controls="navbarCollapse" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-user-circle"></i>
        </button>
        <button class="navbar-toggler navbar-toggler-bars" type="button" data-toggle="collapse"
          data-target="#navbarCollapseLeft" aria-controls="navbarCollapse" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapseLeft">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown dropdown-arrow dropdown-flags">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img src="./assets/images/flag-en.svg" alt=""> <span class="d-sm-inline-block d-none">En</span><span
                  class="d-sm-none d-inline-block">English</span>
              </a>

              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#"><img src="./assets/images/flag-fr.svg" alt="">
                  Français</a>
                <a class="dropdown-item" href="#"><img src="./assets/images/flag-en.svg" alt="">
                  English</a>
                <a class="dropdown-item" href="#"><img src="./assets/images/flag-es.svg" alt="">
                  Español</a>
                <a class="dropdown-item" href="#"><img src="./assets/images/flag-de.svg" alt="">
                  Deutsch</a>
                <a class="dropdown-item" href="#"><img src="./assets/images/flag-it.svg" alt="">
                  Italiano</a>
              </div>

            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Our services
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./estimate-transport-parcel-195.html">Shipping quote</a>
                <a class="dropdown-item" href="./tracking.html">Parcel tracking</a>
                <a class="dropdown-item" href="./upela-courier-service-157.html">Urgent Courier Service</a>
                <a class="dropdown-item" href="./lower-shipping-costs-197.html">Send your parcels cheaper</a><a
                  class="dropdown-item" href="./transportation-module-plugin-29.html">E-commerce connectors</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Our expertise</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./partners-carriers-31.html">Our partners carriers</a>
                <a class="dropdown-item" href="./international-shipping-173.html">International</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Business offer</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./discover-business-account-93.html">Business Account</a><a
                  class="dropdown-item" href="./transportation-module-plugin-29.html">E-commerce connectors</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./blog/">Blog</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Help</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="./help-center-26.html">Help Center</a>
                <a class="dropdown-item" href="#">Contact</a>
              </div>

            </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse" id="navbarCollapseRight">
          <ul class="navbar-nav ml-auto" id="header-account">
            <li class="nav-item">
              <a class="nav-link" href="https://app.upela.com/subscription#loginModal">Login</a>
            </li>
            <li>
              <a class="btn btn-outline-primary" href="https://app.upela.com/subscription">Subscription</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <main role="main">
    @yield('content')
  </main>


  <footer>
    <div class="quick-links hidden-print">
      <div class="quick-link"><a href="https://old.upela.com/en/my-account/login"><i class="fa fa-reply"></i>
          <span class="quick-link-content">Connect on old Upela website</span></a></div>
      <div class="clear"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-12">
          <a href="index.html" class="logo-footer"><img src="./assets/images/logo-upela-footer.svg" alt=""></a>
        </div>
        <div class="col-md-2 col-12">
          <div class="footer-menu-title">About<i class="fas fa-chevron-down d-sm-none d-inline-block"></i></div>
          <div class="footer-menu">
            <ul>
              <li><a href="/en/about-upela-15.html">What is Upela?</a></li>
              <li><a href="/en/help-center-26.html">Help</a></li>
              <li><a href="https://app.upela.com/help/contact">Contact us</a></li>
              <li><a href="https://upela.welcomekit.co/">Jobs</a></li>
              <li><a href="/fr/blog/agence-rp-wordcom-72.html">Press</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="footer-menu-title">Practical information<i
              class="fas fa-chevron-down d-sm-none d-inline-block"></i></div>
          <div class="footer-menu">
            <ul>
              <li><a href="/en/prepare-my-parcel.html">Prepare your shipment</a></li>
              <li><a href="/en/rules-legislation-shipment.html#regles-marchandises-interdites">Prohibited Goods</a></li>
              <li><a href="/en/rules-legislation-shipment.html#regles-etranger">Customs obligations</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <div class="footer-menu-title">Business offer<i class="fas fa-chevron-down d-sm-none d-inline-block"></i>
          </div>
          <div class="footer-menu">
            <ul>
              <li><a href="https://app.upela.com/subscription">Create my account</a></li>
              <li><a href="#">Our tools</a></li>
              <li><a href="/en/transportation-module-plugin-29.html">Plug & Play connectors</a></li>
              <li><a href="/en/sponsorship-program-123.html">Sponsor a professional</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-12">
          <div class="footer-title mb-3 mt-4"><a href="./assets/PDF/EN-CGV/CGV-Upela-En.pdf">General conditions
              Upela</a></div>
          <div class="footer-title mb-3">Social Media</div>
          <ul class="social-list">
            <li><a href="https://www.facebook.com/UpelaExpress/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="https://twitter.com/UpelaExpress"><i class="fab fa-twitter"></i></a></li>
            <li><a href="https://www.youtube.com/channel/UCXnm8EYjYkQYECXPYGO5ahA"><i class="fab fa-youtube"></i></a>
            </li>
            <li><a href="https://www.instagram.com/upela.fr/?hl=fr"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-12 text-center d-sm-block d-none">
          <div class="copyright mt-5 mb-3">
            Copyright © 2020 MPG Upela. All rights reserved | <a
              href="././assets/PDF/Confidentialite/Redspher-Upela_Customer_Privacy_Notice_2019_EN.pdf">Customer Privacy
              Note</a> | <a href="/./assets/PDF/EN-CGV/CGV-Upela-En.pdf">Legal notice</a> | <a
              href="/./assets/PDF/Confidentialite/Upela_Cookie_Policy_EN.pdf">Cookie policy</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="./assets/js/custom-select.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/custom-address.js"></script>
  <script src="./assets/js/app.js"></script>
  <script src="./assets/js/appLogin.js"></script>
  <link rel="stylesheet" href="./assets/jq.cookiebar/jquery.cookiebar.css">
  <script src="./assets/jq.cookiebar/jquery.cookiebar.js"></script>

  <script>
    const cookiebar_msg = {
      fr: 'En continuant votre navigation sur ce site, vous acceptez l’utilisation de cookies pour mesurer l’audience de notre site et vous proposer des contenus personnalisés.',
      en: 'By continuing your visit on this website, you accept the use of cookies to measure the audience and offer you personalized content.',
      de: 'Indem Sie Ihren Besuch auf dieser Webseite fortsetzen akzeptieren Sie die Verwendung von Cookies. Dies hilft uns die Zielgruppe unserer Webseite zu bestimmen und Ihnen personalisierte Inhalte anzuzeigen.',
      it: 'Continuando a navigare su questo sito web, si accetta l’utilizzo di cookies per misurare l’audience del sito e proporre contenuti personalizzati.',
      es: 'Al continuar tu visita en nuestra web, acepta el uso de cookies para medir la audiencia de nuestra página y ofrecerte un contenido más personalizado.',
    };
    const cookiebar_accept = {
      fr: 'Accepter',
      en: 'Accept',
      de: 'akzeptieren',
      it: 'accetta',
      es: 'Aceptar'
    };
    const cookiebar_readmore = {
      fr: 'En savoir sur la Politique de cookies',
      en: 'Learn more about our Cookie Policy',
      de: 'mehr erfahren zu den Richtlinien der Cookies',
      it: 'Per saperne di più sullla Politica Cookies',
      es: 'Más información sobre nuestra Política de cookies'
    };
    const cookiebar_readmore_url = {
      fr: 'https://www.upela.com/assets/PDF/Confidentialite/Upela_Cookie_Policy_FR.pdf',
      en: 'https://www.upela.com/assets/PDF/Confidentialite/Upela_Cookie_Policy_EN.pdf',
      de: 'https://www.upela.com/assets/PDF/Confidentialite/Upela_Cookie_Policy_EN.pdf',
      it: 'https://www.upela.com/assets/PDF/Confidentialite/Upela_Cookie_Policy_EN.pdf',
      es: 'https://www.upela.com/assets/PDF/Confidentialite/Upela_Cookie_Policy_EN.pdf'
    };

    $.cookieBar({
      element: 'body',
      fixed: true,
      bottom: true,
      message: cookiebar_msg[configuration.getCurrentLocale()],
      acceptButton: true,
      acceptText: cookiebar_accept[configuration.getCurrentLocale()],
      policyButton: true,
      policyText: cookiebar_readmore[configuration.getCurrentLocale()],
      policyURL: cookiebar_readmore_url[configuration.getCurrentLocale()]
    });
  </script>

</body>

</html>