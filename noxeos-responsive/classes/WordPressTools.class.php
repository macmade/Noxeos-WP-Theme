<?php

final class WordPressTools
{
    private static $_instance = NULL;
    
    private function __construct()
    {}
    
    private function __clone()
    {}
    
    private function __sleep()
    {}
    
    private function __wakeup()
    {}
    
    public static function getInstance()
    {
        if( !is_object( self::$_instance ) )
        {
            self::$_instance = new self();
        }
        
        return self::$_instance;
    }
    
    public function getPageTitle()
    {
        $name        = get_bloginfo( 'name' );
        $description = get_bloginfo( 'description' );
        
        //if( $description && ( is_home() || is_front_page() ) )
        //{
        //    $name .= ' | ' . $description;
        //}
        
        if ( $GLOBALS[ 'paged' ] >= 2 || $GLOBALS[ 'page' ] >= 2 )
        {
            $name .= ' | Page ' . max( $paged, $page );
        }
        
        return $name;
    }
    
    public function displayComment( stdClass $comment )
    {
        if( $comment->comment_parent != 0 )
        {
            print '</div>';
        }
        
        $html = <<<HTML
<div class="tmpl-comment tmpl-comment-user-%s">
    <div class="tmpl-comment-infos">
        <div class="tmpl-comment-author">
            Author: %s
        </div>
        <div class="tmpl-comment-date">
            Date: %s
        </div>
    </div>
    <div class="tmpl-comment-text">
        %s
    </div>
HTML;
        
        $time = strtotime( $comment->comment_date );
        $date = date( get_option( 'date_format' ), $time );
        
        printf( $html, $comment->user_id, $comment->comment_author, $date, nl2br( htmlspecialchars( $comment->comment_content ) ) );
    }
    
    public function displayEndComment( stdClass $comment )
    {
        if( $comment->comment_parent == 0 )
        {
            print '</div>';
        }
    }
}
