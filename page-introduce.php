<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-introduce">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="page-introduce__section fadein">

    <div class="page-introduce__wrap wrap">

      <?php get_template_part('template-parts/parts/parts-bg-circle'); ?>

      <div class="page-introduce__inner inner">


        <div class="page-introduce__container">

          <div class="page-introduce__shell">

            <div class="page-introduce__lead">

              <h3>大切なお子様が旅立たれたときに</h3>
              <p>深い悲しみと、戸惑いの中で「何をすればいいのか」<br class="hidden-pc">「このままでいいのか」<br>そんな不安に包まれている方へ、<br>少しでも安心していただけるよう、今できることを順にご案内いたします。</p>
            </div>
            <div class="page-introduce__line"></div>

            <div class="page-introduce__content">
              <div class="page-introduce__cards">
                <div class="page-introduce__card card-1">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/introduce-img-1.png" alt="">
                  <div class="page-introduce__card-txt">
                    <h4>01　安らかに眠る場所のご用意</h4>
                    <p>まずは、その子がゆっくりと横になれる空間をご用意します。<br>普段お使いのベッドやお箱に、バスタオルやペットシーツをやさしく敷いていただければ充分です。</p>
                    <span>✧ 静かで涼しく空気の流れが穏やかな場所を選んであげてください。</span>
                  </div>
                </div>
                <div class="page-introduce__card card-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/introduce-img-2.png" alt="">
                  <div class="page-introduce__card-txt">

                    <h4>02　身体をきれいに整えてあげる</h4>
                    <p>毛並みを整え、湿らせた柔らかい布でやさしくお身体を拭いてあげてください。<br>目や口が開いている場合は、そっと閉じてあげましょう。<br>まれに口元や体内から体液が出ることもありますが、<br>慌てずガーゼなどで拭き取ってあげれば大丈夫です。
                      <br><br>
                      また、死後硬直が始まる前に、<br>手足を胸の方へ自然に折り曲げてあげることで、やすらかな体勢を保てます。
                    </p>
                    <span>✧「ありがとう」の気持ちをこめて、やさしく、ていねいに。</span>
                  </div>
                </div>
                <div class="page-introduce__card card-3">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/introduce-img-3.png" alt="">
                  <div class="page-introduce__card-txt">

                    <h4>03　ご納棺と保冷の準備</h4>
                    <p>納棺の際には、お身体が傷まないよう保冷剤やドライアイスをご使用ください。<br>お腹や頭を中心にしっかり冷やしてあげることで、<br>ゆっくりとお別れの時間を過ごせます。
                      <br><br>
                      また、お部屋の温度にもご注意ください。<br>
                      ・夏場はエアコンで室温を下げてください<br>
                      ・冬場は暖房の風が直接当たらないようにしましょう
                    </p>
                    <span>✧ ドライアイスの手配も可能です。ご希望の際はお申しつけください。</span>
                  </div>
                </div>
                <div class="page-introduce__card card-4">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/introduce-img-4.png" alt="">
                  <div class="page-introduce__card-txt">

                    <h4>04　お別れの時間をゆっくりと</h4>
                    <p>納納棺後は、上からそっとタオルをかけてあげてください。<br>お花、大好きだったおやつなどを添える方もいらっしゃいます。
                      <br><br>
                      この時間は、かけがえのないご家族と過ごす、最後の静かな時間です。<br>たくさんの「ありがとう」を、どうか、その子に伝えてあげてください。
                    </p>
                    <span>✧ご家族が揃うまでの時間も、大切にお使いいただけます。</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
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