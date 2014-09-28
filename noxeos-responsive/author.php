<?php

get_header();

if( have_posts() )
{
    the_post();
}

?>

<h2 class="text-center"><?php printf( 'Author: %s', get_the_author() ); ?></h2>

<?php

rewind_posts();
get_template_part( 'loop', 'author' );
get_footer();

?>
