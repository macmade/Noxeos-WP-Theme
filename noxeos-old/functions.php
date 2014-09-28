<?php

add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
set_post_thumbnail_size( 150, 150 );
register_sidebar( array( 'id' => 'footer-col-1', 'name' => __( 'Footer Column 1', 'noxeos' ) ) );
register_sidebar( array( 'id' => 'footer-col-2', 'name' => __( 'Footer Column 2', 'noxeos' ) ) );
register_sidebar( array( 'id' => 'footer-col-3', 'name' => __( 'Footer Column 3', 'noxeos' ) ) );
register_sidebar( array( 'id' => 'footer-col-4', 'name' => __( 'Footer Column 4', 'noxeos' ) ) );
