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

<section class="shi_banner">
    <div class="cntr">

        <div class="bnr_title_wp">
            <h3 class="bnr_title"><span>Facility</span> <small>施設・設備</small></h3>
        </div>

    </div>
</section>

<section class="bnr_box_wrp">
    <div class="bnr_box">
        <h3>充実の設備で<span>実践力を身につける</span></h3>
        <p>福祉や保育の現場を再現し、実践に近い形で学べる「充実した施設・設備」が整っています。将来必要とされる実践力が身につくのも、より現場に近い環境で学ぶから。働く姿も想像しやすいので、なりたい職業もしっかりとイメージできます。</p>
        <!-- <a class="bnr_btn" href="#">フロアマップ <i class="material-icons">launch</i></a> -->
    </div>
</section>

<section class="facility_wrp">
    <div class="cntr2">

        <div class="fac_cntr">
            <?php if( have_rows('facility_field_wrap') ): ?>
                <div class="gap gap-25 gap-10-xs">
                    <?php while( have_rows('facility_field_wrap') ): the_row(); 

                        // vars
                        $image = get_sub_field('facility_image');
                        $content = get_sub_field('facility_content');
                        $title = get_sub_field('facility_title');

                        ?>

                        <div class="md-3 xs-6 mb-60 mb-30-xs">
                            <div class="fac_box">
                                <figure class="fac_img">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="is-wide"/>
                                    <i class="material-icons">add</i>
                                </figure>
                                <h3><?php echo $title; ?></h3>
                                <p><?php echo $content; ?></p>
                            </div>

                            <div class="fac_modal_wrp">
                                <div class="fac_modal_cntr">
                                    <div class="fac_modal_box">
                                        <div class="close_modal"><i class="material-icons">close</i></div>
                                        <div class="fac_modal_img" style='background: url("<?php echo $image['url']; ?>") no-repeat center top/cover;'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>
<div class="hogosha_page">
    <!-- exp news and twitter parts -->
    <?php get_template_part( 'template-parts/template', 'exp-news-twit' ); ?>
    <!-- end of exp news and twitter parts -->
</div>

<script>
   //shisetsu
   $('.fac_box').click(function () { 
        $(this).next('.fac_modal_wrp').addClass('view-modal');
    });
    $('.close_modal').click(function () { 
        $('.fac_modal_wrp').removeClass('view-modal');
    });
</script>

<?php
get_footer(); ?>