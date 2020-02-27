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

<div class="news_page">
    <div class="news_con">
        <h2>News</h2>

        <div class="single_content">
            <h3 class="title"><?php the_title(); ?></h3>
            <div class="post-date">
                <?php echo get_the_date( 'Y/m/d', $post_id ); ?> |
                <?php
                    $terms = get_the_terms( $post->ID, 'news-category' );
                    if(count($terms) > 0) :
                        foreach ( $terms as $term ) { ?>
                            <span>
                                <?php echo $term->name; ?>
                            </span>
                <?php } ?>
                    <?php else: ?>
                        <span>
                            Uncategorized
                        </span>
                    <?php endif; ?>
            </div>
            <div class="post-content">
                <div class="contents">
                    <p>
                    <?php the_content(); ?>
                    </p>
                </div>
                <div class="featured-img">
                    <?php if(has_post_thumbnail()): ?>
                        <img src="<!-?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="is-wide p_img">
                    <?php else: ?>
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/thumb.jpg" alt="" class="is-wide">
                    <?php endif; ?>
                </div>

                <a href="<?php echo esc_url(home_url('/')); ?>news/" class="back_btn">一覧に戻る  <i className="material-icons">arrow_forward</i></a>
                
            </div>
        </div> <!-- //single_content -->
       
				
    </div> <!-- //news_con -->
</div> <!-- // news_page -->

<?php
get_footer(); ?>