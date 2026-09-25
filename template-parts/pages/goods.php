<?php
$theme_uri = get_template_directory_uri();
// SPで最初に表示するカード枚数（PCは全件表示）
$initial_cards = 2;

$lineups = [
  [
    'slug' => 'premium',
    'title' => 'Premium Line',
    'subtitle' => '特別な一品を、お求めの方へ',
    'cards' => [
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-1.png',
        'alt' => 'inori 塩珠 遺骨封入お守り 金箔入り三粒 ブレスレット（ムーンストーン）',
        'title' => 'inori 塩珠 遺骨封入お守り 金箔入り三粒 ブレスレット（ムーンストーン）',
        'price' => '¥53,800（税込）',
        'text' => "三粒の塩珠に24金箔をあしらった、最上級の一品。\nやわらかな光を放つムーンストーンと組み合わせています。",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-2.png',
        'alt' => 'inori 遺骨封入お守りブレスレット（テラヘルツ）/ 塩珠三粒',
        'title' => 'inori 遺骨封入お守りブレスレット（テラヘルツ）/ 塩珠三粒',
        'price' => '¥53,800（税込）',
        'text' => "三粒の塩珠と、独特の質感を持つテラヘルツを組み合わせたブレスレット。",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-3.png',
        'alt' => '24金箔入り塩珠 inori 遺骨封入お守り イヤリング（ニッケルフリー）',
        'title' => '24金箔入り塩珠 inori 遺骨封入お守り イヤリング（ニッケルフリー）',
        'price' => '¥39,800（税込）',
        'text' => "金箔の輝きが上品に映えるイヤリング。金属アレルギーの方にも配慮したニッケルフリー仕様です。",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-4.png',
        'alt' => 'inori 遺骨封入お守り チェーンピアス 金箔入り',
        'title' => 'inori 遺骨封入お守り チェーンピアス 金箔入り',
        'price' => '¥39,800（税込）',
        'text' => "揺れるたびに光を纏う、繊細なチェーンピアス。",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-5.png',
        'alt' => 'inori 遺骨封入お守り ピアス（フック）金箔入り',
        'title' => 'inori 遺骨封入お守り ピアス（フック）金箔入り',
        'price' => '¥39,800（税込）',
        'text' => "シンプルなフックタイプ。日常使いにも馴染むデザインです。",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-6.png',
        'alt' => '塩珠 inori 遺骨封入お守り イヤリング（ニッケルフリー）',
        'title' => '塩珠 inori 遺骨封入お守り イヤリング（ニッケルフリー）',
        'price' => '¥35,800（税込）',
        'text' => "塩珠本来の透明感を活かした、やさしい佇まいのイヤリング。",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-7.png',
        'alt' => 'inori 遺骨封入お守り チェーンピアス',
        'title' => 'inori 遺骨封入お守り チェーンピアス',
        'price' => '¥35,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-8.png',
        'alt' => 'inori 遺骨封入お守り ピアス（フック）',
        'title' => 'inori 遺骨封入お守り ピアス（フック）',
        'price' => '¥35,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-9.png',
        'alt' => 'inori 塩珠 遺骨封入お守り 金箔入りブレスレット（ムーンストーン）',
        'title' => 'inori 塩珠 遺骨封入お守り 金箔入りブレスレット（ムーンストーン）',
        'price' => '¥35,800（税込）',
        'text' => "",
      ],
    ],
  ],

  [
    'slug' => 'standard',
    'title' => 'Standard Line',
    'subtitle' => '',
    'cards' => [
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-10.png',
        'alt' => '24金箔入り塩珠 遺骨封入お守り ネックレス【ゴールド／シルバー】',
        'title' => '24金箔入り塩珠 遺骨封入お守り ネックレス【ゴールド／シルバー】',
        'price' => '¥27,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-11.png',
        'alt' => 'inori 塩珠 遺骨封入お守りネックレス【ゴールド／シルバー】ステンレスチェーン',
        'title' => 'inori 塩珠 遺骨封入お守りネックレス【ゴールド／シルバー】ステンレスチェーン',
        'price' => '¥25,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-12.png',
        'alt' => 'inori 遺骨封入お守りブレスレット（バースデーストーン）/ 塩珠',
        'title' => 'inori 遺骨封入お守りブレスレット（バースデーストーン）/ 塩珠',
        'price' => '¥25,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-13.png',
        'alt' => '遺骨封入お守りブレスレット（テラヘルツ）/ 塩珠',
        'title' => '遺骨封入お守りブレスレット（テラヘルツ）/ 塩珠',
        'price' => '¥33,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-14.png',
        'alt' => 'inori 24金箔入り塩珠 遺骨封入お守り ブレスレット',
        'title' => 'inori 24金箔入り塩珠 遺骨封入お守り ブレスレット',
        'price' => '¥17,800（税込）',
        'text' => "",
      ],
      [
        'image' => $theme_uri . '/img/page-goods/goods-sec3-15.png',
        'alt' => 'inori 塩珠 遺骨封入お守り ブレスレット',
        'title' => 'inori 塩珠 遺骨封入お守り ブレスレット',
        'price' => '¥15,800（税込）',
        'text' => "",
      ],
    ],
  ],
];

