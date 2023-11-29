<?php get_header(); ?>


    <main>
      <!-- company_page_heading -->
      <section class="page_heading policy">
        <div class="inner">
          <h1>
            <span class="text"><small>Policy</small>ポリシー</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/policy/heading_img.jpg')); ?>" alt="企業情報" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->
      
      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li class="bread_custom">ポリシー</li>
      </ul>

      <!-- policy -->
      <section class="policy">
        <div class="inner">
          <div class="sub-page_list">
            <div class="block _01">
              <a href="/policy_privacy/">
                <div class="ttl">プライバシーポリシー</div>
              </a>
            </div>
            <div class="block _01">
              <a href="/policy_antisocial/">
                <div class="ttl">
                  反社会勢力勢力への<br />対応に関する基本方針
                </div>
              </a>
            </div>
            <div class="block _01">
              <a href="/policy_security/">
                <div class="ttl">情報セキュリティ方針</div>
              </a>
            </div>
            <div class="block _02">
              <a href="/policy_gender/">
                <div class="ttl">男女共同参画基本法に<br />基づく開示</div>
              </a>
            </div>
            <div class="block _01">
              <a href="/ir_others_policy/">
                <div class="ttl">ディスクロージャーポリシー</div>
              </a>
            </div>
            <div class="block _02">
              <a href="/policy_career/">
                <div class="ttl">中途採用実績データ</div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- /policy -->
    </main>

    <?php get_footer(); ?>
