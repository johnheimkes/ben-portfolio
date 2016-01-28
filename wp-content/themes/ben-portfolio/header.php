<?php
/**
 * BP Theme
 *
 * @package Header
 * @author  John Heimkes <john@ackmanndickenson.com>
 * @version 1.0
 */

$logo  = get_field( 'logo', 'option' );
$phone = get_field( 'phone', 'option' );
$email = get_field( 'email', 'option' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title>
        <?php wp_title( '|', true, 'right' ); ?>
    </title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo BP_THEME_PATH_URL; ?>images/favicon.ico" />
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="header-logo">
                        <a href="<?php echo site_url(); ?>" class="logo inline-block">
                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                        </a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="header-utility text-right">
                        <div class="header-nav clearfix">
                            <?php
                            wp_nav_menu(array(
                                'menu'       => 'Main Nav',
                                'container'  => '',
                                'menu_class' => 'h-list main-nav pull-right',
                            ));
                            ?>
                        </div>
                        <div class="contact-info">
                            <?php
                            if ( $email )
                            {
                                echo '<span class="email block hdg-6 text-light"><a href="mailto:' . $email . '">' . $email . '</a></span>';
                            }

                            if ( $phone )
                            {
                                echo '<span class="phone block hdg-6 text-light">' . $phone . '</span>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>