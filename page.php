<?php get_header(); ?>
    <article id="main">
      <?php
        if(have_posts()) :
          while(have_posts()) :
            the_post();
            get_template_part('content-page');
          endwhile;
        endif;

       ?>
      </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
