<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title></title>


  <!-- OGP（SNSでシェアされたときの表示） -->
  <meta property="og:title" content="">
  <meta property="og:description" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:type" content="website">

  <!-- Twitterカード -->
  <meta name="twitter:card" content="">

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

<body>
  <!-- wrapper-->
  <div class="wrapper">
    <!-- Header -->
    <header id="js-header" class="header">
      <div class="header__inner inner">
        <!-- /header-logo -->
        <?php get_template_part('template-parts/parts/logo'); ?>
        <!-- /header-logo -->
        <nav id="js-drawer-content" class="header__nav">
          <?php
          wp_nav_menu([
            'theme_location' => 'header-nav',
            'container' => false,          // <div> を出さない
            'menu_class'  => 'header__nav__list', // <ul> にクラスを付ける
            'fallback_cb' => false         // メニュー未設定時に何も出さない
          ]);
          ?>
          <a class="header__btn" href="<?php echo get_permalink(get_page_by_path('contact')); ?>"><img class="header__btn-icon" src="<?php echo get_template_directory_uri(); ?>/img/mail-icon.svg" alt="">お問い合わせはこちら
          </a>
        </nav>
        <div class="header__open hidden-lg">
          <button
            type="button"
            id="js-drawer-button"
            class="header__drawer-icon hidden-lg"
            aria-label="メニューボタン">
            <span class="header__icon-bar hidden-lg"></span>
            <span class="header__icon-bar hidden-lg"></span>
            <span class="header__icon-bar hidden-lg"></span>
          </button>
        </div>
      </div>
    </header>
    <!-- /Header -->