<div class="hog_section3">
    <div class="hog_sect_con">
        <div class="sec1">
           <div id="lists_id">
                <?php
                    wp_nav_menu(
                    array (
                        'theme_location' => 'jukenseinav',
                        'menu' => 'jukenseinav',
                        'container' => 'ul',
                        'menu_class' => 'col2 rob-col2',
                        'link_after' => '<i class="material-icons dp48">arrow_forward</i>'
                        )
                    );
                ?>
                <div class="sec_link">
                    <ul>
                        <li><a href="https://twitter.com/hokkaidofukushi" target="_blank">Twitter <span>公式ツイッター</span><i class="material-icons">arrow_forward</i></a></li>
                        <li><a href="<?php bloginfo('url'); ?>/news/">News <span>お知らせ</span> <i class="material-icons">arrow_forward</i></a></li>
                    </ul>
                </div>
           </div>
        </div>
        <div class="sec2">
            <div class="com_box">
                <div class="sec2_title">
                    <span>Experience</span>
                    <h2>見る。知る。体験する。</h2>
                </div>
                <ul class="col2 col2_link">
                    <li><a href="https://event.yoshida-g.ac.jp/join/" target="_blank">受験生向けイベント<i class="material-icons">arrow_forward</i></a></li>
                    <li><a href="https://forms.gle/RqMut36wSN7D4tig9" target="_blank">学校見学<i class="material-icons">arrow_forward</i></a></li>
                    <li><a href="https://bit.ly/2V5PsUv" target="_blank">進学相談<i class="material-icons">arrow_forward</i></a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>campus/">キャンパスライフ<i class="material-icons">arrow_forward</i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>