<?php
/*
Template Name: О нас
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

        <div class="section-page__content">
          <?php the_content() ?>
        </div>

        <div class="about-time">
          <div class="about-time__text">Работаем с</div>
          <div class="about-time__value">1998</div>
          <div class="about-time__text">года</div>
        </div>

        <div class="about-doing">
          <div class="about-doing__left">
            
          </div>
          <div class="about-doing__right">
            <div class="about-doing__title">Что мы делаем:</div>
            <ul class="about-doing__list">
              <li>Оформим разрешение</li>
              <li>Получим необходимые согласования</li>
              <li>Организуем сопровождение</li>
              <li>Оформим проект организации дорожного движения</li>
            </ul>
          </div>
        </div>

        <?php if ($guarantee = get_field('guarantee', 'options')): ?>
        <section class="about-guarantee">
          <div class="about-guarantee__title">Наши гарантии</div>
          <div class="about-guarantee__grid">
            <?php foreach ($guarantee as $row): ?>
            <div class="about-guarantee__grid-cell">
              <div class="card-secondary">
                <div class="card-secondary__image">
                  <?php echo $row['icon'] ?>
                </div>
                <div class="card-secondary__title">
                  <?php echo $row['title'] ?>
                </div>
                <div class="card-secondary__desc">
                  <?php echo $row['description'] ?>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </section>
        <?php endif; ?>
      </div>
    </main>

    <section class="section-term section-term_light">
      <div class="ui-container">
        Средний срок оформления межрегионального разрешения по&nbsp;России
        с&nbsp;ООО&nbsp;«ЦентрДорСервис» - 10&nbsp;рабочих&nbsp;дней.
      </div>
    </section>

    <?php if (get_field('show_section_request')): get_template_part('partials/section', 'request'); endif; ?>
    <?php if (get_field('show_section_contacts')): get_template_part('partials/section', 'contacts'); endif; ?>

    <?php get_template_part('partials/footer'); ?>
  </body>
</html>
