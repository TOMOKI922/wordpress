<?php get_header(); ?>
    <article id="main">
      <h2 class="home-title">新着記事</h2>
      <div class="new-articles">
        <?php
          $newslist = get_posts(array(
            'posts_per_page' => 6
          ));
          foreach($newslist as $post):
            setup_postdata($post);
            get_template_part('each_expart_post');
          endforeach;
          wp_reset_postdata();
         ?>

      </div>
      </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
