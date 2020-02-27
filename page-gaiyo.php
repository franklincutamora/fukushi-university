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

<div class="jhn_title_wrp">
    <div class="cntr">
        <h2 class="jhn_title">学校概要</h2>
    </div>
</div>


    <?php the_content(); ?>


<?php
get_footer();