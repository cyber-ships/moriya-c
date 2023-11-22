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
                  <span class="date">2023/11/1 wed.</span>
                  <?php $cat = get_field('works_radio'); ?>
                          
                  <?php if ($cat == 'works_cat1') : ?>
                    <span class="tag tag-01">エレベーター</span>
                  <?php elseif ($cat == 'works_cat2') : ?>
                    <span class="tag tag-03">船舶</span>
                  <?php elseif ($cat == 'works_cat3') : ?>
                    <span class="tag tag-02">マックリフター</span>
                  <?php else : ?>
                    <span class="tag tag-04">リニューアル（入れ替え）</span>
                  <?php  endif; ?>
                </div>
              </div>
              <div class="works_detail_thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/img/works/img-1-01.jpg" alt="" />
              </div>
              <div class="col2">
                <div class="block"><img src="<?php echo get_template_directory_uri(); ?>/img/works/img-1-02.jpg" alt="" /></div>
                <div class="block"><img src="<?php echo get_template_directory_uri(); ?>/img/works/img-1-03.jpg" alt="" /></div>
              </div>

              <div class="works_detail_table">
                <div class="works_detail_head">
                  <h3>実績掲載</h3>
                </div>
                <div class="table">
                  <div class="row">
                    <div class="title">型式</div>
                    <div class="text">ロープ式マシンルームレス型</div>
                  </div>
                  <div class="row">
                    <div class="title">積載量</div>
                    <div class="text">3,500kg</div>
                  </div>
                  <div class="row">
                    <div class="title">定格速度</div>
                    <div class="text">45m/min</div>
                  </div>
                  <div class="row">
                    <div class="title">停止階</div>
                    <div class="text">3階</div>
                  </div>
                  <div class="row">
                    <div class="title">台数</div>
                    <div class="text">1台</div>
                  </div>
                  <div class="row">
                    <div class="title">施設名</div>
                    <div class="text">ちばリサーチパーク</div>
                  </div>
                  <div class="row">
                    <div class="title">所在地</div>
                    <div class="text">千葉県千葉市</div>
                  </div>
                  <div class="row">
                    <div class="title">施主</div>
                    <div class="text">横浜冷蔵（株）</div>
                  </div>
                  <div class="row">
                    <div class="title">施工</div>
                    <div class="text">東亜建設工業（株）</div>
                  </div>
                  <div class="row">
                    <div class="title">竣工</div>
                    <div class="text">2023年2月</div>
                  </div>
                </div>
              </div>

              <div class="works_detail_comment">
                <div class="btn_wrap01">
                  <a class="btn type-01 back" href="../index.html"
                    ><span>施工・納入実績一覧に戻る</span></a
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