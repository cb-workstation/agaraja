<?php
/**
 * Template part for displaying about section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package agaraja
 */

?>
<div id="about" rel="about">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cBusiness" style="text-align: justify;">
                <h3>Our History</h3>
                <?php if( have_rows('history_txt') ):
                  while( have_rows('history_txt') ): the_row();
                    $history_txt = get_sub_field('history'); ?>
                        <p><h6><li><?php echo $history_txt; ?></li></h6></p>
                  <?php
                  endwhile;
                endif; ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 centPic">
                <img class="img-responsive"  src="<?php echo get_field('history_img'); ?>"/>
            </div>
        </div>
    </div>
</div>
<div class="line2" style="background: url(<?php echo get_field('about_bg'); ?>) no-repeat center top fixed;background-size:cover;">
    <div class="container">
        <div class="row Fresh">
            <?php if( have_rows('featured_content') ):
            $f_counter = 0;
                while( have_rows('featured_content') ): the_row();
                $title = get_sub_field('title');
                $excerpt = get_sub_field('excerpt');
                if ($f_counter==0) {
                    $fa_icon = 'fa-eye';
                    $f_position = 'Des';
                } else if ($f_counter===1) {
                    $fa_icon = 'fa-users';
                    $f_position = 'Ver';
                } elseif ($f_counter===2) {
                    $fa_icon = 'fa-trophy';
                    $f_position = 'Ver';
                } else {
                    $fa_icon = 'fa-check-square-o';
                    $f_position = 'Fully';
                } ?>
                <div class="col-md-3 col-sm-6 col-6 <?php echo $f_position; ?>">
                    <div data-toggle="modal" data-target="#featured-<?php echo $f_counter; ?>">
                        <i class="fa <?php echo $fa_icon; ?>"></i>
                        <h4><?php echo $title; ?></h4>
                        <p><?php echo $excerpt; ?></p>
                    </div>
                </div>
                <?php
                $f_counter++;
                endwhile;
            endif; ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 wwa">
            <span name="about" ></span>
            <h3>Meet Our Competent Team!</h3>
        </div>
    </div>
</div>
<div class="container">
    <div class="row team">
        <?php if( have_rows('team') ):
        $f_counter = 0;
            while( have_rows('team') ): the_row();
            $team_name = get_sub_field('team_name');
            $team_position = get_sub_field('team_position');
            $teamate_img = get_sub_field('teamate_img'); ?>
            <div class="col-md-3 col-sm-6 col-6 b1">
                <img class="img-responsive" src="<?php echo $teamate_img; ?>">
                <h4><?php echo $team_name; ?></h4>
                <h5><?php echo $team_position; ?></h5>
            </div>
            <?php
            $f_counter++;
            endwhile;
        endif; ?>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12 hr1 text-center">
            <div data-toggle="modal" data-target="#aga-lead-team">
                <span class="agaleadership"><strong>AGA LEADERSHIP TEAM</strong></font>
            </div>
            <br/>
            <hr/>
        </div>
    </div>
</div>
<div class="container">
    <div class="row Fresh serv-container">
        <div class="col-md-12 wwa services-title">
            <span name="about" ></span>
            <h3>Services</h3>
        </div>
        <?php if( have_rows('services') ):
        $s_counter = 0;
            while( have_rows('services') ): the_row();
            $title = get_sub_field('title');
            if ($s_counter == 0){$cont_class = 'Des';$fa_class = 'fa-cogs';} else {$cont_class = 'Fully';$fa_class = 'fa-tasks';}?>
            <div class="col-md-6 col-6 services">
                <div class="<?php echo $cont_class; ?>">
                    <div data-toggle="modal" data-target="#serv-<?php echo $s_counter; ?>">
                        <div><i class="fa fa-2x <?php echo $fa_class; ?>" style="color:#c00;" aria-hidden="true"></i></div>
                        <h4><?php echo $title; ?></h4>
                    </div>
                </div>
            </div>
            <?php
            $s_counter++;
            endwhile;
        endif; ?>
    </div>
</div>