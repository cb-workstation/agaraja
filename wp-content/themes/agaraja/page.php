<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package agaraja
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <!--about start-->
            <?php get_template_part( 'template-parts/content', 'about' ); ?>
            <!--project start-->
            <?php get_template_part( 'template-parts/content', 'project' ); ?>
            <!--client start-->
            <?php get_template_part( 'template-parts/content', 'client' ); ?>
            <!--career start-->
            <?php get_template_part( 'template-parts/content', 'career' ); ?>
            <!--contact start-->
            <?php get_template_part( 'template-parts/content', 'contact' ); ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
get_footer();
