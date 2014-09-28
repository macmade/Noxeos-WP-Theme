<?php

function noxeos_thumbnail_caption( $html, $post_id, $post_thumbnail_id, $size, $attr )
{
    $attachment =& get_post( $post_thumbnail_id );

    if( $attachment->post_excerpt )
    {
        $html .= '<div class="tmpl-post-image-caption">' . $attachment->post_excerpt . '</div>';
    }

    return $html;
}

add_action( 'post_thumbnail_html', 'noxeos_thumbnail_caption', null, 5 );

?>

<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="row">
    <div class="col-md-8">
        <h2><?php the_title(); ?></h2>
        <div class="tmpl-post-text">
            <?php the_content(); ?>
        </div>
        <div class="tmpl-post-comments">
            <?php comments_template( '', true ); ?>
        </div>
    </div>
    <div class="col-md-4">
        <div>
            <?php
    
                $image = get_the_post_thumbnail( $post->ID, 'large' );
                preg_match( '/src="(.*)" class/', $image, $matches );
                get_the_post_thumbnail();
    
            ?>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <dl class="dl-horizontal">
                    <dt>Author</dt>
                    <dd><?php the_author(); ?></dd>
                    <dt>Date</dt>
                    <dd><?php the_time( get_option( 'date_format' ) ); ?></dd>
                    <dt>Category</dt>
                    <dd><?php the_category( ', ' ); ?></dd>
                    <dt>Comments</dt>
                    <dd><?php comments_number( '0', '1', '%' ); ?></dd>
                </dl>
            </div>
        </div>
        <div>
            <small>
                <strong>Copyright &copy; Jean-David Gadina</strong><br />
                This article is published under the terms of the <a href="http://www.xs-labs.com/en/licenses/freebsd-documentation/">FreeBSD Documentation License</a>.
            </small>
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
