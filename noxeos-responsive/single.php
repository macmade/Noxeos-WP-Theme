<?php get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="row">
    <div class="col-sm-8">
        <h2><?php the_title(); ?></h2>
        <div class="tmpl-post-text">
            <?php the_content(); ?>
        </div>
        <div class="tmpl-post-comments">
            <?php comments_template( '', true ); ?>
        </div>
    </div>
    <div class="col-sm-4 xs-post-details">
        <div class="text-center">
            <?php
                
                print get_the_post_thumbnail( get_the_ID(), array( 140, 140 ), array( 'class' => 'img-circle' ) );
                
            ?>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4">
                        <strong>Author</strong>
                    </div>
                    <div class="col-xs-8">
                        <?php the_author(); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <strong>Date</strong>
                    </div>
                    <div class="col-xs-8">
                        <?php the_time( get_option( 'date_format' ) ); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <strong>Category</strong>
                    </div>
                    <div class="col-xs-8">
                        <?php the_category( ', ' ); ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">
                        <strong>Comments</strong>
                    </div>
                    <div class="col-xs-8">
                        <?php comments_number( '0', '1', '%' ); ?>
                    </div>
                </div>
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
