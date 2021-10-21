<?php
$paged = get_query_var('paged') ?: 1;
$laws = new WP_Query([
  'post_type' => 'law',
  'posts_per_page' => 4,
  'paged' => $paged,
  'order' => 'ASC',
  'orderby' => 'menu_order'
]);
?>

<div class="block-accordion">
  <div class="block-accordion__items">
    <?php foreach ($laws->posts as $item): ?>
    <div class="accordion-item">
      <div class="accordion-item__head">
        <div class="accordion-item__icon">
          <svg viewBox="0 0 44 48">
            <path fill-rule="evenodd" d="M7.889,9.765 L29.109,9.765 L29.109,13.114 L7.889,13.114 L7.889,9.765 L7.889,9.765 ZM37.5,8.669 L33.608,13.233 L33.608,6.216 C33.608,4.689 32.367,3.433 30.857,3.433 L6.141,3.433 C4.631,3.433 3.390,4.689 3.390,6.216 L3.390,41.779 C3.390,43.307 4.631,44.562 6.141,44.562 L30.857,44.562 C32.367,44.562 33.608,43.307 33.608,41.779 L33.608,34.678 L37.5,30.154 L37.5,41.771 C37.5,45.194 34.241,47.997 30.857,47.997 L6.141,47.997 C2.757,47.997 0.5,45.202 0.5,41.779 L0.5,6.216 C0.5,2.793 2.757,0.1 6.141,0.1 L30.857,0.1 C34.241,0.1 37.4,2.793 37.4,6.216 L37.5,8.669 L37.5,8.669 ZM22.643,33.762 L36.619,14.801 L41.556,18.68 L27.364,37.322 L23.441,37.753 L22.643,33.762 L22.643,33.762 ZM38.602,12.111 L38.895,11.713 C39.544,10.833 40.790,10.651 41.657,11.306 L43.213,12.479 C44.81,13.134 44.263,14.395 43.616,15.273 L43.538,15.378 L38.602,12.111 L38.602,12.111 ZM7.889,20.842 L27.990,20.842 L25.515,24.191 L7.889,24.191 L7.889,20.842 L7.889,20.842 ZM11.284,39.151 C9.409,39.151 7.889,37.613 7.889,35.716 C7.889,33.820 9.409,32.282 11.284,32.282 C13.159,32.282 14.679,33.820 14.679,35.716 C14.679,37.613 13.159,39.151 11.284,39.151 L11.284,39.151 ZM7.889,15.432 L29.109,15.432 L29.109,18.781 L7.889,18.781 L7.889,15.432 L7.889,15.432 Z" />
          </svg>
        </div>
        <div class="accordion-item__title">
          <?php echo $item->post_title ?>
        </div>
        <div class="accordion-item__toggle"></div>
      </div>
      <div class="accordion-item__body">
        <div class="accordion-item__content">
          <?php echo $item->post_content ?>
          <div class="accordion-item__collapse">
            <button type="button" class="ui-button-thirdy ui-button-thirdy_slide-up">Свернуть</button>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="block-accordion__pagination pagination">
    <?php echo paginate_links([
      'base' => '%_%',
      'format' => '?paged=%#%',
      'total' => $laws->max_num_pages,
      'current' => $paged,
      'prev_next' => false,
      'prev_text' => 'Предыдущая',
      'next_text' => 'Следующая'
    ]) ?>
  </div>
</div>
