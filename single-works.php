<?php get_header(); ?>


    <main>
      <section class="page_heading achievements">
        <div class="inner">
          <h1>
            <span class="text"><small>Achievements</small>施工・納入実績</span>
            <picture>
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/img/achievements/heading_img.jpg"
                alt="施工・納入実績"
              />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li><a href="../../works/index.html">施工・納入実績</a></li>
        <li>荷物用エレベーター</li>
      </ul>
      <!-- /breadcrumbs -->

      <section class="page_works">
        <div class="inner">
          <div class="works_detail">
            <div class="works_detail_wrap">
              <div class="works_detail_title">
                <h2><?php the_title(); ?></h2>
                <div class="tag-box">
                  <span class="date"><?php echo get_post_time('Y/m/d D.'); ?></span>

                  <?php if(is_object_in_term($post->ID,'works_category','works_cat-01')): ?>
                    <span class="tag tag-01">エレベーター</span>
                  <?php elseif(is_object_in_term($post->ID,'works_category','works_cat-02')) : ?>
                    <span class="tag tag-03">船舶</span>
                  <?php elseif(is_object_in_term($post->ID,'works_category','works_cat-03')) : ?>
                    <span class="tag tag-02">マックリフター</span>
                  <?php elseif(is_object_in_term($post->ID,'works_category','works_cat-04')) : ?>
                    <span class="tag tag-01">リニューアル（入れ替え）</span>
                  <?php endif; ?>
                </div>
              </div>
              <div class="works_detail_table">
                <div class="works_detail_head">
                  <h3>実績掲載</h3>
                </div>
                <div class="table">

                <?php if(have_rows('works_repeat')): ?>
									<?php while(have_rows('works_repeat')): the_row(); ?>
                    <div class="row">
                      <div class="title"><?php echo the_sub_field('works_repeat_title'); ?></div>
                      <div class="text"><?php echo the_sub_field('works_repeat_text'); ?></div>
                  </div>
									<?php endwhile; ?>
									<?php endif; ?>
                  
                </div>
              </div>

              <div class="works_detail_comment">
                <div class="btn_wrap01">
                  <a class="btn type-01 back" href="<?php echo home_url('/works/'); ?>"><span>施工・納入実績一覧に戻る</span></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="inner">
          <div class="ttl">
            <img src="<?php echo get_template_directory_uri(); ?>/img/contact_ttl.svg" alt="CONTACT" />
          </div>
          <div class="btn_wrap01">
            <a class="btn type-02" href="../../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>