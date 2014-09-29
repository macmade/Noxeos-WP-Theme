<?php get_header(); ?>

<h2 class="text-center"><?php printf( 'Results for: «%s»', get_search_query() ); ?></h2>

<?php if ( have_posts() ) : ?>

<?php get_template_part( 'loop', 'search' ); ?>

<?php else : ?>

<div class="alert alert-info">
    Sorry, no page were found.
</div>

<?php endif; ?>
<?php get_footer(); ?>
