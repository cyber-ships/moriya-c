<?php get_header(); ?>

    <main>
      <section class="page_heading maintenance">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Periodic inspection</small>定期検査情報</span
            >
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/heading_img.jpg')); ?>"
                alt="定期検査情報"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li><a href="../../../maintenance/index.html">メンテンナンス</a></li>
        <li>定期検査情報</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="maintenance_periodic-inspection">
        <div class="inner">
          <h2 class="ttl_l">定期検査情報<span>Periodic inspection</span></h2>
          <div class="box">
            <p>
              この昇降機の定期検査に関する情報は、国土交通省告示第二百八十三号「昇降機の定期検査報告における検査の項目、事項、方法及び結果の判定基準並びに検査結果表を定める件」に対応するものです。<br />建物所有者・運行管理者、昇降機検査資格者の方は、定期検査に必要な情報をダウンロードしてください。<br />ただし、ダウンロードには次の事項にご同意いただくことが必要です。
            </p>
            <p>
              ■基準書に記載の情報を検査以外の目的に使用しないことに同意する。
            </p>
            <p>
              ■基準書に記載の情報を定期検査の関係者以外の方に開示しないことに同意する。<br />一般の利用者が本情報より知り得た情報を元に、エレベーターを操作又は運転した場合思わぬ事故が起こるおそれがあります。
            </p>
            <p>
              ■
              基準書の記載内容は予告なく変更される場合がありますので、検査実施前に弊社ホームページ（<a
                href="https://moriya-elevator.co.jp/"
                target="_blank"
                >https://moriya-elevator.co.jp/</a
              >）を確認することに同意する。
            </p>
            <div class="btn_wrap02">
              <a
                class="btn type-01"
                href="../technicalinformation/download/index.html"
                ><span>同意する</span></a
              >
              <a class="btn type-01" href="../../../index.html"><span>同意しない</span></a>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/contact_ttl.svg')); ?>" alt="CONTACT" />
          </div>
          <div class="btn_wrap01">
            <a class="btn type-02" href="../../../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
    
    </main>
    <?php get_footer(); ?>