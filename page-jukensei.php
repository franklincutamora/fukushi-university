<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage FUKUSHI UNIVERSITY
 * @since FUKUSHI UNIVERSITY 1.0
 */
get_header();
?>
<div class="clearfix">
<section class="wrp rob-padding-t">
    

        <!-- all student section -->
        <h1 class="rob-title">
            <span><?php the_title(); ?></span>
        </h1>
        <div class="rob-all-stud">
            <div class="cntr">
                <div class="rob-stud-wrp">
                    <div class="rob-stud-box">
                        <h3 class="rob-title rob-title-stud">
                            <?php echo nl2br(get_field('page_title')); ?>
                        </h3>
                        <p class="rob-desc rob-desc-stud">
                            <?php the_field('page_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of all student section -->
        <div class="lg_cntr">
        <!-- educational activities -->
        <div class="rob-educ-activ">
            <h1 class="rob-title">
                <span>みんなの進学活動</span>
            </h1>
            <div class="cntr">
                <div class="gap gap-30 gap-0-xs">
                    <?php if( have_rows('middle_content') ): ?>
                        <?php while( have_rows('middle_content') ): the_row(); 
                            // vars

                            $middle_body = get_sub_field('middle_body', false, false);

                            ?>
                            <?php echo $middle_body; ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- end of educ activities -->
        </div> <!-- end of lg_cntr -->


        <!-- university event -->
        <?php get_template_part( 'template-parts/template', 'university-event' ); ?>
        <!-- end of university event -->
       

        <!-- events application and entrance -->
        <div class="rob-events-app">
            <h3 class="rob-title rob-title-tag"><span>日程の一例をご紹介</span></h3>
            <h1 class="rob-title">
                <span>イベント参加～出願・入学</span>
            </h1>
            <div class="rob-timeline-wrapper">
                <!-- <ul class="rob-timeline-list">
                    <span class="rob-timeline-line"></span>
                    <li>
                        <div class="rob-timeline-box rob-timeline-box-first">
                            <h4 class="rob-timeline-num">START</h4>
                            <div class="rob-timeline-cont">
                                <h3 class="rob-timeline-tit">進学イベントに<br>参加しよう</h3>
                                <p class="rob-timeline-desc">
                                    参加したい・できるイベントを選んで申し込み。わからないことを質問したり、学校の雰囲気などを体感してみよう。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rob-timeline-box">
                            <h4 class="rob-timeline-num">01</h4>
                            <div class="rob-timeline-cont">
                                <h3 class="rob-timeline-tit">本校への出願</h3>
                                <p class="rob-timeline-desc">
                                   ■AO特待入学<br>
                                   AOエントリー受付後、必要書類の提出やAOセミナー・AO面談を受け、出願許可後に出願となります。<br><br>
                                   ■推薦入学、一般入学、社会人・高校卒業者入学<br>
                                   WEB（インターネット）出願を使って出願書類を準備し、送付又は持参してください。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rob-timeline-box">
                            <h4 class="rob-timeline-num">02</h4>
                            <div class="rob-timeline-cont">
                                <h3 class="rob-timeline-tit">
                                    入学試験・<br>
                                    特待生試験
                                </h3>
                                <p class="rob-timeline-desc">
                                    入試区分毎の試験を実施します。受験票は、WEB出願マイページから自身で印刷し、試験当日持参してください。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rob-timeline-box">
                            <h4 class="rob-timeline-num">03</h4>
                            <div class="rob-timeline-cont">
                                <h3 class="rob-timeline-tit">選考結果通知</h3>
                                <p class="rob-timeline-desc">
                                    入学選考日から10日以内（土・日曜・祝祭日を除く）に郵送で選考結果を通知します。電話等でのお問い合わせには応じていませんので、ご了承ください。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rob-timeline-box">
                            <h4 class="rob-timeline-num">04</h4>
                            <div class="rob-timeline-cont">
                                <h3 class="rob-timeline-tit">
                                    合格・学費<br>
                                    納入手続き
                                </h3>
                                <p class="rob-timeline-desc">
                                    選考結果と併せて入学手続きに関する書類を送付します。送付書類に記載された指定期日までに指定金額をお振込みください。
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="rob-timeline-box rob-timeline-box-last">
                            <h4 class="rob-timeline-num">GOALS</h4>
                            <div class="rob-timeline-cont">
                                <h3 class="rob-timeline-tit">本校入学</h3>
                                <p class="rob-timeline-desc">
                                    教科書代や諸経費については、入学前にお支払いいただきます。4月上旬に入学式を行います。入学式の翌日以降に入学ガイダンスを実施します。詳細は3月上旬に文書にて案内します。
                                </p>
                            </div>
                        </div>
                    </li>
                </ul> -->
                <?php the_field("juken_middle_content"); ?>
            </div>
        </div>
        <!-- end of events application -->

        <!-- university event -->
        <?php get_template_part( 'template-parts/template', 'dept-intro' ); ?>
        <!-- end of university event -->

        <!-- news and twitter parts -->
        <?php get_template_part( 'template-parts/template', 'news-twitter' ); ?>
        <!-- end of news and twitter parts -->

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
</section>

<?php
get_footer();
?>