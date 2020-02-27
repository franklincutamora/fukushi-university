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
                <div class="lg_cntr">

                    <div id="shu-contents-box-1 " class="contents-box-w ffamily-hiragino shushoku-bg">
                        <div class="contents-box clearfix">
                        <ul class="shu-tab clearfix" id="a1">
                            <li class="tab-1"><a class="scrollToDiv" href="<?php bloginfo('url'); ?>/<?php echo $parent_slug; ?>/<?php echo $post_slug; ?>/#a1" rel="<?php bloginfo('url'); ?>/hoiku/shushoku/#a1"><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_tab_1.gif" alt="就職実績" width="80" height="42"></a></li>
                            <li class="tab-2"><a class="scrollToDiv" href="<?php bloginfo('url'); ?>/<?php echo $parent_slug; ?>/<?php echo $post_slug; ?>/#a2" rel="<?php bloginfo('url'); ?>/hoiku/shushoku/#a2"><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_tab_2.gif" alt="就職先" width="80" height="42"></a></li>
                        </ul>

                            <div>
                                <script type="text/template" data-yapi="single" data-yapi-type="shushoku.posts" data-yapi-filter="term=<?php echo $parent_slug; ?>">
                                    <div id="shu-box-1" class="clearfix">
                                        <div id="shu-box-1-l">
                                            <h2><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_title_1.gif" alt="全国平均を大きく上回る高い就職実績を維持!" width="510" height="82"></h2>
                                            <%= custom_fields['SHUCF4'] %>
                                        </div>
                                        <div id="shu-box-1-r" class="fbold">
                                            <%= custom_fields['SHUCF5'] %>
                                            <div
                                                id="shu-chart1"
                                                data-chart="pie"
                                                data-chart-area-size="90%"
                                                data-chart-pie-hole="0.4"
                                                data-chart-pie-slice-text-style="#808080"
                                                data-chart-title1="<%- custom_fields['SHUCF1'] %>の卒業生の就職率"
                                                data-chart-percentage1="<%- custom_fields['SHUCF2'] %>"
                                                data-chart-slice-color1="#fbcc3b"
                                                data-chart-title2=""
                                                data-chart-percentage2="<%- custom_fields['SHUCF3'] %>"
                                                data-chart-slice-color2="#fff"
                                                ></div>
                                        </div>
                                    </div>
                                </script>
                            </div>
                            <hr class="line">
                            <div>
                                <script type="text/template" data-yapi="single" data-yapi-type="shushoku.posts" data-yapi-filter="term=school-common">
                                    <div id="shu-box-2" class="clearfix">
                                        <div id="shu-box-2-l">
                                            <h2><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_title_2.gif" alt="企業からの高い評価と信頼で絶大な求人実績!" width="434" height="80"></h2>
                                            <p>当学園の各校で、専門分野の実力をつけた卒業生たちは、各地・各業界等で高い評価をいただいています。その実績は、確かな信頼となって蓄積され、継続した求人となって引き継がれています。</p>
                                            <div id="shu-box-2-l-i" class="clearfix">
                                                <div class="shu-box-2-l-ii">
                                                    <h4 class="h4bold"><%- custom_fields['SHUCOMCF1'] %>求人企業数</h4>
                                                    <p class="text"><%- custom_fields['SHUCOMCF2'] %><span>社</span></p>
                                                </div>
                                                <div class="shu-box-2-l-ii">
                                                    <h4 class="h4bold"><%- custom_fields['SHUCOMCF1'] %>求人総数</h4>
                                                    <p class="text"><%- custom_fields['SHUCOMCF3'] %><span>名</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="shu-box-2-r" class="fbold">
                                            <h3>年度別就職率の推移（吉田学園全体）</h3>
                                            <div
                                                id="shu-chart2"
                                                data-chart="column"
                                                data-chart-title="就職率"
                                                data-chart-data1="<%- custom_fields['SHUCOMCFY1'] %>"
                                                data-chart-data2="<%- custom_fields['SHUCOMCFY2'] %>"
                                                data-chart-data3="<%- custom_fields['SHUCOMCFY3'] %>"
                                                data-chart-data4="<%- custom_fields['SHUCOMCFY4'] %>"
                                                data-chart-data5="<%- custom_fields['SHUCOMCFY5'] %>"
                                                data-chart-data6="<%- custom_fields['SHUCOMCFY6'] %>"
                                                data-chart-data7="<%- custom_fields['SHUCOMCFY7'] %>"
                                                data-chart-data8="<%- custom_fields['SHUCOMCFY8'] %>"
                                                data-chart-data9="<%- custom_fields['SHUCOMCFY9'] %>"
                                                ></div>
                                        </div>
                                    </div>
                                    <hr class="line">
                                    <div id="shu-box-3" class="clearfix">
                                        <div id="shu-box-3-l" class="clearfix">
                                            <h2><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_title_3-1.gif" alt="専門学校×道内の大学 安定の就職率!" width="384" height="80"></h2>
                                            <p><%- custom_fields['SHUC`OMCF12'] %></p>
                                        </div>
                                        <div id="shu-box-3-r" class="clearfix">
                                            <div id="shu-box-3-r-1" class="fbold">
                                                <h3><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_title_senmongakko.gif" alt="専門学校" width="124" height="30"><br>
                                                    卒業者に対する就職率</h3>
                                                <div
                                                    id="shu-chart3"
                                                    data-chart="pie"
                                                    data-chart-area-size="95%"
                                                    data-chart-pie-hole="0.4"
                                                    data-chart-pie-slice-text-style="#FFF"
                                                    data-chart-title1="専門学校卒業者に対する就職率"
                                                    data-chart-percentage1="<%- custom_fields['SHUCOMCF4'] %>"
                                                    data-chart-slice-color1="#FFBB00"
                                                    data-chart-title2=""
                                                    data-chart-percentage2="<%- custom_fields['SHUCOMCF5'] %>"
                                                    data-chart-slice-color2="#876216"
                                                    ></div>
                                                <p class="text"><%- custom_fields['SHUCOMCF6'] %></p>
                                            </div>
                                            <div id="shu-box-3-cross" class="icon_cross_adjust"><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_icon_cross.gif" alt="" width="68" height="68"></div>
                                            <div id="shu-box-3-r-2" class="fbold">
                                                <h3><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_title_daigaku.gif" alt="道内の大学" width="152" height="30"><br>
                                                    卒業者に対する就職率</h3>
                                                <div
                                                    id="shu-chart4"
                                                    data-chart="pie"
                                                    data-chart-area-size="95%"
                                                    data-chart-pie-hole="0.4"
                                                    data-chart-pie-slice-text-style="#FFF"
                                                    data-chart-title1="大学卒業者に対する就職率"
                                                    data-chart-percentage1="<%- custom_fields['SHUCOMCF7'] %>"
                                                    data-chart-slice-color1="#876216"
                                                    data-chart-title2=""
                                                    data-chart-percentage2="<%- custom_fields['SHUCOMCF8'] %>"
                                                    data-chart-slice-color2="#FFBB00"
                                                    ></div>
                                                <p class="text"><%- custom_fields['SHUCOMCF9'] %></p>
                                            </div>
                                        </div>
                                    </div>
                                    <p><%- custom_fields['SHUCOMCF10'] %></p>
                                    <%= custom_fields['SHUCOMCF11'] %>
                                </script>
                            </div>
                            <ul class="shu-tab clearfix" id="a2">
                                <li class="tab-1"><a class="scrollToDiv" href="<?php bloginfo('url'); ?>/<?php echo $parent_slug; ?>/<?php echo $post_slug; ?>/#a1" rel="<?php bloginfo('url'); ?>/hoiku/shushoku/#a1"><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_tab_1.gif" alt="就職実績" width="80" height="42"></a></li>
                                <li class="tab-2"><a class="scrollToDiv" href="<?php bloginfo('url'); ?>/<?php echo $parent_slug; ?>/<?php echo $post_slug; ?>/#a2" rel="<?php bloginfo('url'); ?>/hoiku/shushoku/#a2"><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_tab_2.gif" alt="就職先" width="80" height="42"></a></li>
                            </ul>
                            <div id="shu-box-5">
                                <h2><img src="https://yoshida-fukushi.jp/wp/wp-content/themes/original/img/contents/shushoku/shu_title_5.gif" alt="先輩の就職先をチェック！" width="460" height="42"></h2>
                                <p class="text">将来の夢を叶えた先輩たちが活躍している企業を一挙公開。</p>
                                <hr class="line">
                                <div>
                                    <script type="text/template" data-yapi="single" data-yapi-type="shushoku.posts" data-yapi-filter="term=<?php echo $parent_slug; ?>">
                                        <%= custom_fields['SHUCF6'] %>
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <?php
    }else{
        ?>
            <section class="shu_title_section">
                <div class="cntr">
                    <div class="shu_title_cntr">

                    <h3 class="shu_title">就職実績</h3>
                    <h4>求人数が多く、自分にあった<br>就職先が見つかる！</h4>
                    <p>保育や福祉の分野は、まだまだ人材不足でYoshidaにも多くの求人が寄せられています。頑張って取得した国家資格を生かしなが<br>ら、自分にあった就職先で働けるように、就職セミナーの実施など就活のサポートも万全です。</p>
                    </div>
                </div>
            </section>

            <section class="shu_fbox_section">
                <div class="cntr">
                    <div class="shu_fbox_cntr">

                        <div class="shu_fbox1">
                            <div class="shu_bx">就職率</div>
                                <ul class="gap gap-35 gap-0-xs">
                                    <li class="md-4 xs-12">
                                        <h4 class="shu_num">100<small>%</small></h4>
                                        <span class="shu_lab bg_orng">保育未来学科</span>
                                    </li>
                                    <li class="md-4 xs-12">
                                        <h4 class="shu_num">93<small>.3%</small></h4>
                                        <span class="shu_lab bg_blu">社会福祉学科</span>
                                    </li>
                                    <li class="md-4 xs-12">
                                        <h4 class="shu_num">90<small>.9%</small></h4>
                                        <span class="shu_lab bg_grn">介護福祉学科</span>
                                    </li>
                                </ul>
                                <h5>2018年度卒業生実績</h5>
                        </div>

                        <div class="shu_fbox2">
                            <div class="shu_bx">2017年度の求人数</div>
                            <ul> 
                                <li>
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/icon1.png" alt="shushoku image">
                                    </figure>
                                    <span class="shu_title_bx2">保育教諭</span>
                                    <h4 class="shu_num2">363<small>名</small></h4>
                                </li>
                                <li>
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/icon2.png" alt="shushoku image">
                                    </figure>
                                    <span class="shu_title_bx2">保育士</span>
                                    <h4 class="shu_num2">2,922<small>名</small></h4>
                                </li>
                                <li>
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/icon3.png" alt="shushoku image">
                                    </figure>
                                    <span class="shu_title_bx2">幼稚園教諭</span>
                                    <h4 class="shu_num2">142<small>名</small></h4>
                                </li>
                                <li>
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/icon4.png" alt="shushoku image">
                                    </figure>
                                    <span class="shu_title_bx2">介護福祉士・<br>
                                    介護員・生活支援員</span>
                                    <h4 class="shu_num2">2,766<small>名</small></h4>
                                </li>
                                <li>
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/icon5.png" alt="shushoku image">
                                    </figure>
                                    <span class="shu_title_bx2">社会福祉士・<br>
                                        生活相談員</span>
                                    <h4 class="shu_num2">937<small>名</small></h4>
                                </li>
                                <li>
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/icon6.png" alt="shushoku image">
                                    </figure>
                                    <span class="shu_title_bx2">精神保健福祉士</span>
                                    <h4 class="shu_num2">278<small>名</small></h4>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </section>

            <section class="shu_graph_section">
                <div class="cntr">
                    <div class="shu_graph_cntr">

                        <div class="shu_graph_boxes">
                            <h3>先輩の就職先</h3>
                            <div class="shu_graph_bx">
                                <ul class="gap gap-20 gap-0-xs">
                                    <li class="md-4 xs-12">
                                        <div class="graph_bx">
                                            <h4 class="bx_title bg_orng">保育未来学科</h4>
                                            <figure>
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/graph1.png" alt="">
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="md-4 xs-12">
                                        <div class="graph_bx">
                                            <h4 class="bx_title bg_blu">社会福祉学科</h4>
                                            <figure>
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/graph2.png" alt="">
                                            </figure>
                                        </div>
                                    </li>
                                    <li class="md-4 xs-12">
                                        <div class="graph_bx">
                                            <h4 class="bx_title bg_grn">介護福祉学科</h4>
                                            <figure>
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/graph3.png" alt="">
                                            </figure>
                                        </div>
                                    </li>
                                </ul>
                                <p class="is-typeA">2015～2017年度卒業生 就職先</p>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <section class="shu_btm_section">
                <div class="cntr">
                    <div class="shu_btm_cntr">

                        <div class="shu_btm_box">
                            <h3>Yoshidaの<span>就職あんしんサポート</span></h3>
                            <p>
                                Yoshidaでは毎年「就職セミナー」を実施しています。
                                講師を招いた講演会や、自己分析、身だしなみやマナーを学ぶ講座などを開催。
                                就職活動のスケジュールを教員と一緒に組み立て、万全の体制で臨めるよう、手厚くサポートしています。
                            </p>
                            <ul class="gap gap-13 gap-0-xs">
                                <li class="md-4 gap_16p5 xs-12">
                                    <figure class="shu_btm_img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/btm_img1.png" alt="shushoku image">
                                    </figure>
                                    <div class="shu_bfr_txt">
                                        <p>自分には<br>
                                        どんな適正が<br>
                                        あるんだろう</p>
                                    </div>
                                </li>
                                <li class="md-4 gap_16p5 xs-12">
                                    <figure class="shu_btm_img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/btm_img2.png" alt="shushoku image">
                                    </figure>
                                </li>
                                <li class="md-4 gap_16p5 xs-12">
                                    <figure class="shu_btm_img">
                                        <img src="<?php bloginfo('template_url'); ?>/assets/img/shushoku/btm_img3.png" alt="shushoku image">
                                    </figure>
                                    <div class="shu_bfr_txt">
                                        <p>清潔感のある<br>
                                        社会人メイクを<br>
                                        レッスン</p>
                                    </div>
                                </li>
                            </ul>
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
get_footer(); ?>
