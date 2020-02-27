<?php

/**
 * The template for displaying all pages
 *
 * Template Name: Homepage
 * 
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FUKUSHI UNIVERSITY
 */

get_header();
?>

 <!-- main -->
 <div class="main_container">
        <section class="wrp">
            <!-- <div class="lg_cntr"> -->
                <div class="top_slides">
                    <div class="col_left">
                        <div class="ffade" data-delay="400" data-interval="3000">
                            
                            <div class="card_sl ffade-item"  style="background: url('https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2019/11/item1.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text">
                                    <h2 class="lg_rtit" style=" color: #ff4f4f;">
                                        Child & Welfare   
                                    </h2>
                                    <span class="lg_rtit-xs" style="color: #414042">
                                        こどもと福祉の世界へ。
                                    </span>
                                </div>
                            </div>
                            <div class="card_sl ffade-item"  style="background: url('https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2019/12/Asset-1-100.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text">
                                    <h2 class="lg_rtit" style=" color: #fbb167;">
                                    Nursery Teaching   
                                    </h2>
                                    <span class="lg_rtit-xs" style="color: #414042">
                                    保育未来学科
                                    </span>
                                </div>
                                <div class="desc_slide">
                                     <small>大事なことは、</small>
                                      <p>こどもから学ぶ。</p>
                                </div>
                            </div>
                            <div class="card_sl ffade-item"  style="background: url('https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2019/12/Asset-2-100.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text">
                                    <h2 class="lg_rtit" style=" color: #63ced6;">
                                    Social Welfare   
                                    </h2>
                                    <span class="lg_rtit-xs" style="color: #fff">
                                    社会福祉学科
                                    </span>
                                </div>
                                <div class="desc_slide">
                                     <small> 「生きるチカラ」を支援する</small>
                                      <p>社会福祉の専門職に。</p>
                                </div>
                            </div>
                            <div class="card_sl ffade-item"  style="background: url('https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2019/11/item4.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text">
                                    <h2 class="lg_rtit" style=" color: #9bd46c;">
                                    Care Work   
                                    </h2>
                                    <span class="lg_rtit-xs" style="color: #414042">
                                    介護福祉学科
                                    </span>
                                </div>
                                <div class="desc_slide">
                                   <small>寄り添うほどに、</small>
                                    <p>笑顔って広がっていく。</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- banner carousel -->
                    <div class="col_right">
                            <div class="mnav_parent">
                                <div class="mnav_double">
                                    <a href="javascript:;" class="test_prv">PREV</a>
                                    <a href="javascript:;" class="test_nxt">NEXT</a>
                                </div>
                                <div class="top_slides-main owl-carousel owl-theme" id="main-slider">
                                    <?php if( have_rows('oc_slider') ): ?>
                                        <?php while( have_rows('oc_slider') ): the_row(); 
                                            // vars
                                            $oc_image = get_sub_field('oc_image');
                                            $oc_yoshida_tit = get_sub_field('oc_yoshida_title');
                                            $oc_campus_tit = get_sub_field('oc_title');
                                            $oc_campus_tit_jp = get_sub_field('oc_title_jp');
                                            $oc_campus_txt = get_sub_field('oc_text');
                                            $oc_campus_url = get_sub_field('open_campus_url');
                                            ?>
                                            <a href="<?php echo $oc_campus_url; ?>" class="item">
                                                <div class="gap gap-0-xs">
                                                    <div class="md-12 xs-12">
                                                        <div class="card_m">
                                                            <div class="card_m-contents">
                                                                <div class="card_m-img">
                                                                    <img src="<?php echo $oc_image['url']; ?>" title="<?php echo $oc_image['title']; ?>" alt="<?php echo $oc_image['alt']; ?>" class="is-wide">
                                                                </div>
                                                                <div class="contents-body">
                                                                    <h3 class="card_m-tit-sm"><?php echo $oc_yoshida_tit; ?></h3>
                                                                    <h2 class="card_m-tit-md">
                                                                        <?php echo $oc_campus_tit; ?>
                                                                        <span><?php echo $oc_campus_tit_jp; ?></span>
                                                                    </h2>
                                                                    <div class="p-txt">
                                                                        <p>
                                                                            <?php echo $oc_campus_txt; ?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                            <div class="nav_wrp">
                                <div class="custom-nav_cntr">
                                    <div class="col_r-half">
                                        <div class="custom-nav">
                                            <div class="custom-dots"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- // banner carousel -->
                            <div class="banner_images">
                                <div class="top_slides-main owl-carousel owl-theme" id="main-slider2">
                                   
                                    <a href="<?php bloginfo('url'); ?>/hoiku" class="item" style="color: #414042">
                                        <div class="banItem">
                                            <div class="banCircle" style='background-color:#fbb167'></div>
                                            <img src="https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2020/01/img_hover1.jpg" alt="woman" class="is-wide img_default">
                                            <div class="banItemCont">
                                                <h2>保育</h2>
                                                <h3>未来学科</h3>
                                                <p><small style="background-color: #414042"></small>２年制<small class="right" style="background-color: #414042"></small></p>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="<?php bloginfo('url'); ?>/shakai" class="item" style="color: #efefef">
                                        <div class="banItem">
                                            <div class="banCircle" style='background-color:#63ced6'></div>
                                            <img src="https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2020/01/ban_img2.jpg" alt="man" class="is-wide img_default">
                                            <div class="banItemCont">
                                                <h2>社会</h2>
                                                <h3>福祉学科</h3>
                                                <p><small style="background-color: #efefef"></small>4年制<small class="right" style="background-color: #efefef"></small></p>
                                            </div>
                                        </div>
                                    </a>
                                    
                                    <a href="<?php bloginfo('url'); ?>/kaigo" class="item" style="color: #414042">
                                        <div class="banItem">
                                            <div class="banCircle" style='background-color:#9bd46c'></div>
                                            <img src="https://re.yoshida-fukushi.jp/wp-fukushi/wp-content/uploads/2020/01/img_hover2-1.jpg" alt="woman" class="is-wide img_default">
                                            <div class="banItemCont">
                                                <h2>介護</h2>
                                                <h3>福祉学科</h3>
                                                <p><small style="background-color: #414042"></small>２年制<small class="right" style="background-color: #414042"></small></p>
                                            </div>
                                        </div>
                                    </a>

                                </div>  
                            </div>

                     </div>
                </div>
            <!-- </div> -->
                 
        </section>
