<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <title><?php bloginfo('name'); ?> | <?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  <link href='//d3ibatyzauff7b.cloudfront.net/assets/favicon.ico' rel='shortcut icon' />
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

  <link href='//fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <meta content='summary_large_image' name='twitter:card'>
  <meta content='@algolia' name='twitter:site'>
  <meta content='The Algolia Blog' name='twitter:title'>
  <meta content="A Blog About Programming, Search &amp; User Experience" name='twitter:description'>
  <meta content='http://d3ibatyzauff7b.cloudfront.net/assets/Algolia-Banner_1200x500.png' name='twitter:image:src'>
  <meta content='blog.algolia.com' name='twitter:domain'>

  <meta content='The Algolia Blog' property='st:title'>
  <meta content='http://www.algolia.com/' property='og:url'>
  <meta content='Algolia' property='og:site_name'>
  <meta content='The Algolia Blog' property='og:title'>
  <meta content="A Blog About Programming, Search &amp; User Experience" property='og:description'>
  <meta content='http://d3ibatyzauff7b.cloudfront.net/assets/Algolia-Banner_1200x500.png' property='og:image'>
  <meta content='1200' property='og:image:width'>
  <meta content='500' property='og:image:height'>
   
  <?php  wp_head(); ?>
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body class="bg-blue">
  <header>
    <div class="container main">
      <div class="pull-right">
        <a href="//www.algolia.com" class="btn btn-large btn-info">What is Algolia?</a>
      </div>

      <a href="<?php bloginfo('wpurl'); ?>"><img src="//d3ibatyzauff7b.cloudfront.net/assets/algolia256x80.png" alt="Algolia" class="logo"></a>
      A Blog About Programming, Search &amp; User Experience
    </div>
  </header>
  <div class="header-padder"></div>
