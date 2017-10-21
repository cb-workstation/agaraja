<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agaraja
 */
if (!is_front_page() || !is_home()) :
    $class = 'fixed';
    $header_image = get_template_directory_uri().'/images//Headerlogo.png';
else :
    $header_image = get_field('header_logo');
endif;
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- scroller to the top -->
<div class="toggle-up" style="display: block;"><a href="#home"><i class="fa fa-angle-up fa-lg fa-fw"></i></a></div>

<div id="page" class="site">
    <div id="home">
        <div class="headerLine" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) no-repeat center top fixed;background-size:cover;">
            <div id="menuF" class="default <?php echo $class; ?>">
                <div class="container">
                    <div class="row">
                        <div class="logo col-md-4">
                            <div>
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img class="img-logo" src="<?php echo $header_image; ?>"></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="navmenu" style="text-align: center;">
                            <?php wp_nav_menu( array('menu' => 'primary', 'menu_id' => 'menu') ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (is_front_page() || is_home()) :?>
                <div class="container">
                    <div class="row wrap">
                        <div class="col-md-12 gallery"> 
                            <div class="camera_wrap camera_white_skin" id="camera_wrap_1">
                                <!-- #camera_wrap_1 -->
                                <?php if( have_rows('header') ):
                                  while( have_rows('header') ): the_row();
                                    $caption_title = get_sub_field('caption_title'); ?>
                                        <div data-thumb="" data-src="<?php echo get_stylesheet_directory_uri(). '/images/slides/blank.gif';?>">
                                            <div class="img-responsive camera_caption fadeFromBottom">
                                                <h2><?php echo $caption_title; ?></h2>
                                            </div>
                                        </div>
                                  <?php
                                  endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div id="content" class="site-content">
