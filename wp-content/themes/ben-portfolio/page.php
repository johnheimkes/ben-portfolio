<?php
/**
 * BP Theme
 *
 * @package Page
 * @author  John Heimkes <john@ackmanndickenson.com>
 * @version 1.0
 */

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
<?php endwhile; endif; ?>

<?php get_footer(); ?>