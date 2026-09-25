<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-tempel page-tempel-ginzanji">
  <?php
  // ACF（display_title / page_ttl_bg）が未入力の場合は、ここで渡した値が使われます
  get_template_part('template-parts/block/block-page-ttl', null, [
    'bg'    => get_template_directory_uri() . '/img/page-tempel/ginzanji-bg.jpg',
    'title' => '銀山寺',
  ]);
  ?>

  <section class="tempel ginzanji section fadein">

    <h2 class="tempel__ttl--main">銀山寺</h2>
    <p class="tempel__add">〒543-0073 大阪市天王寺区生玉寺町6-26</p>

    <div class="tempel__inner inner">

      <?php
      get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
      <div class="tempel__container">
        <h2 class="tempel__ttl">太閤秀吉ゆかりの古刹で、<br class="hidden-pc">静かな祈りを。</h2>
        <p class="tempel__txt">
          銀山寺は、京都黒谷 紫雲山金戒光明寺第24世 三蓮社縁譽上人休岸大和尚が開山したお寺です。<br>
          1591年（天正19年）、豊臣秀吉の城下町建設の一環として「大福寺」の名で創建され、のちに太閤秀吉の命により「寶樹山銀山寺」と改称されました。<br>
          430年余りの歴史を重ねた境内で、大切なあの子を心を込めて供養いたします。
        </p>
      </div>

      <div class="tempel__cards">

        <div class="tempel__card card-1">
          <h2 class="tempel__card-ttl tempel__card-ttl--long">大切な方々と一緒にお別れの時間をお過ごしいただけます。</h2>
          <div class="tempel__card-img"><img
              src="<?php echo get_template_directory_uri(); ?>/img/page-tempel/ginzanji-4.jpg" alt="銀山寺 本堂"></div>
          <p class="tempel__card-lead">本堂にて僧侶による心を込めたご葬儀を執り行うプランです。ご希望の方には、火葬まで含めてご対応いたします。</p>
          <p class="tempel__card-notes">
            ※ご家族様は本堂内にお入りいただけます。ご友人など、ご家族様以外の方も本堂の外よりお見送りいただけます。</p>

          <!-- 2026.7.30 非表示に編集 -->
          <!-- <div class="tempel__card-head">

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

          </div> -->

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

            <!-- 2026.7.30 非表示に編集 -->
            <!-- <div class="price price--2">
              <p>火葬料金</p>
              <div>
                <span class="num">31,900</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </div>
            </div> -->
            <div class="line line--2"></div>

            <!-- 2026.7.30 非表示に編集 -->
            <!-- <div class="total">
              <p>合計</p>
              <div>
                <span class="num">114,900</span>
                <span class="unit">
                  <small class="tax">(税込)</small>
                  <small class="yen">円</small>
                </span>
              </div>

            </div> -->
          </div>

          <div class="tempel__card-foot">
            <!-- 2026.7.30 非表示に編集 -->
            <!-- <p>ご家族でお骨上げをご希望の場合
              <span class="num">3,300</span>
              <span class="unit">
                <small class="tax">(税込)</small>
                <small class="yen">円</small>
              </span>
            </p> -->
            <p>※火葬をご希望の場合は、別途承ります（体重により料金が異なります）。<br>※詳しくは、お問い合わせください。</p>

            <?php get_template_part('template-parts/parts/parts-btn', null, [
              'text' => '火葬料金はこちら',
              'link' => '/service-cremation/',
              'class' => 'tempel__cremation-btn--pc' // PC（横並び）時のみ表示
            ]); ?>
          </div>
        </div>

        <!-- SP（縦並び）時のみ表示：納骨墓カードと本堂葬儀カードの間に配置 -->
        <div class="tempel__cremation-btn tempel__cremation-btn--sp">
          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text' => '火葬料金はこちら',
            'link' => '/service-cremation/',
            'class' => ''
          ]); ?>
        </div>

        <div class="tempel__card card-2">
          <h2 class="tempel__card-ttl">ペット永代納骨墓</h2>
          <div class="tempel__card-img"><img
              src="<?php echo get_template_directory_uri(); ?>/img/page-tempel/ginzanji-1.jpg" alt="銀山寺ペット永代納骨墓での読経"></div>
          <div class="tempel__card-head">

            <div class="box">
              <div class="img"> <img src="<?php echo get_template_directory_uri(); ?>/img/common/cat-dog-icon.png"
                  alt="">
              </div>
              <div class="txt">
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
              </div>
            </div>
            <p class="notes notes--service">月に2回（第2土曜日と第4日曜日）お塔婆をたて、<br class="hidden-sp">ご住職に読経していただきます。<br>ご希望の方は、お立ち合いしていただけます。</p>
            <p class="notes">他社様で火葬されたご遺骨でもご納骨可能です。</p>
          </div>

          <div class="tempel__card-body">
            <h4 class="ttl">
              納骨代行
            </h4>
            <p class="txt">
              ご自宅に保管されているペットちゃんのご遺骨をスタッフがお伺いして丁寧にお預かりし、銀山寺ペット永代納骨墓へご納骨いたします。<br>
              他社様で火葬されたご遺骨もお引き受け可能です。
            </p>
          </div>
        </div>

      </div>


    </div>
    <a href="<?php echo home_url('/service-perpetual-care/'); ?>" class="tempel__link tempel__link--tomoni">
      <p class="tempel__link-txt">永代納骨『ともに』はこちら</p>

      <div class="tempel__link-img"><img
          src="<?php echo get_template_directory_uri(); ?>/img/page-tempel/ginzanji-2.jpg" alt=""></div>
    </a>


  </section>

  <!-- コンタクト -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->