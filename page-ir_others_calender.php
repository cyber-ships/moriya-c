<?php get_header(); ?>

    <main>
      <!-- _page_heading -->
      <section class="page_heading invertors">
        <div class="inner">
          <h1>
            <span class="text"><small>IR Calendar</small>IR カレンダー</span>
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/ir/stock_info/heading_img.jpg')); ?>"
                alt="IR 情報"
              />
            </picture>
          </h1>
        </div>
      </section>
      <!-- _page_heading -->

      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li><a href="/ir/">IR情報</a></li>
        <li><a href="/ir_others/">その他情報</a></li>
        <li>IR カレンダー</li>
      </ul>

      <!-- ir_others_calender -->
      <section class="ir_others_calender">
        <div class="inner">
          <h2 class="ttl_l">IR Calendar</h2>
          <div class="ir_others_calender_box">
            <div class="ir_others_calender_box_l">
              <p class="ir_others_calender_box_l_title">第1四半期</p>
              <div class="ir_others_calender_box_l_num">
                <div class="ir_others_calender_box_l_num_item">
                  <p>4<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>5<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>6<br />月</p>
                </div>
              </div>
              <div class="ir_others_calender_box_l_gray">
                <div class="ir_others_calender_box_l_gray_content"></div>
                <div class="ir_others_calender_box_l_gray_content">
                  <p class="ir_others_calender_box_l_gray_content_top">
                    <span>●</span>決算発表
                  </p>
                </div>
                <div class="ir_others_calender_box_l_gray_content">
                  <p class="ir_others_calender_box_l_gray_content_bottom">
                    <span>●</span>定時株主総会
                  </p>
                </div>
              </div>
            </div>

            <div class="ir_others_calender_box_l">
              <p class="ir_others_calender_box_l_title">第2四半期</p>
              <div class="ir_others_calender_box_l_num">
                <div class="ir_others_calender_box_l_num_item">
                  <p>7<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>8<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>9<br />月</p>
                </div>
              </div>
              <div class="ir_others_calender_box_l_gray">
                <div class="ir_others_calender_box_l_gray_content"></div>
                <div class="ir_others_calender_box_l_gray_content">
                  <p class="ir_others_calender_box_l_gray_content_top">
                    <span>●</span>第1四半期<br />決算発表
                  </p>
                </div>
                <div class="ir_others_calender_box_l_gray_content"></div>
              </div>
            </div>

            <div class="ir_others_calender_box_l">
              <p class="ir_others_calender_box_l_title">第3四半期</p>
              <div class="ir_others_calender_box_l_num">
                <div class="ir_others_calender_box_l_num_item">
                  <p>10<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>11<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>12<br />月</p>
                </div>
              </div>
              <div class="ir_others_calender_box_l_gray">
                <div class="ir_others_calender_box_l_gray_content"></div>
                <div class="ir_others_calender_box_l_gray_content">
                  <p class="ir_others_calender_box_l_gray_content_top">
                    <span>●</span>第2四半期<br />決算発表
                  </p>
                </div>
                <div class="ir_others_calender_box_l_gray_content"></div>
              </div>
            </div>

            <div class="ir_others_calender_box_l">
              <p class="ir_others_calender_box_l_title">第4四半期</p>
              <div class="ir_others_calender_box_l_num">
                <div class="ir_others_calender_box_l_num_item">
                  <p>１<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>２<br />月</p>
                </div>
                <div class="ir_others_calender_box_l_num_item">
                  <p>３<br />月</p>
                </div>
              </div>
              <div class="ir_others_calender_box_l_gray">
                <div class="ir_others_calender_box_l_gray_content"></div>
                <div class="ir_others_calender_box_l_gray_content">
                  <p class="ir_others_calender_box_l_gray_content_top">
                    <span>●</span>第3四半期<br />決算発表
                  </p>
                </div>
                <div class="ir_others_calender_box_l_gray_content"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="inner">
          <dl class="ir_others_calender_summary">
            <dt>2022年5月中旬</dt>
            <dd>2022年3月期決算発表</dd>
            <dt>2022年6月下旬</dt>
            <dd>定時株主総会</dd>
            <dt>2022年8月中旬</dt>
            <dd>2023年3月期第1四半期決算発表</dd>
            <dt>2022年11月中旬</dt>
            <dd>2023年3月期第2四半期決算発表</dd>
            <dt>2023年2月中旬</dt>
            <dd>2023年3月期第3四半期決算発表</dd>
          </dl>

          <p class="ir_others_calender_summary_copy">
            ※都合により予告なく変更する場合があります。<br
              class="sp"
            />ご了承ください。
          </p>
        </div>
      </section>
      <!-- /ir_others_calender -->
    </main>

    <?php get_footer(); ?>
