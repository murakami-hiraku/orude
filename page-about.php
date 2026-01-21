<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-about">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="page-about__section section fadein">


    <div class="page-about__inner inner">
      <div class="page-about__container">
        <div class="page-about__img img-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about-img-1.png" alt="">
        </div>
        <div class="page-about__box">
          <h2 class="page-about__ttl">代表者ご挨拶</h2>
          <p class="page-about__txt">ペットは私たちの大切な家族だからこそ、最愛の家族を安心して送り出せる場所がいかに大切かを、私たちは実感しています。<br>最後のお別れが悲しみだけではなく、共に過ごしたすばらしい日々を振り返る温かな時間となりますよう、また、皆様がこれからの一歩を踏み出すお手伝いができますよう、スタッフ一同、誠心誠意努めてまいります。</p>
          <p class="page-about__signature">代表取締役　北池　章一</p>
        </div>
        <div class="page-about__img img-2">
          <img src="<?php echo get_template_directory_uri(); ?>/img/about-img-2.png" alt="">
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