<?php
/**
 * BP Theme
 *
 * @package Front Page
 * @author  John Heimkes <john@ackmanndickenson.com>
 * @version 1.0
 */
$background_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
<?php endwhile; endif; ?>

<?php get_footer(); ?>