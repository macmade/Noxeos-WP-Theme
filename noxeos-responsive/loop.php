<?php

function noxeos_get_the_excerpt()
{
    $exceprt =  get_the_excerpt();
    $images  =& get_children
    (
        array
        (
            'post_parent'    => $GLOBALS[ 'post' ]->ID,
            'post_type'      => 'attachment',
            'post_mime_type' => 'image'
        )
    );

    $chars = ( is_array( $images ) && count( $images ) ) ? 325 : 690;

    if( strlen( $exceprt ) < $chars )
    {
        return $exceprt;
    }

    $exceprt = substr( $exceprt, 0, $chars );

    if( strstr( $exceprt, ' ' ) )
    {
        $cropPos = strrpos( $exceprt, ' ' );
        $exceprt = substr( $exceprt, 0, $cropPos );
    }

    return $exceprt . ' [...]';
}

function noxeos_excerpt_length( $length )
{
    return INF;
}

add_filter( 'excerpt_length', 'noxeos_excerpt_length' );

?>

<?php if( !have_posts() ) : ?>

<div class="alert alert-warning text-center">
    <div>
        <strong>Page not found</strong><br />
        Sorry, the page you requested was not found.
    </div>
</div>

<?php else: ?>

<div class="marketing">

<?php $i = 0; while( have_posts() ) : the_post(); ?>
    
    <?php if( $i % 3 == 0 ): ?>
    <?php if( $i > 0 ): ?>
    </div>
    <?php endif; ?>
    <div class="row">
    <?php endif; ?>
    
        <div class="col-sm-4" id="post-<?php the_ID(); ?>">
            <div>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 140, 140 ), array( 'class' => 'img-circle' ) ); ?></a>
            </div>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>
                 <?php print strip_tags( noxeos_get_the_excerpt(), '<p>' ); ?>
            </p>
            <p>
                <a class="btn btn-default" href="<?php the_permalink(); ?>">Read the article »</a>
            </p>
        </div>
        
<?php $i++; endwhile; ?>
    
    </div>
</div>

<?php

if( $wp_query->max_num_pages > 1 ) : ?>

<div class="tmpl-story-nav">
	<div class="tmpl-story-nav-previous">
		<?php next_posts_link( '&lt; Previous articles' ); ?>
	</div>
	<div class="tmpl-story-nav-next">
		<?php previous_posts_link( 'Next articles &gt;' ); ?>
	</div>
</div>

<?php endif; ?>

<?php endif; ?>
