<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading youkou">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Recruit Message</small>応募者へのメッセージ</span
            >
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/assets/img/recruit/heading_img.jpg')) ?>"
                alt="製品紹介"
              />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li><a href="/recruit/">採用情報</a></li>
        <li>応募者へのメッセージ</li>
      </ul>

      <!-- recruit_message -->
      <section class="recruit_message">
        <div class="inner">
          <h2 class="recruit_message_title">
            応募者の皆さまへ<br /><span>Message</span>
          </h2>
          <div class="recruit_message_img">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/recruit/message/message.png')); ?>" alt="" />
          </div>
          <p>私たち守谷輸送機工業は創業70年を超える荷物用・船舶用エレベーターの総合メーカーです。<br>
            国内トップシェアを誇る守谷エレベーターはオーダーメイド等お客様のニーズを柔軟に対応し、｢設計｣｢製造｣｢施工｣｢メンテナンス｣まで一貫したトータルサポートの提供が可能です。<br><br>
            全国各地の物流倉庫や工場、また冷凍・冷蔵倉庫等で活躍しており、昨今のEC市場規模の拡大により、守谷エレベーターも増加の一途をたどっています。<br><br>
            私たち守谷輸送機工業はこの成長を止めることなく走り続けます。<br>
            2022年に東京証券取引所市場第二部（現スタンダード市場）に上場を果たし、今後、荷物用エレベーター業界のトップ地位を強化すべく、新たなステージでともに走りゆく仲間を求めています。<br><br>
            「信頼と誠実」新入社員から社長まで創業以来この社是のもと、今日まで会社を支えてきた先輩達とともに「自らの成長」と「会社の成長」を創ってゆきましょう。<br>
            失敗する事を恐れず新しいことに挑戦する主体的に周りと協力して目標達成を目指す変化に対応できる柔軟さで成長し続ける自身のその一歩が自らの成長となり、それは会社の成長に直結します。<br><br>
            これからの日本の将来と当社の発展を支える若い力と発想力、そしてチャレンジスピリットに期待しています。</p>
        </div>
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/contact_ttl.svg')); ?>" alt="CONTACT" />
          </div>
          <p>
            エントリーに関しては、<br
              class="sp"
            />お問合わせフォームよりお問合わせください。
          </p>
          <div class="btn_wrap01">
            <a class="btn type-02" href="/contact/"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
      <!-- /recruit_message -->
    </main>

    <?php get_footer(); ?>
