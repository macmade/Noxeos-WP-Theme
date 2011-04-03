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
            <strong>Copyright (C) Jean-David Gadina.</strong><br /><br />
            Permission is granted to copy, distribute and/or modify this document under the terms of the GNU Free Documentation License, Version 1.3 or any later version published by the Free Software Foundation; with no Invariant Sections, no Front-Cover Texts, and no Back-Cover Texts.<br /><br />
            A copy of the license is included in the section entitled <a href="http://www.eosgarden.com/en/opensource/licenses/gnu-fdl/">GNU Free Documentation License</a>.
        </div>
    </div>
</div>

<?php endwhile; ?>
<?php get_footer(); ?>
