<?php
//　thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(620, 330, false );
function new_excerpt_mblength($length) {
  return 80;
}
add_filter('excerpt_mblength', 'new_excerpt_mblength');
function new_excerpt_more($more) {
  return '<br>[続きを読む]';
}
add_filter('excerpt_more', 'new_excerpt_more');
function search_template_redirect(){
  global $wp_query;
  $wp_query->is_search = true;
  $wp_query->is_home = false;
  if(file_exists(TEMPLATEPATH . '/search.php')){
    include(TEMPLATEPATH . '/search.php');
  }
  exit;
}
if(isset($_GET['s']) && $_GET['s'] == false) {
  add_action('template_redirect', 'search_template_redirect');
}
remove_filter('comment_text', 'make_clickable', 9);
add_filter('comments_open', 'custom_comment_tags');
add_filter('pre_comment_approved', 'custom_comment_tags');
function custom_comment_tags($data){
  global $allowedtags;
  unset($allowedtags['a']);
  unset($allowedtags['abbr']);
  unset($allowedtags['acronym']);
  unset($allowedtags['b']);
  unset($allowedtags['div']);
  unset($allowedtags['cite']);
  unset($allowedtags['code']);
  unset($allowedtags['del']);
  unset($allowedtags['em']);
  unset($allowedtags['i']);
  unset($allowedtags['q']);
  unset($allowedtags['strike']);
  unset($allowedtags['strong']);
  return $data;
}
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

function my_scripts_method() {
  wp_enqueue_script(
        'custom_script',
        get_template_directory_uri() . '/app.js',
    );
}
add_action('wp_enqueue_scripts', 'my_scripts_method');
