<?php 

    if( !is_page( 'jukensei' ) && !is_page( 'shakaijin-saishingaku' ) ){
        ?>
            <!-- bottom -->
            <div class="bottom">
                <div class="btm_con">
                    <h2>学科紹介</h2>
                    <h3>たくさんの笑顔に<br>つながるセカイへ。</h3>
                    <div class="btm_bxes">
                        
                        <div class="btm_box1">
                            <div class="bx_btm">
                                <div class="btm_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img1.jpg" alt="" class="is-wide">
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img1a.jpg" alt="" class="is-wide v-sp"> -->
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rib1.png" alt="">
                                    </figure>
                                </div>
                                <div class="btm_details">
                                    <h4>保育未来学科 <span>２年制</span></h4>
                                    <p>２年間で「保育士」と「幼稚園教諭２種免許」の取得が可能です。３つの姉妹保育園でこどもと触れ合いながら、”すべてのこどもの支えになれる保育者”を目指します。</p>
                                    <a href="<?php echo esc_url(home_url('/')); ?>hoiku/">学科を見る <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="btm_box2">
                            <div class="bx_btm">
                                <div class="btm_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img2.jpg" alt="" class="is-wide">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rib2.png" alt="">
                                    </figure>
                                </div>
                                <div class="btm_details">
                                    <h4>社会福祉学科 <span>４年制</span></h4>
                                    <p>道内唯一、「３福祉士」の国家資格取得を目指すことができます。トータルな人間理解にもとづいて”生きるチカラ”を支援する社会福祉の専門職を目指します。</p>
                                    <a href="<?php echo esc_url(home_url('/')); ?>shakai/">学科を見る <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="btm_box3">
                            <div class="bx_btm">
                                <div class="btm_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img3.jpg" alt="" class="is-wide">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rib3.png" alt="">
                                    </figure>
                                </div>
                                <div class="btm_details">
                                    <h4>介護福祉学科 <span>２年制</span></h4>
                                    <p>高齢者や障がいがある方を対象に日常生活を支援する、介護福祉士の国家試験受験資格を取得。”豊かなこころ・確かな技術・幅広い知識”を兼ね備えた介護福祉士を目指します。</p>
                                    <a href="<?php echo esc_url(home_url('/')); ?>kaigo/">学科を見る <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- // bottom -->
        <?php
    }else{
        ?>
            <!-- bottom -->
            <div class="bottom rob-jukensei-bottom">
                <div class="btm_con">
                    <h3>学科紹介</h3>
                    <div class="btm_bxes">
                        
                        <div class="btm_box1">
                            <div class="bx_btm">
                                <div class="btm_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img1.jpg" alt="" class="is-wide">
                                    <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img1a.jpg" alt="" class="is-wide v-sp"> -->
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rib1.png" alt="">
                                    </figure>
                                </div>
                                <div class="btm_details">
                                    <h4>保育未来学科 <span>２年制</span></h4>
                                    <!-- <p>２年間で「保育士」と「幼稚園教諭２種免許」の取得が可能です。３つの姉妹保育園でこどもと触れ合いながら、”すべてのこどもの支えになれる保育者”を目指します。</p> -->
                                    <a href="<?php echo esc_url(home_url('/')); ?>hoiku/">学科を見る <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="btm_box2">
                            <div class="bx_btm">
                                <div class="btm_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img2.jpg" alt="" class="is-wide">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rib2.png" alt="">
                                    </figure>
                                </div>
                                <div class="btm_details">
                                    <h4>社会福祉学科 <span>４年制</span></h4>
                                    <!-- <p>道内唯一、「３福祉士」の国家資格取得を目指すことができます。トータルな人間理解にもとづいて”生きるチカラ”を支援する社会福祉の専門職を目指します。</p> -->
                                    <a href="<?php echo esc_url(home_url('/')); ?>shakai/">学科を見る <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>
                        <div class="btm_box3">
                            <div class="bx_btm">
                                <div class="btm_img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/btm_img3.jpg" alt="" class="is-wide">
                                    <figure>
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/rib3.png" alt="">
                                    </figure>
                                </div>
                                <div class="btm_details">
                                    <h4>介護福祉学科 <span>２年制</span></h4>
                                    <!-- <p>高齢者や障がいがある方を対象に日常生活を支援する、介護福祉士の国家試験受験資格を取得。”豊かなこころ・確かな技術・幅広い知識”を兼ね備えた介護福祉士を目指します。</p> -->
                                    <a href="<?php echo esc_url(home_url('/')); ?>kaigo/">学科を見る <i class="material-icons">arrow_forward</i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- // bottom -->
        <?php
    }

?>