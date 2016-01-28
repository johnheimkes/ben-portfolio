<?php
/**
 * BP Theme
 *
 * @package Single
 * @author  John Heimkes <john@markupisart.com>
 * @version 1.0
 */

$sidebar = get_field( 'sidebar' );
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page-section">
        <div class="container">
            <div class="row">
                <?php
                if ( is_array( $sidebar ) )
                {
                    get_sidebar();
                    echo '<div class="col-sm-9">';
                }
                else
                {
                    echo '<div class="col-sm-12">';
                }
                ?>
                    <div class="wysiwyg">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>