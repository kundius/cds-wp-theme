<?php
/*
Template Name: Контакты
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

    <section class="contacts-headline">
      <div class="ui-container">
        <h1>Контакты</h1>
      </div>
      <div class="contacts-headline__map">
        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af039f35a7c3bd8081da0222c49f4bfdde0690b0fc1f2bca01aeb65a49ff706ac&amp;width=100%25&amp;height=285&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>
    </section>

    <section class="section-contacts">
      <div class="ui-container">
        <div class="section-contacts__grid">
          <div class="section-contacts__grid-cell">
            <div class="contacts-snippet">
              <div class="contacts-snippet__title">Наш адрес:</div>
              <div class="contacts-snippet__group">
                <div class="contacts-snippet__address">
                  394036, г. Воронеж, ул. Сакко и Ванцетти, дом 96, оф. 2
                </div>
                <div>
                  <div class="contacts-snippet__phones">
                    <svg
                      width="20px"
                      height="21px"
                      class="contacts-snippet__phones-icon"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M9.999,20.804 C4.476,20.804 0.0,16.326 0.0,10.802 C0.0,5.277 4.476,0.799 9.999,0.799 C15.522,0.799 19.999,5.277 19.999,10.802 C19.999,16.326 15.522,20.804 9.999,20.804 ZM9.918,2.743 C5.457,2.743 1.841,6.360 1.841,10.823 C1.841,15.284 5.457,18.902 9.918,18.902 C14.379,18.902 17.995,15.284 17.995,10.823 C17.995,6.360 14.379,2.743 9.918,2.743 ZM13.457,14.624 L13.455,14.624 C13.455,14.625 12.807,15.7 12.807,15.7 L11.448,12.710 L12.97,12.326 C12.237,12.244 12.418,12.288 12.501,12.429 C12.502,12.430 13.560,14.216 13.560,14.216 L13.560,14.217 C13.639,14.353 13.605,14.536 13.457,14.624 ZM8.324,11.993 C6.416,8.676 7.435,7.213 7.795,6.943 L9.186,9.290 C8.851,9.488 9.12,9.934 9.211,10.369 C9.214,10.390 10.178,12.13 10.186,12.19 C10.684,12.693 10.954,13.4 11.274,12.815 L12.630,15.106 C12.246,15.344 10.334,15.489 8.324,11.993 ZM10.12,8.802 L10.11,8.803 C10.11,8.804 9.363,9.186 9.363,9.186 L7.974,6.837 L8.623,6.453 C8.763,6.371 8.943,6.415 9.27,6.556 C9.28,6.557 10.116,8.395 10.116,8.395 L10.116,8.397 C10.196,8.531 10.160,8.714 10.12,8.802 Z"
                      />
                    </svg>
                    <a href="#">+7 (473) 255-34-46</a>
                    <a href="#">+7 (473) 255-34-49</a>
                  </div>
                  <div class="contacts-snippet__emails">
                    <svg
                      width="15px"
                      height="11px"
                      class="contacts-snippet__emails-icon"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M0.794,10.599 L14.324,10.599 C14.362,10.599 14.397,10.590 14.429,10.575 L9.793,6.227 L7.559,8.932 L5.325,6.227 L0.688,10.575 C0.720,10.590 0.756,10.599 0.794,10.599 ZM0.546,10.223 L4.579,5.324 L0.546,0.441 L0.546,10.223 ZM0.868,0.77 L0.984,0.164 L7.559,7.179 L14.133,0.164 L14.250,0.77 L0.868,0.77 ZM14.572,0.441 L10.539,5.324 L14.572,10.223 L14.572,0.441 Z"
                      />
                    </svg>
                    <a href="mailto:vdomov@yandex.ru">vdomov@yandex.ru</a>
                  </div>
                </div>
                <div class="contacts-snippet__time">
                  <svg
                    width="20px"
                    height="21px"
                    class="contacts-snippet__time-icon"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M9.999,20.848 C4.476,20.848 0.0,16.369 0.0,10.845 C0.0,5.321 4.476,0.842 9.999,0.842 C15.522,0.842 19.999,5.321 19.999,10.845 C19.999,16.369 15.522,20.848 9.999,20.848 ZM9.918,2.787 C5.457,2.787 1.841,6.404 1.841,10.866 C1.841,15.328 5.457,18.946 9.918,18.946 C14.379,18.946 17.995,15.328 17.995,10.866 C17.995,6.404 14.379,2.787 9.918,2.787 ZM12.252,12.854 L9.199,12.854 C8.778,12.854 8.437,12.512 8.437,12.92 L8.437,7.459 C8.437,7.38 8.778,6.697 9.199,6.697 C9.619,6.697 9.960,7.38 9.960,7.459 L9.960,11.331 L12.252,11.331 C12.672,11.331 13.14,11.671 13.14,12.92 C13.14,12.512 12.672,12.854 12.252,12.854 Z"
                    />
                  </svg>
                  <strong>Пн - Пт, 9:00 - 18:00</strong> <span>Перерыв с 13:00 - 14:00</span>
                </div>
              </div>
            </div>
          </div>
          <div class="section-contacts__grid-cell">
            <div class="feedback-form">
              <div class="feedback-form__title">Обратная связь</div>
              <?php echo do_shortcode('[hf_form slug="obratnaya-svyaz"]') ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/footer'); ?>
  </body>
</html>
