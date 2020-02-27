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

<div class="link_page">
    <div class="link_con">
        <h2>関連リンク</h2>
        <ul>
            <li>関連団体</li>
            <?php if( have_rows('links') ): ?>
                <?php while( have_rows('links') ): the_row(); 
                    // vars
                    $link_url = get_sub_field('link_url');
                    $link_text = get_sub_field('link_text');
                    ?>
                    <li><a href="<?php echo $link_url; ?>" target="_blank" rel="noopener"><?php echo $link_text; ?><i class="material-icons">open_in_new</i></a></li>
                    
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>

<?php
get_footer(); ?>
