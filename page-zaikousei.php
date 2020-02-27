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

<div class="zaik_page">
        <h2 class="h2_zaik_title"><?php the_title(); ?></h2>
        <div class="zaik_con">
            <div class="zaik_box">
                <h3 class="h3_zaik_title"> <?php the_field("zaikousei_title"); ?></h3>
                <div class="bx_zaik">
                    <?php the_field("zaikousei_content"); ?>
                </div>
            </div>
        </div>
</div>

<!-- news and twitter parts -->
<?php get_template_part( 'template-parts/template', 'news-twitter' ); ?>
<!-- end of news and twitter parts -->

<div class="zaik_box2">
    
    <?php the_field("zaikousei_bottom_content"); ?>

    
    
            <?php if( have_rows('zaikousei_list') ): ?>
            <h3 class="h3_zaik_title">各種書式ダウンロード</h3>
    <div class="zaik_box">
        <ul>
                <?php while( have_rows('zaikousei_list') ): the_row(); 
                    // vars
                    $title = get_sub_field('title');
                    $file = get_sub_field('file');
                    ?>
                    <li><a href="<?php echo $file['url']; ?>" target="_blank"><i class="material-icons">file_download</i><?php echo $title; ?></a></li>
                <?php endwhile; ?>
                </ul>
    </div>
            <?php endif; ?>
       

    <?php the_field('zaikousei_content_2'); ?>
    
    
</div>

<?php
get_footer(); ?>
