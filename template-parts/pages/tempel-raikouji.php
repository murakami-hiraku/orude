<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-tempel">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="tempel raikouji section fadein">

    <div class="tempel__inner inner">
      <?php
      get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
      <div class="tempel__container">
        <h2 class="tempel__ttl">あの子が、ずっと安らげる場所へ。</h2>
        <p class="tempel__txt">
          安心できる環境で永代納骨を行い、ご家族様に寄り添うことをお約束します。<br>
          大切なペットも人と同じように心を込めて供養させていただきます
        </p>
      </div>

      <div class="tempel__cards">
        <div class="tempel__card">
          <h2 class="tempel__card-ttl">本堂葬儀</h2>
          <div class="tempel__card-img"><img src="<?php echo get_template_directory_uri(); ?>/img/" alt=""></div>
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
            <div class="line"></div>
            <div class="price--1">
              <p>ご葬儀料金
                <span class="num">83,000</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </p>
            </div>
            <div class="price--2">
              <p>火葬料金
                <span class="num">31,900</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </p>
            </div>
            <div class="line"></div>
            <div class="total">
              <p>合計
                <span class="num">114,900</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </p>

            </div>
          </div>

          <p class="tempel__card-foot">
          <p>ご家族でお骨上げをご希望の場合
            <span class="num">3,300</span>
            <span class="unit">
              <small class="tax">(税込)</small>
              <small class="yen">円</small>
            </span>
          </p>
          <p>※火葬のみのプランもご案内できます。
            詳しくは、お問い合わせください。</p>
          </p>
        </div>
      </div>
    </div>


  </section>

  <!-- コンタクト -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->