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
<div class="xs-comment-user-%s">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-sm-2">
                    <small>Author</small>
                </div>
                <div class="col-sm-2">
                    <small>%s</small>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2">
                    <small>Date</small>
                </div>
                <div class="col-sm-2">
                    <small>%s</small>
                </div>
            </div>
        </div>
        <div class="panel-body">
            %s
        </div>
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
