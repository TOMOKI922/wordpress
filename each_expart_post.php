<?php
$year = get_the_date('Y');
$month = get_the_date('m');
$cat = get_the_category();
$cat = $cat[0];
$cat_name = $cat->cat_name;
 ?>
<div class="new-article">
  <div class="circle"></div>
  <div class="times">
    <i class="fa fa-calendar "></i><a href="<?php echo get_month_link( $year, $month); ?>"><?php echo  get_the_date(); ?></a><br>
    <i class="fa fa-folder-o "></i> <a href="<?php echo get_category_link($cat->term_id); ?>"><?php echo $cat_name; ?></a>
  </div>
  <div class="back">
    <a href="<?php the_permalink(); ?>">
    <div class="article-title">
      <?php the_title(); ?>
    </div>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <div class="article-content">
      <a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a>
    </div>
  </div>
</a>
</div>
