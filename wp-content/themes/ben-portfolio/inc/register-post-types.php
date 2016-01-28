<?php
/**
 * BP Theme
 *
 * @category BP_Theme
 * @package BP_Theme
 * @subpackage Functions_Register_PostTypes
 * @author John Heimkes <john@ackmanndickenson.com>
 * @version 1.0
 */

// add_action('init', 'program_register_post_types');
//
// function program_register_post_types()
// {
//     // FAQ
//     register_post_type(
//         'post_type',
//         array(
//             'labels'    => array(
//                 'name'          => 'FAQ',
//                 'singular_name' => 'FAQ'
//             ),
//             'public'    => true,
//             'supports'  => array(
//                 'title',
//                 'editor',
//                 'author',
//                 'thumbnail',
//                 'excerpt',
//                 'revisions',
//                 'post-formats'
//             ),
//             'has_archive' => true,
//             'menu_icon' => 'dashicons-list-view',
//             'rewrite'   => array(
//                 'slug'  => 'faq'
//             )
//         )
//     );
// }