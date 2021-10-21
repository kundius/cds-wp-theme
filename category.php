<?php
$category = get_queried_object();
$query_params = [
  'post_type' => 'post',
  'posts_per_page' => 16,
  'order' => 'DESC',
  'orderby' => 'date',
  'paged' => get_query_var('paged') ?: 1,
  'tax_query' => [
    'relation' => 'OR',
    [
			'taxonomy' => $category->taxonomy,
			'field' => 'id',
			'terms' => [$category->term_id]
    ]
  ]
];
$query = new WP_Query($query_params);
?>
<!DOCTYPE html>
<html lang="ru" itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head'); ?>
  </head>
  <body <?php body_class() ?>>
    <?php get_template_part('partials/header'); ?>

    <section class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <div class="ui-container">
        <?php bcn_display() ?>
      </div>
    </section>

    <main class="section-page">
      <div class="ui-container">
        <h1 class="section-page__title"><?php single_cat_title() ?></h1>

        <div class="section-page__content content">
          <?php echo term_description(); ?>
        </div>

        <?php if ($query->have_posts()): ?>
        <div class="block-articles">
          <div class="block-articles__items">
            <?php foreach ($query->posts as $item): ?>
            <div class="block-articles__items-row">
              <div class="articles-item">
                <?php if ($thumbnail = get_the_post_thumbnail($item, 'w200h240')): ?>
                <div class="articles-item__image">
                  <a href="<?php the_permalink($item->ID) ?>">
                    <?php echo $thumbnail ?>
                  </a>
                </div>
                <?php endif; ?>
                <div class="articles-item__body">
                  <div class="articles-item__date">
                    <?php echo get_the_date('d.m.Y', $item) ?>
                  </div>
                  <div class="articles-item__title">
                    <a href="<?php the_permalink($item->ID) ?>">
                      <?php echo get_the_title($item) ?>
                    </a>
                  </div>
                  <?php if ($excerpt = get_the_excerpt($item)): ?>
                    <div class="articles-item__desc">
                      <?php echo $excerpt ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>

          <div class="block-articles__pagination pagination">
            <?php echo paginate_links([
              'base' => '%_%',
              'format' => '?paged=%#%',
              'total' => $query->max_num_pages,
              'current' => $paged,
              'prev_next' => false,
              'prev_text' => 'Предыдущая',
              'next_text' => 'Следующая'
            ]) ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </main>

    <?php if (get_field('show_section_request')): get_template_part('partials/section', 'request'); endif; ?>
    <?php if (get_field('show_section_contacts')): get_template_part('partials/section', 'contacts'); endif; ?>

    <?php get_template_part('partials/footer'); ?>
  </body>
</html>
