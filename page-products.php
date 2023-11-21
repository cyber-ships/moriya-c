<?php get_header(); ?>


    <main>
      <section class="page_heading products">
        <div class="inner">
          <h1>
            <span class="text"><small>Products</small>製品紹介</span>
            <picture>
              <img src="../img/products/heading_img.jpg" alt="製品紹介" />
              <img src="<?php echo esc_url(get_theme_file_uri('/img/products/heading_img.jpg')); ?>" alt="製品紹介" />
            </picture>
          </h1>
        </div>
      </section>

      <!-- breadcrumbs -->
      <ul class="breadcrumbs">
        <li><a href="../index.html">トップページ</a></li>
        <li>製品紹介</li>
      </ul>
      <!-- /breadcrumbs -->

      <section>
        <div class="inner">
          <h2 class="ttl_l">
            オーダーメイドのエレベーターで、<br>産業を支えています
            <span> Support the society with elevator</span>
          </h2>
          <p class="lead">
            様々な産業分野で、それぞれの用途に合わせた仕様が必要とされる荷物用エレベーター。<br class="sp" />
            船舶という特別な環境で、乗組員や乗客に縦の移動をご提供する船舶用エレベーター。<br class="sp" />
            お客様の多種多様なニーズを形にし、すべてのエレベーターをオーダーメイドでご提供しています。
          </p>
        </div>
      </section>

      <section class="page_products">
        <div class="inner">
          <div class="sub-page_list">
            <div class="block block_01">
              <a href="../products/freightelevator/index.html">
                <div class="ttl">
                  荷物用エレベーター<small>Freight Elevator</small>
                </div>
              </a>
              <p>
                1t程度の小型エレベーターから10t以上の超大型エレベーターまで、様々な産業分野で幅広いお客様のニーズに、オーダーメードでお応えします。
              </p>
            </div>
            <div class="block block_02">
              <a href="../products/renewal/index.html">
                <div class="ttl">
                  リニューアル(入替)<br />エレベーター<small
                    >Renewal Elevator</small
                  >
                </div>
              </a>
              <p>
                現行法規に適したエレベーターへのリニューアル（入替）に対応します。他社製を含めたロープ式、油圧式等に対応可能です。実績豊富で、多様な設備状況に対応します。
              </p>
            </div>
            <div class="block block_03">
              <a href="../products/shipelevator/index.html">
                <div class="ttl">
                  船舶用エレベーター<small>Ship Elevator</small>
                </div>
              </a>
              <p>
                LLNG運搬船・コンテナ船などの商船から、旅客船、砕氷船、FPSO（沖合生産・貯油出荷施設）まで、あらゆる海上設備で、乗組員や旅客の皆様へ安心・安全な移動をご提供します。
              </p>
            </div>
            <div class="block block_04">
              <a href="../products/macklifter/index.html">
                <div class="ttl">マックリフター<small>Maclifter</small></div>
              </a>
              <p>
                コンベアを用いたパレット専用の高速垂直搬送に特化した機械設備で、お客様のニーズにお応えします。
              </p>
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
            <a class="btn type-02" href="../inquiry/index.html"
              ><span>お問合わせはこちら</span></a
            >
          </div>
        </div>
      </section>
    </main>

    <?php get_footer(); ?>