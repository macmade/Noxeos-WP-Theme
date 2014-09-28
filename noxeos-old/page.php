<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="tmpl-post">
    <div class="tmpl-post-content">
        <h2><?php the_title(); ?></h2>
        <div class="tmpl-post-text">
            <?php the_content(); ?>
        </div>
        <div class="tmpl-post-comments">
            <?php comments_template( '', true ); ?>
        </div>
    </div>
    <div class="tmpl-post-infos">
        <div class="tmpl-post-author">
            Author: <?php the_author(); ?>
        </div>
        <div class="tmpl-post-date">
            Date: <?php the_time( get_option( 'date_format' ) ); ?>
        </div>
        <div class="tmpl-post-comments">
            Comments: <?php comments_number( '0', '1', '%' ); ?>
        </div>
        <div class="tmpl-post-image">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="tmpl-post-copyleft">
            <strong>Copyright &copy; Jean-David Gadina</strong><br />
            This article is published under the terms of the <a href="http://www.xs-labs.com/en/licenses/freebsd-documentation/">FreeBSD Documentation License</a>.
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
