<?php get_header(); ?>

<h2 class="tmpl-page-title"><?php printf( 'Category: %s', single_cat_title( '', false ) ); ?></h2>

<?php

get_template_part( 'loop', 'category' );
get_footer();

?>
