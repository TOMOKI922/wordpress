<?php
/*
Template Name: page_all
*/
 ?>
<?php get_header(); ?>
    <article id="main">
      <h2 class="home-title"><?php the_title(); ?></h2>
      <div class="new-articles">
        <?php
          $paged = get_query_var('paged');
          query_posts("posts_per_page=9&paged=$paged&orderby=date&order=DESC");
          if (have_posts()) :
          ?>
            <div class="pagination clearfix">
              <?php
              if (function_exists('page_navi')) :
              page_navi('elm_class=page-nav&edge_type=span');
              endif; ?>
            </div>
          <?php endif; ?>
          <?php  while (have_posts()) :
              the_post();
            get_template_part('each_expart_post');
            endwhile;
         ?>
         <!-----PageNavi----->
      </div>
        <div class="pagination clearfix">
          <?php
          if (function_exists('page_navi')) :
          page_navi('elm_class=page-nav&edge_type=span');
          endif; ?>
        </div>
      <?php endif; ?>
      </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
