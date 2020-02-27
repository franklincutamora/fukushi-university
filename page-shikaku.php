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

    $post_data = get_post($post->post_parent);
    $parent_slug = $post_data->post_name;
    $post_slug = $post->post_name;

?>

<?php
    global $post;
    if( is_page() && $post->post_parent ){
        ?>

            <div class="shikaku-connect">
                <section class="shi_title_section">
                    <div class="cntr">
                        <div class="shi_title_cntr">
                        <h3 class="shi_title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                </section>
                <div class="cntr ffamily-hiragino">
                    <div class="shikaku_first_output" id="shikaku_first_output">
                        <ul id="a1" class="connecting-nav">
                            <li>
                                <a href="#a1" class="scrollToDiv">目指せる資格</a>
                            </li>
                            <li>
                                <a href="#a2" class="scrollToDiv">目指せる職業</a>
                            </li>
                        </ul>
                        <div>
                            <script id="shikaku_first" type="text/template" data-yapi="single" data-yapi-type="shikaku.posts" data-yapi-filter="term=<?php echo $parent_slug; ?>">
                                <%= custom_fields['SSCF3a'] %>
                            </script>
                        </div>
                    </div>

                    <div class="shikaku_sec_output" id="shikaku_sec_output">
                        <ul id="a2" class="connecting-nav connecting-nav-v2">
                            <li>
                                <a href="#a1" class="scrollToDiv">目指せる資格</a>
                            </li>
                            <li>
                                <a href="#a2" class="scrollToDiv">目指せる職業</a>
                            </li>
                        </ul>
                        <div>
                            <script type="text/template" data-yapi="single" data-yapi-type="shikaku.posts" data-yapi-filter="term=<?php echo $parent_slug; ?>">
                                <%= custom_fields['SSCF3b'] %>
                            </script>
                        </div>
                    </div>
                </div>
            </div>

        <?php
    }else{
        ?>

            <section class="shi_title_section">
                <div class="cntr">
                    <div class="shi_title_cntr">
                    <h3 class="shi_title"><?php the_title(); ?></h3>
                    </div>
                </div>
            </section>

            <section class="shi_boxes_section">
                <div class="cntr3">
                    <div class="shi_boxes_cntr">

                        <div class="shi_boxes">
                            <div class="gap gap-25 gap-0-xs">
                                <div class="md-4 xs-12 mb-0 mb-45-xs">
                                    <div class="shi_box">
                                        <span class="shi_box_tp bg_orng">保育未来学科</span>
                                        <figure>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shikaku/card1.png" alt="shikaku image">
                                        </figure>
                                        <h3 class="c_orng">保育士＆幼稚園教諭二種免許
                                            <span>を同時に目指せます！</span></h3>
                                        <p>目的や園での過ごし方が変わるこどもの現場では、資格や免許によって、働く場所や仕事内容に違いが出ます。幼稚園や保育園のほかに、認定こども園なども増えているので、資格と免許のW取得は活躍の場が大きく広がります。</p>
                                    </div>
                                </div>
                                <div class="md-4 xs-12 mb-0 mb-45-xs">
                                    <div class="shi_box">
                                        <span class="shi_box_tp bg_blu">社会福祉学科</span>
                                        <figure>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shikaku/card2.png" alt="shikaku image">
                                        </figure>
                                        <h3 class="c_blu">目指せ!トリプルライセンス。
                                        <span>資格+αの力を身につける！</span></h3>
                                        <p>北海道では唯一、3つの福祉系国家資格がめざせるYoshida。医療機関、社会福祉施設、社会福祉機関、司法領域、教育機関、公務員など、資格を生かせるフィールドが多岐にわたるので、将来の幅が広がります。</p>
                                    </div>
                                </div>
                                <div class="md-4 xs-12 mb-0 mb-45-xs">
                                    <div class="shi_box">
                                        <span class="shi_box_tp bg_grn">介護福祉学科</span>
                                        <figure>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/img/shikaku/card3.png" alt="shikaku image">
                                        </figure>
                                        <h3 class="c_grn">介護福祉士の合格に向けた
                                        <span>個別のサポートが手厚い！</span></h3>
                                        <p>模擬試験の結果を個別にデータ分析し、どの分野が苦手なのかもしっかり把握できるので、試験対策に役立ちます。多くの合格者をサポートしてきた先生のコメントでは、的確なアドバイスが書かれているので必見です。</p>
                                        <small>※2018年度卒業生実績</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="shi_bottom_section">
                <div class="cntr">
                    <div class="shi_bottom_cntr">

                        <div class="shi_btm_box shi_bx1">
                            <span class="bar_title">目指せる資格</span>
                            <div class="rob_shi_btm_box" id="">
                                <script id="" type="text/template" data-yapi="single" data-yapi-type="shikaku.posts" data-yapi-filter="term=yoshida-fukushi&amp;exclude_related_term=true">
                                    <%= custom_fields['SSCF3a'] %>
                                </script>
                            </div>
                        </div>
                        <div class="shi_btm_box">
                            <span class="bar_title">目指せる職業</span>
                            <div class="rob_shi_btm_box rob_shi_btm_box_v2" id="">
                                <script id="" type="text/template" data-yapi="single" data-yapi-type="shikaku.posts" data-yapi-filter="term=yoshida-fukushi&amp;exclude_related_term=true">
                                    <%= custom_fields['SSCF3b'] %>
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        <?php
    }

?>



<!-- senpai section -->
<div class="senpai_page">
    <?php get_template_part( 'template-parts/template', 'senpai' ); ?>
</div>
<!-- end of senpai section -->

<!-- exp news and twitter parts -->
<div class="hogosha_page">
    <?php get_template_part( 'template-parts/template', 'exp-news-twit' ); ?>
</div>
<!-- end of exp news and twitter parts -->



<?php
get_footer();

?>
