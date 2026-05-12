<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KM7P7JB3');
  </script>
  <!-- End Google Tag Manager -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>ペットの総合供養 オルデ｜大切な家族との最後の時間を穏やかに【大阪】</title>


  <!-- OGP（SNSでシェアされたときの表示） -->
  <meta property="og:title" content="ペットの総合供養 オルデ｜大切な家族との最後の時間を穏やかに【大阪】">
  <meta property="og:description" content="大阪のペット総合供養「オルデ」。ご自宅への訪問火葬、想いに寄り添う自宅葬、永代供養まで、大切な家族のお見送りを心を込めてお手伝いいたします。お電話受付8:00〜22:00。まずはお気軽にご相談ください。">
  <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/common/ogp.png">
  <meta property="og:url" content="">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="ペットの総合供養 オルデ｜大切な家族との最後の時間を穏やかに【大阪】">
  <!-- Twitterカード -->
  <meta name="twitter:card" content="summary_large_image">

  <!-- description（SEO） -->
  <meta name="description" content="">


  <!-- swiper読み込み -->
  <link href="https://cdn.jsdelivr.net/npm/swiper@11.2.6/swiper-bundle.min.css"
    rel="stylesheet" />
  <!-- Googleフォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,400..900;1,400..900&family=Alice&family=Noto+Serif+JP:wght@200..900&display=swap" rel="stylesheet">
  <!-- CSSの読み込み -->
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>> <!-- Header -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM7P7JB3"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header id="js-header" class="header">
    <div class="header__inner inner">
      <!-- /header-logo -->
      <?php get_template_part('template-parts/parts/parts-logo--primary'); ?>
      <!-- /header-logo -->
      <nav id="js-drawer-content" class="header__nav">

        <div class="header__nav-close hidden-xl">
          <button
            type="button"
            id="js-close-button"
            class="header__drawer-icon"
            aria-label="メニューを閉じる">
            <span class="header__icon-bar"></span>
            <span class="header__icon-bar"></span>
            <span class="header__icon-bar"></span>
          </button>
        </div>

        <div class="header__nav-menu">
          <?php get_template_part('template-parts/parts/parts-logo--white'); ?>

          <?php
          wp_nav_menu([
            'theme_location' => 'header-nav',
            'container' => false,          // <div> を出さない
            'menu_class'  => 'header__nav-list', // <ul> にクラスを付ける
            'fallback_cb' => false         // メニュー未設定時に何も出さない
          ]);
          ?>
        </div>

        <div class="header__nav-card">

          <div class="header__nav-ttl hidden-xl">
            <h3>ーペットの総合供養ー</h3>
            <h2>これからの旅が<br>穏やかな旅でありますように</h2>
          </div>

          <?php get_template_part('template-parts/block/block-info--white'); ?>

          <?php
          get_template_part('template-parts/parts/parts-contact-btn--white')
          ?>
        </div>

      </nav>

      <?php
      get_template_part('template-parts/parts/parts-contact-btn--primary')
      ?>

      <div class="header__open hidden-xl">
        <button
          type="button"
          id="js-drawer-button"
          class="header__drawer-icon"
          aria-label="メニューを開く">
          <span class="header__icon-bar"></span>
          <span class="header__icon-bar"></span>
          <span class="header__icon-bar"></span>
        </button>
      </div>
    </div>
  </header>
  <!-- /Header -->