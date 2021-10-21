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

    <main class="section-article">
      <div class="ui-container">
        <h1 class="section-article__title"><?php the_title() ?></h1>

        <div class="section-article__date">
          <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="16px">
            <path fill-rule="evenodd" d="M0.0,15.999 L0.0,0.999 L1.999,0.999 L1.999,2.999 L5.0,2.999 L5.0,0.999 L10.0,0.999 L10.0,2.999 L13.0,2.999 L13.0,0.999 L15.0,0.999 L15.0,15.999 L0.0,15.999 ZM14.0,3.999 L0.999,3.999 L0.999,14.999 L14.0,14.999 L14.0,3.999 ZM2.999,5.999 L1.999,5.999 L1.999,4.999 L2.999,4.999 L2.999,5.999 ZM2.999,7.999 L1.999,7.999 L1.999,6.999 L2.999,6.999 L2.999,7.999 ZM2.999,9.999 L1.999,9.999 L1.999,8.999 L2.999,8.999 L2.999,9.999 ZM2.999,11.999 L1.999,11.999 L1.999,10.999 L2.999,10.999 L2.999,11.999 ZM2.999,13.999 L1.999,13.999 L1.999,12.999 L2.999,12.999 L2.999,13.999 ZM5.0,5.999 L4.0,5.999 L4.0,4.999 L5.0,4.999 L5.0,5.999 ZM5.0,7.999 L4.0,7.999 L4.0,6.999 L5.0,6.999 L5.0,7.999 ZM5.0,9.999 L4.0,9.999 L4.0,8.999 L5.0,8.999 L5.0,9.999 ZM5.0,11.999 L4.0,11.999 L4.0,10.999 L5.0,10.999 L5.0,11.999 ZM5.0,13.999 L4.0,13.999 L4.0,12.999 L5.0,12.999 L5.0,13.999 ZM7.0,5.999 L6.0,5.999 L6.0,4.999 L7.0,4.999 L7.0,5.999 ZM7.0,7.999 L6.0,7.999 L6.0,6.999 L7.0,6.999 L7.0,7.999 ZM7.0,9.999 L6.0,9.999 L6.0,8.999 L7.0,8.999 L7.0,9.999 ZM7.0,11.999 L6.0,11.999 L6.0,10.999 L7.0,10.999 L7.0,11.999 ZM7.0,13.999 L6.0,13.999 L6.0,12.999 L7.0,12.999 L7.0,13.999 ZM9.0,5.999 L8.0,5.999 L8.0,4.999 L9.0,4.999 L9.0,5.999 ZM9.0,7.999 L8.0,7.999 L8.0,6.999 L9.0,6.999 L9.0,7.999 ZM9.0,9.999 L8.0,9.999 L8.0,8.999 L9.0,8.999 L9.0,9.999 ZM9.0,11.999 L8.0,11.999 L8.0,10.999 L9.0,10.999 L9.0,11.999 ZM9.0,13.999 L8.0,13.999 L8.0,12.999 L9.0,12.999 L9.0,13.999 ZM11.0,5.999 L10.0,5.999 L10.0,4.999 L11.0,4.999 L11.0,5.999 ZM11.0,7.999 L10.0,7.999 L10.0,6.999 L11.0,6.999 L11.0,7.999 ZM11.0,9.999 L10.0,9.999 L10.0,8.999 L11.0,8.999 L11.0,9.999 ZM11.0,11.999 L10.0,11.999 L10.0,10.999 L11.0,10.999 L11.0,11.999 ZM13.0,5.999 L12.0,5.999 L12.0,4.999 L13.0,4.999 L13.0,5.999 ZM13.0,7.999 L12.0,7.999 L12.0,6.999 L13.0,6.999 L13.0,7.999 ZM13.0,9.999 L12.0,9.999 L12.0,8.999 L13.0,8.999 L13.0,9.999 ZM13.0,11.999 L12.0,11.999 L12.0,10.999 L13.0,10.999 L13.0,11.999 ZM11.0,0.0 L12.0,0.0 L12.0,1.999 L11.0,1.999 L11.0,0.0 ZM2.999,0.0 L4.0,0.0 L4.0,1.999 L2.999,1.999 L2.999,0.0 Z" />
          </svg>
          <?php echo get_the_date('d.m.Y', get_the_ID()) ?>
        </div>

        <div class="section-article__content content">
          <?php the_content() ?>
        </div>

        <?php if ($related_articles = get_field('related_articles')): ?>
        <div class="section-article__related">
          <div class="related-articles">
            <div class="related-articles__title">Вам может быть интересно:</div>
            <div class="related-articles__items">
              <?php foreach ($related_articles as $item): ?>
              <div class="related-articles__items-row">
                <div class="related-articles__item">
                  <div class="related-articles__item-date">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12px" height="12px">
                      <path fill-rule="evenodd" d="M0.0,11.999 L0.0,0.749 L1.599,0.749 L1.599,2.249 L3.999,2.249 L3.999,0.749 L7.999,0.749 L7.999,2.249 L10.399,2.249 L10.399,0.749 L11.999,0.749 L11.999,11.999 L0.0,11.999 ZM11.199,2.999 L0.799,2.999 L0.799,11.249 L11.199,11.249 L11.199,2.999 ZM2.399,4.499 L1.599,4.499 L1.599,3.749 L2.399,3.749 L2.399,4.499 ZM2.399,5.999 L1.599,5.999 L1.599,5.249 L2.399,5.249 L2.399,5.999 ZM2.399,7.499 L1.599,7.499 L1.599,6.749 L2.399,6.749 L2.399,7.499 ZM2.399,8.999 L1.599,8.999 L1.599,8.249 L2.399,8.249 L2.399,8.999 ZM2.399,10.499 L1.599,10.499 L1.599,9.749 L2.399,9.749 L2.399,10.499 ZM3.999,4.499 L3.199,4.499 L3.199,3.749 L3.999,3.749 L3.999,4.499 ZM3.999,5.999 L3.199,5.999 L3.199,5.249 L3.999,5.249 L3.999,5.999 ZM3.999,7.499 L3.199,7.499 L3.199,6.749 L3.999,6.749 L3.999,7.499 ZM3.999,8.999 L3.199,8.999 L3.199,8.249 L3.999,8.249 L3.999,8.999 ZM3.999,10.499 L3.199,10.499 L3.199,9.749 L3.999,9.749 L3.999,10.499 ZM5.599,4.499 L4.799,4.499 L4.799,3.749 L5.599,3.749 L5.599,4.499 ZM5.599,5.999 L4.799,5.999 L4.799,5.249 L5.599,5.249 L5.599,5.999 ZM5.599,7.499 L4.799,7.499 L4.799,6.749 L5.599,6.749 L5.599,7.499 ZM5.599,8.999 L4.799,8.999 L4.799,8.249 L5.599,8.249 L5.599,8.999 ZM5.599,10.499 L4.799,10.499 L4.799,9.749 L5.599,9.749 L5.599,10.499 ZM7.199,4.499 L6.399,4.499 L6.399,3.749 L7.199,3.749 L7.199,4.499 ZM7.199,5.999 L6.399,5.999 L6.399,5.249 L7.199,5.249 L7.199,5.999 ZM7.199,7.499 L6.399,7.499 L6.399,6.749 L7.199,6.749 L7.199,7.499 ZM7.199,8.999 L6.399,8.999 L6.399,8.249 L7.199,8.249 L7.199,8.999 ZM7.199,10.499 L6.399,10.499 L6.399,9.749 L7.199,9.749 L7.199,10.499 ZM8.799,4.499 L7.999,4.499 L7.999,3.749 L8.799,3.749 L8.799,4.499 ZM8.799,5.999 L7.999,5.999 L7.999,5.249 L8.799,5.249 L8.799,5.999 ZM8.799,7.499 L7.999,7.499 L7.999,6.749 L8.799,6.749 L8.799,7.499 ZM8.799,8.999 L7.999,8.999 L7.999,8.249 L8.799,8.249 L8.799,8.999 ZM10.399,4.499 L9.599,4.499 L9.599,3.749 L10.399,3.749 L10.399,4.499 ZM10.399,5.999 L9.599,5.999 L9.599,5.249 L10.399,5.249 L10.399,5.999 ZM10.399,7.499 L9.599,7.499 L9.599,6.749 L10.399,6.749 L10.399,7.499 ZM10.399,8.999 L9.599,8.999 L9.599,8.249 L10.399,8.249 L10.399,8.999 ZM8.799,0.0 L9.599,0.0 L9.599,1.499 L8.799,1.499 L8.799,0.0 ZM2.399,0.0 L3.199,0.0 L3.199,1.499 L2.399,1.499 L2.399,0.0 Z" />
                    </svg>
                    <?php echo get_the_date('d.m.Y', $item) ?>
                  </div>
                  <div class="related-articles__item-title">
                    <a href="<?php the_permalink($item) ?>"><?php echo get_the_title($item) ?></a>
                  </div>

                  <?php if ($thumbnail = get_the_post_thumbnail($item, 'medium')): ?>
                  <div class="related-articles__item-figure">
                    <a href="<?php the_permalink($item) ?>">
                      <?php echo $thumbnail ?>
                    </a>
                  </div>
                  <?php endif; ?>

                  <?php if ($excerpt = get_the_excerpt($item)): ?>
                    <div class="related-articles__item-desc"><?php echo $excerpt ?></div>
                  <?php endif; ?>

                  <div class="related-articles__item-more">
                    <a href="<?php the_permalink($item) ?>" class="ui-button-thirdy">Читать дальше</a>
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
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
