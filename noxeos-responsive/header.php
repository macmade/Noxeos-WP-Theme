<?php

require_once( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . 'WordPressTools.class.php' );

?>
<?php
if( isset( $_SERVER[ 'HTTP_USER_AGENT' ] ) && ( strpos( $_SERVER[ 'HTTP_USER_AGENT' ], 'MSIE' ) !== false ) )
{
    header( 'X-UA-Compatible: IE=edge' );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--

    ##################################################
    #                                                #
    #       Blood Sweat & Code (& Rock'N'Roll)       #
    #      Thanx for looking at the source code      #
    #                                                #
    #                 XS-Labs © 2013                 #
    #                                                #
    ##################################################

    -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php print WordPressTools::getInstance()->getPageTitle(); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <meta name="author" content="XS-Labs" />
    <meta name="rating" content="General" />
    <meta name="robots" content="all" />
    <meta name="generator" content="BBEdit 10.5" />
    <!--[if IE]><link rel="shortcut icon" href="/favicon.ico"><![endif]-->
    <link rel="icon" href="/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/favicon-apple-touch.png">
    <script type="text/javascript">
        // <![CDATA[
        
        if( ( ( window.devicePixelRatio === undefined ) ? 1 : window.devicePixelRatio ) > 1 )
        {
            document.cookie = 'X_XSLABS_CLIENT_IS_RETINA=1;path=/';
        }
        
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
    <div class="xs-page-header">
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">
                        <img src="/wp-content/themes/noxeos-responsive/css/image/xs-logo.png" width="120" height="40" alt="XS-Labs" />
                    </a>
                </div>
                <div class="navbar-collapse collapse" id="navbar">
                    <ul class="nav navbar-nav">
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
                        <li class="active">
                            <a href="/">Blog</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="https://twitter.com/macmade"><img src="/wp-content/themes/noxeos-responsive/css/image/xs-menu-bar-item-twitter.png" alt="Twitter" width="30" height="30" /></a></li>
                        <li><a href="https://github.com/macmade"><img src="/wp-content/themes/noxeos-responsive/css/image/xs-menu-bar-item-github.png" alt="GitHub" width="30" height="30" /></a></li>
                        <li><a href="http://stackoverflow.com/users/182676/macmade"><img src="/wp-content/themes/noxeos-responsive/css/image/xs-menu-bar-item-stackoverflow.png" alt="StackOverflow" width="30" height="30" /></a></li>
                        <li><a href="http://www.linkedin.com/in/macmade/"><img src="/wp-content/themes/noxeos-responsive/css/image/xs-menu-bar-item-linkedin.png" alt="LinkedIn" width="30" height="30" /></a></li>
                    </ul>
                </div>
            </div>
        </div>    
        <div class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators"></ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/wp-content/themes/noxeos-responsive/css/image/default.jpg" alt="XS-Labs">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="hidden-xs">
                                <h1><?php print WordPressTools::getInstance()->getPageTitle() . chr( 10 ); ?></h1>
                            </div>
                            <div class="visible-xs-block">
                                <h1><?php print WordPressTools::getInstance()->getPageTitle() . chr( 10 ); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="xs-content">
