<?php

require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'WordPressTools.class.php' );
print '<?xml version="1.0" encoding="utf-8"?>' . chr( 10 );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title><?php print WordPressTools::getInstance()->getPageTitle(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/noxeos-dark/css/jquery.fancybox-1.3.1.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="/wp-content/themes/noxeos-dark/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/noxeos-dark/js/jquery.easing-1.3.pack.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/noxeos-dark/js/jquery.mousewheel-3.0.2.pack.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/noxeos-dark/js/jquery.fancybox-1.3.1.pack.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" charset="utf-8">
        // <![CDATA[    
        $( document ).ready
        (
            function ()
            {
                $( 'a.fancybox' ).fancybox( { 'titleShow' : false } );
            }
        );
        // ]]>
    </script>
    <?php
    
    if( is_singular() && get_option( 'thread_comments' ) )
    {
        wp_enqueue_script( 'comment-reply' );
    }
    
    wp_head();
    
    ?>
</head>
<body>
    <div id="tmpl-page">
        <div id="tmpl-top">
            <div class="left">
                <div class="tmpl-top-logo">
                    <h1><a href="<?php print home_url( '/' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
                    <div>
                        <a href="<?php print home_url( '/' ); ?>"><?php bloginfo( 'description' ); ?></a>
                    </div>
                </div>
            </div>
            <div class="right">
                <form action="<?php print home_url( '/' ); ?>" method="get" id="searchForm" name="searchForm">
                    <input name="s" id="searchWord" type="text" size="40" />
                </form>
            </div>
        </div>
        <div id="tmpl-eos-menu">
            <ul>
                <li>
                    <a href="http://www.xs-labs.com/en/projects/">Projects</a>
                </li>
                <li>
                    <a href="http://www.xs-labs.com/en/about/">About</a>
                </li>
                <li>
                    <a href="http://www.xs-labs.com/en/contact/">Contact</a>
                </li>
                <li>
                    <a href="http://www.xs-labs.com/en/archives/">Archives</a>
                </li>
                <li>
                    <a href="http://www.xs-labs.com/en/blog/">Blog</a>
                </li>
            </ul>
        </div>
        <div id="tmpl-middle">
