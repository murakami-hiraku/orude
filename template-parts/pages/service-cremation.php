  <!-- ヘッダー -->
  <?php get_header(); ?>
  <!-- /ヘッダー -->

  <main class="page-s-cremation">
    <?php
    get_template_part('template-parts/block/block-page-ttl')
    ?>

    <!-- セクション１ -->
    <section class="page-s-cremation__section page-s-cremation__section--1 section fadein">

      <div class="page-s-cremation__inner inner">
        <?php
        get_template_part('template-parts/parts/parts-bg-circle');
        ?>

        <h2 class="page-s-cremation__ttl">ご自宅近くで行う、やさしいお見送り</h2>
        <p class="page-s-cremation__txt">オルデの訪問火葬は、ご自宅またはご自宅近隣まで専用車でお伺いし、火葬のみを執り行うサービスです。<br>葬儀やセレモニーは行わず、「静かに、丁寧に火葬をしてほい」「形式よりも負担を少なくしたい」というご家族様のためのプランです。<br>慣れ親しんだ場所の近くでお見送りができるため、移動のご負担もなく、落ち着いた気持ちで最期の時間をお過ごしいただけます。</p>
      </div>

    </section>
    <!-- /セクション１ -->


    <!-- セクション2 -->
    <section class="page-s-cremation__section page-s-cremation__section--2 section fadein">
      <div class="page-s-cremation__inner inner">
        <h2 class="page-s-cremation__ttl">アエル・デならではの安心品質</h2>
        <p class="page-s-cremation__txt">大切な家族の旅立ちを真心を込めてお手伝いいたします。</p>

        <div class="page-s-cremation__cards">
          <div class="page-s-cremation__card">

            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec2-1.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">経験豊富な専門スタッフ</h2>

            <p class="page-s-cremation__card-txt">訪問火葬に精通したスタッフが対応し、ご家族様のお気持ちに寄り添いながら進行いたします。初めての方にも分かりやすく、流れや注意点をご説明いたしますのでご安心ください。</p>

          </div>
          <div class="page-s-cremation__card">

            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec2-2.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">プライバシーに配慮したセレモニー車</h2>

            <p class="page-s-cremation__card-txt">火葬炉を搭載した車両には、社名やロゴなどの表記は一切ありません。一見すると一般的なバンタイプの車両のため、ご近所に配慮しながらご利用いただけます。マンションや住宅街でも安心してご相談ください。</p>

          </div>
          <div class="page-s-cremation__card">

            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec2-3.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">高性能火葬炉による安全火葬</h2>

            <p class="page-s-cremation__card-txt">使用する火葬炉は最新式の高性能炉で、臭い・煙・騒音を極力抑えた設計です。各自治体の条例に則った正式な許可を受けた車両・炉を使用しており、スタッフが周囲の状況や風向きにも気を配り安全な場所で火葬いたします。</p>

          </div>
        </div>
        <?php
        get_template_part('template-parts/parts/parts-bg-flower--left');
        ?>

      </div>

    </section>
    <!-- /セクション2 -->


    <!-- セクション3 -->
    <section class="page-s-cremation__section page-s-cremation__section--3 section fadein">

      <div class="page-s-cremation__inner inner">
        <h2 class="page-s-cremation__ttl">火葬後について</h2>
        <div class="page-s-cremation__card">
          <div class="page-s-cremation__card-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec3-1.png" alt="">
          </div>
          <p class="page-s-cremation__card-txt">火葬後は、ご希望に応じてお骨上げを行い、ご遺骨を骨壷にお納めしてご返骨いたします。<br>ご自宅でのご供養や、その後のご相談についても承っております。<br>骨壷・骨袋（覆い袋）は料金に含まれております。<br>分骨カプセルやメモリアルグッズなどをご希望の場合は、事前にご案内いたします。</p>
        </div>
      </div>

    </section>
    <!-- /セクション3 -->


    <!-- コンタクト -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト -->


    <!-- セクション4 -->
    <section class="page-s-cremation__section page-s-cremation__section--4 section fadein">

      <div class="page-s-cremation__inner inner">
        <?php
        get_template_part('template-parts/parts/parts-bg-flower--right');
        ?>
        <h2 class="page-s-cremation__ttl">プランについて</h2>

        <div class="page-s-cremation__cards">
          <div class="page-s-cremation__card card--1">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec4-1.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">合同火葬</h2>
            <p class="page-s-cremation__card-txt">お預かりしたお子様を合同火葬いたします。
              火葬後のご遺骨の一部を合同墓へ埋葬いたします。※お骨をお返しすることはできません。</p>
            <div class="page-s-cremation__flow">
              <div class="page-s-cremation__flow-container">
                <div class="page-s-cremation__flow-step step--1">お伺い
                </div>
                <div class="page-s-cremation__flow-step step--2">合同火葬
                </div>
                <div class="page-s-cremation__flow-step step--3">合同埋葬
                </div>
              </div>
            </div>
          </div>
          <div class="page-s-cremation__card card--2">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec4-2.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">一任個別火葬</h2>
            <p class="page-s-cremation__card-txt">個別火葬火葬後、お骨はスタッフが収骨を執り行い、骨壺にお納めしてお客様にお返しいたします。</p>
            <div class="page-s-cremation__flow">
              <div class="page-s-cremation__flow-container">
                <div class="page-s-cremation__flow-step step--1">お伺い
                </div>
                <div class="page-s-cremation__flow-step step--2">個別火葬
                </div>
                <div class="page-s-cremation__flow-step step--3">スタッフ収骨
                </div>
                <div class="page-s-cremation__flow-step step--4">返骨
                </div>
              </div>
            </div>
          </div>
          <div class="page-s-cremation__card card--3">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec4-3.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">立会個別火葬</h2>
            <p class="page-s-cremation__card-txt">個別火葬火葬後、お骨はご家族様で収骨を執り行い、骨壺にお納めしてお客様にお返しいたします。</p>
            <div class="page-s-cremation__flow">
              <div class="page-s-cremation__flow-container">
                <div class="page-s-cremation__flow-step step--1">お伺い
                </div>
                <div class="page-s-cremation__flow-step step--2">個別火葬
                </div>
                <div class="page-s-cremation__flow-step step--3">ご家族様収骨
                </div>
                <div class="page-s-cremation__flow-step step--4">返骨
                </div>
              </div>
            </div>
          </div>
          <div class="page-s-cremation__card card--4">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec4-4.png" alt="">
            </div>
            <h2 class="page-s-cremation__card-ttl">自宅でのお別れ葬</h2>
            <p class="page-s-cremation__card-txt">立会個別火葬プランにご自宅に祭壇を準備させていただき、ゆっくりお別れをしていただきます。</p>
            <div class="page-s-cremation__flow">
              <div class="page-s-cremation__flow-container">
                <div class="page-s-cremation__flow-step step--1">お伺い
                </div>
                <div class="page-s-cremation__flow-step step--2">自宅祭壇設営
                </div>
                <div class="page-s-cremation__flow-step step--3">翌日お伺い
                </div>
                <div class="page-s-cremation__flow-step step--4">個別火葬
                </div>
                <div class="page-s-cremation__flow-step step--5">ご家族様収骨
                </div>
                <div class="page-s-cremation__flow-step step--6">返骨
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- /セクション4 -->


    <!-- セクション5 -->
    <section class="page-s-cremation__section page-s-cremation__section--5 section fadein">

      <div class="page-s-cremation__inner inner">
        <?php
        get_template_part('/template-parts/parts/parts-bg-flower--right');
        ?>

        <h2 class="page-s-cremation__ttl">お見送りの流れ</h2>

        <div class="page-s-cremation__cards">
          <div class="page-s-cremation__card">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec5-1.png" alt="">
            </div>
            <div class="page-s-cremation__card-body">
              <h2 class="page-s-cremation__card-ttl">01　もしもの時は・・・</h2>
              <?php
              get_template_part('/template-parts/parts/parts-tel--primary.php')
              ?>
              <p class="page-s-cremation__card-txt">営業時間：10:00~20:00<br>定休日：不定休</p>
            </div>
          </div>
          <div class="page-s-cremation__card">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec5-2.png" alt="">
            </div>
            <div class="page-s-cremation__card-body">
              <h2 class="page-s-cremation__card-ttl">02　スタッフが専用車で訪問</h2>
              <p class="page-s-cremation__card-txt">ご自宅または近隣へお伺いし、周囲の環境を確認します。</p>
            </div>
          </div>
          <div class="page-s-cremation__card">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec5-3.png" alt="">
            </div>
            <div class="page-s-cremation__card-body">
              <h2 class="page-s-cremation__card-ttl">03　火葬</h2>
              <p class="page-s-cremation__card-txt">最新式の火葬炉にて、静かに丁寧に火葬を行います。</p>
            </div>
          </div>
          <div class="page-s-cremation__card">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec5-4.png" alt="">
            </div>
            <div class="page-s-cremation__card-body">
              <h2 class="page-s-cremation__card-ttl">04　お骨上げ・ご返骨</h2>
              <p class="page-s-cremation__card-txt">ご遺骨を骨壷にお納めし、ご家族様へお返しいたします。※合同火葬は、お骨上げ・ご返骨はできません。</p>
            </div>
          </div>
          <div class="page-s-cremation__card">
            <div class="page-s-cremation__card-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec5-5.png" alt="">
            </div>
            <div class="page-s-cremation__card-body">
              <h2 class="page-s-cremation__card-ttl">05　すべて終了</h2>
              <p class="page-s-cremation__card-txt">火葬が完了し、全工程が終了となります。</p>
            </div>
          </div>
        </div>

        <?php
        get_template_part('template-parts/parts/parts-bg-flower--left');
        ?>

      </div>

    </section>
    <!-- /セクション5 -->

    <!-- セクション6 -->
    <section class="page-s-cremation__section page-s-cremation__section--6 section fadein">

      <div class="page-s-cremation__inner inner">

        <h2 class="page-s-cremation__ttl">料金プラン（目安）</h2>
        <p class="page-s-cremation__txt">お迎えの手配からお別れの式、そしてご供養まで—— すべての工程を、私たちが責任を持ってお手伝いさせていただきます。</p>
        <p class="page-s-cremation__txt--sub">下記は目安となる税込料金です。正式なお見積りはお問い合わせ時にご案内いたします。</p>

        <div class="page-s-cremation__container">
          <div class="page-s-cremation__img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/cremation-sec6-1.png" alt="">
          </div>

          <div class="page-s-cremation__cards">
            <div class="page-s-cremation__card">
              <h2 class="page-s-cremation__card-ttl">料金に含まれる内容</h2>
              <p class="page-s-cremation__card-txt">個別葬プラン（一任個別葬・立会個別葬）には、骨壷・骨袋（覆い袋）が含まれております。合同葬プランは、お骨をお返しできません。火葬後は、一部のお骨を合同墓へお納めいたします。生花・祭壇・葬儀セレモニー等は含まれておりません。</p>
            </div>
            <div class="page-s-cremation__card">
              <h2 class="page-s-cremation__card-ttl">お迎え・出張費について</h2>
              <p class="page-s-cremation__card-txt">ご遺体のお迎えは大阪市内無料大阪市外3,300円（高速代をご請求することもございます。状況によりご相談を承っております。</p>
            </div>
          </div>
        </div>

      </div>

    </section>
    <!-- /セクション6 -->


    <!-- コンタクト -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト -->

  </main>

  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->