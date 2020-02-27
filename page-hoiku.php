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
<div class="clearfix">
<div class="cl_modal_wrp modal_wrp">
    <div class="cl_modal_cntr">
        <div class="cl_modal_bx">
            <small class="close_modal"><i class="material-icons">close</i></small>
            <figure>
                <img src="<?php bloginfo('template_url'); ?>/assets/img/hoiku/mn_icon1.png" alt="hoiku image">
            </figure>
            <h3>資格と仕事</h3>
            <p>こどもたちの“生きるチカラ”を育む職種。保育や幼児教育へのニーズは、年々高まっています。資格と免許のW取得で、保育園や幼稚園、認定こども園など、将来活躍できる場が大きく広がるお仕事です。</p>
            <h4>目指せる資格</h4>
            <div class="mdl_boxes">
                <div class="gap gap-10 gap-10-xs">
                    <div class="md-6 xs-6">
                        <div class="mdl_box bg_pink">
                            <h5>保育士</h5>
                            <p>厚生労働省<br class="view-sp">
                                国家資格</p>
                        </div>
                    </div>
                    <div class="md-6 xs-6">
                        <div class="mdl_box bg_orng">
                            <h5>幼稚園教諭<br>
                                二種免許</h5>
                            <p>短期大学との<br>
                            教育連携により<br class="view-sp">
                            取得可能</p>
                        </div>
                    </div>
                </div>
            </div>
            <span>※卒業時「専門士」の称号を付与</span>
            <div class="mdl_links">
                <div class="gap gap-10 gap-10-xs">
                    <div class="md-6 xs-6">
                        <a href="<?php bloginfo('url'); ?>/hoiku/shikaku/#1">目指せる資格 <i class="material-icons">arrow_forward</i></a>
                    </div>
                    <div class="md-6 xs-6">
                        <a href="<?php bloginfo('url'); ?>/hoiku/shikaku/#2">目指せる仕事 <i class="material-icons">arrow_forward</i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="mn_banner">
    <div class="cntr">
        <div class="mn_banner_cntr">

            <div class="mn_title_box">
                <h3 class="mn_title">Nursery Teaching</h3>
                <h4 class="mn_subtitle fnt_white"><?php the_title(); ?> <span>２年制・定員50名 <small>[職業実践専門課程]</small></span></h4>
            </div>

            <div class="side_title">
                
                <span>大事なことは、</span>
                <span>こどもから学ぶ。</span>
            </div>

            <div class="btn_circle modal_btn">
                <h4>資格と仕事</h4>
                <i class="material-icons">add</i>
            </div>

            <!-- <div class="cnter-text">
                <p>新規撮影</p>
            </div> -->

        </div>
    </div>
</section>

<section class="learning_section">
    <div class="lg_cntr">
        <div class="learning_cntr">

            <div class="concept_bx_wrp">
                <div class="concept_bx1">
                    <h5 class="concept_txt_bg">Learning</h5>
                    <h2>CONCEPT</h2>
                    <h3>
                        <?php echo nl2br(get_field('concept_title')); ?>
                    </h3>
                    <p><?php the_field('concept_content'); ?></p>
                </div>
                <figure class="concept_img1">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hoiku/concept_img1.png" alt="hoiku image" class="is-wide">
                </figure>
                <div class="concept_bx2">
                    <h3><?php echo nl2br(get_field('concept_title_2')); ?></h3>
                    <h4><?php the_field('concept_tag'); ?></h4>
                    <p><?php the_field('concept_content_2', false, false); ?></p>
                </div>
                <figure class="concept_img2">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/hoiku/concept_img2.png" alt="hoiku image" class="is-wide">
                </figure>
            </div>

        </div>
    </div>
</section>

