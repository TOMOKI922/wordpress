<?php get_header(); ?>
    <article id="main">
      <h2 class="home-title"><?php the_search_query(); ?> の検索結果</h2>
      <div class="new-articles">
        <?php
          if (have_posts() && get_search_query()) :
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
      <?php else: ?>
        <p>検索キーワードに該当する記事がございませんでした。<br>
        カテゴリーやタグから探してみてください。</p>
      <?php endif; ?>
      </article>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
