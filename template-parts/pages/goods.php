<?php
$theme_uri = get_template_directory_uri();
$initial_cards = 2;

$lineups = [
  [
    'title' => 'Premium Line',
    'subtitle' => '特別な一品を、お求めの方へ',
    'cards' => [
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-1.png',
        'alt' => 'カードタイトル1',
        'title' => 'カードタイトル1',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-2.png',
        'alt' => 'カードタイトル2',
        'title' => 'カードタイトル2',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-3.png',
        'alt' => 'カードタイトル3',
        'title' => 'カードタイトル3',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-4.png',
        'alt' => 'カードタイトル4',
        'title' => 'カードタイトル4',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-5.png',
        'alt' => 'カードタイトル4',
        'title' => 'カードタイトル4',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-6.png',
        'alt' => 'カードタイトル4',
        'title' => 'カードタイトル4',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-7.png',
        'alt' => 'カードタイトル4',
        'title' => 'カードタイトル4',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-8.png',
        'alt' => 'カードタイトル4',
        'title' => 'カードタイトル4',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-9.png',
        'alt' => 'カードタイトル4',
        'title' => 'カードタイトル4',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
    ],
  ],

  [
    'title' => 'Standard Line',
    'subtitle' => '',
    'cards' => [
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-10.png',
        'alt' => 'カードタイトル5',
        'title' => 'カードタイトル5',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-11.png',
        'alt' => 'カードタイトル6',
        'title' => 'カードタイトル6',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-12.png',
        'alt' => 'カードタイトル7',
        'title' => 'カードタイトル7',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-13.png',
        'alt' => 'カードタイトル7',
        'title' => 'カードタイトル7',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-14.png',
        'alt' => 'カードタイトル7',
        'title' => 'カードタイトル7',
        'price' => '¥000,000',
        'text' => 'ここに説明文が入ります。',
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-15.png',
        'alt' => 'カードタイトル7',
        'title' => 'カードタイトル7',
        'price' => '¥000,000',
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
          <h2 class="page-goods__ttl">ご遺骨の、新しい選択肢。</h2>
          <p class="page-goods__txt">火葬を終えたあと、「このご遺骨をどうすればいいのだろう」と悩まれる飼い主様は少なくありません。納骨する、ご自宅で手元供養する——
            そのどちらでもない、第三の選択肢があります。大切なあの子のご遺骨を、身につけられるジュエリーに。いつでも、どこでも、そばに感じられるかたちで。オルデでは、遺骨ジュエリー専門店「inori」と提携し、心を込めてお作りするメモリアルジュエリーをご案内しております。</p>
        </div>
      </div>
    </div>

  </section>
  <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション2ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--2 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">塩珠（しおたま）という、<br>世界にひとつのかたち</h2>
        <div class="page-goods__box">
          <p class="page-goods__txt">透明感あふれるガラスの中に、
            ご遺骨と沖縄の塩を封じ込めたinoriだけの遺骨ジュエリー「塩珠」。炎で磨かれたガラスは澄んだ結晶となり、その中に浮かぶ微細な気泡が、
            光を受けて美しく輝きます。塩は、古くから「守護」の象徴とされてきました。大切な想いを、そっと守り続けます。一点一点、すべて職人の手仕事で
            お仕立てしております。同じものは、ふたつとありません。

            ※「塩珠」は商標登録済みです（2021年5月登録）</p>
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

        <h2 class="page-goods__ttl">Lineup ｜ 商品のご紹介</h2>

        <div class="page-goods__box">
          <p class="page-goods__txt">ネックレス、ピアス、イヤリング、ブレスレット。
            日々の暮らしに寄り添うかたちをお選びいただけます。</p>
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
        <h2 class="page-goods__ttl">はじめての方へ<br>
          ｜ 安心してお任せいただくために</h2>
        <div class="page-goods__info">
          <ul>
            <li class="info-list">
              <h3>ご遺骨は、ごくわずかな量で製作できます</h3>
              <p>必要なご遺骨は、枝豆1粒ほど。実際に使用するのは2〜3粒ほどのごく少量です。「ほとんど残らなくなってしまうのでは」というご心配はいりません。</p>
            </li>
            <li class="info-list">
              <h3>未使用のご遺骨は、大切にご返却いたします</h3>
              <p>製作に使用しなかったご遺骨は、名入れ専用のボトルに入れてお手元へお返しいたします。</p>
            </li>
            <li class="info-list">
              <h3>納期は約5〜10日</h3>
              <p>ご遺骨をお預かりしてから、およそ5〜10日でお届けいたします。一点一点、職人が心を込めてお仕立てしております。</p>
            </li>
            <li class="info-list">
              <h3>金属アレルギーにも配慮</h3>
              <p>イヤリング・ピアスはニッケルフリー仕様をご用意しております。
              </p>
            </li>
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
        <h2 class="page-goods__ttl">オルデのお客様へ</h2>
        <p class="page-goods__txt">INORI公式オンラインショップにてご購入の際、下記クーポンコードを入力欄にご入力ください。
          全商品1,000円OFFにてご購入いただけます。</p>

        <div class="page-goods__code">
          <h3 class="page-goods__code-ttl">COUPON CODE</h3>
          <p>[<strong class="page-goods__code-num">ollude1000</strong>]</p>
          <small>注意書き</small>
          <button>inori公式ショップで商品を見る</button>
        </div>
      </div>
    </div>
  </section>
  <!-- セクション5ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <!-- セクション6ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--6 section fadein ">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">Flow ｜ ご購入の流れ</h2>

        <div class="page-goods__flow">
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">inori公式ショップへ</h3>
            <p class="card-txt">本ページのボタンより、inori公式オンラインショップへお進みください。</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">商品をお選びください</h3>
            <p class="card-txt">ネックレス、ピアス、イヤリング、ブレスレットからお好みの一点を。</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">クーポンコードをご入力</h3>
            <p class="card-txt">お会計時、クーポンコード入力欄に上記のコードをご入力ください。</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">ご遺骨をご郵送</h3>
            <p class="card-txt">ご注文後、inoriよりご案内する送付先へご遺骨をお送りください。必要な量は枝豆1粒ほどです。</p>
          </div>
          <div class="page-goods__flow-item">
            <img src="" alt="">
            <h3 class="card-ttl">お届け</h3>
            <p class="card-txt">約5〜10日でお手元へお届けいたします。未使用のご遺骨も、専用ボトルに入れて一緒にご返送いたします。</p>
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
        <h2 class="page-goods__ttl">大切なあの子を、いつもそばに。</h2>
        <p class="page-goods__txt">ご不明な点やご相談は、<br>
          inoriまでお気軽に下記の公式LINEおよびInstagramからお問い合わせください。</p>

        <div class="page-goods__contact">
          <button>公式LINEはこちら</button>
          <button>Instagramはこちら</button>
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