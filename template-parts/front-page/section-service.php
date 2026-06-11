<!-- 大切な家族との、最後の時間を穏やかに過ごしていただくために（service） -->
<section class="section-service section fadein">

  <div class="section-service__inner inner">

    <h2 class="section-service__ttl">
      大切な家族との、<br>最後の時間を穏やかに過ごしていただくために
    </h2>

    <div class="section-service__cards">

      <div class="section-service__card">
        <h3 class="section-service__card-ttl section-service__card-item">訪問火葬</h3>
        <p class="section-service__card-txt section-service__card-item">
          専用設計の火葬炉を備えた専用車でご自宅までお伺いし、ご家族だけで、静かにお見送りができる環境をご用意いたします。</p>
        <div class="section-service__img section-service__card-item"><img
            src="<?php echo get_template_directory_uri(); ?>/img/front-page/service-img-1.webp" alt=""></div>
        <?php get_template_part('template-parts/parts/parts-btn', null, [
          'text' => 'サービスの詳細へ',
          'link' => '/service-cremation/',
          'class' => '' // 色を変えたい時などの識別用クラス
        ]); ?>
      </div>

      <div class="section-service__card">
        <h3 class="section-service__card-ttl section-service__card-item">自宅葬</h3>
        <p class="section-service__card-txt section-service__card-item">
          ご家族らしい、かたちにとらわれないお見送りをご提案いたします。<br>想いに寄り添いながらプロデュースいたします。<br>慣れ親しんだ場所でゆっくりとお別れの時間を過ごせます。</p>
        <div class="section-service__img section-service__card-item"><img
            src="<?php echo get_template_directory_uri(); ?>/img/front-page/service-img-2.webp" alt=""></div>
        <?php get_template_part('template-parts/parts/parts-btn', null, [
          'text' => '自宅葬の詳細へ',
          'link' => '/service-ceremony/',
          'class' => '' // 色を変えたい時などの識別用クラス
        ]); ?>
      </div>

      <div class="section-service__card">
        <h3 class="section-service__card-ttl section-service__card-item">永代供養</h3>
        <p class="section-service__card-txt section-service__card-item">
          お子様のご遺骨を永代に渡り供養いたします。<br>亡くなったお子様とご家族様が”語り合える場所”をご案内いたします。<br>また、４９日法要や周忌法要も承ります。</p>
        <div class="section-service__img section-service__card-item"><img
            src="<?php echo get_template_directory_uri(); ?>/img/front-page/service-img-3.png" alt="">
        </div>
        <div class="section-service__card-btns">
          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text' => '納骨代行の詳細へ',
            'link' => '/service-perpetual-care/#content-2-sec9',
            'class' => '' // 色を変えたい時などの識別用クラス
          ]); ?>

          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text' => '永代供養の詳細へ',
            'link' => '/service-perpetual-care/',
            'class' => '' // 色を変えたい時などの識別用クラス
          ]); ?>
        </div>
      </div>

    </div>

  </div>

</section>
<!-- /大切な家族との、最後の時間を穏やかに過ごしていただくために（service） -->