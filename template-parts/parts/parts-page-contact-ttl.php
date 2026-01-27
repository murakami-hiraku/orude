          <?php
          // 安全策：もし値が渡されなかったら「入力」にしておく
          $step = $args['step'] ?? '入力';
          ?>

          <h2 class="parts-page-contact-ttl">お問い合わせ・お申込み<?php echo esc_html($step); ?></h2>