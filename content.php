<?php
$year = get_the_date('Y');
$month = get_the_date('m');
$cat = get_the_category();
$cat = $cat[0];
$cat_name = $cat->cat_name;
 ?>
      <h2 class="single-title"><?php the_title(); ?></h2>
      <div class="article-times">
        <i class="fa fa-calendar "></i><a href="<?php echo get_month_link( $year, $month); ?>"> <?php echo get_the_date(); ?></a><br>
        <i class="fa fa-folder-o "></i><a href="<?php echo get_category_link($cat->term_id); ?>"> <?php echo $cat_name; ?></a>
      </div>
      <div class="article_content">
        <?php the_content(); ?>
      </div>
      <div class="article-flex">
        <div class="article-icon">
          <?php previous_post_link('<i class="fa fa-angle-double-left "></i>%link', '%title'); ?>
        </div>
        <div class="article-icon">
          <a href="home.php"><i class="fa fa-home fa-2x"></i>
            <span class="remark-home">ホームへ</span>
          </a></div>
        <div class="article-icon">
          <?php next_post_link('%link<i class="fa fa-angle-double-right"></i>', '%title'); ?>
        </div>
      </div>
