        </div>
        <div>
            <div>
                <?php get_sidebar( 'footer-col-1' ); ?>
            </div>
            <div>
                <?php get_sidebar( 'footer-col-2' ); ?>
            </div>
            <div>
                <?php get_sidebar( 'footer-col-3' ); ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="pull-left">
                <small>XS-Labs &copy; <?php print date( 'Y', time() ); ?> - All Rights Reserved - All Wrongs Reserved</small>
            </div>
            <div class="pull-right">
                <ul class="list-inline">
                    <li>
                        <small><a href="http://www.xs-labs.com/en/legal/privacy/">Privacy Policy</a></small>
                    </li>
                    <li>
                        <small><a href="http://www.xs-labs.com/en/legal/credits/">Credits &amp; Disclaimer</a></small>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/noxeos-responsive/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/noxeos-responsive/js/imagelightbox.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        // <![CDATA[
        
        $( document ).ready
        (
            function()
            {
                $( 'a.lightbox' ).imageLightbox();
            }
        );
        
        // ]]>
    </script>
    <script src="/wp-content/themes/noxeos-responsive/js/highlight.pack.js" type="text/javascript"></script>
    <script type="text/javascript">
        // <![CDATA[
        
        $( document ).ready
        (
            function()
            {
                $( 'div.code-block' ).each
                (
                    function( i, block )
                    {
                        hljs.highlightBlock( block );
                    }
                );
            }
        );
        
        // ]]>
    </script>
    <?php wp_footer(); ?>
</body>
</html>
