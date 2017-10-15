<?php
/**
 * Template part for displaying client section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package agaraja
 */

?>
<div id="client">
        <div class="line4" style="padding: 50px 0;background: url(<?php echo get_field('client_bg'); ?>) no-repeat center top fixed;background-size:cover;">
            <div class="container">
                <div class="row Ama">
                    <div class="col-md-12">
                    <h3 style="margin-bottom: 25px;">Our Clients</h3>
                    <?php echo get_field('our_client'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin: 100px 0;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="owl-carousel">
                            <?php if( have_rows('our_client_rep') ):
                            while( have_rows('our_client_rep') ): the_row();
                            $image = get_sub_field('image'); ?>
                                <div class="slide"><img src="<?php echo $image; ?>" /></div>
                            <?php
                            endwhile;
                            endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>