<?php
$paged = get_query_var('paged') ?: 1;
$projects = new WP_Query([
  'post_type' => 'project',
  'posts_per_page' => 18,
  'paged' => $paged,
  'order' => 'ASC',
  'orderby' => 'menu_order'
]);
?>

<?php if ($projects->have_posts()): ?>
<div class="block-projects">
  <div class="block-projects__items">
    <?php foreach ($projects->posts as $item): ?>
    <div class="block-projects__items-row">
      <div class="projects-item js-project-modal" data-id="<?php echo $item->ID ?>">
        <?php if ($thumbnail = get_the_post_thumbnail($item, 'w200h240')): ?>
        <div class="projects-item__image">
          <?php echo $thumbnail ?>
        </div>
        <?php endif; ?>
        <div class="projects-item__date">
          <?php echo get_the_date('d.m.Y', $item) ?>
        </div>
        <div class="projects-item__title">
          <?php echo get_the_title($item) ?>
        </div>
        <?php if ($excerpt = get_the_excerpt($item)): ?>
          <div class="projects-item__desc">
            <?php echo $excerpt ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php endforeach; ?>
  </div>

  <div class="block-accordion__pagination pagination">
    <?php echo paginate_links([
      'base' => '%_%',
      'format' => '?paged=%#%',
      'total' => $projects->max_num_pages,
      'current' => $paged,
      'prev_next' => false,
      'prev_text' => 'Предыдущая',
      'next_text' => 'Следующая'
    ]) ?>
  </div>
</div>
<?php endif; ?>
