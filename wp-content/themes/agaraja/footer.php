<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package agaraja
 */

?>

    </div><!-- #content -->
    <footer id="colophon" class="site-footer">
        <div class="site-info">
            <div class="lineBlack">
                <div class="container">
                    <div class="row downLine">
                        <div class="col-md-6 text-left copy">
                            <p>Copyright &copy; 2017 A.G. Araja. All Rights Reserved | Develop by <a href="https://seabeeeksdi.wixsite.com/carlozb" target="_blank" style="color:#FFF;">CB</a>.</p>
                        </div>
                        <div class="col-md-6 text-right dm">
                            <?php wp_nav_menu( array('menu' => 'primary', 'menu_id' => 'downMenu') ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
    <?php get_template_part( 'template-parts/content', 'modal' ); ?><!-- start of modal -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
