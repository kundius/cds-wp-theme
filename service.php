<?php
/*
Template Name: Услуга
*/
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
        <h1 class="section-page__title"><?php the_title() ?></h1>

        <?php $includes = get_field('includes'); ?>
        <?php if (has_post_thumbnail() || !empty($includes)): ?>
        <div class="service-details">
          <div class="service-details__grid">
            <?php if (has_post_thumbnail()): ?>
            <div class="service-details__grid-left">
              <div class="service-details__thumbnail">
                <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
                  <?php the_post_thumbnail('medium'); ?>
                </a>
              </div>
            </div>
            <?php endif; ?>
            <?php if (!empty($includes)): ?>
            <div class="service-details__grid-right">
              <div class="service-includes">
                <div class="service-includes__title">Услуга включает:</div>
                <ul class="service-includes__list">
                  <?php foreach ($includes as $row): ?>
                  <li><?php echo $row['title'] ?></li>
                  <?php endforeach; ?>
                </ul>
                <div class="service-includes__request">
                  <button class="ui-button-secondary" data-micromodal-trigger="modal-callback">Заказать услугу</button>
                </div>
              </div>
            </div>
            <?php endif; ?>
          </div>
        </div>
        <?php endif; ?>

        <div class="section-page__content content">
          <?php the_content() ?>
        </div>
      </div>
    </main>

    <?php if (get_field('show_section_request')): get_template_part('partials/section', 'request'); endif; ?>
    <?php if (get_field('show_section_contacts')): get_template_part('partials/section', 'contacts'); endif; ?>

    <?php get_template_part('partials/footer'); ?>
  </body>
</html>
