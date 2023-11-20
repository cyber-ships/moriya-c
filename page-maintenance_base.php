<?php get_header(); ?>

    <main>
      <section class="page_heading maintenance">
        <div class="inner">
          <h1>
            <span class="text"><small>Service Base</small>サービス拠点</span>
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/heading_img.jpg')); ?>"
                alt="サービス拠点"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../../../index.html">トップページ</a></li>
        <li><a href="../../../maintenance/index.html">メンテンナンス</a></li>
        <li>サービス拠点</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="maintenance_ss_base_title">
        <div class="inner">
          <h2 class="ttl_l">
            全国のサービス拠点
            <span>Service Bases Nationwide</span>
          </h2>
        </div>
      </section>

      <section class="maintenance_ss_base">
        <div class="inner">
          <img
            src="<?php echo esc_url(get_theme_file_uri('/img/maintenance/map.png')); ?>"
            alt="全国のサービス拠点 マップ"
          />
        </div>
      </section>
    </main>
    </main>
    <?php get_footer(); ?>