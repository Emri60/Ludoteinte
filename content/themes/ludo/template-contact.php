<?php

/*
Template Name: Page de contact
*/

?>

<?php get_header(); ?>

  <main class="contact-form">

  <h1 class="contact-form__title"><?php the_title(); ?></h1>

  <form action="#" class="form">

  <div class="form__field">
    <label for="name">Nom</label>
    <input type="text" name="name" id="name">
  </div>
  <div class="form__field">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
  </div>
  <div class="form__field">
    <label for="message">Message</label>
    <textarea name="message" id="message"></textarea>
  </div>
  <div class="form__submit">
  <input type="submit" value="envoyer">
  </div>

  </form>

  </main>

<?php get_footer(); ?>