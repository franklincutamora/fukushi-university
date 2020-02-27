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

<section class="ob_banner_section">
    <div class="cntr">

        <div class="ob_bnr_box">
            <h2><span>V</span>oice</h2>
            <p>先輩の声</p>
        </div>

    </div>
</section>
<div class="ob_btn_section">
    <div class="cntr">
        <div class="ob_btn">
            <?php
                // wp_nav_menu(
                // array (
                //     'theme_location' => 'nav4',
                //     'menu' => 'nav-menu4',
                //     'container' => 'ul',
                //     'menu_class' => ''
                //     )
                // );
            ?>
            <ul>
                <li>
                    <a href="<?php bloginfo('url'); ?>/obog/" class="is-typeA">OBOGの声<i class="material-icons nv-icon">arrow_forward</i></a>
                </li>
                <li class="current-menu-item">
                    <a href="<?php bloginfo('url'); ?>/gakusei/" class="is-typeA">在校生の声</a>
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="ob_boxes_section is-typeA">
    <div class="cntr">
        <div class="ob_boxes_cntr">
            <div class="ob_box_title">
                <h3 class="is-typeA">Yoshidaの今を知ろう</h3>
                <p>Yoshidaの雰囲気や授業のことを、今いちばんわかっている在校生。オープンキャンパスなどの学校イベントで、センパイたちから直接話を聞けなかった人も、進学理由や入学してよかった理由がわかります。</p>
            </div>

            <div id="output_gakusei">
                <script type="text/template" id="gakusei-list-template" data-yapi="repeat" data-yapi-type="gakusei.posts" data-yapi-filter="term=yoshida-fukushi&amp;posts_per_page=12&amp;page=1&amp;orderby=publish_date&amp;order=DESC" data-yapi-pager="#pager_template">
                    <div class="gaku-parent">
                        <div class="zaigakusei-ph">
                            <p class="ph">
                                <% if(featured_image){ %>
                                    <img width="216" height="216" src="<%- featured_image.source %>" class="attachment-full wp-post-image" alt="<%- title %>" title="<%- title %>">
                                <% } %>
                            </p>
                            <p class="icon"><img src="<%- template_directory_uri %>/img/contents/icon_<%- terms['gakusei-category'][0].slug %>.png" alt="<%- terms['gakusei-category'][0].name %>" title="<%- terms['gakusei-category'][0].name %>"></p>
                            
                            <p class="link"><a onclick="YAPI.showPostModal(event, 'gakusei', '<%- ID %>', '#templatePostModal', '#wrapper', '#modal-gray-layer,#entry-close')" id="entry-open" href="javascript:void(0);"><%- terms['gakusei-category'][0].name %> <%- title %></a></p>
                            <div class="hover" style="opacity: 0;">
                                <div class="hover-i">
                                    <p class="gakka"><%- terms['gakusei-category'][0].name %></p>
                                    <p class="title"><%- title %></p>
                                    <p class="plus"><img src="<%- template_directory_uri %>/img/contents/ph_hover.gif" alt="" width="32" height="32" title=""></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gaku-modal_wrapper">
                        <div class="gaku-modal_body">
                            <div class="gaku-modal_header">
                                <div class="btn">
                                    <a id="entry-close" href="javascript:void(0);">
                                    </a>
                                </div>
                            </div>
                            <div class="gaku-modal_contents">
                                <div class="gaku-modal_contents-i clearfix">
                                    <div class="gaku-modal_contents-i-l">
                                        <div class="entry-title"><%= excerpt %></div>
                                        <% if(custom_fields['GAKUSEICF1']){ %>
                                            <div class="entry-text-1"><%= custom_fields['GAKUSEICF1'] %></div>
                                        <% } %>
                                        <div class="entry-text-2">
                                            <span><%- title %></span><br>
                                            <% if(custom_fields['GAKUSEICF2']){ %>
                                                <%= custom_fields['GAKUSEICF2'] %>
                                            <% } %>
                                        </div>
                                        <div class="entry-text-3"><%= more %></div>
                                        <div class="entry-btn-more">
                                            <a href="<%= gakka_detail_url %>">
                                                <%- terms['gakusei-category'][0].name %>を見る
                                                <!-- <i class="material-icons dp48">arrow_forward</i> -->
                                            </a>
                                        </div>
                                    </div>
                                    <% if(custom_fields['GAKUSEICF3']){ %>
                                        <div class="gaku-modal_contents-i-r" style="
                                            background-image: url('<%- custom_fields['GAKUSEICF3'][0] %>');
                                            background-size: cover;
                                            background-repeat: no-repeat;
                                            background-position: center center;">
                                        </div>
                                    <% } %>
                                </div>
                            </div>
                        </div>
                    </div>   
                    
                </script>

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
?>

<script>
    $(document).on("click","#entry-open",function(){
    $(this).parents(".gaku-parent").next().addClass("is-fadeIn")
    })
    $(document).on("click","#entry-close",function(){
        $('.gaku-modal_wrapper').removeClass("is-fadeIn")
    })
</script>