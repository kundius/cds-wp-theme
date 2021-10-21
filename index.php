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
