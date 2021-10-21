<?php
/*
Template Name: Главная
*/
?>
<!DOCTYPE html>
<html lang="ru" itemscope itemtype="http://schema.org/WebSite">
  <head>
    <?php get_template_part('partials/head'); ?>
  </head>
  <body <?php body_class('body_float-header') ?>>
    <?php get_template_part('partials/header'); ?>

    <section class="intro">
      <div class="intro__container ui-container">
        <div class="intro__title">
          Оформление разрешений для перевозки крупногабаритного (тяжеловесного)
          груза
        </div>
        <div class="intro__submit-block">
          <button class="ui-button-primary" data-micromodal-trigger="modal-callback">Узнать как оформить</button>
        </div>
      </div>
    </section>

    <section class="home-services">
      <div class="ui-container">
        <div class="home-services__layout">
          <div class="home-services__title">ООО «ЦентрДорСервис»</div>
          <?php $parts = get_extended(get_post_field('post_content')) ?>
          <div class="home-services__content-first">
            <?php echo $parts['main'] ?>
          </div>
          <div class="home-services__content-second">
            <?php echo $parts['extended'] ?>
          </div>
          <div class="home-services__layout-items">
            <?php get_template_part('partials/services'); ?>
          </div>
        </div>
      </div>
    </section>

    <section class="section-term">
      <div class="ui-container">
        Средний срок оформления межрегионального разрешения по&nbsp;России
        с&nbsp;ООО&nbsp;«ЦентрДорСервис» - 10&nbsp;рабочих&nbsp;дней.
      </div>
    </section>

    <section class="home-about">
      <div class="home-about__layout">
        <div class="home-about__title">
          Что такое крупногабаритное транспортное средство:
        </div>
        <div class="home-about__figure">
          <div class="home-about__figure-image"></div>
          <div class="home-about__figure-desc">
            <p>
              <span>*</span> - предельно допустимые осевые нагрузки зависят
              от&nbsp;межосевых расстояний, типа дорог и&nbsp;скатности колес;
            </p>
            <p>
              <span>**</span> - предельно допустимая масса зависит от&nbsp;типа
              транспортного средства или комбинации транспортных средств,
              количества осей, приведенное значение действительно для автопоезда
              с&nbsp;5&nbsp;осями.
            </p>
          </div>
        </div>
        <div class="home-about__content">
          <p>
            <strong>
              Любой автомобильный транспорт (с&nbsp;грузом или даже без), масса
              и&nbsp;габаритные параметры которого превышают нормы,
              установленные правилами перевозки грузов автомобильным
              транспортом, относится к&nbsp;категории тяжеловесного и
              (или)&nbsp;крупногабаритного (КГТ), и&nbsp;его дальнейшая
              эксплуатация на дорогах общего пользования Российской Федерации
              возможна только при наличии специального разрешения.
            </strong>
          </p>
          <p>
            Мы поможем вам подготовиться к&nbsp;получению разрешения – составить
            маршрут, учесть нюансы логистики и&nbsp;рассчитать нагрузки
            на&nbsp;оси, собрать пакет документов.
          </p>
          <p>
            Законодательство позволяет официально поручить оформление
            разрешительной документации уполномоченному представителю. Мы станем
            вашим доверенным лицом в&nbsp;дорожных органах и&nbsp;возьмем
            на&nbsp;себя все вопросы, связанные с&nbsp;оформлением следующих
            видов разрешений:
          </p>
        </div>
        <div class="home-about__buttons">
          <a href="#" class="ui-button-secondary ui-button-secondary_small"
            >Межрегиональные по России</a
          >
          <a href="#" class="ui-button-secondary ui-button-secondary_small"
            >Международные</a
          >
        </div>
      </div>
    </section>

    <?php if ($guarantee = get_field('guarantee', 'options')): ?>
    <section class="section-guarantee">
      <div class="ui-container">
        <div class="section-guarantee__title">Наши гарантии</div>
        <div class="section-guarantee__grid">
          <?php foreach ($guarantee as $row): ?>
          <div class="section-guarantee__grid-cell">
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
      </div>
    </section>
    <?php endif; ?>

    <?php if (get_field('show_section_request')): get_template_part('partials/section', 'request'); endif; ?>

    <section class="home-procedure">
      <div class="ui-container">
        <div class="home-procedure__title">Как мы работаем</div>

        <div class="home-procedure__steps">
          <div class="steps">
            <div class="steps-item">
              <div class="steps-item__number">1</div>
              <div class="steps-item__title">
                Присылаете нам заявку в&nbsp;свободной форме
              </div>
              <div class="steps-item__arrow"></div>
              <svg width="399px" height="399px" class="steps-item__pattern" viewBox="0  0 399 399">
                <path
                  fill-rule="evenodd"
                  d="M107.453,142.279 L23.836,3.797 L398.994,154.791 L107.453,142.279 ZM73.622,373.998 L0.6,0.10 L151.874,259.726 L73.622,373.998 ZM378.398,174.346 L79.811,399.8 L239.307,171.670 L378.398,174.346 Z"
                />
              </svg>
            </div>
            <div class="steps-item">
              <div class="steps-item__number">2</div>
              <div class="steps-item__title">
                Занимаетесь прочими важными делами, требующими вашего внимания
              </div>
              <div class="steps-item__arrow"></div>
              <svg width="245px" height="245px" class="steps-item__pattern" viewBox="0  0 245 245">
                <path
                  fill-rule="evenodd"
                  d="M65.980,87.364 L14.636,2.331 L244.996,95.47 L65.980,87.364 ZM45.206,229.648 L0.3,0.6 L93.256,159.481 L45.206,229.648 ZM232.349,107.54 L49.6,245.5 L146.943,105.411 L232.349,107.54 Z"
                />
              </svg>
            </div>
            <div class="steps-item">
              <div class="steps-item__number">3</div>
              <div class="steps-item__title">
                В течение указанного срока получаете спецразрешение<br />
                с доставкой
              </div>
              <svg width="178px" height="178px" class="steps-item__pattern" viewBox="0  0 178 178">
                <path
                  fill-rule="evenodd"
                  d="M47.936,63.472 L10.633,1.693 L177.997,69.54 L47.936,63.472 ZM32.844,166.846 L0.2,0.4 L67.753,115.868 L32.844,166.846 ZM168.809,77.778 L35.605,178.3 L106.758,76.584 L168.809,77.778 Z"
                />
              </svg>
            </div>
          </div>
        </div>

        <div class="home-procedure__send">
          <button class="ui-button-primary ui-button-primary_small" data-micromodal-trigger="modal-request">
            Отправить заявку
          </button>
        </div>
      </div>
    </section>

    <?php if (get_field('show_section_contacts')): get_template_part('partials/section', 'contacts'); endif; ?>

    <?php get_template_part('partials/footer'); ?>
  </body>
</html>
