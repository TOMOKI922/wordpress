<?php get_header(); ?>
    <article id="main">
      <?php
        if(have_posts()) :
          while(have_posts()) :
            the_post();
            get_template_part('content');
          endwhile;
        endif;

       ?>
       <div class="comments">
         <?php comments_template(); ?>
       </div>
       <div class="relation">
         <h2>関連記事</h2>
         <?php get_template_part('single_related'); ?>
       </div>
      </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
