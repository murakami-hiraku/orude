<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-tempel">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="tempel daizenji section fadein">

    <h2 class="tempel__ttl--main">大善寺</h2>
    <p class="tempel__add">〒543-0017 大阪市天王寺区城南寺町8-26</p>

    <div class="tempel__inner inner">

      <?php
      get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
      <div class="tempel__container">
        <h2 class="tempel__ttl">あの子が、ずっと安らげる場所へ。</h2>
        <p class="tempel__txt">
          安心できる環境でご葬儀・永代納骨を行い、ご家族様に寄り添うことをお約束します。<br>
          大切なペットも人と同じように心を込めて供養させていただきます
        </p>
      </div>

      <div class="tempel__cards">

        <div class="tempel__card card-1">
          <h2 class="tempel__card-ttl">本堂葬儀</h2>
          <div class="tempel__card-img"><img
              src="<?php echo get_template_directory_uri(); ?>/img/page-tempel/daizenji-1.png" alt=""></div>
          <p class="tempel__card-lead">本堂での僧侶によるご葬儀から火葬まで含めたプランになります。お骨上げに関しては、ご家族様にお選びいただけます。</p>
          <div class="tempel__card-head">

            <div class="box">
              <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/cat-dog-icon.png"
                  alt="">
              </div>
              <div class="txt">
                <div class="main">
                  <p class="example">料金例</p>
                  <p class="ex-txt">
                    ペットちゃん <span class="num">5</span>kg
                  </p>
                </div>
                <p class="sub">スタッフがお骨上げをする場合</p>
              </div>
            </div>

          </div>

          <div class="tempel__card-body">
            <div class="line line--1"></div>
            <div class="price price--1">
              <p>ご葬儀料金</p>
              <div>
                <span class="num">83,000</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </div>
            </div>
            <div class="price price--2">
              <p>火葬料金</p>
              <div>
                <span class="num">31,900</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </div>
            </div>
            <div class="line line--2"></div>
            <div class="total">
              <p>合計</p>
              <div>
                <span class="num">114,900</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </div>

            </div>
          </div>

          <div class="tempel__card-foot">
            <p>ご家族でお骨上げをご希望の場合
              <span class="num">3,300</span>
              <span class="unit">
                <small class="tax">(税込)</small>
                <small class="yen">円</small>
              </span>
            </p>
            <p>※火葬のみのプランもご案内できます。<br>　詳しくは、お問い合わせください。</p>
          </div>
        </div>

        <div class="tempel__card card-2">
          <h2 class="tempel__card-ttl">ペット永代納骨墓</h2>
          <div class="tempel__card-img"><img
              src="<?php echo get_template_directory_uri(); ?>/img/page-tempel/daizenji-2.png" alt=""></div>
          <div class="tempel__card-head">

            <div class="box">

              <div class="container">
                <div class="txt txt-daizenji">
                  <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/cat-dog-icon.png"
                      alt="">
                  </div>
                  <div class="group">
                    <div class="main">
                      <p>納骨料１体</p>
                      <div>
                        <span class="num">20,000</span>
                        <span class="unit">
                          <small class="tax">(税込)</small>
                          <small class="yen">円</small>
                        </span>
                      </div>
                    </div>
                    <p class="sub">納骨法要を行う場合別途１万円</p>
                  </div>
                </div>
                <div class="txt txt-daizenji">
                  <div class="ttl ttl-daizenji">
                    <p>ステンレスプレート</p>
                    <p>お名前を彫刻いたします</p>
                  </div>
                  <div class="price-daizenji">
                    <span class="num">16,500</span>
                    <span class="unit">
                      <small class="tax">(税込)</small>
                      <small class="yen">円</small>
                    </span>
                  </div>
                </div>
              </div>

            </div>
            <p class="notes">他社様で火葬されたご遺骨でもご納骨可能です。</p>
          </div>

          <div class="tempel__card-body">
            <h4 class="ttl">
              納骨代行
            </h4>
            <p class="txt">
              ご自宅に保管されているペットちゃんのご遺骨をスタッフがお伺いして丁寧にお預かりし、来迎寺ペット永代供養墓へご納骨いたします。<br>
              他社様で火葬されたご遺骨もお引き受け可能です。
            </p>
            <div class="line line--3"></div>
            <p class="notes">※すべて完全予約制になっております。<br>　日程は、ご相談ください。<br>　直接お寺にお越しになられることは、<br>　ご遠慮ください。</p>
          </div>
        </div>

      </div>
    </div>

    <a href="https://osaka-daizenji.jp/" class="tempel__link">
      <p class="tempel__link-txt">大善寺ホームページ</p>

      <div class="tempel__link-img"><img
          src="<?php echo get_template_directory_uri(); ?>/img/page-tempel/daizenji-3.png" alt=""></div>
    </a>

  </section>

  <!-- コンタクト -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->