</div>
    <!-- //main -->

    <!-- middle -->
    <div class="middle">
        <div class="mid_con">
            <div class="mid_box">
                <h2>笑顔のリレーを始めよう。</h2>
                <p>
                こどもと福祉の世界は、たくさんの笑顔にあふれてる。<br class="v-pc">
                自分の持っている知識や技術で相手を笑顔にできて、<br class="v-pc">
                うれしそうな相手の笑顔を見るたび、<br class="v-pc">
                また、自分も笑顔になって。<br class="v-pc">
                年齢を超えて、性別を超えて、障がいを超えて。<br class="v-pc">
                笑顔でつながる世界を、あなたから始めよう。
                </p>
                <span>Smile relay</span>
            </div>
        </div>
    </div>
    <!-- // middle -->

    <!-- middle2 -->
    <div class="middle2">
        <div class="mid2_con">
            <h2>PickUp!</h2>
            <!-- banner carousel -->
                <div class="top_slides-main owl-carousel owl-theme" id="middle-slider">
                    
                    <?php if( have_rows('pick_up_slider') ): ?>
                        <?php while( have_rows('pick_up_slider') ): the_row(); 
                            // vars
                            $pick_img = get_sub_field('pick_up_slider_image');
                            $pick_txt = get_sub_field('pick_up_slider_text');
                            $pick_url = get_sub_field('pick_up_slider_url');
                            ?>
                            <a href="<?php echo $pick_url; ?>" class="item">
                                <div class="mid2_img">
                                    <img src="<?php echo $pick_img['url']; ?>" alt="<?php echo $pick_img['alt']; ?>" class="is-wide">
                                </div> 
                                <p><?php echo nl2br($pick_txt); ?></p>
                            </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                    
                    <div class="nav_wrp">
                        <div class="custom-nav_cntr">
                            <div class="col_r-half">
                                <div class="custom-nav2">
                                    <div class="custom-dots2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                
            <!-- // banner carousel -->
        </div>
    </div>
    <!-- // middle2 -->

    <!-- university event -->
    <?php get_template_part( 'template-parts/template', 'dept-intro' ); ?>
    <!-- end of university event -->

    <!-- university event -->
    <?php get_template_part( 'template-parts/template', 'university-event' ); ?>
    <!-- end of university event -->

    <!-- news and twitter parts -->
    <?php get_template_part( 'template-parts/template', 'news-twitter' ); ?>
    <!-- end of news and twitter parts -->


<?php
get_footer();