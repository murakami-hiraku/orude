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
        get_template_part('/template-parts/parts/parts-bg-circle.php')
        ?>
        <h2 class="page-s-ceremony__ttl">その子らしく、美しく。心を込めたお別れの時間を</h2>
        <p class="page-s-ceremony__txt">大切なご家族とのお別れを、もっと丁寧に、もっとその子らしく。オルデでは、火葬だけでなく、葬儀としてのセレモニーを大切に考えています。お花に囲まれた空間で、ゆっくりと感謝を伝える時間——それは、ご家族の心にとっても、必要なひとときです。</p>
      </div>

    </section>
    <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- セクション２ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <section class="page-s-ceremony__section page-s-ceremony__section--2 section fadein ">
      <div class="page-s-ceremony__inner inner">
        <h2 class="page-s-ceremony__ttl">セレモニーという“お別れのかたち”</h2>
        <p class="page-s-ceremony__txt">ご葬儀とは、火葬の前にその子に心を届ける儀式の時間。</p>
        <p class="page-s-ceremony__txt--sub sub-1">「ありがとう」「またね」「大好きだよ」——その想いを、静かに、丁寧に伝える場をご用意します。</p>
        <div class="page-s-ceremony__img">
          <img src="" alt="">
        </div>
        <p class="page-s-ceremony__txt--sub sub-2">大切なのは“その子に寄り添う”こと。ご希望やご事情を伺いながら、最適なセレモニーを一緒に創ってまいります。</p>


      </div>

    </section>
    <!-- セクション２ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- セクション３　見送りスタイル　ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-s-ceremony__section page-s-ceremony__section--3 section fadein ">
      <div class="page-s-ceremony__inner inner">
        <h2 class="page-s-ceremony__ttl">選べる2つのお見送りスタイル</h2>
        <p class="page-s-ceremony__txt">オルデでは、ご家族の想いやお別れの形に合わせて、2種類のセレモニースタイルをご用意しています。どちらも「火葬前にゆっくりお別れの時間を持ちたい」という想いに寄り添った葬儀プランですが、飾り付けの内容や雰囲気が異なります。どちらのプランもその子を中心に、やさしく美しく空間を整え、感謝の気持ちを伝える時間を大切にしています。</p>

        <div class="page-s-ceremony__cards">

          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">セレモニープランA</h2>
            <p class="page-s-ceremony__card-txt">花籠を用いた、やさしく温かな飾り付けのセレモニーです。コンパクトながらもお花に囲まれた空間で、静かにお別れいただけます。</p>
            <p class="page-s-ceremony__card-price">55,000円（税込）〜</p>
            <div class="page-s-ceremony__card-img--sub">
              <img src="" alt="">
              <img src="" alt="">
              <img src="" alt="">
            </div>
            <p class="page-s-ceremony__card-txt--sub">※花籠については、以下の3色からお選びいただけます。・ピンク　　・イエロー　　・ブルーお子様のイメージやご家族のお気持ちに合わせてお選びください。</p>
          </div>

          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">セレモニープランB</h2>
            <p class="page-s-ceremony__card-txt">アーチ型のフラワー装飾を用いた、より華やかなセレモニーです。その子らしさや、ご家族の想いを表現した特別な空間を演出します。</p>
            <p class="page-s-ceremony__card-price">55,000<small>円（税込）〜</small></p>
            <p class="page-s-ceremony__card-price--sub">セレモニーと火葬をセットで行う場合は、<strong>3,300</strong><small>円（税込）</small>引かせていただきます。</p>
            <?php get_template_part('template-parts/parts/parts-btn', null, [
              'text'  => '火葬料金はこちら',
              'link'  => '/',
              'class' => '' // 色を変えたい時などの識別用クラス
            ]); ?>
          </div>
        </div>
      </div>

    </section>
    <!-- セクション３ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

    <!-- セクション４　当日のステップーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-s-ceremony__section page-s-ceremony__section--4 section fadein ">
      <div class="page-s-ceremony__inner inner">
        <h2 class="page-s-ceremony__ttl">ご葬儀の流れ ～セレモニー当日のステップ～</h2>
        <p class="page-s-ceremony__txt txt-1">初めてご依頼される方にも安心していただけるよう、オルデの一般的な葬儀当日の流れをご説明いたします。ご家族のご希望や状況に応じて多少前後する場合もございますが、一例として参考にしてください。</p>

        <div class="page-s-ceremony__cards">
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">01　お問い合わせ</h2>
            <p class="page-s-ceremony__card-txt">お子様がお亡くなりになったら、まずはオルデまでご連絡ください。お電話やLINE、メールからお問い合わせいただけます。専任スタッフが状況をお伺いし、ご葬儀の内容や日程、ご希望のセレモニースタイルについて丁寧にご案内いたします。初めてのことで不安なことや分からないことがあれば、どんなことでもお話しください。</p>

          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">02　打ち合わせ</h2>
            <p class="page-s-ceremony__card-txt">ご希望のセレモニープランや飾り付け、お花の色、当日の流れについて打ち合わせを行います。「どのように送り出してあげたいか」「どんな時間を過ごしたいか」など、ご家族様の想いを大切にしながら内容を決めていきます。形式にとらわれず、その子らしいお別れができるよう、細かな部分までご相談いただけます。</p>

          </div>
          <div class="page-s-ceremony__card">
            <div class="page-s-ceremony__card-img">
              <img src="" alt="">
            </div>
            <h2 class="page-s-ceremony__card-ttl">03　お伺い・設営</h2>
            <p class="page-s-ceremony__card-txt">ご葬儀当日、スタッフがご自宅またはご指定の場所へお伺いします。セレモニーに必要な祭壇や飾り付けを丁寧に設営し、落ち着いてお別れの時間を過ごしていただける空間を整えます。準備が整いましたら、ご家族様だけの静かなセレモニーの時間が始まります。慌ただしさのない、ゆっくりとしたひとときをお過ごしください。</p>

          </div>
        </div>

        <p class="page-s-ceremony__txt txt-2">セレモニーのあと、どのようにお見送りされるかはご家族様それぞれです。火葬に関する料金やプランの詳細は、下記よりご確認いただけます。</p>
        <?php get_template_part('template-parts/parts/parts-btn', null, [
          'text'  => '火葬料金はこちら',
          'link'  => '/',
          'class' => '' // 色を変えたい時などの識別用クラス
        ]); ?>
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