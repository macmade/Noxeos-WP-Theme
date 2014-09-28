<?php if( post_password_required() ) : ?>

<div>
    This article is protected. Please enter your password.
</div>

<?php return; endif; ?>

<?php if ( have_comments() ) : ?>

<a name="comments"></a>
<h3><?php printf( ( get_comments_number() > 1 ) ? '%s comments to &laquo;%s&raquo;' : '%s comment to &laquo;%s&raquo;' , number_format_i18n( get_comments_number() ), get_the_title() ); ?></h3>
<div class="tmpl-comments-list">
    <?php wp_list_comments( array( 'style' => 'div', 'callback' => array( WordPressTools::getInstance(), 'displayComment' ) ) ); ?>
</div>

<?php else : if( !comments_open() ) : ?>

<div>
    Comments are closed
</div>

<?php endif; ?>
<?php endif; ?>
<?php

$fields = array
(
    'author' => '<div class="comment-form-element">'
             .  '<div class="comment-form-label">'
             .  '<label for="author">Name:</label>' . ( ( $req ) ? ' <span class="required">*</span>' : '' )
             .  '</div>'
             .  '<div class="comment-form-field">'
             .  '<input id="author" name="author" type="text" value="' . esc_attr( $commenter[ 'comment_author' ] ) . '" size="50"' . $aria_req . ' />'
             .  '</div>'
             .  '</div>',
    'email'  => '<div class="comment-form-element">'
             .  '<div class="comment-form-label">'
             .  '<label for="email">Email:</label>' . ( ( $req ) ? ' <span class="required">*</span>' : '' )
             .  '</div>'
             .  '<div class="comment-form-field">'
             .  '<input id="email" name="email" type="text" value="' . esc_attr( $commenter[ 'comment_author_email' ] ) . '" size="50"' . $aria_req . ' />'
             .  '</div>'
             .  '</div>',
    'url'    => '<div class="comment-form-element">'
             .  '<div class="comment-form-label">'
             .  '<label for="url">WWW:</label>'
             .  '</div>'
             .  '<div class="comment-form-field">'
             .  '<input id="url" name="url" type="text" value="' . esc_attr( $commenter[ 'comment_author_url' ] ) . '" size="50" />'
             .  '</div>'
             .  '</div>'
);

comment_form
(
    array(
        'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field'        => '<div class="comment-form-element">'
                               .  '<div class="comment-form-label">'
                               .  '<label for="comment">Comment:</label>'
                               .  '</div>'
                               .  '<div class="comment-form-field">'
                               .  '<textarea id="comment" name="comment" cols="75" rows="8" aria-required="true"></textarea>'
                               .  '</div>'
                               .  '</div>',
        'must_log_in'          => '<div class="must-log-in">' . sprintf( 'You need to <a href="%s">login</a> in order to post a comment', wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
        'logged_in_as'         => '<div class="logged-in-as">' . sprintf( 'Connected as <a href="%1$s">%2$s</a>. <a href="%3$s">Logout</a>', admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ) ) ) ) . '</div>',
        'comment_notes_before' => '<div class="comment-form-notes">Note: your email address won\'t be published on this site.</div>',
        'comment_notes_after'  => '',
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'title_reply'          => 'Leave a comment',
        'title_reply_to'       => 'Leave a comment $ %s',
        'cancel_reply_link'    => 'Cancel',
        'label_submit'         => 'Add the comment',
    )
);

?>
