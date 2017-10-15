<?php
/**
 * Template part for displaying project section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package agaraja
 */

?>

<div id="project">
    <div class="line3" style="background: url(<?php echo get_field('project_bg'); ?>) no-repeat center top fixed;background-size:cover;">
        <div class="container">
            <div id="project1" ></div>
            <div class="row Ama">
                <div class="col-md-12">
                <span name="projects" id="projectss"></span>
                <h3>Our Works</h3>
                <p>See our accomplished Projects</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- filter_block -->
                <div id="options" class="col-md-12" style="text-align: center;">
                    <ul id="filter" class="option-set" data-option-key="filter">
                        <li><a class="selected" href="#filter" data-option-value=".completed" class="current">Completed</a></li>
                        <li><a href="#filter" data-option-value=".ongoing">Ongoing</a></li>
                        <li><a href="#filter" data-option-value=".certificates">Certificates / Awards</a></li>
                    </ul>
                </div>
            <!-- //filter_block -->
            <div class="projects-container">
                <div class="portfolio_block columns3 pretty" data-animated="fadeIn">
                    <!-- completed -->
                    <!-- swiper -->
                    <div class="swiper-container element completed">
                        <div class="swiper-wrapper">
                        <?php if( have_rows('completed') ):
                            while( have_rows('completed') ): the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $caption = get_sub_field('caption');?>
                            <div class="swiper-slide">
                                <div class="gall">
                                    <a class="plS" href="<?php echo $image; ?>" rel="prettyPhoto[completed0]">
                                        <img class="img-responsive picsGall" src="<?php echo $image; ?>" alt="<?php echo $caption; ?>"/>
                                        <div class="view project_descr ">
                                            <?php echo $title; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile;
                        endif; ?>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swipe-complete"></div>
                    <!-- Initialize Swiper -->
                    <script>
                    $(document).ready(function(){
                        swipeComplete();
                        $(window).on('resize', function() {
                            swipeComplete();
                        })
                    });
                    function swipeComplete() {
                        var swiper = new Swiper('.completed', {
                            pagination: '.swiper-complete',
                            slidesPerView: 6,
                            slidesPerColumn: 2,
                            paginationClickable: true,
                            spaceBetween: 0,
                            autoplay: 2500,
                            autoplayDisableOnInteraction: false
                        });
                        if($(window).width() < 768){
                            var swiper = new Swiper('.completed', {
                                pagination: '.swiper-complete',
                                slidesPerView: 5,
                                slidesPerColumn: 2,
                                paginationClickable: true,
                                spaceBetween: 0,
                                autoplay: 2500,
                                autoplayDisableOnInteraction: false
                            });
                        }

                    }
                    </script>
                    <!-- division -->
                    <!-- ongoing start -->
                    <div class="swiper-container ongoing">
                        <div class="swiper-wrapper">
                            <?php if( have_rows('ongoing') ):
                                $o_counter = 0;
                                while( have_rows('ongoing') ): the_row();
                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $caption = get_sub_field('caption');?>
                                <div class="swiper-slide">
                                    <div class="gall">
                                        <a class="plS" href="<?php echo $image; ?>" rel="prettyPhoto[ongoing-<?php echo $o_counter;?>]">
                                            <img class="img-responsive picsGall" src="<?php echo $image; ?>" alt="<?php echo $caption; ?>"/>
                                            <div class="view project_descr ">
                                                <?php echo $title; ?>
                                            </div>
                                        </a>
                                        <?php if ( have_rows('image_slider')):
                                            while ( have_rows('image_slider')): the_row()?>
                                                <a class="plS" href="<?php echo get_sub_field('image'); ?>" rel="prettyPhoto[ongoing-<?php echo $o_counter;?>]" style="display:none;"><img class="img-responsive picsGall" src="<?php echo get_sub_field('image'); ?>" alt="<?php echo $caption; ?>"/></a>
                                            <?php endwhile;
                                        endif; ?>
                                    </div>
                                </div>
                                <?php $o_counter++;
                                endwhile;
                            endif; ?>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swipe-ongoing"></div>
                    <!-- Initialize Swiper -->
                    <script>
                    $(document).ready(function(){
                        swipeOngoing();
                        $(window).on('resize', function() {
                            swipeOngoing();
                        })
                    });
                    function swipeOngoing(){
                        var swiper = new Swiper('.ongoing', {
                            pagination: '.swiper-pagination',
                            slidesPerView: 5,
                            slidesPerColumn: 2,
                            paginationClickable: true,
                            spaceBetween: 0,
                            autoplay: 2500,
                            autoplayDisableOnInteraction: false
                        });
                        if($(window).width() < 768){
                            var swiper = new Swiper('.ongoing', {
                                pagination: '.swiper-pagination',
                                slidesPerView: 5,
                                slidesPerColumn: 2,
                                paginationClickable: true,
                                spaceBetween: 0,
                                autoplay: 2500,
                                autoplayDisableOnInteraction: false
                            });
                        }
                    }
                    </script>
                    <!-- certificates -->
                    <!-- Swiper -->
                    <div class="swiper-container certificates">
                        <div class="swiper-wrapper">
                        <?php if( have_rows('certificate') ):
                            while( have_rows('certificate') ): the_row();
                            $image = get_sub_field('image');
                            $title = get_sub_field('title');
                            $caption = get_sub_field('caption');?>
                            <div class="swiper-slide">
                                <div class="gall">
                                    <a class="plS" href="<?php echo $image; ?>" rel="prettyPhoto[certificate1]">
                                        <img class="img-responsive picsGall" src="<?php echo $image; ?>" alt="<?php echo $caption; ?>"/>
                                        <div class="view project_descr ">
                                            <?php echo $title; ?>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endwhile;
                        endif; ?>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination swipe-certificate"></div>
                    </div>
                    <!-- Initialize Swiper -->
                    <script>
                    $(document).ready(function(){
                        swipeCert();
                        $(window).on('resize', function() {
                            swipeCert();
                        })
                    });
                    function swipeCert(){
                        var swiper = new Swiper('.certificates', {
                            pagination: '.swipe-certificate',
                            slidesPerView: 5,
                            slidesPerColumn: 2,
                            paginationClickable: true,
                            spaceBetween: 0,
                            autoplay: 2500,
                            autoplayDisableOnInteraction: false
                        });
                        if($(window).width() < 768){
                            var swiper = new Swiper('.certificates', {
                                pagination: '.swipe-certificate',
                                slidesPerView: 5,
                                slidesPerColumn: 2,
                                paginationClickable: true,
                                spaceBetween: 0,
                                autoplay: 2500,
                                autoplayDisableOnInteraction: false
                            });
                        }
                    }
                    </script>
                    <!-- swiper end -->
                    <!-- Mine end  -->
                </div>
            </div>
            <div class="col-md-12 cBtn lb" style="text-align: center;">
                <ul class="load_more_cont ">
                    <li class="dowbload btn_load_more">
                        <a href="javascript:void(0);" >
                            <div data-toggle="modal" data-target="#prev-projects">
                                <i class="fa fa-arrow-down"></i>List of projects
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>