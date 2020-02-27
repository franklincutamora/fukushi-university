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

<section class="wrp rob-padding-tb">
    <div class="lg_cntr">
        <div class="cntr3">

            <!-- navi menu -->
            <div class="rob-navi-menu-parent">
                <?php
                    wp_nav_menu(
                    array (
                        'theme_location' => 'jukenseinav',
                        'menu' => 'jukenseinav',
                        'container' => 'ul',
                        'menu_class' => 'rob-navi-menu-list'
                        )
                    );
                ?>
            </div>
            <!-- end of navi menu -->

        </div>
        <div class="sm_cntr">

            <!-- gakuhi -->
            <div class="gakuhi">
                <h1 class="rob-title rob-title-uline">
                    <span><?php the_title(); ?></span>
                </h1>
                <?php if( have_rows('juk_box') ): ?>
                    <?php while( have_rows('juk_box') ): the_row(); 
                        // vars
                        $juk_tit = get_sub_field('juk_title');
                        $juk_tit_color = get_sub_field('title_color');
                        $juk_tit_small = get_sub_field('small_title');
                        $juk_cont = get_sub_field('juk_content', false, false);
                        $juk_acc = get_sub_field('juk_accordion');
                        ?>
                        <div class="rob-mb-box">
                            <h3 class="rob-title rob-title-lline">
                                <span class="content-titles"  style="border-color: <?php echo $juk_tit_color; ?> "><?php echo $juk_tit; ?></span>
                                <?php if($juk_tit_small){ ?>
                                    <small><?php echo $juk_tit_small; ?></small>
                                <?php } ?>
                            </h3>
                            <?php echo $juk_cont; ?>
                            <?php if( have_rows('juk_accordion') ): ?>
                                <div class="rob-accordion-section">
                                    <?php while( have_rows('juk_accordion') ): the_row(); 
                                        // vars
                                        $juk_acc_tit = get_sub_field('juk_accordion_title');
                                        $juk_acc_cont = get_sub_field('juk_accordion_content');
                                        ?>
                                        <div class="rob-accordion-box">
                                            <div class="rob-accordion-header">
                                                <a href="#" class="rob-accordion-btn">
                                                    <?php echo nl2br($juk_acc_tit); ?>
                                                    <span><i class="material-icons dp48">chevron_right</i></span>
                                                </a>
                                            </div>
                                            <?php echo $juk_acc_cont; ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!-- end of gakuhi -->

        </div>
    </div>
</section>

<?php
get_footer();
?>