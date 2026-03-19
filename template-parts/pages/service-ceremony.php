  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-s-ceremony">
    <?php
    get_template_part('template-parts/block/block-page-ttl')
    ?>

    <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-s-ceremony__section page-s-ceremony__section--1 section fadein ">
      <div class="page-s-ceremony__inner inner">
        <?php
        get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
        <div class="page-s-ceremony__container">
          <div class="page-s-ceremony__box">
            <h2 class="page-s-ceremony__ttl">その子らしく、美しく。心を込めたお別れの時間を</h2>
            <p class="page-s-ceremony__txt">大切なご家族とのお別れを、もっと丁寧に、もっとその子らしく。オルデでは、火葬だけでなく、葬儀としてのセレモニーを大切に考えています。<br>お花に囲まれた空間で、ゆっくりと感謝を伝える時間——<br>それは、ご家族の心にとっても、必要なひとときです。</p>
          </div>
        </div>
      </div>

    </section>
    <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- セクション２ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <section class="page-s-ceremony__section page-s-ceremony__section--2 section fadein ">
      <div class="page-s-ceremony__inner inner">
        <h2 class="page-s-ceremony__ttl">セレモニーという“お別れのかたち”</h2>
        <p class="page-s-ceremony__txt">ご葬儀とは、火葬の前にその子に心を届ける儀式の時間。</p>
        <p class="page-s-ceremony__txt--sub sub-1">「ありがとう」「またね」「大好きだよ」——<br>その想いを、静かに、丁寧に伝える場をご用意します。</p>

        <div class="page-s-ceremony__card">
          <div class="page-s-ceremony__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/common/c-arch.png" alt="">
          </div>
          <p class="page-s-ceremony__txt--sub sub-2">大切なのは“その子に寄り添う”こと。<br>ご希望やご事情を伺いながら、<br>最適なセレモニーを一緒に創ってまいります。</p>
        </div>

      </div>

    </section>
    <!-- セクション２ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- セクション３　見送りスタイル　ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-s-ceremony__section page-s-ceremony__section--3 section fadein ">
      <div class="page-s-ceremony__inner inner">
        <h2 class="page-s-ceremony__ttl">選べる2つのお見送りスタイル</h2>
        <p class="page-s-ceremony__txt">オルデでは、ご家族の想いやお別れの形に合わせて、2種類のセレモニースタイルをご用意しています。<br>どちらも「火葬前にゆっくりお別れの時間を持ちたい」という想いに寄り添った葬儀プランですが、飾り付けの内容や雰囲気が異なります。<br>どちらのプランもその子を中心に、やさしく美しく空間を整え、感謝の気持ちを伝える時間を大切にしています。</p>

        <div class="page-s-ceremony__cards">

          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec3-1.png" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">セレモニープランA</h2>
            <p class="page-s-ceremony__card-txt">
              たくさんの愛をくれた存在へ「ありがとう」を——そんな想いを込めたセレモニープランです。<br>
              （祭壇中央以外の花籠は、アーティフィシャルフラワーになります。）

            </p>
            <p class="page-s-ceremony__card-price">55,000円 <small>（税込）〜
              </small></p>

            <div class="page-s-ceremony__card-img--sub">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec3-2.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec3-3.png" alt="">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec3-4.png" alt="">
            </div>
            <p class="page-s-ceremony__card-txt--sub">※花籠については、以下の3色からお選びいただけます。<br>・ピンク　　・イエロー　　・ブルー<br>お子様のイメージやご家族のお気持ちに合わせてお選びください。</p>
          </div>

          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec3-5.png" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">セレモニープランB</h2>
            <p class="page-s-ceremony__card-txt">
              虹の向こうでまた会える——そんな願いを込めたセレモニープランです。<br>
              （祭壇中央以外の花籠は、アーティフィシャルフラワーになります。）

            </p>
            <p class="page-s-ceremony__card-price">55,000<small>円（税込）〜</small></p>
            <p class="page-s-ceremony__card-price--sub">セレモニーと火葬をセットで行う場合は、<br><strong>特別料金</strong><small></small>でご案内させていただきます。</p>
            <?php get_template_part('template-parts/parts/parts-btn', null, [
              'text'  => '火葬料金はこちら',
              'link'  => home_url('/service-cremation/#price-list'),
              'class' => '' // 色を変えたい時などの識別用クラス
            ]); ?>
          </div>

        </div>

        <div class="page-s-ceremony__note">
          <p>※設営に時間がかかるため、詳細は電話で問い合わせが必要</p>
          <p>※別途、火葬料が必要</p>
          <p>※住宅環境によっては受けられない場合がある</p>

        </div>
      </div>

    </section>
    <!-- セクション３ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- セクション４　当日のステップーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-s-ceremony__section page-s-ceremony__section--4 section fadein">
      <div class="page-s-ceremony__inner inner">
        <?php
        get_template_part('/template-parts/parts/parts-bg-flower--right')
        ?>
        <h2 class="page-s-ceremony__ttl">ご葬儀の流れ ～セレモニー当日のステップ～</h2>
        <p class="page-s-ceremony__txt txt-1">初めてご依頼される方にも安心していただけるよう、オルデの一般的な葬儀当日の流れをご説明いたします。<br>ご家族のご希望や状況に応じて多少前後する場合もございますが、一例として参考にしてください。</p>

        <div class="page-s-ceremony__cards">
          <div class="page-s-ceremony__card card--1">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/common/c-operator.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">
              <h2 class="page-s-ceremony__card-ttl">01　お問い合わせ</h2>
              <p class="page-s-ceremony__card-txt">
                完全予約制になっております。<br>
                ご希望のセレモニープランをお申し付けください。<br>
                ※ペット飼育不可のマンション等では承ることができません。
              </p>
              <?php
              get_template_part('/template-parts/parts/parts-tel--primary')
              ?>
              <p class="page-s-ceremony__card-txt--sub">
                電話受付時間：9:00~22:00<br class="hidden-pc">
                定休日：年中無休（年末年始を除く）
              </p>
            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img img-2">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-2.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">

              <h2 class="page-s-ceremony__card-ttl">02　ご訪問・設営</h2>
              <p class="page-s-ceremony__card-txt">
                ご葬儀当日、スタッフがご自宅またはご指定の場所へお伺いします。<br>
                セレモニーに必要な祭壇や飾り付けを丁寧に設営し、落ち着いてお別れの時間を過ごしていただける空間を整えます。
              </p>

            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-3.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">

              <h2 class="page-s-ceremony__card-ttl">03　お通夜・ご葬儀</h2>
              <p class="page-s-ceremony__card-txt">
                お子様との最後のお別れの時間をゆっくりお過ごしください。<br>
                ※他社で火葬の場合、設営翌日に祭壇・飾り付けお引取りになります。<br>
                ※ご自宅でのお飾りとなります。必ず駐車場所（1台分）を確保下さい。<br>
                ※近隣の駐車場をりようした場合の費用は、ご負担をお願いいたします。
              </p>

            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-4.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">

              <h2 class="page-s-ceremony__card-ttl">04　お花入れ</h2>
              <p class="page-s-ceremony__card-txt">
                火葬当日にお伺いさせていただきお別れの準備をさせていただきます。<br>
                飾り付けたお花をご家族様で棺の中にお納めしていただきます。
              </p>

            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-5.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body body-5">

              <h2 class="page-s-ceremony__card-ttl">05　火葬</h2>
              <p class="page-s-ceremony__card-txt">
                移動火葬車は、住宅事情によりペットが慣れ親しんだ自宅で火葬することもできますが、駐車場がない、駐車場に屋根（カーポート）がある、住宅が隣接しているなどの場合は、自宅での火葬ができません。<br>
                その場合は、近隣の安全な場所に移動して火葬を執り行います。（市区町村において条例がある場合は、それに準じます）<br>移動しながらの火葬はいたしません。ご安心ください。
              </p>

            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-6.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">

              <h2 class="page-s-ceremony__card-ttl">06　お引取り</h2>
              <p class="page-s-ceremony__card-txt">
                祭壇や飾り付けを丁寧にお引取りさせていただきます。
              </p>

            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-7.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">

              <h2 class="page-s-ceremony__card-ttl">07　お骨上げ・ご返骨</h2>
              <p class="page-s-ceremony__card-txt">
                ご遺骨を骨壷にお納めし、ご家族様へお返しいたします。<br>
                ※合同火葬は、お骨上げ・ご返骨はできません。
              </p>

            </div>
          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/page-ceremony/ceremony-sec4-8.png" alt="">
            </div>
            <div class="page-s-ceremony__card-body">

              <h2 class="page-s-ceremony__card-ttl">08　すべて終了</h2>
              <p class="page-s-ceremony__card-txt">
                火葬が完了し、全工程が終了となります。
              </p>

            </div>
          </div>
        </div>

        <p class="page-s-ceremony__txt txt-2">セレモニーのあと、どのようにお見送りされるかはご家族様それぞれです。<br>火葬に関する料金やプランの詳細は、下記よりご確認いただけます。</p>
        <?php get_template_part('template-parts/parts/parts-btn', null, [
          'text'  => '火葬料金はこちら',
          'link'  => home_url('/service-cremation/#price-list'),
          'class' => '' // 色を変えたい時などの識別用クラス
        ]); ?>

        <?php
        get_template_part('/template-parts/parts/parts-bg-flower--left')
        ?>
      </div>

    </section>
    <!-- セクション４ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- コンタクト -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト -->


  </main>

  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->