<section class="mn_dep_section">
    <div class="cntr2">
        <div class="mn_dep_cntr">

            <figure class="dep_img1 adjustimg">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/hoiku/dep_img1.png" alt="hoiku image">
            </figure>

            <h3 class="dep_title">この学科の <span>ココ</span>が凄い!</h3>
            <div class="dep_boxes_wp">
                <div class="gap gap-23 gap-10-sm gap-0-xs">
                    <?php if( have_rows('card_content') ): ?>
                        <?php while( have_rows('card_content') ): the_row(); 
                            // vars
                            $dept_card_img = get_sub_field('department_card_image');
                            $dept_card_tag = get_sub_field('department_card_tag');
                            $dept_card_tit = get_sub_field('department_card_title');
                            $dept_card_cont = get_sub_field('department_card_content');

                            ?>

                            <div class="md-3 xs-6 mb-0 mb-30-xs sp-560">
                                <div class="dep_box">
                                    <figure>
                                        <img src="<?php echo $dept_card_img['url']; ?>" alt="<?php echo $dept_card_img['alt']; ?>">
                                    </figure>
                                    <div class="dep_txt">
                                        <span><?php echo $dept_card_tag; ?></span>
                                        <h3><?php echo $dept_card_tit; ?></h3>
                                        <p><?php echo $dept_card_cont; ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="tc">
                <a class="mn_btn" href="<?php bloginfo('url'); ?>/hoiku/shushoku/">就職実績 <i class="material-icons">arrow_forward</i></a>
            </div>

        </div>
    </div>
</section>

<section class="mn_table_section">
    <div class="cntr">
        <div class="mn_table_cntr">

            <figure class="sp_scroll">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/hoiku/sp_scroll.png" alt="hoiku image">
            </figure>
            <h3 class="mn_table_title">タイムテーブル</h3>
            
            <div class="mn_table_box_wp">
                <div class="mn_table_box">
                    <table class="table_box rob_table_box_hoiku">
                        <thead>
                        <tr class="table_head hoi">
                            <th>TIME</th>
                            <th>MON</th>
                            <th>TUE</th>
                            <th>WED</th>
                            <th>THU</th>
                            <th>FRI</th>
                        </tr> 
                        </thead>
                        <tbody>
                            
                            <?php if( have_rows('table_content') ): ?>
                                <?php while( have_rows('table_content') ): the_row(); 
                                    // vars
                                    $start_time = get_sub_field('start_time');
                                    $end_time = get_sub_field('end_time');
                                    $mon_txt = get_sub_field('monday_text');
                                    $tue_txt = get_sub_field('tuesday_text');
                                    $wed_txt = get_sub_field('wednesday_text');
                                    $thurs_txt = get_sub_field('thursday_text');
                                    $fri_txt = get_sub_field('friday_text');

                                    ?>
                                        <tr>
                                            <td class="tb_time">
                                                <?php echo $start_time; ?><br>
                                                    <small class="time_arrow">
                                                        ▼
                                                    </small>
                                                <?php echo $end_time; ?>
                                            </td>
                                            <td><?php echo nl2br($mon_txt); ?></td>
                                            <td><?php echo nl2br($tue_txt); ?></td>
                                            <td><?php echo nl2br($wed_txt); ?></td>
                                            <td><?php echo nl2br($thurs_txt); ?></td>
                                            <td><?php echo nl2br($fri_txt); ?></td>
                                        </tr>

                                <?php endwhile; ?>
                            <?php endif; ?>
                            
                        </tbody>
                    </table>
                </div>
                <div class="mn_table_txt pleft25">
                    <span>放課後はバイトもOK</span>
                    <p>※2年次前期の例。<br>
                    ※タイムテーブルは変更になる場合があります。</p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="mn_dd_section">
    <div class="mn_dd_cntr">
        <h2 class="dd_title">カリキュラム</h2>

        <div class="dd_box_wp">
            <?php if( have_rows('accordion_content') ): ?>
                <?php while( have_rows('accordion_content') ): the_row(); 
                    // vars
                    $acc_tit = get_sub_field('accordion_title');
                    $acc_cont = get_sub_field('accordion_wysywig');

                    ?>
                        <div class="dd_box">
                            <h3 class="dd_box_title dd_btn"><?php echo $acc_tit; ?> <i _ngcontent-krq-c19="" class="material-icons icon-image-preview">keyboard_arrow_down</i></h3>
                            <?php echo $acc_cont; ?>
                        </div>
                        
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        
    </div>
</section> 

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
</div>
<?php
get_footer();       