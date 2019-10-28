<?php

/*
Template Name: Page de galerie
*/

?>

<?php get_header(); ?>

  <main class="galery">

    <?php
    $args = [
    'post_type' => 'galery'
    ];

    $wp_query = new WP_Query( $args );

    ?>

    <h1 class="galery__title"><?php the_title(); ?></h1>

    <?php if ( $wp_query->have_posts() ) : while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
    
    <div class="galery__picture" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">

    </div>

    <?php endwhile; wp_reset_postdata(); endif; ?>

  </main>

<?php get_footer(); ?>