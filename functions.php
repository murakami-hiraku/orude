<?php

function my_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
  add_theme_support('title-tag');
}
add_action('after_setup_theme', 'my_setup');

function my_script_init()
{
  // リセットCSS
  wp_enqueue_style(
    "reset-css",
    get_template_directory_uri() . "/css/reset.css",
    array(),
    filemtime(get_theme_file_path('css/reset.css')),
    "all"
  );

  // Swiper CSS
  wp_enqueue_style(
    'swiper-css',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
    array('reset-css'),
    null,
    'all'
  );

  // メインスタイル
  wp_enqueue_style(
    "style-css",
    get_template_directory_uri() . "/css/style.css",
    array('reset-css', 'swiper-css'),
    filemtime(get_theme_file_path('css/style.css')),
    "all"
  );

  // Swiper JS（最初に読み込ませる）
  wp_enqueue_script(
    'swiper-js',
    'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
    array(),
    null,
    true
  );

  // メインJS（Swiperの後に読み込む）
  wp_enqueue_script(
    "script-js",
    get_template_directory_uri() . "/js/script.js",
    array("jquery", "swiper-js"),
    filemtime(get_theme_file_path('js/script.js')),
    true
  );

  // Swiper 初期化スクリプト（必ず swiper-js と script-js の後）
  wp_enqueue_script(
    'swiper-init-js',
    get_template_directory_uri() . '/js/swiper-init.js',
    array('swiper-js', 'script-js'),
    null,
    true
  );
}
add_action("wp_enqueue_scripts", "my_script_init");


// ヘッダー・フッターメニュー
function register_my_menus()
{
  register_nav_menus([
    'header-nav' => 'ヘッダーナビ',
    'footer-nav' => 'フッターメニュー',
  ]);
}
add_action('after_setup_theme', 'register_my_menus');

// カテゴリ表示件数10
function set_category_posts_per_page($query)
{
  if (!is_admin() && $query->is_main_query() && is_category()) {
    $query->set('posts_per_page', 10);
  }
}
add_action('pre_get_posts', 'set_category_posts_per_page');

// Contact Form 7 サンクスページリダイレクト
function enqueue_cf7_redirect_script()
{
  if (is_page(['contact'])) {
    wp_enqueue_script(
      'cf7-redirect',
      get_template_directory_uri() . '/js/cf7-redirect.js',
      [],
      null,
      true
    );
  }
}
add_action('wp_enqueue_scripts', 'enqueue_cf7_redirect_script');