// ご購入の流れ
$flow_steps = [
  [
    'image' => $theme_uri . '/img/page-goods/goods-sec6-1.png',
    'title' => 'inori公式ショップへ',
    'text' => '本ページのボタンより、inori公式オンラインショップへお進みください。',
  ],
  [
    'image' => $theme_uri . '/img/page-goods/goods-sec6-2.png',
    'title' => '商品をお選びください',
    'text' => 'ネックレス、ピアス、イヤリング、ブレスレットからお好みの一点を。',
  ],
  [
    'image' => $theme_uri . '/img/page-goods/goods-sec6-3.png',
    'title' => 'クーポンコードをご入力',
    'text' => 'お会計時、クーポンコード入力欄に上記のコードをご入力ください。',
  ],
  [
    'image' => $theme_uri . '/img/page-goods/goods-sec6-4.png',
    'title' => 'ご遺骨をご郵送',
    'text' => "ご注文後、inoriよりご案内する送付先へご遺骨をお送りください。\n必要な量は枝豆1粒ほどです。",
  ],
  [
    'image' => $theme_uri . '/img/page-goods/goods-sec6-5.png',
    'title' => 'お届け',
    'text' => "約5〜10日でお手元へお届けいたします。\n未使用のご遺骨も、専用ボトルに入れて一緒にご返送いたします。",
  ],
];
?>


