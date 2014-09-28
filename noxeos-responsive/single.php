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
		<div class="tmpl-post-category">
			Category: <?php the_category( ', ' ); ?>
		</div>
		<div class="tmpl-post-comments">
			Comments: <?php comments_number( '0', '1', '%' ); ?>
		</div>
		<div class="tmpl-post-image">
			<?php
				
				$image = get_the_post_thumbnail( $post->ID, 'large' );
				preg_match( '/src="(.*)" class/', $image, $matches );
				print '<a href="' . $matches[ 1 ] . '" class="fancybox">' . get_the_post_thumbnail() . '</a>';
				
			?>
		</div>
        <div class="tmpl-post-copyleft">
            <strong>Copyright &copy; Jean-David Gadina</strong><br />
            This article is published under the terms of the <a href="http://www.xs-labs.com/en/licenses/freebsd-documentation/">FreeBSD Documentation License</a>.
        </div>
	</div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
