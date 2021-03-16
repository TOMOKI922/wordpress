<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(); ?></title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" type="text/css" href="reset.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <?php if (is_singular()) wp_enqueue_script("comment-reply"); ?>
    <?php wp_head(); ?>
  </head>

  <body>
    <header  class="site-width">
      <h1><a href="<?php echo home_url('/');?>"><?php bloginfo('name'); ?></a></h1>
      <a href="<?php echo home_url('/'); ?>" class="icon-list icon-right smart"><i class="fa fa-home fa-2x" title="home"></i></a>
      <a href="<?php echo home_url('/contact'); ?>" class="icon-list smart"><i class="fa fa-envelope-o fa-2x" title="contact"></i> </a>
      <?php the_feed_link('<i class="fa fa-rss fa-2x icon-list smart" title="RSS"></i>'); ?>
      <i class="fa fa-search fa-2x smart-panel js-smart-search"></i>

      <?php get_search_form(); ?>
      <div class="menu-trigger js-toggle-sp-menu">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="nav-menu ">
        <ul class="menu js-toggle-sp-menu-target">
          <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/'); ?>">トップ</a></li>
          <li class="menu-item"><a class="menu-link" href="#category">カテゴリー</a></li>
          <li class="menu-item"><a class="menu-link" href="#days">日付</a></li>
          <li class="menu-item"><a class="menu-link" href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
        </ul>
      </nav>
    </header>
<div class="flex">
