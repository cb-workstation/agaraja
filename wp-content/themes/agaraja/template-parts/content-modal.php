<?php
/**
 * Template part for displaying modals
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package agaraja
 */

?>
<?php if( have_rows('featured_content') ):
$f_footer_counter = 0;
    while( have_rows('featured_content') ): the_row();
    $title = get_sub_field('title');
    $description = get_sub_field('description');?>
    <div class="modal fade" id="featured-<?php echo $f_footer_counter; ?>" tabindex="-1" role="dialog" aria-labelledby="featured-<?php echo $f_footer_counter; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="featured-<?php echo $f_footer_counter; ?>"><?php echo $title; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php echo $description; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $f_footer_counter++;
    endwhile;
endif;
$team_tree = get_field('l_team');
if ($team_tree) { ?>
<div class="modal fade" id="aga-lead-team" tabindex="-1" role="dialog" aria-labelledby="agaLeadershipTeam">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title" id="agaLeadershipTeam">AGA Leadership Team</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <img src="<?php echo $team_tree; ?>" style="width: 100%;height: auto;">
            </div>
        </div>
    </div>
</div>
<?php }
if( have_rows('services') ):
$s_counter = 0;
    while( have_rows('services') ): the_row();
    $title = get_sub_field('title');
    $description = get_sub_field('description');
    if ($s_counter == 0){$cont_class = 'Des';$fa_class = 'fa-cogs';} else {$cont_class = 'Fully';$fa_class = 'fa-tasks';}?>
    <div class="modal fade" id="serv-<?php echo $s_counter; ?>" tabindex="-1" role="dialog" aria-labelledby="services<?php echo $s_counter; ?>">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="services<?php echo $s_counter; ?>"><?php echo $title; ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <?php echo $description; ?>
                </div>
            </div>
        </div>
    </div>
    <?php
    $s_counter++;
    endwhile;
endif; ?>
<div class="modal fade" id="prev-projects" tabindex="-1" role="dialog" aria-labelledby="previousProjects">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="agaLeadershipTeam">List of Completed Projects</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <?php $table = get_field( 'project_list' );
            if ( $table ) {
                echo '<table style="text-align:center; border-color: #000000; height: 1px;" border="1" width="100%" cellspacing="1" cellpadding="1">';
                    if ( $table['header'] ) {
                        echo '<thead>';
                            echo '<tr>';
                                foreach ( $table['header'] as $th ) {
                                    echo '<th style="text-align:center;">';
                                        echo $th['c'];
                                    echo '</th>';
                                }
                            echo '</tr>';
                        echo '</thead>';
                    }
                    echo '<tbody>';
                        foreach ( $table['body'] as $tr ) {
                            echo '<tr>';
                                foreach ( $tr as $td ) {
                                    echo '<td>';
                                        echo $td['c'];
                                    echo '</td>';
                                }
                            echo '</tr>';
                        }
                    echo '</tbody>';
                echo '</table>';
            } else {echo 'No list of project at the moment.';}?>
            </div>
        </div>
    </div>
</div>