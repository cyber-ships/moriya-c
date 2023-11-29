<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading company">
        <div class="inner">
          <h1>
            <span class="text"><small>IR Library </small>IRライブラリ</span>
            <picture>
              <img src="<?php echo esc_url(get_theme_file_uri('/img/ir/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>
      <!-- company_page_heading -->

      <ul class="breadcrumbs">
        <li><a href="/">トップページ</a></li>
        <li><a href="/ir/">IR情報</a></li>
        <li>IRライブラリ</li>
      </ul>

      <!-- ir_library -->
      <section class="ir_library">
        <div class="inner">
          <h2 class="ir_library_title">最新情報</h2>
          <div class="ir_info">
            <ul>
            <?php 
                $query = new WP_Query(array(
                  'post_type' => "ir_library",
                  'posts_per_page' => 1,
                  'paged' => get_query_var('paged')
                ));
                if($query->have_posts()){
                  while($query->have_posts()){
                    $query->the_post();
              ?>
              <li>
                <dl>
                  <dt>
                    <span class="date"><?php echo get_field('library_date'); ?></span>

                    <?php if(is_object_in_term($post->ID,'ir_library_category','library_cat-01')): ?>
                      <span class="cat">決算短信</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-02')) : ?>
                      <span class="cat">決算説明</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-03')) : ?>
                      <span class="cat">有価証券</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-04')) : ?>
                      <span class="cat">株主総会</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-05')) : ?>
                      <span class="cat">その他</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-06')) : ?>
                      <span class="cat">適時開示</span>
                    <?php elseif(is_object_in_term($post->ID,'ir_library_category','library_cat-07')) : ?>
                      <span class="cat">ガバナンス</span>
                    <?php endif; ?>

                  </dt>
                  <dd>
                    <a
                      class="pdf"
                      href="<?php echo get_field('library_pdf'); ?>"
                      target="_blank"
                      ><?php the_title(); ?></a
                    >
                  </dd>
                </dl>
              </li>
              <?php
                }
                }
                wp_reset_postdata();
              ?>
            </ul>
          </div>

          <div class="ir_library_box">
            <div class="ir_library_box_content">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-01'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
              <p class="ir_library_box_content_title">決算短信</p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a
                href="<?php echo get_field('library_pdf'); ?>"
                target="_blank"
                class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-01','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >決算短信一覧</a
                >
              </div>
              
              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="ir_library_box_content">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-02'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
              <p class="ir_library_box_content_title">決算説明資料</p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a href="<?php echo get_field('library_pdf') ?>" class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-02','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >決算説明資料一覧</a
                >
              </div>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
            
            <div class="ir_library_box_content">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-03'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>
              <p class="ir_library_box_content_title">適時開示情報</p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a href="<?php echo get_field('library_pdf'); ?>" class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-03','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >適時開示情報一覧</a
                >
              </div>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="ir_library_box_content">

            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-04'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <p class="ir_library_box_content_title">
                有価証券報告書等法定開示資料
              </p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a href="<?php echo get_field('library_pdf'); ?>" class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-04','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >有価証券報告書等法定開示資料一覧</a
                >
              </div>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="ir_library_box_content">

            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-05'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <p class="ir_library_box_content_title">IR資料</p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a href="<?php echo get_field('library_pdf'); ?>" class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-05','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >IR資料一覧</a
                >
              </div>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
            
            <div class="ir_library_box_content">

            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-06'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <p class="ir_library_box_content_title">株主総会関連資料</p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a href="<?php echo get_field('library_pdf'); ?>" class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-06','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >株主総会関連資料一覧</a
                >
              </div>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="ir_library_box_content">

            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'ir_library',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'ir_library_category',
                    'field' => 'slug',
                    'terms' => 'library_cat-07'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <p class="ir_library_box_content_title">
                コーポレート・ガバナンス一覧
              </p>
              <p class="ir_library_box_content_date"><?php echo get_field('library_date'); ?></p>
              <a href="<?php echo get_field('library_pdf'); ?>" class="ir_library_box_content_pdf"
                ><?php the_title(); ?><span
                  ><img
                    src="<?php echo esc_url(get_theme_file_uri('/img/icon/arrow-r-02_black.svg')); ?>"
                    alt="" /></span
              ></a>
              <div class="library_flex">
                <a
                  href="<?php echo esc_url(get_term_link('library_cat-07','ir_library_category')) ?>"
                  class="ir_library_box_content_link"
                  >コーポレート・ガバナンス報告書一覧</a
                >
              </div>
            </div>

            <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
          </div>

          <div class="ir_library_adobe">
            <a href="https://get.adobe.com/jp/reader/" target="_blank"
              ><img src="<?php echo esc_url(get_theme_file_uri('/img/ir/adobe_logo.png')); ?>" alt=""
            /></a>
            <p>
              PDFファイルをご覧になるには最新のAdobe Acrobat
              Readerが必要となります。 Adobe Acrobat
              Readerはアドビシステムズのサイトより無償でダウンロードできます。
            </p>
          </div>

          <div class="btn_wrap05">
            <a class="btn type-05" href="/ir_finance_info/"
              ><span>業績・財務情報</span></a
            >
            <a class="btn type-05" href="/ir/"
              ><span>IR情報 </span></a
            >
            <a class="btn type-05" href="/ir_stock_info/"
              ><span>株式情報</span></a
            >
            <a class="btn type-05" href="/ir_others/"
              ><span>その他情報</span></a
            >
            <a class="btn type-05" href="/ir_notice/"
              ><span>電子公告</span></a
            >
          </div>
        </div>
      </section>
      <!-- /ir_library -->
    </main>

    <?php get_footer(); ?>
