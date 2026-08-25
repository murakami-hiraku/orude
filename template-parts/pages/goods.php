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
        <?php
        get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
        <div class="page-goods__container">
          <h2 class="page-goods__ttl"></h2>
          <div class="page-goods__box">
            <p class="page-goods__txt"></p>
            <div class="page-doods__img">
              <img src="" alt="">
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- セクション2ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <!-- セクション3ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->
    <section class="page-goods__section page-goods__section--2 section fadein ">
      <div class="page-goods__inner inner">
        <?php
        get_template_part('/template-parts/parts/parts-bg-circle')
        ?>
        <div class="page-goods__container">
          <h2 class="page-goods__ttl"></h2>
          <div class="page-goods__box">
            <p class="page-goods__txt"></p>
          </div>
        </div>

        <div class="card-list">
          <ul class="card-list__grid card-list__grid--main">
            <li class="card-list__item">
              <div class="card">
                <img class="card__thumb" src="https://placehold.jp/400x260.png" alt="">
                <div class="card__body">
                  <p class="card__cat">カテゴリー</p>
                  <h3 class="card__title">カードタイトル 1</h3>
                  <p class="card__text">ここに説明文が入ります。2〜3行程度を想定しています。</p>
                </div>
              </div>
            </li>
            <li class="card-list__item">
              <div class="card">
                <img class="card__thumb" src="https://placehold.jp/400x260.png" alt="">
                <div class="card__body">
                  <p class="card__cat">カテゴリー</p>
                  <h3 class="card__title">カードタイトル 2</h3>
                  <p class="card__text">ここに説明文が入ります。2〜3行程度を想定しています。</p>
                </div>
              </div>
            </li>
            <li class="card-list__item">
              <div class="card">
                <img class="card__thumb" src="https://placehold.jp/400x260.png" alt="">
                <div class="card__body">
                  <p class="card__cat">カテゴリー</p>
                  <h3 class="card__title">カードタイトル 3</h3>
                  <p class="card__text">ここに説明文が入ります。2〜3行程度を想定しています。</p>
                </div>
              </div>
            </li>
          </ul>

          <div class="card-list__more" id="cardListMore">
            <ul class="card-list__grid">
              <li class="card-list__item">
                <div class="card">
                  <img class="card__thumb" src="https://placehold.jp/400x260.png" alt="">
                  <div class="card__body">
                    <p class="card__cat">カテゴリー</p>
                    <h3 class="card__title">カードタイトル 4</h3>
                    <p class="card__text">ここに説明文が入ります。2〜3行程度を想定しています。</p>
                  </div>
                </div>
              </li>
              <li class="card-list__item">
                <div class="card">
                  <img class="card__thumb" src="https://placehold.jp/400x260.png" alt="">
                  <div class="card__body">
                    <p class="card__cat">カテゴリー</p>
                    <h3 class="card__title">カードタイトル 5</h3>
                    <p class="card__text">ここに説明文が入ります。2〜3行程度を想定しています。</p>
                  </div>
                </div>
              </li>
              <li class="card-list__item">
                <div class="card">
                  <img class="card__thumb" src="https://placehold.jp/400x260.png" alt="">
                  <div class="card__body">
                    <p class="card__cat">カテゴリー</p>
                    <h3 class="card__title">カードタイトル 6</h3>
                    <p class="card__text">ここに説明文が入ります。2〜3行程度を想定しています。</p>
                  </div>
                </div>
              </li>
            </ul>
          </div>

          <div class="card-list__actions">
            <button
              type="button"
              class="card-list__toggle"
              id="cardListToggle"
              aria-expanded="false"
              aria-controls="cardListMore">
              <span class="card-list__toggle-text">もっと見る</span>
              <span class="card-list__toggle-icon" aria-hidden="true"></span>
            </button>
          </div>

        </div>
      </div>
    </section>
    <!-- セクション3ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー -->


    <!-- コンタクト -->
    <?php get_template_part('template-parts/section/section-contact'); ?>
    <!-- /コンタクト -->


  </main>

  <!-- フッター -->
  <?php get_footer(); ?>
  <!-- /フッター -->