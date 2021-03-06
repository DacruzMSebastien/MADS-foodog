<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head profile="http://gmpg.org/xfn/11">
        <title>
            <?php bloginfo('name') ?>
            <?php if ( is_404() ) : ?> &raquo;
            <?php _e('Not Found') ?>
            <?php elseif ( is_home() ) : ?> &raquo;
            <?php bloginfo('description') ?>
            <?php else : ?>
            <?php wp_title() ?>
            <?php endif ?>
        </title>
        <meta name="viewport" content="width=device-width"/>
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <!-- leave this for stats -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <?php wp_get_archives('type=monthly&format=link'); ?>

        <?php wp_footer(); ?>
        <!-- TOOLBAR WORDPRESS -->
    </head>
    <body>
        <div id="page">
            <div id="header">
                <a href="#" class="header__icon"></a>
                <!-- icon visible seulement quand ecran - de 480px -->
                <div class="liensSociaux">
                    <ul>
                        <li><a href="https://fr-fr.facebook.com/"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/facebook.png" alt="facebook"></a></li>
                        <li><a href="https://twitter.com/?lang=fr"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/twitter.png" alt ="twitter"></a></li>
                        <li><a href="https://www.instagram.com/?hl=fr"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/insta.png" alt="instagram"></a></li>
                        <li><a href="index.php/search/"><img src="http://localhost/MADS-foodog/wordpress/wp-admin/images/search.png" alt ="search"></a></li>
                    </ul>
                </div>  
                <h1>
                <a href="<?php bloginfo('url'); ?>">
                <?php bloginfo('name'); ?>
                    
                </h1>
                <?php wp_nav_menu(); ?>
                    
            </div>
            <div id="barre">
            </div>