<!-- ヘッダー -->
<?php get_header(); ?>
<!-- /ヘッダー -->

<main class="page-company">
  <?php
  get_template_part('template-parts/block/block-page-ttl');
  ?>

  <section class="page-company__section section fadein">
    <div class="page-company__inner inner">
      <div class="page-company__container">
        <?php
        get_template_part('template-parts/parts/parts-bg-flower--right')
        ?>
        <div class="page-company__box">
          <h2 class="page-company__ttl">会社概要</h2>
          <table class="page-company__table">
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">商号</th>
              <td class="page-company__table-input">株式会社アエル・デ</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">サービスブランド</th>
              <td class="page-company__table-input">オルデ</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">代表者</th>
              <td class="page-company__table-input">代表取締役　北池　章一</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">本社</th>
              <td class="page-company__table-input">〒558-0051<br>大阪市住吉区東粉浜<br class="hidden-tb">3-12-17</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">フリーダイヤル</th>
              <td class="page-company__table-input">0800-080-0188</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">営業時間</th>
              <td class="page-company__table-input">9:00〜18:00</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">創業</th>
              <td class="page-company__table-input">2025年7月31日</td>
            </tr>
            <tr class="page-company__table-list">
              <th class="page-company__table-ttl">資本金</th>
              <td class="page-company__table-input">100万円</td>
            </tr>
          </table>

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