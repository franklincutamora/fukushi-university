<!-- bottom2 -->
<div class="bottom2">
    <div class="btm2_con">
        <div class="btm2_title">
            <span>Yoshida</span>
            <h2>進学イベントに参加しよう！</h2>
        </div>
            <!-- banner carousel -->

        <div class="nav_wrp">
            <div class="custom-nav_cntr">
                <div class="col_r-half">
                    <div class="custom-nav3">
                        <div class="custom-dots3"></div>
                    </div>
                </div>
            </div>
        </div>

        
            <div class="top_slides-main owl-carousel owl-theme" id="bottom-slider">

                            <?php
                            $week = ["SUN", "MON", "TUE", "WED", "THU", "FRI", "SUT"];

                            $eventHoldingTypes = [
                                'all'  => '学園共通',
                                'part' => '各校・学科別',
                            ];

                            $periodTypes = [
                                'all_day' => '一日開催',
                                'am'      => '午前開催',
                                'pm'      => '午後開催',
                            ];

                            $frontHost = 'https://event.yoshida-g.ac.jp/join';
                            $apiHost   = 'https://event.yoshida-g.ac.jp';
                            $endpoint  = "/entry/api/events/search?date_after=" .
                                date('Y-m-d')."&school_year=2019&school_name=" .
                                urlencode('専門学校北海道福祉・保育大学校') .
                                //urlencode('学校テスト') .
                                "&limit=10&offset=0";

                            $ch = curl_init();
                            curl_setopt($ch, CURLOPT_URL, $apiHost . $endpoint);
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                            curl_setopt($ch, CURLOPT_HTTPHEADER, ['X-YSD: ysd']);
                            $res   = curl_exec($ch);
                            $items = json_decode($res, true);
                            curl_close($ch);
                            ?>

<?php foreach ($items ?? [] as $item) : ?>
                <div class="item">
                    <div class="btm2_box">
                        <a href="<?php echo htmlspecialchars($frontHost . '/event/entry?id=' . $item['id']) ?>" target="_blank" class="btm2_box_link">
                            <div class="btm2_img"<?php if (!$item['image_path']) : ?>
 style="background:url(<?php echo htmlspecialchars($frontHost . '/img/contents/event/no-image.jpg') ?>);"
<?php else: ?>
 style="background:url(<?php echo htmlspecialchars($apiHost . $item['image_path']) ?>);"
<?php endif; ?>>
                                <?php if ($item['has_bus']): ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top/bef.png" alt="" class="bef_img">
                                <?php endif; ?>
                            </div> 
                            <div class="btm2_details">
                                <span class="det_span"><?php echo htmlspecialchars($item['school_year']) ?>年度｜<?php echo htmlspecialchars($item['event_type']['name']) ?></span>
                                <h2><?php if ($item['has_bus']): ?>《無料送迎バス》<?php endif; ?><?php echo htmlspecialchars($item['name']) ?></h2>
                                <div class="det_con">
                                    <span><?php echo date('Y', strtotime($item['date'])) ?></span>
                                    <h3><?php echo date('m.d', strtotime($item['date'])) ?></h3>
                                </div>
                                <div class="det_con2">
                                    [<?php echo $week[date('w', strtotime($item['date']))] ?>] <?php echo $periodTypes[$item['period_type']] ?? '' ?><br>
                                    <?php echo htmlspecialchars(preg_replace('/:00$/', '', $item['begin_time'])) ?>&gt;<?php echo htmlspecialchars(preg_replace('/:00$/', '', $item['end_time'])) ?>
                                </div>
                                <small><i className="material-icons">&#xE80C;</i><?php 
                if ($item['holding_scale'] === 'all') {
                    echo '学園共通';
                } else {
                    echo htmlspecialchars($item['schools'][0]['school']['name'] ?? '');
                }
                 ?></small>
                            </div>
                        </a>
                    </div>
                </div>
<?php endforeach; ?>

            </div>
        <!-- // banner carousel -->

            <a href="https://event.yoshida-g.ac.jp/join/" target="_blank" class="btm2_btn">YOSHIDA 進学イベントサイトへ</a>
    </div>
</div>
<!-- // bottom2 -->