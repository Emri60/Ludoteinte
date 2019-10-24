<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Webpack</title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <div class="wrapper">

    <header class="header">
      <nav class="navbar-mobile">
        <a href="" class="menu-burger"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </nav>
      <nav class="navbar">
        <div class="navbar__menu">
          <a href="#">Acceuil</a>
          <a href="#">Prestations - Tarifs</a>
          <a href="#">Photos</a>
          <a href="#">Contactez-nous</a>
        </div>
        <div class="navbar__social">
          <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </nav>
    </header>

    <section class="banner" style="background-image: url('images/banner.jpg');">
    
    </section>

    <main class="posts">
      <div class="title">
        <h1 class="title_principal">Spécialiste Vitres Teintées et Covering</h1>
      </div>
      <section class="post">
        <h2 class="post__title">Présentation</h2>
        <div class="post__content">
          <p>Au service des particuliers et des professionnels dans le secteur de l'automobile et du bâtiment, la société LudoTeinte60 vous apporte les solutions adéquates en matière de pose de films solaire sur les vitrages de tout type.</p>
        </div>
      </section>
      <section class="post">
        <h2 class="post__title">Nos engagements</h2>
        <ul class="post__content">
          <li>Un travail soigné</li>
          <li>Des tarifs compétitifs</li>
          <li>L'utilisation de produits haut de gamme "Hexis - SunTek - 3M - Avery Dennison"</li>
          <li>Une grande réactivité</li>
          <li>Un suivi et une garantie de 10 ans du produit et de la pose</li>
        </ul>
      </section>
      <section class="post">
        <h2 class="post__title">Les interventions</h2>
        <div class="post__content">
          <p>Nous intervenons sur rendez-vous du lundi au samedi de 09 h à 19 h dans nos locaux</p>
          <p>Pour obtenir un rendez-vous, un devis personnalisé (gratuit) ou des informations complémentaires, n'hésitez pas à nous contacter sur simple appel, sms ou par mail réponse garantie dans la journée...</p>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="plan">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2594.1743594147515!2d2.077945015924772!3d49.44342147934899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e706c3f43c3d39%3A0xf3819e078af3a779!2s46%20Rue%20de%20Notre%20Dame%20du%20Thil%2C%2060000%20Beauvais!5e0!3m2!1sfr!2sfr!4v1570119603127!5m2!1sfr!2sfr"></iframe>
      </div>
      <form action="" class="contact">
        <div class="field">
          <label for="nom">Votre nom</label>
          <input type="text">
        </div>
        <div class="field">
          <label for="mail">Votre email</label>
          <input type="email">
        </div>
        <div class="field">
          <label for="message">Votre message</label>
          <textarea name="message" id="message"></textarea>
        </div>
        <div class="field submit">
          <input type="submit" value="Envoyer">
        </div>
      </form>
    </footer>
  </div>

  <div class="menu">
    <a href="#" class="menu-burger close-menu">
      <i class="fa fa-times" aria-hidden="true"></i>
    </a>
    <nav class="modal-nav">
      <ul>
        <li class="modal-nav__item"><a href="#">Prestations - Tarifs</a></li>
        <li class="modal-nav__item"><a href="#">Photos</a></li>
        <li class="modal-nav__item"><a href="#">Contactez nous</a></li>
      </ul>
    </nav>
    <div class="social-nav">
      <ul>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>

  <script src="js/app.js"></script>
</body>
</html>
