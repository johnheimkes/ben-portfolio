<?php
/**
 * BP Theme
 *
 * @package Front Page
 * @author  John Heimkes <john@markupisart.com>
 * @version 1.0
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="home-section">
        <div class="container">
            <div class="row">
                <?php
                $posts = get_field( 'posts_display' );

                foreach ( $posts as $post )
                {
                    setup_postdata( $post );
                    
                    $html = '<div class="col-sm-4">';
                    $html .= '<div class="home-col">';
                    $html .= '<a class="block" href="' . get_permalink() . '">' . get_the_post_thumbnail() . '</a>';
                    $html .= '</div>';
                    $html .= '</div>';
                    
                    echo $html;
                }
                ?>
            </div>
        </div>
    </div>
<?php endwhile; wp_reset_postdata(); endif; ?>

<script type="text/javascript">
(function($) {
    $(document).ready(function() {
        $('.col-sm-4:last-child a').attr('href', '#');
        
        $('.col-sm-4:last-child').click(function(evt) {
            evt.preventDefault();
        });
    });
})(jQuery);
</script>
<?php get_footer(); ?>