<?php
$services = new WP_Query([
  'post_type' => 'page',
  'post_parent' => 25,
  'posts_per_page' => -1,
  'orderby' => ['menu_order' => 'ASC']
]);
?>

<div class="block-services">
  <div class="block-services__items">
    <?php foreach ($services->posts as $item): ?>
    <div class="block-services__items-row">
      <a href="<?php the_permalink($item->ID) ?>" class="card-light">
        <span class="card-light__icon">
          <?php the_field('icon', $item->ID) ?>
        </span>
        <span class="card-light__title">
          <?php echo $item->post_title ?>
        </span>
      </a>
    </div>
    <?php endforeach; ?>
  </div>
</div>
