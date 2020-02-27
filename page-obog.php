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
            <!-- <?php
                wp_nav_menu(
                array (
                    'theme_location' => 'nav4',
                    'menu' => 'nav-menu4',
                    'container' => 'ul',
                    'menu_class' => ''
                    )
                );
            ?> -->
             <ul>
                <li class="current-menu-item">
                    <a href="<?php bloginfo('url'); ?>/obog/" class="is-typeA">OBOGの声</a>
                </li>
                <li>
                    <a href="<?php bloginfo('url'); ?>/gakusei/" class="is-typeA">在校生の声<i class="material-icons nv-icon">arrow_forward</i></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<section class="ob_boxes_section">
    <div class="cntr">
        <div class="ob_boxes_cntr">
            <div class="ob_box_title">
                <h3>センパイたちの笑顔に続こう</h3>
                <p>卒業後も笑顔いっぱいで働いているOBOGが多いのは、自分にあった就職先でやりがいを感じていられるから。なりたい仕事をみつけたきっかけや、Yoshidaに決めた理由は、進路を決めるうえで参考になりますよ。</p>
            </div>

            <div class="ob_boxes">
                <ul class="res_obog">
                <script type="text/template" id="obog-list-template" data-yapi="repeat" data-yapi-type="obog.posts" data-yapi-filter="term=yoshida-fukushi&amp;posts_per_page=12&amp;page=1" data-yapi-pager="#pager_template">
                    <li>
                        <a href="javascript:;" class="card-parent">
                            <div class="card-icon">
                                <img src="<%- template_directory_uri %>/img/contents/icon_<%- terms['obog-category'][0].slug %>.gif" alt="<%- terms['obog-category'][0].name %>" title="<%- terms['obog-category'][0].name %>">
                            </div>
                            <div class="card-img">
                                <% if(featured_image){ %>
                                    <img width="216" height="216" src="<%- featured_image.source %>" class="attachment-full wp-post-image" alt="<%- title %>" title="<%- title %>">
                                <% } %>
                            </div>
                            <div class="card-info">
                                <div class="card-info_cntr">
                                    <div class="card-category">
                                        <%- terms['obog-category'][0].name %>
                                    </div>    
                                    <div class="card-title">
                                        <%- title %>
                                    </div>
                                    <div class="card-plus">
                                        <img src="<%- template_directory_uri %>/img/contents/ph_hover.gif" alt="" width="32" height="32" title="">
                                    </div>
                                </div>
                            </div>
                        </a>
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
                                            <% if(custom_fields['OBOGCF1']){ %>
                                                <div class="entry-text-1"><%= custom_fields['OBOGCF1'] %></div>
                                            <% } %>
                                            <div class="entry-text-2">
                                                <span><%- title %></span><br>
                                                <% if(custom_fields['OBOGCF2']){ %>
                                                    <%= custom_fields['OBOGCF2'] %>
                                                <% } %>
                                            </div>
                                            <div class="entry-text-3"><%= more %></div>
                                            <div class="entry-btn-more">
                                                <a href="<%= gakka_detail_url %>">
                                                    <%- terms['obog-category'][0].name %>を見る
                                                    <!-- <i class="material-icons dp48">arrow_forward</i> -->
                                                </a>
                                            </div>
                                        </div>
                                        <% if(custom_fields['OBOGCF3']){ %>
                                            <div class="gaku-modal_contents-i-r" style="
                                                background-image: url('<%- custom_fields['OBOGCF3'][0] %>');
                                                background-size: cover;
                                                background-position: center center;
                                                background-repeat: no-repeat;">
                                        </div>
                                        <% } %>
                                    </div>
                                </div>
                            </div>
                        </div>          
                    </li> 
                </script>
                </ul>
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
get_footer();?>

<script>
    $(document).on("click",".res_obog .card-parent",function(e){
        e.preventDefault()
        $(this).next().addClass("is-fadeIn")
        return false
    })
    $(document).on("click","#entry-open",function(){
    $(this).parents(".obog-parent").next().addClass("is-fadeIn")
    })
    $(document).on("click","#entry-close",function(){
        $('.gaku-modal_wrapper').removeClass("is-fadeIn")
    })
</script>