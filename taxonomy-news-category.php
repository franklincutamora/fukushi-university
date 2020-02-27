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

<?php
    $news_cat_slug = get_queried_object()->slug;
    $news_cat_name = get_queried_object()->name;
?>

<div class="news_page">
    <div class="news_con">
        <h2>News</h2>
            <div class="rob-news-select-cat">
                <div id="rob_selected_news">
                    <span>
                        <?php echo $news_cat_name; ?>
                    </span>
                    <i class="material-icons dp48">chevron_right</i>
                </div>
                <ul id="rob_news_cat_sel">
                    <li><a href="#" data-val="<?php bloginfo('url'); ?>/news" class="news_drop_item">すべて</a></li>
                    <?php
                        $terms = get_terms( 'news-category', array(
                            'orderby'    => 'id',
                            'order' => 'ASC',
                            'hide_empty' => 0,
                            'taxonomy' => 'news-category'
                        ) );
                        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                            foreach ( $terms as $term ) { ?>
                            
                            <li>
                                <a href="#" data-val="<?php echo get_category_link( $term->term_id ); ?>" class="news_drop_item">
                                    <?php echo $term->name; ?>
                                </a>
                            </li>
                            <?php }
                        }
                    
                    ?>
                </ul>
            </div>
   
        

        <div class="news_parent">
            <?php
                global $post;
                $args = array(
                    'paged' => $paged,
                    'posts_per_page' => 6, 
                    'orderby' => 'date', 
                    'order' => 'DESC', 
                    'post_type' => 'news',
                    'tax_query' => array(
                        array(
                                'taxonomy' => 'news-category',
                                'field' => 'slug',
                                'terms' => $news_cat_slug
                        ),
                    ),
                );
                $my_query = new WP_Query($args);
                $max_num_pages = $my_query->max_num_pages;
            ?>
            <?php if( $my_query -> have_posts() ) : while($my_query -> have_posts()) : $my_query -> the_post(); ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('md-12 xs-12 item'); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news_lists">
                            <div class="news_date">
                                <?php the_time('Y/m/d'); ?>
                            </div>
                            <div class="news_category">
                                <?php
                                    $terms = get_the_terms( $post->ID , 'news-category' );
                                    if(is_array($terms) || is_object($terms)){
                                        foreach ( $terms as $term ) {
                                        echo $term->name;
                                        }
                                    }
                                ?> 
                            </div>
                            <div class="news_content">
                                <?php the_content(); ?>
                            </div>
                            <i class="material-icons">arrow_forward</i>
                        </div>
                    </a>
                </div>
            <?php endwhile; endif; ?>
        </div>

        <?php wp_pagination(); ?>

    </div>
</div>

<?php
get_footer(); ?>