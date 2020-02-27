<!-- bottom3 -->
<div class="bottom3">
    <div class="btm3_con">
        <div class="btm3_parent gap gap-0 gap-0-xs">
            <div class="btm3_box1 md-6 xs-12">
                <div class="rob-btm3_box1">
                    <div class="rob-btm3_parent">
                    <h2>News</h2>
                    <?php 
                    // news query
                    $news_query = new WP_Query(array('post_type'=>'news', 'post_status'=>'publish', 'posts_per_page'=>6)); ?>
                    
                    <?php if ( $news_query->have_posts() ) : ?>
                    
                    <ul class="news_parent">
                    
                        <!-- the loop -->
                        <?php while ( $news_query->have_posts() ) : $news_query->the_post(); ?>
                            <li id="post-<?php the_ID(); ?>" <?php post_class('item'); ?>>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="news_lists">
                                        <div class="news_date">
                                            <h4><?php the_time('Y/m/d'); ?></h4>
                                        </div>
                                        <div class="news_category">
                                            <p><?php
                                                $terms = get_the_terms( $post->ID , 'news-category' );
                                                foreach ( $terms as $term ) {
                                                echo $term->name;
                                                }
                                            ?></p>
                                        </div>
                                        <div class="news_content">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                        <!-- end of the loop -->
                    </ul>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <h4 class="rob-no-post"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h4>
                    <?php endif; ?>
                    <a href="<?php bloginfo('url'); ?>/news/" class="btm3_btn">一覧を見る</a>
                    </div>
                </div>
            </div>
            <div class="btm3_box2 md-6 xs-12">
                    <div class="rob-twit-box">
                    <div class="tweet_box">
                        <a class="twitter-timeline" href="https://twitter.com/hokkaidofukushi">Tweets by hokkaidofukushi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!-- // bottom3 -->