<?php
/**
 * BP Theme
 *
 * @package Page
 * @author  John Heimkes <john@markupisart.com>
 * @version 1.0
 */
$background_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

get_header();
?>

<?php get_footer(); ?>