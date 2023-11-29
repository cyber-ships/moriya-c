<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>Message</small>代表メッセージ</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/company/heading_img.jpg')); ?>" alt="企業情報" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li><a href="/company/">企業情報</a></li>
        <li>代表メッセージ</li>
      </ul>
      <!-- /breadcrumbs -->

      <!-- message -->
      <section class="company_message">
        <div class="inner">
          <h2 class="ttl_l">ご挨拶<span>Message</span></h2>
          <div class="company_message_img">
            <img
              src="<?php echo esc_url(get_theme_file_uri('/img/company/message/message_syatyou.jpg')); ?>"
              alt="守谷社長"
            />
          </div>

          <div class="company_message_box">
            <p class="company_message_box_copy">
              当社は1950年3月に設立し、荷物用エレベーターを主力に、自社ブランドのエレベーターの設計・開発・製造・据付・保守・修理・リニューアルまでをワンストップで提供する総合エレベーターカンパニーです。<br />
              「信頼と誠実」を社是とし、「安全」「堅牢」「融通性」という基本コンセプトを守りながら、お客様の安心・安全を第一に、質実堅牢な製品つくりで「お客様の声」に答え続けていくことを経営方針としております。<br />
              「信頼と誠実」。一見平凡な言葉ですが、この五文字が、当社の創業以来の社是です。<br />
              「お客様からの要望や依頼に対して誠実に取り組むこと」「品質のよいエレベーターを製作・供給すること」、「故障や閉じ込め事故等が発生した場合は、一層誠実に対応すること」によって、社会からの信頼を得ることが当社の発展につながり、ひいては社会貢献に結びつくという考えでございます。<br />
              荷物用エレベーター・船舶用エレベーターを通じてインフラを担い、社会に貢献してまいります。
            </p>
            <p class="company_message_box_katagaki">
              守谷輸送機工業株式会社<br />代表取締役社長
            </p>
            <p class="company_message_box_name">守谷 貞夫</p>
          </div>
        </div>
      </section>
      <!-- /message -->
    </main>

<?php get_footer(); ?>