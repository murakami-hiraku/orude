<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-faq">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="page-faq__section section fadein">

    <?php get_template_part('template-parts/parts/parts-bg-circle'); ?>

    <div class="page-faq__inner inner">

      <div class="page-faq__contents">
        <div class="page-faq__category cremation">
          <h2 class="page-faq__ttl">訪問火葬プラン・セレモニープランに<br class="hidden-pc">関するご質問</h2>
          <?php
          get_template_part('template-parts/parts/parts-faq-1')
          ?>
        </div>
        <div class="page-faq__category funeral">
          <h2 class="page-faq__ttl">永代供養サービスに<br class="hidden-pc">関するご質問</h2>
          <?php
          get_template_part('template-parts/parts/parts-faq-2')
          ?>
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