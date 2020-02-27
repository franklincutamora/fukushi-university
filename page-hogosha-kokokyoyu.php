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
            <span><?php the_title(); ?></span>
        </h1>
        <div class="rob-all-stud hogosha">
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

        <div class="lg_cntr">
        <div class="rob-educ-activ hogosha-sec2">
            <h1 class="rob-title">
                <span>就職ガイド</span>
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
        <!-- end of all student section -->
        </div>

        <!-- exp news and twitter parts -->
        <div class="hogosha_page">
            <?php get_template_part( 'template-parts/template', 'exp-news-twit' ); ?>
        </div>
        <!-- end of exp news and twitter parts -->

    
</section>

<?php
get_footer();
?>