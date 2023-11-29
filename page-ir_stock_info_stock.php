<?php get_header(); ?>

    <main>
      <!-- _page_heading -->
      <section class="page_heading invertors">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Stock Information</small>株式基本情報</span
            >
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
        <li><a href="/ir_stock_info/">株式情報</a></li>
        <li>株式基本情報</li>
      </ul>

      <!-- ir_stock_info_detail -->
      <section class="ir_stock_detail">
        <div class="inner">
          <h2 class="ir_stock_detail_title">
            株式メモ<span>Stock Information</span>
          </h2>

          <dl class="ir_stock_detail_summary">
            <dt>証券コード</dt>
            <dd>6226</dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>上場証券取引所</dt>
            <dd>東京証券取引所スタンダード市場</dd>
          </dl>
          <dl class="ir_stock_detail_summary">
            <dt>事業年度</dt>
            <dd>4月1日から翌年3月31日まで</dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>定時株主総会</dt>
            <dd>毎事業年度末日から3か月以内</dd>
          </dl>
          <dl class="ir_stock_detail_summary">
            <dt>基準日</dt>
            <dd>毎年3月31日</dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>余剰金の配当の基準日</dt>
            <dd>毎年3月31日、毎年9月30日</dd>
          </dl>
          <dl class="ir_stock_detail_summary">
            <dt>1単元の株式数</dt>
            <dd>100株</dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>株主名簿管理人</dt>
            <dd>
              三菱UFJ信託銀行株式会社<br />東京都千代田区丸の内一丁目4番5号
            </dd>
          </dl>
          <dl class="ir_stock_detail_summary">
            <dt>事務取扱場所</dt>
            <dd>
              東京都千代田区丸の内一丁目4番5号<br>
              三菱UFJ信託銀行株式会社 証券代行部
            </dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>郵便物送付先・電話照会先</dt>
            <dd>
              〒137-8081 新東京郵便局私書箱第29号<br>
              三菱UFJ信託銀行株式会社 証券代行部<br>
              電話：0120-232-711（フリーダイヤル）
            </dd>
          </dl>
          <dl class="ir_stock_detail_summary">
            <dt>公告掲載方法</dt>
            <dd>
              電子公告により行います。<br>
              公告掲載URL：<a href="https://moriya-elevator.co.jp/ir/notice/" target="_blank">https://moriya-elevator.co.jp/</a><br>
              やむを得ない事由により電子公告ができない場合は、日本経済新聞に掲載して行います。
            </dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>株主に対する特典</dt>
            <dd>該当事項はありません</dd>
          </dl>
        </div>
      </section>

      <section class="ir_stock_detail">
        <div class="inner">
          <h2 class="ir_stock_detail_title">
            株式の状況<span>Stock Situation</span>
          </h2>

          <dl class="ir_stock_detail_summary">
            <dt>発行可能株式総数</dt>
            <dd>39,200,000株</dd>
          </dl>
          <dl class="ir_stock_detail_summary bgc_stock_gray">
            <dt>発行済株式総数</dt>
            <dd>17,489,000株（2023年9月現在）</dd>
          </dl>
        </div>
      </section>
      <!-- /ir_stock_info_detail -->
    </main>

    <?php get_footer(); ?>
