<?php get_header(); ?>


    <main>
      <!-- company_page_heading -->
      <section class="page_heading youkou">
        <div class="inner">
          <h1>
            <span class="text"
              ><small>Employee Introduction</small>社員紹介</span
            >
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
        <li><a href="../../index.html">トップページ</a></li>
        <li><a href="../../recruit/index.html">採用情報</a></li>
        <li>社員紹介</li>
      </ul>

      <!-- recruit_work -->
      <section class="recruit_work">
        <div class="inner">
          <h2 class="ttl_m">年齢も職種も異なる<br class="sp">守谷輸送機工業の先輩たちが<br>
            日々の業務内容や会社雰囲気を<br class="sp">ズバリインタビュー</h2>

          <div class="recruit_work_list">
            <div class="block people01">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'recruit_work',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruit_works_category',
                    'field' => 'slug',
                    'terms' => 'recruit_cat-01'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <a  style="background-image: url('<?php echo get_field('recruit_bgi'); ?>')" href="<?php echo esc_url(get_term_link('recruit_cat-01','recruit_works_category')) ?>">
                <div class="ttl"><?php the_title(); ?></div>
              </a>
              <p><?php echo get_field('recruit_name') ?></p>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="block people">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'recruit_work',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruit_works_category',
                    'field' => 'slug',
                    'terms' => 'recruit_cat-02'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <a style="background-image: url('<?php echo get_field('recruit_bgi'); ?>')" href="<?php echo esc_url(get_term_link('recruit_cat-02','recruit_works_category')) ?>">
                <div class="ttl"><?php the_title(); ?></div>
              </a>
              <p>
                <?php echo get_field('recruit_name'); ?>
              </p>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
            
            <div class="block people">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'recruit_work',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruit_works_category',
                    'field' => 'slug',
                    'terms' => 'recruit_cat-03'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <a style="background-image: url('<?php echo get_field('recruit_bgi'); ?>')" href="<?php echo esc_url(get_term_link('recruit_cat-03','recruit_works_category')) ?>">
                <div class="ttl"><?php the_title(); ?></div>
              </a>
              <p>
                <?php echo get_field('recruit_name'); ?>
              </p>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="block people">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'recruit_work',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruit_works_category',
                    'field' => 'slug',
                    'terms' => 'recruit_cat-04'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <a style="background-image: url('<?php echo get_field('recruit_bgi'); ?>')" href="<?php echo esc_url(get_term_link('recruit_cat-04','recruit_works_category')) ?>">
                <div class="ttl"><?php the_title(); ?></div>
              </a>
              <p>
                <?php echo get_field('recruit_name'); ?>
              </p>
              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="block people">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'recruit_work',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruit_works_category',
                    'field' => 'slug',
                    'terms' => 'recruit_cat-05'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <a style="background-image: url('<?php echo get_field('recruit_bgi'); ?>')" href="<?php echo esc_url(get_term_link('recruit_cat-05','recruit_works_category')) ?>">
                <div class="ttl"><?php the_title(); ?></div>
              </a>
              <p>
                <?php echo get_field('recruit_name'); ?> 
              </p>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>

            <div class="block people">
            <?php
        $term_object = get_queried_object();
        $term_slug = $term_object->slug;
        $args = array(
            'post_type' => 'recruit_work',
            'posts_per_page' => 1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'recruit_works_category',
                    'field' => 'slug',
                    'terms' => 'recruit_cat-06'
                ),
            ),
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <?php while($the_query->have_posts()): $the_query->the_post(); ?>

              <a style="background-image: url('<?php echo get_field('recruit_bgi'); ?>')" href="<?php echo esc_url(get_term_link('recruit_cat-06','recruit_works_category')) ?>">
                <div class="ttl"><?php the_title(); ?></div>
              </a>
              <p>
                <?php echo get_field('recruit_name'); ?>
              </p>

              <?php endwhile; ?>
              <?php endif; ?>
              <?php wp_reset_postdata(); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- /recruit_work -->
    </main>

    <?php get_footer(); ?>
