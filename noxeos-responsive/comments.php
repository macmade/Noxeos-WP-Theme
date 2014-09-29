<?php if( post_password_required() ) : ?>

<div class="alert alert-warning text-center">
    <div>
        <strong>This article is protected.</strong><br />
        Please enter your password.
    </div>
</div>

<p>
</p>

<?php return; endif; ?>

<?php if ( have_comments() ) : ?>

<a name="comments"></a>
<h3><?php printf( ( get_comments_number() > 1 ) ? '%s comments to &laquo;%s&raquo;' : '%s comment to &laquo;%s&raquo;' , number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3>
<div>
    <?php
        wp_list_comments
        (
            array
            (
                'style'         => 'div',
                'callback'      => array( WordPressTools::getInstance(), 'displayComment' ),
                'end-callback'  => array( WordPressTools::getInstance(), 'displayEndComment' )
            )
        );
    ?>
</div>

<?php else : if( !comments_open() ) : ?>

<div class="alert alert-warning text-center">
    <div>
        <strong>Comments are closed</strong><br />
    </div>
</div>

<?php endif; ?>
<?php endif; ?>
<?php

$fields = array
(
    'author' => '<div class="form-group">'
             .  '<label for="author" class="col-sm-2 control-label"><strong>Name</strong></label>'
             .  '<div class="col-sm-10">'
             .  '<input id="author" name="author" type="text" value="' . esc_attr( $commenter[ 'comment_author' ] ) . '" size="50"' . $aria_req . ' class="form-control" placeholder="Your name or nickname (required)" />'
             .  '</div>'
             .  '</div>',
    'email'  => '<div class="form-group">'
             .  '<label for="email" class="col-sm-2 control-label"><strong>Email</strong></label>'
             .  '<div class="col-sm-10">'
             .  '<input id="email" name="email" type="text" value="' . esc_attr( $commenter[ 'comment_author_email' ] ) . '" size="50"' . $aria_req . ' class="form-control" placeholder="Your email address (required)" />'
             .  '</div>'
             .  '</div>',
    'url'    => '<div class="form-group">'
             .  '<label for="url" class="col-sm-2 control-label"><strong>WWW</strong></label>'
             .  '<div class="col-sm-10">'
             .  '<input id="url" name="url" type="text" value="' . esc_attr( $commenter[ 'comment_author_url' ] ) . '" size="50" class="form-control" placeholder="Your website URL (optional)" />'
             .  '</div>'
             .  '</div>'
);

ob_start();
comment_form
(
    array(
        'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field'        => '<div class="form-group">'
                               .  '<label for="comment" class="col-sm-2 control-label"><strong>Comment</strong></label>'
                               .  '<div class="col-sm-10">'
                               .  '<textarea id="comment" name="comment" cols="75" rows="8" aria-required="true" class="form-control"></textarea>'
                               .  '</div>'
                               .  '</div>',
        'must_log_in'          => '<div class="col-sm-2"></div><div class="alert alert-warning text-center col-sm-10 must-log-in">' . sprintf( 'You need to <a href="%s">login</a> in order to post a comment', wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
        'logged_in_as'         => '<div class="col-sm-2"></div><div class="alert alert-success text-center col-sm-10 logged-in-as">' . sprintf( 'Connected as <a href="%1$s">%2$s</a>. <a href="%3$s">Logout</a>', admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
        'comment_notes_before' => '<div class="col-sm-2"></div><div class="alert alert-info text-center col-sm-10"><strong>Note:</strong> your email address won\'t be published on this site.</div>',
        'comment_notes_after'  => '',
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'title_reply'          => 'Leave a comment',
        'title_reply_to'       => 'Leave a comment $ %s',
        'cancel_reply_link'    => 'Cancel',
        'label_submit'         => 'Leave a comment',
    )
);

$FORM = str_replace( 'class="comment-form"', 'class="comment-form form-horizontal" role="form"', ob_get_contents() );
$FORM = str_replace( '<p class="form-submit">', '<p class="col-sm-2"></p><p class="form-submit col-sm-10 text-center">', $FORM );
$FORM = str_replace( '<input name="submit"', '<input name="submit" class="btn btn-primary"', $FORM );

ob_end_clean();

print $FORM;

?>
