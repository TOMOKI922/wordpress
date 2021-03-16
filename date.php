<?php get_header(); ?>
    <article id="main">
      <h2 class="home-title"><?php echo get_the_date('Y年n月'); ?></h2>
      <div class="new-articles">
        <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post();
            get_template_part('each_expart_post');
            endwhile;
         ?>
         <!-----PageNavi----->
      </div>
        <div class="pagination clearfix">
          <?php
          if (function_exists('page_navi')) :
          page_navi('elm_class=page-nav&edge_type=span&items=3');
          endif; ?>
        </div>
      <?php endif; ?>
      </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
