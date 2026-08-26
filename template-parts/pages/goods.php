<?php
$theme_uri = get_template_directory_uri();
$initial_cards = 2;

$lineups = [
  [
    'title' => 'タイトル',
    'subtitle' => 'サブタイトル',
    'cards' => [
      [
        'image' => $theme_uri . '/img/goods/goods-01.jpg',
        'alt' => 'カードタイトル1',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル1',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/goods/goods-02.jpg',
        'alt' => 'カードタイトル2',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル2',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/goods/goods-03.jpg',
        'alt' => 'カードタイトル3',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル3',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/goods/goods-04.jpg',
        'alt' => 'カードタイトル4',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル4',
        'text' => 'ここに説明文が入ります。',
      ],
    ],
  ],

  [
    'title' => 'タイトル2',
    'subtitle' => '',
    'cards' => [
      [
        'image' => $theme_uri . '/img/goods/goods-05.jpg',
        'alt' => 'カードタイトル5',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル5',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/goods/goods-06.jpg',
        'alt' => 'カードタイトル6',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル6',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/goods/goods-07.jpg',
        'alt' => 'カードタイトル7',
        'category' => 'カテゴリー',
        'title' => 'カードタイトル7',
        'text' => 'ここに説明文が入ります。',
      ],
    ],
  ],
];
?>


<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-goods">
  <?php
  get_template_part('template-parts/block/block-page-ttl')
  ?>

  <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--1 section fadein ">
    <div class="page-goods__inner inner">
      <?php
      get_template_part('/template-parts/parts/parts-bg-circle')
      ?>
      <div class="page-goods__container">
        <div class="page-goods__box">
          <h2 class="page-goods__ttl"></h2>
          <p class="page-goods__txt"></p>
        </div>
      </div>
    </div>

  </section>
  <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション2ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--2 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl"></h2>
        <div class="page-goods__box">
          <p class="page-goods__txt"></p>
          <div class="page-goods__img">
            <img src="" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- セクション2ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション3ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--3 section fadein">

    <div class="page-goods__inner inner">

      <div class="page-goods__container">

        <h2 class="page-goods__ttl"></h2>

        <div class="page-goods__box">
          <p class="page-goods__txt"></p>
        </div>

      </div>


      <!-- ラインナップ -->
      <?php foreach ($lineups as $lineup) : ?>

        <div class="lineup">

          <?php if (!empty($lineup['title'])) : ?>
            <h3 class="lineup-title">
              <?php echo esc_html($lineup['title']); ?>
            </h3>
          <?php endif; ?>


          <?php if (!empty($lineup['subtitle'])) : ?>
            <h4 class="lineup-subtitle">
              <?php echo esc_html($lineup['subtitle']); ?>
            </h4>
          <?php endif; ?>


          <?php
          get_template_part(
            'template-parts/parts/parts-lineup-cards',
            null,
            [
              'cards' => $lineup['cards'],
              'initial_cards' => $initial_cards,
            ]
          );
          ?>

        </div>

      <?php endforeach; ?>
      <!-- /ラインナップ -->


    </div>

  </section>
  <!-- セクション3ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション4ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--4 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">タイトル</h2>
        <div class="page-goods__info">
          <ul>
            <li>リスト</li>
            <li>リスト</li>
            <li>リスト</li>
            <li>リスト</li>
          </ul>
        </div>
      </div>
    </div>

  </section>
  <!-- セクション4ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション5ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--5 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">タイトル</h2>
        <p class="page-goods__txt">テキスト</p>

        <div class="page-goods__code">
          <h3 class="page-goods__code-ttl">タイトル</h3>
          <p>[<strong class="page-goods__code-num">コード</strong>]</p>
          <small>注意書き</small>
          <button>ボタン</button>
        </div>
      </div>
    </div>
  </section>
  <!-- セクション5ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション6ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--6 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">タイトル</h2>

        <div class="page-goods__flow">
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">タイトル</h3>
            <p class="card-txt">テキスト</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">タイトル</h3>
            <p class="card-txt">テキスト</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">タイトル</h3>
            <p class="card-txt">テキスト</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">タイトル</h3>
            <p class="card-txt">テキスト</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- セクション6ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション7ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--7 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">タイトル</h2>
        <p class="page-goods__txt">テキスト</p>

        <div class="page-goods__contact">
          <button>ボタン</button>
          <button>ボタン</button>
        </div>
      </div>
    </div>
  </section>
  <!-- セクション7ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->



  <!-- コンタクト -->
  <?php get_template_part('template-parts/section/section-contact'); ?>
  <!-- /コンタクト -->


</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->