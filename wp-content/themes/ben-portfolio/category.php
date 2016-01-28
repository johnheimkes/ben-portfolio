<?php
/**
 * BP_Theme
 *
 * @package Home (Posts page)
 * @author  John Heimkes <john@markupisart.com>
 * @version 1.0
 */

$posts_page     = get_option( 'page_for_posts' );

get_header();
?>
<div class="page-head" style="background-color: #003087;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="page-title hdg hdg-1 text-uppercase text-white text-proximanova-bold">Category: <?php single_cat_title(); ?></h1>
            </div>
        </div>
    </div>
</div>
<div class="breadcrumbs bg-gray">
    <div class="container">
        <?php
        if ( function_exists( 'yoast_breadcrumb' ) ) {
        	yoast_breadcrumb();
        }
        ?>
    </div>
</div>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-content">
                    <div class="posts-news">
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div <?php post_class(); ?>>
                                <div class="row">
                                    <?php if ( has_post_thumbnail() ) { ?>
                                        <div class="col-sm-2">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="col-sm-10">
                                    <?php } else { ?>
                                        <div class="col-sm-12">
                                    <?php } ?>
                                        <h4 class="media-heading hdg-4 text-proximanova-bold">
                                            <span class="post-title">
                                                <a href="<?php the_permalink(); ?>" class="text-blue-lt"><?php the_title(); ?></a>
                                            </span>
                                        </h4>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; endif; ?>
                    </div>

                    <div class="pagination text-center block">
                        <?php
                        $big = 999999999;

                        echo paginate_links( array(
                            'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                            'format'    => '/page/%#%',
                            'current'   => max( 1, get_query_var('paged') ),
                            'total'     => $wp_query->max_num_pages,
                            'prev_text' => __('« '),
                            'next_text' => __(' »'),
                        ) );
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="widget">
                    <div class="widget-categories bg-gray">
                        <div class="widget-header" style="background-color: #092f87;">
                            <h5 class="hdg-6 text-proximanova text-white text-center">Categories</h5>
                        </div>
                    
                        <div class="widget-body">
                            <ul class="v-list">
                                <?php
                                wp_list_categories(array(
                                    'title_li' => ''
                                ));
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>