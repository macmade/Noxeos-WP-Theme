<?php

get_header();

if( have_posts() )
{
    the_post();
}

?>

<h2 class="text-center">

<?php

if( is_day() )
{
    printf( 'Archives: %s', get_the_date() );
}
elseif( is_month() )
{
    printf( 'Archives: %s', get_the_date( 'm.Y' ) );
}
elseif ( is_year() )
{
    printf( 'Archives: %s', get_the_date( 'Y' ) );
}
else
{
    print 'Archives';
}

?>

</h2>

<?php

rewind_posts();
get_template_part( 'loop', 'archive' );
get_footer();

?>
