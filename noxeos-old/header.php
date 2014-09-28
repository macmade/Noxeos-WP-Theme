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
    <link rel="stylesheet" type="text/css" media="all" href="/wp-content/themes/noxeos-old/css/jquery.fancybox-1.3.1.css" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <script src="/wp-content/themes/noxeos-old/js/jquery-1.4.2.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/noxeos-old/js/jquery.easing-1.3.pack.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/noxeos-old/js/jquery.mousewheel-3.0.2.pack.js" type="text/javascript" charset="utf-8"></script>
    <script src="/wp-content/themes/noxeos-old/js/jquery.fancybox-1.3.1.pack.js" type="text/javascript" charset="utf-8"></script>
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
    <div id="xs-site">
        <div id="xs-page">
            <div id="xs-menu-bar">
                <ul>
                    <li>
                        <div class="xs-menu-item-first">
                            <a href="http://www.xs-labs.com/"><img src="/wp-content/themes/noxeos-old/css/image/xs-menu-bar-item-logo.png" alt="XS-Labs" width="100" height="40" /></a>
                        </div>
                    </li>
                    <li><div class="xs-menu-item"><a href="http://www.xs-labs.com/en/projects/" title="Projects">Projects</a></div></li>
                    <li><div class="xs-menu-item"><a href="http://www.xs-labs.com/en/about/" title="About">About</a></div></li>
                    <li><div class="xs-menu-item"><a href="http://www.xs-labs.com/en/contact/" title="Contact">Contact</a></div></li>
                    <li><div class="xs-menu-item"><a href="http://www.xs-labs.com/en/archives/" title="Archives">Archives</a></div></li>
                    <li class="xs-menu-act"><div class="xs-menu-item"><a href="/" title="Blog">Blog</a></div></li>
                    <li>
                        <div class="xs-menu-item-last">
                            <a href="http://www.linkedin.com/in/macmade/"><img src="/wp-content/themes/noxeos-old/css/image/xs-menu-bar-item-linkedin.png" alt="LinkedIn" width="30" height="30" /></a>
                            <a href="https://twitter.com/macmade"><img src="/wp-content/themes/noxeos-old/css/image/xs-menu-bar-item-twitter.png" alt="Twitter" width="30" height="30" /></a>
                            <a href="http://stackoverflow.com/users/182676/macmade"><img src="/wp-content/themes/noxeos-old/css/image/xs-menu-bar-item-stackoverflow.png" alt="StackOverflow" width="30" height="30" /></a>
                            <a href="https://github.com/macmade"><img src="/wp-content/themes/noxeos-old/css/image/xs-menu-bar-item-github.png" alt="GitHub" width="30" height="30" /></a>
                        </div>
                    </li>
                </ul>
            </div>
            <div id="xs-highlight">
                <img width="1000" height="200" src="/wp-content/themes/noxeos-old/css/image/default.png" alt="" />
            </div>
            <div id="xs-sub-nav">
                <div class="left">
                    <h1><a href="<?php print home_url( '/' ); ?>"><?php print WordPressTools::getInstance()->getPageTitle(); ?></a></h1>
                </div>
                <div class="right">
                    
                </div>
            </div>
            <div id="xs-content">
                <div class="xs-content-frame">
                    <div class="xs-content-frame-top">&nbsp;</div>
                    <div class="xs-content-frame-middle">
