<!DOCTYPE html>
<html>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?><?php } ?> <?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>

<body>
  
  <header class="header"></header>