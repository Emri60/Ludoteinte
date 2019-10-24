<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>

</head>
<body>
  <div class="wrapper">

    <header class="header">
      <nav class="navbar-mobile">
        <a href="" class="menu-burger"><i class="fa fa-bars" aria-hidden="true"></i></a>
      </nav>
      <nav class="navbar">
        <div class="navbar__menu">
          <a href="<?= home_url(); ?>">Acceuil</a>
          <a href="prestations.html">Tarifs</a>
          <a href="<?php echo esc_url( home_url( '/ma-galerie' ) ); ?>">Photos</a>
          <a href="contact.html">Contact</a>
        </div>
        <div class="navbar__social">
          <a href=""><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
          <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </nav>
    </header>

    <section class="banner" style="background-image: url(<?= wp_get_attachment_image_url(90, 0); ?>);">
      <div class="pres"><h1>Ludoteinte60</h1></div>
    </section>