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

<div>
	<h2>Page not found</h2>
	<div>
		Sorry, the page you requested was not found.
	</div>
</div>

<?php else: ?>

<div class="tmpl-stories">
<?php $i = 0; while( have_posts() ) : the_post(); ?>
	
	<?php if( $i % 2 == 0 ) : ?>
	<div class="tmpl-story-group">
	<?php endif; ?>
	
	<?php if( $i % 2 == 0 ) : ?>
	<div class="tmpl-story-left" id="post-<?php the_ID(); ?>">
	<?php else : ?>
	<div class="tmpl-story-right" id="post-<?php the_ID(); ?>">
	<?php endif; ?>
	
		<h2 class="tmpl-story-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<div class="tmpl-story-image">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
		<p class="tmpl-story-content">
			 <a href="<?php the_permalink(); ?>"><?php print strip_tags( noxeos_get_the_excerpt(), '<p>' ); ?></a>
		</p>
		<div class="tmpl-story-footer">
			<div class="tmpl-story-date">
				<?php the_time( get_option( 'date_format' ) ); ?>
			</div>
			<div class="tmpl-story-comments">
				Comments: <?php comments_number( '0', '1', '%' ); ?>
			</div>
			<div class="tmpl-story-category">
				Category: <?php the_category( ', ' ); ?>
			</div>
			<div class="tmpl-story-more">
				<a href="<?php the_permalink(); ?>">Read the article...</a>
			</div>
		</div>
	</div>
	
	<?php if( $i % 2 != 0 ) : ?>
	</div>
	<?php endif; ?>
	
<?php $i++; endwhile; ?>

<?php if( $i % 2 != 0 ) : ?>
</div>
<?php endif; ?>

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

</div>

<?php endif; ?>
