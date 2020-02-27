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

<section class="wrp rob-padding-tb shutsuganshorui-pdng140">
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

            <!-- shutsuganshorui -->
            <div class="shutsuganshorui">
                <h1 class="rob-title rob-title-uline marginbtm48">
                    <span><?php the_title(); ?></span>
                </h1>

                <div class="rob-mb-box">
                <div class="rob-link">
                    <ul class="rob-link-list shutsuganshorui-a-update">
                    <?php if( have_rows('file_link') ): ?>
                        <?php while( have_rows('file_link') ): the_row(); 
                            // vars
                            $file_url = get_sub_field('file_url');
                            $file_text = get_sub_field('file_text');
                            ?>
                            <li><a href="<?php echo $file_url; ?>" target="_blank" rel="noopener"><i class="material-icons dp48 adjust-icon">vertical_align_bottom</i><?php echo $file_text; ?></a></li>
                            
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                </div>
                </div>

                <?php if( have_rows('juk_box') ): ?>
                    <?php while( have_rows('juk_box') ): the_row(); 
                        // vars
                        $juk_tit = get_sub_field('juk_title');
                        $juk_tit_color = get_sub_field('title_color');
                        $juk_tit_small = get_sub_field('small_title');
                        $juk_cont = get_sub_field('juk_content');
                        $juk_acc = get_sub_field('juk_accordion');
                        ?>
                        <div class="rob-mb-box">
                            <h3 class="rob-title rob-title-lline" style="border-color: <?php echo $juk_tit_color; ?> ">
                                <span class="content-titles"><?php echo $juk_tit; ?></span> 
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
                                                    <i class="material-icons dp48">chevron_right</i>
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
            <!-- end of shutsuganshorui -->

        </div>
    </div>
</section>

<?php
get_footer();
?>