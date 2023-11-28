<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Corporate governance</small>コーポレート・ガバナンス</span
            >
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <ul class="breadcrumbs">
        <li><a href="#">トップページ</a></li>
        <li><a href="../../../ir/index.html">IR情報</a></li>
        <li><a href="../../../ir/library/index.html">IRライブラリ</a></li>
        <li class="bread_custom">コーポレート・ガバナンス</li>
      </ul>

      <!-- ir_library_governance -->
      <section class="library_governance">
        <div class="inner">
          <h2 class="ttl_s">
            <span>■</span>コーポレート・ガバナンスに関する基本的な考え
          </h2>
          <div>
            <p class="library_governance_copy">
              当社は、社是として「信頼と誠実」を掲げ
              、持続的な成長と企業価値の向上の実現を目指して事業活動を行っておりますが、コーポレート・ガバナンスを、株主をはじめ、取引先・従業員など、全てのステークホルダーの利益を守ることであると認識し、そのために、経営の透明性、効率性及び健全性を高めることが重要であると考えております。
            </p>
          </div>

          <h2 class="ttl_s">
            <span>■</span>企業統治の体制の概要及び当該体制を採用する理由
          </h2>
          <div>
            <p class="library_governance_copy">
              当社における企業統治の体制としては、監査役会制度を採用しており、経営の効率性を維持しつつ監督機能の実効性を高めるべく、取締役会、監査役会を中心としたコーポレート・ガバナンス体制を構築しておりますが、取締役会には社外取締役及び社外監査役が出席して経営監視機能を強化しております。
            </p>
          </div>

          <h2 class="ttl_s"><span>■</span>コーポレートガバナンス体制図</h2>
          <div class="library_governance_img">
            <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/library/governance_list.jpg')); ?>" alt="" />
          </div>

          <h2 class="ttl_s"><span>■</span>コーポレート・ガバナンス報告書</h2>
          <div>
          <?php
                  $term_object = get_queried_object();
                  $term_slug = $term_object->slug;
                  $args = array(
                    'post_type' => 'ir_library',
                    'posts_per_page' => 1,
                    'taxonomy' => 'ir_library_category',
                    'term' => $term_slug
                  );
                  $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                  <?php while($the_query->have_posts()): $the_query->the_post(); ?>

            <p class="library_governance_copy">
              当社は東京証券取引所に「コーポレート・ガバナンスに関する報告書
              」を提出しております。
            </p>
            

            <a href="<?php echo get_field('library_pdf'); ?>" target="_blank" class="library_governance_pdf"
              ><?php the_title(); ?></a
            >
            <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
          </div>

          <div class="library_governance_adobe">
            <a href="https://get.adobe.com/jp/reader/" target="_blank"
              ><img src="<?php echo esc_url(get_theme_file_uri('/img/ir/adobe_logo.png')); ?>" alt=""
            /></a>
            <p>
              PDFファイルをご覧になるには最新のAdobe Acrobat
              Readerが必要となります。 Adobe Acrobat
              Readerはアドビシステムズのサイトより無償でダウンロードできます。
            </p>
          </div>
        </div>
      </section>
      <!-- /ir_library_governance -->
    </main>

    <?php get_footer(); ?>
