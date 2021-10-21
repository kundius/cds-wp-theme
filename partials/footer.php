<footer class="footer">
  <div class="ui-container footer__container">
    <div class="footer-presence">
      <a href="/" class="footer-presence__logo">
        <img
          src="<?php echo get_bloginfo('template_url') ?>/design/dist/images/content/logo-grayscale.png"
          alt=""
          class="footer-presence__logo-image"
        />
        <span class="footer-presence__logo-text">ООО «ЦДС»</span>
      </a>
      <div class="footer-presence__slogan">
        Оформление разрешений для<br />
        перевозки крупногабаритных<br />
        (тяжеловесных) грузов (КГТ)
      </div>
    </div>

    <div class="footer__break-first"></div>

    <div class="footer__sitemap">
      <a href="<?php the_permalink(92) ?>">Карта сайта</a>
    </div>

    <div class="footer__break-second"></div>

    <div class="footer__counter">counter</div>

    <div class="footer__break-third"></div>

    <div class="footer__copyright">
      © 2021, <span>ООО ”ЦДС” - Оформление разрешений для перевозки крупногабаритных грузов.<br /><br /></span> Все права защищены.
    </div>

    <div class="footer__break-fourth"></div>

    <div class="footer__links">
      <a href="<?php the_permalink(90) ?>">Пользовательское соглашение</a>
      <a href="<?php the_permalink(3) ?>">Политика конфиденциальности и обработки персональных данных</a>
    </div>

    <div class="footer__break-fifth"></div>

    <div class="footer__creator">
      <a href="https://domenart-studio.ru" target="_blank">
        <img src="<?php echo get_bloginfo('template_url') ?>/design/dist/images/content/creator.png" alt="" />
      </a>
    </div>
  </div>
</footer>

<div class="modal micromodal-slide" id="modal-callback" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div
      class="modal__container"
      role="dialog"
      aria-modal="true"
      aria-labelledby="modal-callback-title"
    >
      <button
        class="modal__close"
        aria-label="Close modal"
        data-micromodal-close
      ></button>
      <div class="modal__title">Заказать обратный звонок</div>
      <?php echo do_shortcode('[hf_form slug="zakazat-obratnyj-zvonok"]') ?>
    </div>
  </div>
</div>

<div class="modal micromodal-slide" id="modal-request" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div
      class="modal__container"
      role="dialog"
      aria-modal="true"
      aria-labelledby="modal-callback-title"
    >
      <button
        class="modal__close"
        aria-label="Close modal"
        data-micromodal-close
      ></button>
      <div class="modal__title">
        Ваш расчет будет готов в течение рабочего дня.<br />
        Пожалуйста, сообщите, кому и куда его доставить
      </div>
      <?php echo do_shortcode('[hf_form slug="zakazat-raschet"]') ?>
    </div>
  </div>
</div>

<?php wp_enqueue_script('cds-wp-theme'); ?>
<?php wp_footer() ?>
