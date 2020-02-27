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

<section class="wrp rob-padding-t">
    

        <!-- all student section -->
        <h1 class="rob-title">
            <span class="fweight600"><?php the_title(); ?></span>
        </h1>
        <div class="rob-all-stud shakaijin">
            <div class="cntr">
                <div class="rob-stud-wrp">
                    <div class="rob-stud-box">
                        <h3 class="rob-title rob-title-stud fyumin">
                            <?php echo nl2br(get_field('page_title')); ?>
                        </h3>
                        <p class="rob-desc rob-desc-stud">
                            <?php the_field('page_content'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg_cntr">
        <div class="rob-educ-activ shakaijin-sec2 noborder pdngbtm120">
            <h1 class="rob-title mbtm30">
                <span class="fweight600">進路ガイド</span>
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
        <div class="rob-senior-stud">
            <div class="cntr">
                <h1 class="rob-title mrginbtm70">
                    <span>社会人から入学した先輩たち</span>
                </h1>
                <ul class="rob-senior-stud-list">
                    <li class="adjust-pdng minheight-default">
                        <div class="gap gap-20 gap-0-xs">
                            <div class="md-4 xs-12">
                                <div class="rob-senior-stud-img default-width">
                                    <div class="stud-img-cont">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shakaijin/img_shakaijin04.png" alt="" class="is-wide">
                                    </div>
                                    <div class="stud-img-txt btm31">
                                        <h4 class="stud-dept">保育未来学科</h4>
                                        <h3 class="stud-name">長山 穂乃香<small>さん</small></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="md-8 xs-12">
                                <div class="rob-senior-stud-cont p-percent">
                                    <h3 class="rob-senior-tit lheight39">
                                    この先長く働くためにも、<br>
                                    国家資格を取得したいと強く思いました。
                                    </h3>
                                    <p class="rob-desc lheight28">
                                    以前はアパレル業界で働いていましたが、自分の本当にやりたいことは何だろう？と考え、こどもに携わる仕事がしたい、その中でも、支援が必要なこどもたちのサポートがしたいと思い、福祉分野にも力を入れているこの学校を選びました。数年前から手話の教室にも通っていて、学校で手話が学べるのも知識を増やせて良いなと感じた部分です。再進学に不安はありましたが、この先、長く働ける仕事をと考えた時に、専門性があること、そして国家資格が何より強みになるかなと感じています。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="isBlue minheight-default">
                        <div class="gap gap-20 gap-0-xs">
                            <div class="md-4 xs-12">
                                <div class="rob-senior-stud-img default-width">
                                    <div class="stud-img-cont">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shakaijin/img_shakaijin05.png" alt="" class="is-wide">
                                    </div>
                                    <div class="stud-img-txt btm31">
                                        <h4 class="stud-dept">社会福祉学科</h4>
                                        <h3 class="stud-name">伊藤 拓磨<small>さん</small></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="md-8 xs-12">
                                <div class="rob-senior-stud-cont">
                                    <h3 class="rob-senior-tit lheight39">
                                    3つの国家資格、<br>
                                    ゆくゆくはケアマネジャーの資格取得も。
                                    </h3>
                                    <p class="rob-desc lheight28">
                                    調理系の専門学校に進学後、社会に出たのですが、小さな頃、おばあちゃん子だったこともあり、祖母の介護の手助けになればとヘルパー2級の資格を取り、デイサービスに勤めました。そこで働くうちに物足りなくなり、3つの国家資格を取得したくYoshidaに入学しました。入学前は、勉強についていけるか、クラスに馴染めるかといった不安はありましたが、授業はていねいで分かりやすく、クラスメイトはみんな気軽に話しかけてくれ、不安はすぐに解消されました。Yoshidaに進学を考えている皆さん、不安と同じくらい、楽しいこともあります。夢を叶えるために、頑張ってください！
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="isGreen minheight-default">
                        <div class="gap gap-20 gap-0-xs">
                            <div class="md-4 xs-12">
                                <div class="rob-senior-stud-img default-width">
                                    <div class="stud-img-cont">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/shakaijin/img_shakaijin06.png" alt="" class="is-wide">
                                    </div>
                                    <div class="stud-img-txt btm31">
                                        <h4 class="stud-dept">介護福祉学科</h4>
                                        <h3 class="stud-name">荒木 恵梨<small>さん</small></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="md-8 xs-12">
                                <div class="rob-senior-stud-cont p-percent">
                                    <h3 class="rob-senior-tit lheight39">
                                    目の前の課題をひとつずつクリアして、<br>
                                    知識を吸収する毎日です。
                                    </h3>
                                    <p class="rob-desc lheight28">
                                    以前、医療事務として働いていた時に高齢者の方と関わらせていただく機会が多く、私にもっとできることはないか？と考えるようになり、そこから福祉への興味や、介護の知識や技術を身につけたいと思うようになりました。Yoshidaは通いやすく、介護のほかに姉妹校との連携授業があって、幅広い知識が得られると思ったのが進学の決め手です。一度社会に出てから再進学することは勇気も必要ですし、不安もあると思います。でもやりたいと思った時が新しいスタートを切るチャンス。頑張ってください。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- end of all student section -->
        </div>

        <!-- university event -->
        <?php get_template_part( 'template-parts/template', 'dept-intro' ); ?>
        <!-- end of university event -->

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

    
</section>

<?php
get_footer();
?>