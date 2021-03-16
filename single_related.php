<?php
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach;
$args = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page' => 3,
  'category__in' => $category_ID
);
$query = new WP_Query($args);
if( $query -> have_posts() ):
  while($query -> have_posts()) : $query -> the_post();
?>
  <div class="relation-article">
    <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
    <div class="relation-sentence">
      <h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
      <p><?php echo mb_substr(strip_tags($post->post_content), 0, 80); ?></p>
      <span><a href="<?php the_permalink(); ?>">[続きを読む]</a></span>
    </div>
  </div>
<?php
  endwhile;
  endif;
  wp_reset_postdata();
?>
