<?php get_header(); ?>

    <main class="posts">
      
      <div class="title">
        <h1 class="title_principal">Spécialiste Vitres Teintées et Covering</h1>
      </div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <section class="post">
          <h2 class="post__title"><?php the_title(); ?></h2>
          <div class="post__content">
            <p><?php the_content(); ?></p>
          </div>
        </section>
      <?php endwhile; endif; ?>  
    </main>

    <section class="call" style="background-image: url(<?= wp_get_attachment_image_url(90, 0); ?>);">
    
    </section>

<?php get_footer(); ?>
