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

get_header('unique');
?>

<?php
    // URLの末尾が｢yoshida-sports.jp/athletictrainer/shushoku/｣の形式になっていると前提して､
    // ｢athletictrainer｣の部分をtermとして抽出する
    $urlSplits = explode('/', $_SERVER["REQUEST_URI"]);
    $term = $urlSplits[count($urlSplits)-3];
    if(preg_match('/yoshida-fukushi.jp/', $term) || !$term){
        $term = 'yoshida-fukushi&exclude_related_term=true'; //学校全体の場合
    }

?>

<div class="camp_parent">
<div class="camp_banner">
    <div class="camp_bnr_cntr">

        <div class="camp_title_box">
        <h3 class="camp_title"><span>Enjoy</span> <small>キャンパスライフ</small></h3>
        </div>

        <!-- <figure class="camp_bnr_img">
            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/camp_banner.png" alt="campus banner">
        </figure> -->
        

    </div>
</div>

<section class="camp_section2">
    <div class="camp_sec2_cntr">
        <div class="camp_sec2_wrp">

            <div class="camp_sec2_box">
                <div class="camp_sec2_bf">
                    <h4>楽しいイベント
                    <span>盛りだくさん！</span></h4>
                </div>

                <h3>勉強も遊びも<span>全力だから面白い！</span></h3>
                <p>各学科ならではのイベントや吉田学園全体で盛大に行われる学園祭やスポーツフェスティバルなど、年間を通じてイベントが充実。イベントの様子は、SNSでも紹介しているのでチェックしてみてね。</p>
                <ul class="gap gap-5 gap-0-xs">
                    <li class="md-4 xs-12"><a class="slide_bot" href="#slide1">学校独自イベント</a>
                        <i class="material-icons">arrow_downward</i>
                    </li>
                    <li class="md-4 xs-12"><a class="slide_bot" href="#slide2">YOSHIDA全校合同イベント</a>
                        <i class="material-icons">arrow_downward</i>
                    </li>
                    <li class="md-4 xs-12"><a class="slide_bot" href="#slide3">イベントSNAP</a>
                        <i class="material-icons">arrow_downward</i>
                    </li>
                </ul>
            </div>

    </div>
    </div>
</section>
</div>

<section class="camp_section3">
    <div class="camp_sec3_cntr">

        <div class="camp_sec3_wrp">

            <div id="slide1" class="camp_sec3_box">
                <span class="cp_sub_title">学校限定の楽しいイベント！</span>
                <h2 class="cp_title">学校独自イベント</h2>

                <div class="camp_dp_box">

                    <script type="text/template" data-yapi="repeat" data-yapi-type="campus.posts" data-yapi-filter="term=yoshida-fukushi&amp;order=ASC">
                        <div class="camp_dp">
                            <div class="camp_label_dp dd_btn">
                                <span class="camp_mt"><%- custom_fields['CAMCF1a'] %><small>月</small></span> <%- title %> <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                            <div class="camp_toggle">
                                <% if(!custom_fields['CAMCF2']){ %>
                                    <div class="camp_txt_con">
                                        <div class="camp_txt_left">
                                            <h4><%- title %></h4>
                                            <p><%= content %></p>
                                        </div>
                                        <div class="camp_txt_right">
                                            <img src="https://campus.yoshida-g.ac.jp/wp/wp-content/themes/original/img/contents/cam_noimg.png" alt="campus image">
                                        </div>
                                    </div>
                                <% }else{ %>
                                    <div class="camp_txt_con">
                                        <div class="camp_txt_left">
                                            <h4><%- title %></h4>
                                            <p><%= content %></p>
                                        </div>
                                        <div class="camp_txt_right">
                                            <img src="<%- custom_fields['CAMCF2'][0] %>" alt="campus image">
                                        </div>
                                    </div>
                                <% } %>
                            </div>
                        </div>
                    </script>
                    
                </div>
                
            </div>

            <div id="slide2" class="camp_sec3_box box2">
                <span class="cp_sub_title">学園全体で行うビッグイベント!</span>
                <h2 class="cp_title">YOSHIDA<br>全校合同イベント</h2>

                <div class="camp_dp_box">

                    <script type="text/template" data-yapi="repeat" data-yapi-type="campus.posts" data-yapi-filter="term=yoshida-g&amp;order=ASC">
                        
                        <div class="camp_dp">
                            <div class="camp_label_dp dd_btn">
                                    <span class="camp_mt"><%- custom_fields['CAMCF1a'] %><small>月</small></span> <%- title %> <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </div>
                            <div class="camp_toggle">
                                <% if(!custom_fields['CAMCF2']){ %>
                                    <div class="camp_txt_con">
                                        <div class="camp_txt_left">
                                            <h4><%- title %></h4>
                                            <p><%= content %></p>
                                        </div>
                                        <div class="camp_txt_right">
                                            <img src="https://campus.yoshida-g.ac.jp/wp/wp-content/themes/original/img/contents/cam_noimg.png" alt="campus image">
                                        </div>
                                    </div>
                                    <% }else{ %>
                                    <div class="camp_txt_con">
                                        <div class="camp_txt_left">
                                            <h4><%- title %></h4>
                                            <p><%= content %></p>
                                        </div>
                                        <div class="camp_txt_right">
                                            <img src="<%- custom_fields['CAMCF2'][0] %>" alt="campus image">
                                        </div>
                                    </div>
                                <% } %>
                            </div>
                        </div>

					</script>
                    
                </div>
                
            </div>
        </div>

    </div>
</section>

<section id="slide3" class="event_section">
    <div class="lg_cntr">
        
        <div class="event_title">
            <h3><span>Event</span><span class="snap">Snap</span> <small>イベント<i class="material-icons">photo_camera</i>
 SNAP!</small></h3>
        </div>

        <div class="event_boxes">

            <!-- <figure class="two_girls">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_img.png" alt="campus image">
            </figure>
  -->

            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card1.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card1">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card1.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card2.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card2">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card2.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card3.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card3">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card3.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card4.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card4">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card4.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card5.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card5">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card5.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card6.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card6">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card6.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card7.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card7">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card7.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card8.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card8">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card8.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card9.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card9">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card9.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card10.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card10">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card10.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card11.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card11">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card11.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="event_img_box">
                <div class="event_img">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card12.jpg" alt="campus image">
                    <i class="material-icons">add</i>
                </div>
                <div class="event_modal_wrp">
                    <div class="event_modal_cntr">
                        <div class="event_modal_box">
                            <div class="close_modal"><i class="material-icons">close</i></div>
                            <div class="event_modal_img event_card12">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/campus/event_card12.jpg" alt="campus image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- exp news and twitter parts -->
<div class="hogosha_page">
    <?php get_template_part( 'template-parts/template', 'exp-news-twit' ); ?>
</div>
<!-- end of exp news and twitter parts -->
 
<?php
get_footer();