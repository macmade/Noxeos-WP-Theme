<?php get_header(); ?>

<h2 class="text-center"><?php printf( 'Tag: %s', single_tag_title( '', false ) ); ?></h2>

<?php

get_template_part( 'loop', 'tag' );
get_footer();

?>
