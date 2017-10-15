<?php
/**
 * Template part for displaying client section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package agaraja
 */

?>

<div id="career">
    <div class="line7" style="height: 350px;background: url(<?php echo get_field('career_bg'); ?>) no-repeat center top fixed;background-size:cover;">
        <div class="container">
            <div class="row Ama">
                <div class="col-md-12">
                    <h3>Careers</h3>
                    <?php echo get_field('career'); ?>
                </div>
            </div>
        </div>
    </div>
    <div class="line8" style="padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center cont">
                    <?php echo get_field('career_white'); ?>
                </div>
            </div>
        </div>
    </div>
</div>