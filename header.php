<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" style="margin-top:0px"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Jonathan Zittrain <?php echo wp_title(); ?></title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/overrides.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/font-awesome-4.7.0/css/font-awesome.min.css">

<?php wp_head(); ?>
</head>

<body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container main-container">
        
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <h1 style="text-center;text-align:center" class="main-name"><?php echo get_bloginfo( 'name' ); ?></h1>
          </div>
          <div class="col-md-2">
            <span class="pull-right" style="padding-top:30px">
            <a href="mailto:zittrain@law.harvard.edu" target="_blank"><span class="fa fa-envelope fa-2x" aria-hidden="true"></span></a>
            <a href="https://twitter.com/zittrain" target="_blank"><span class="fa fa-twitter fa-2x" aria-hidden="true"></span></a>
            </span>
          </div>
        </div>

    <hr style="margin-top:5px">
        <ul class="nav nav-pills nav-justified">
          <?php wp_list_pages( '&title_li=' ); ?>
        </ul>
    <hr style="margin-top:15px">
