<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

    <!-- Tags and details for SEO -->
    <?php // include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbSiteMeta.php');
    get_template_part( 'common/jbSiteMeta' ); ?>

    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
</head>

<body>
    <script type='text/javascript' src='http://track.mybloglog.com/js/jsserv.php?mblID=2008080720513809'></script>

    <div id="header">

        <!-- Page header banner, etc. -->
        <?php
        // include(WP_CONTENT_DIR . '/themes/3rats/' . 'common/jbHeader.php');
        get_template_part( 'common/jbHeader' ); ?>

        <div id="headerimg">
            <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <div class="description"><?php bloginfo('description'); ?></div>
        </div>
    </div>
    <hr />