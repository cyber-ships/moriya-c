<?php get_header(); ?>

    <main>
      <!-- company_page_heading -->
      <section class="page_heading youkou">
        <div class="inner">
          <h1>
            <span class="text"><small>Interview</small>インタビュー</span>
            <picture>
              <img
                src="<?php echo esc_url(get_theme_file_uri('/assets/img/recruit/heading_img.jpg')); ?>"
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
        <li><a href="/recruit_work/">社員紹介</a></li>
        <li><?php the_title(); ?></li>
      </ul>

      <!-- recruit_work_staff -->
      <section class="recruit_work_staff">
        <div class="inner">
        <?php
                  $term_object = get_queried_object();
                  $term_slug = $term_object->slug;
                  $args = array(
                    'post_type' => 'recruit_work',
                    'posts_per_page' => 1,
                    'taxonomy' => 'recruit_works_category',
                    'term' => $term_slug
                  );
                  $the_query = new WP_Query($args);
                ?>
                <?php if($the_query->have_posts()): ?>
                <?php while($the_query->have_posts()): $the_query->the_post(); ?>

          <h2 class="ttl_l"><?php the_title(); ?><br>
            <span><?php echo get_field('recruit_date'); ?></span></h2>

          <div class="recruit_work_staff_block">
            <div class="block">
              <div class="block-img">
                <picture>
                  <img src="<?php echo get_field('recruit_img1'); ?>" alt="" />
                </picture>
              </div>
              <div class="block-cnt">
                <h2 class="ttl">Q.入社を希望した理由やきっかけは？</h2>
                <p class="staff_mb"><?php echo get_field('recruit_q1'); ?></p>
                <h2 class="ttl">Q.どのようなお仕事をされていますか？</h2>
                <p><?php echo get_field('recruit_q2'); ?></p>
              </div>
            </div>
            <div class="block">
              <div class="block-img">
                <picture>
                  <img src="<?php echo get_field('recruit_img2') ?>" alt="" />
                </picture>
              </div>
              <div class="block-cnt">
                <h2 class="ttl">Q.仕事で頑張りたいことはなんですか？</h2>
                <p><?php echo get_field('recruit_q3'); ?></p>
              </div>
            </div>
            <div class="block staff_mb">
              <div class="block-img">
                <picture>
                  <img src="<?php echo get_field('recruit_img3'); ?>" alt="" />
                </picture>
              </div>
              <div class="block-cnt">
                <h2 class="ttl">Q.職場の雰囲気を教えてください</h2>
                <p><?php echo get_field('recruit_q4'); ?></p>
              </div>
            </div>
          </div>

          <h2 class="recruit_work_staff_title">Q.仕事終わりや休日にハマっていることはありますか？</h2>
          <p class="recruit_work_staff_copy"><?php echo get_field('recruit_q5'); ?></p>
          <ul class="col2 staff_mb">
            <li><img src="<?php echo get_field('recruit_img3') ?>" alt="" /></li>
            <li><img src="<?php echo get_field('recruit_img4') ?>" alt="" /></li>
          </ul>

          <h2 class="recruit_work_staff_title">Q.最後に、応募者の皆さんへメッセージをお願いします。</h2>
          <p class="recruit_work_staff_copy"><?php echo get_field('recruit_q6'); ?></p>

          <?php endwhile; ?>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>
      </section>
      <!-- /recruit_work_staff -->
    </main>

    <?php get_footer(); ?>
