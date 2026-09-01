<?php
$cards = $args['cards'] ?? [];
$initial_cards = $args['initial_cards'] ?? 2;
?>

<div class="card-list">

  <!-- 最初に表示するカード -->
  <ul class="card-list__grid card-list__grid--main">

    <?php foreach (array_slice($cards, 0, $initial_cards) as $card) : ?>

      <li class="card-list__item">

        <div class="card">

          <img
            class="card__thumb"
            src="<?php echo esc_url($card['image']); ?>"
            alt="<?php echo esc_attr($card['alt']); ?>">

          <div class="card__body">


            <h3 class="card__title">
              <?php echo esc_html($card['title']); ?>
            </h3>

            <?php if (!empty($card['price'])) : ?>
              <p class="card__price">
                <?php echo esc_html($card['price']); ?>
              </p>
            <?php endif; ?>

            <?php if (!empty($card['text'])) : ?>
              <p class="card__text">
                <?php echo esc_html($card['text']); ?>
              </p>
            <?php endif; ?>

          </div>

        </div>

      </li>

    <?php endforeach; ?>

  </ul>


  <!-- 追加カード -->
  <?php if (count($cards) > $initial_cards) : ?>

    <div class="card-list__more">

      <ul class="card-list__grid">

        <?php foreach (array_slice($cards, $initial_cards) as $card) : ?>

          <li class="card-list__item">

            <div class="card">

              <img
                class="card__thumb"
                src="<?php echo esc_url($card['image']); ?>"
                alt="<?php echo esc_attr($card['alt']); ?>">

              <div class="card__body">


                <h3 class="card__title">
                  <?php echo esc_html($card['title']); ?>
                </h3>

                <?php if (!empty($card['price'])) : ?>
                  <p class="card__price">
                    <?php echo esc_html($card['price']); ?>
                  </p>
                <?php endif; ?>

                <?php if (!empty($card['text'])) : ?>
                  <p class="card__text">
                    <?php echo esc_html($card['text']); ?>
                  </p>
                <?php endif; ?>

              </div>

            </div>

          </li>

        <?php endforeach; ?>

      </ul>

    </div>


    <!-- もっと見るボタン -->
    <div class="card-list__actions">

      <button
        type="button"
        class="card-list__toggle"
        aria-expanded="false">

        <span class="card-list__toggle-text">
          もっと見る
        </span>

        <span
          class="card-list__toggle-icon"
          aria-hidden="true">
        </span>

      </button>

    </div>
    <!-- /もっと見るボタン -->

  <?php endif; ?>

</div>