<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-goods">
  <?php
  // ACF（display_title / page_ttl_bg）が未入力の場合は、ここで渡した値が使われます
  get_template_part('template-parts/block/block-page-ttl', null, [
    'bg' => $theme_uri . '/img/page-goods/goods-ttl-bg.jpg',
    'title' => '<span class="block-page-ttl__lead">「inori」遺骨メモリアルジュエリーのご紹介</span>あの子のぬくもりを、いつもそばに。',
  ]);
  ?>

  <!-- セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--1 section fadein">
    <div class="page-goods__inner inner">
      <?php get_template_part('template-parts/parts/parts-bg-circle'); ?>
      <div class="page-goods__container">
        <div class="page-goods__box">
          <h2 class="page-goods__ttl">ご遺骨の、新しい選択肢。</h2>
          <p class="page-goods__txt">火葬を終えたあと、「このご遺骨をどうすればいいのだろう」と悩まれる飼い主様は少なくありません。<br>
            納骨する、ご自宅で手元供養する——<br>
            そのどちらでもない、第三の選択肢があります。<br>
            大切なあの子のご遺骨を、身につけられるジュエリーに。いつでも、どこでも、そばに感じられるかたちで。</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /セクション１ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

  <!-- セクション2ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--2 section fadein">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">塩珠（しおたま）という、<br>世界にひとつのかたち</h2>
        <div class="page-goods__box">
          <p class="page-goods__txt">透明感あふれるガラスの中に、<br class="hidden-pc">
            ご遺骨と沖縄の塩を封じ込めた<br>
            inoriだけの遺骨ジュエリー「塩珠」。<br><br>
            炎で磨かれたガラスは澄んだ結晶となり、<br>
            その中に浮かぶ微細な気泡が、<br class="hidden-pc">
            光を受けて美しく輝きます。<br><br>
            塩は、古くから「守護」の象徴とされてきました。<br>
            大切な想いを、そっと守り続けます。<br><br>
            一点一点、すべて職人の手仕事で<br class="hidden-pc">
            お仕立てしております。<br>
            同じものは、ふたつとありません。<br><br>
            ※「塩珠」は商標登録済みです（2021年5月登録）</p>
          <div class="page-goods__img">
            <img class="sp" src="<?php echo $theme_uri; ?>/img/page-goods/goods-sec2-sp.png" alt="塩珠のブレスレット">
            <img class="pc" src="<?php echo $theme_uri; ?>/img/page-goods/goods-sec2-pc.png" alt="塩珠のブレスレット">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /セクション2ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

  <!-- セクション3ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--3 section fadein">
    <div class="page-goods__inner inner">
      <?php get_template_part('template-parts/parts/parts-bg-circle'); ?>

      <div class="page-goods__container">
        <h2 class="page-goods__ttl">Lineup ｜ 商品のご紹介</h2>
        <div class="page-goods__box">
          <p class="page-goods__txt">ネックレス、ピアス、イヤリング、ブレスレット。<br class="hidden-pc">
            日々の暮らしに寄り添うかたちをお選びいただけます。</p>
        </div>
      </div>

      <!-- ラインナップ -->
      <?php foreach ($lineups as $lineup): ?>
        <div class="lineup lineup--<?php echo esc_attr($lineup['slug']); ?>">

          <?php if (!empty($lineup['title'])): ?>
            <h3 class="lineup-title"><?php echo esc_html($lineup['title']); ?></h3>
          <?php endif; ?>

          <?php if (!empty($lineup['subtitle'])): ?>
            <p class="lineup-subtitle"><?php echo esc_html($lineup['subtitle']); ?></p>
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
  <!-- /セクション3ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

  <!-- セクション5ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--5 section fadein">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">ご購入をお考えの方へ</h2>
        <p class="page-goods__txt">INORI公式オンラインショップにてご購入の際、下記クーポンコードを入力欄にご入力ください。<br>
          全商品1,000円OFFにてご購入いただけます。</p>

        <div class="page-goods__code">
          <h3 class="page-goods__code-ttl">COUPON CODE</h3>
          <p class="page-goods__code-txt">［ <strong class="page-goods__code-num">ollude1000</strong> ］</p>
          <div class="page-goods__btn page-goods__btn--sec5">
            <?php get_template_part('template-parts/parts/parts-btn', null, [
              'text' => 'inori公式ショップで商品を見る',
              'has_icon' => false,
              'class' => 'page-goods__code--btn',
              'link' => 'https://inoriokinawa.base.shop/',
            ]); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /セクション5ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

  <!-- セクション6ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--6 section fadein">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">Flow ｜ ご購入の流れ</h2>

        <ol class="page-goods__flow">
          <?php foreach ($flow_steps as $i => $step): ?>
            <li class="page-goods__flow-item">
              <div class="page-goods__flow-step">
                <span class="page-goods__flow-step-label">STEP</span>
                <span class="page-goods__flow-step-num"><?php echo $i + 1; ?></span>
              </div>
              <div class="page-goods__flow-img">
                <img src="<?php echo esc_url($step['image']); ?>" alt="">
              </div>
              <h3 class="page-goods__flow-ttl"><?php echo esc_html($step['title']); ?></h3>
              <p class="page-goods__flow-txt"><?php echo nl2br(esc_html($step['text'])); ?></p>
            </li>
          <?php endforeach; ?>
        </ol>
      </div>
    </div>
  </section>
  <!-- /セクション6ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

  <!-- セクション7ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
  <section class="page-goods__section page-goods__section--7 section fadein">
    <div class="page-goods__inner inner">
      <div class="page-goods__container">
        <h2 class="page-goods__ttl">大切なあの子を、いつもそばに。</h2>
        <p class="page-goods__txt">ご不明な点やご相談は、<br>
          inoriまでお気軽に下記の公式LINEおよびInstagramからお問い合わせください。</p>

        <div class="page-goods__contact">
          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text' => '「inori」公式LINEはこちら',
            'has_icon' => false,
            'class' => 'page-goods__btn page-goods__btn--line',
            'link' => 'https://line.me/R/ti/p/%40114vrmsl',
          ]); ?>
          <?php get_template_part('template-parts/parts/parts-btn', null, [
            'text' => '「inori」Instagramはこちら',
            'has_icon' => false,
            'class' => 'page-goods__btn page-goods__btn--insta',
            'link' => 'https://www.instagram.com/inoriokinawa?utm_source=ig_web_button_share_sheet&igsi=ZDNlZDc0MzIxNw==',
          ]); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- /セクション7ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->

</main>

<!-- フッター -->
<?php get_footer(); ?>
<!-- /フッター -->