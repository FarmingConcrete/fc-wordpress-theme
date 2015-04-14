<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="alternate" type="application/rss+xml" title="<?= get_bloginfo('name'); ?> Feed" href="<?= esc_url(get_feed_link()); ?>">

    <link rel="icon" href="<?php bloginfo('template_directory'); ?>/dist/images/favicon.png" />
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/dist/images/favicon.png" />

    <?php wp_head(); ?>
  </head>
