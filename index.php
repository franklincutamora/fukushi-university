<?php

/**
 * The template for displaying all pages
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
            <div class="lg_cntr">
                <div class="top_slides">
                    <div class="col_left">
                        <div class="ffade" data-delay="400" data-interval="3000">
                            <div class="card_sl ffade-item"  style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/item1.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit">
                                    <h2 class="lg_rtit">Child
                                        <span>&</span><small>Welfare</small>
                                    </h2>
                                    <span class="lg_rtit-xs">
                                        こどもと福祉の世界へ。
                                    </span>
                                </div>
                            </div>
                            <div class="card_sl ffade-item"  style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/item2.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text2">
                                    <h2 class="lg_rtit">Childminder
                                    </h2>
                                    <span class="lg_rtit-xs">
                                         保育未来学科
                                    </span>
                                </div>
                                <div class="desc_slide">
                                    <p>こどもから学ぶ<br>。</p>
                                    <small>大事なことは<br>、</small>
                                </div>
                            </div>
                            <div class="card_sl ffade-item"  style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/item3.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text3">
                                    <h2 class="lg_rtit">Social Work
                                    </h2>
                                    <span class="lg_rtit-xs">
                                        社会福祉学科
                                    </span>
                                </div>
                                <div class="desc_slide">
                                    <p>社会福祉の専門職に<br>。</p>
                                    <small>「<br>生きるチカラ<br>」を支援する</small>
                                </div>
                            </div>
                            <div class="card_sl ffade-item"  style="background: url('<?php echo get_template_directory_uri(); ?>/assets/img/slider/item4.jpg') center center/cover no-repeat;">
                                <div class="card_sl-rtit slider_text4">
                                    <h2 class="lg_rtit">Care Work
                                    </h2>
                                    <span class="lg_rtit-xs">
                                        介護福祉学科
                                    </span>
                                </div>
                                <div class="desc_slide">
                                    <p>笑顔って広がっていく<br>。</p>
                                    <small>寄り添うほどに<br>、</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- banner carousel -->
                    <div class="col_right">
                            <div class="mnav_double">
                                <a href="javascrpit:;" class="test_prv">PREV</a>
                                <a href="javascrpit:;" class="test_nxt">NEXT</a>
                            </div>
                            <div class="top_slides-main owl-carousel owl-theme" id="main-slider">
                                <div class="item">
                                    <div class="gap gap-0-xs">
                                        <div class="md-12 xs-12">
                                            <div class="card_m">
                                                <div class="card_m-contents">
                                                    <div class="card_m-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/slide0-1.jpg" alt="" class="is-wide">
                                                    </div>
                                                    <div class="contents-body">
                                                        <h3 class="card_m-tit-sm"> YOSHIDA</h3>
                                                        <h2 class="card_m-tit-md">
                                                            OPEN CAMPUS
                                                            <span>オープンキャンパス</span>
                                                        </h2>
                                                        <div class="p-txt">
                                                            <p>
                                                                オーキャンで学校の空気感を体験！
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gap gap-0-xs">
                                        <div class="md-12 xs-12">
                                            <div class="card_m">
                                                <div class="card_m-contents">
                                                    <div class="card_m-img">
                                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/carousel/slide0-1.jpg" alt="" class="is-wide">
                                                    </div>
                                                    <div class="contents-body">
                                                        <h3 class="card_m-tit-sm"> YOSHIDA</h3>
                                                        <h2 class="card_m-tit-md">
                                                            OPEN CAMPUS
                                                            <span>オープンキャンパス</span>
                                                        </h2>
                                                        <div class="p-txt">
                                                            <p>
                                                                オーキャンで学校の空気感を体験！
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                                    <div class="item">
                                        <div class="banItem">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ban_img1.png" alt="" class="is-wide">
                                            <span>新規撮影</span>
                                        </div>
                                    </div>  
                                    <div class="item">
                                        <div class="banItem">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ban_img2.png" alt="" class="is-wide">
                                            <span>新規撮影</span>
                                        </div>
                                    </div>  
                                    <div class="item">
                                        <div class="banItem">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/ban_img3.png" alt="" class="is-wide">
                                            <span>新規撮影</span>
                                        </div>
                                    </div>
                                    
                                </div>  
                            </div>

                     </div>
                </div>
            </div>
                 
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
            <h2>Pick Up!</h2>
            <!-- banner carousel -->
                <div class="top_slides-main owl-carousel owl-theme" id="middle-slider">
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img1.png" alt="" class="is-wide">
                        </div>
                        <p>2019 お仕事リアルSchool</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img2.png" alt="" class="is-wide">
                        </div>   
                        <p>【高校生限定】オーキャンに参加し<br>
                        てハーゲンダッツをGET!</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img3.png" alt="" class="is-wide">
                        </div>    
                        <p>【WEB出願】 AO特待入学<br>
                        8月1日より開始！</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img4.png" alt="" class="is-wide">
                        </div> 
                        <p>【募集要項】マイページ登録</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img1.png" alt="" class="is-wide">
                        </div>
                        <p>2019 お仕事リアルSchool</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img2.png" alt="" class="is-wide">
                        </div>   
                        <p>【高校生限定】オーキャンに参加し<br>
                        てハーゲンダッツをGET!</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img3.png" alt="" class="is-wide">
                        </div>    
                        <p>【WEB出願】 AO特待入学<br>
                        8月1日より開始！</p>
                    </div>
                    <div class="item">
                        <div class="mid2_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/mid_img4.png" alt="" class="is-wide">
                        </div> 
                        <p>【募集要項】マイページ登録</p>
                    </div>
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