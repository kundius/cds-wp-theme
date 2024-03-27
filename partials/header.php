<div class="drawer">
  <button class="drawer__close js-drawer-toggle"></button>
  
  <div class="drawer__container">
    <div class="drawer__header">
      <div class="drawer__logo-and-address">
        <a href="/" class="drawer__logo">
          <img
            src="<?php echo get_bloginfo('template_url') ?>/design/dist/images/content/logo.png"
            alt=""
            class="drawer__logo-image"
          />
          <span class="drawer__logo-text">ООО «ЦДС»</span>
        </a>
        <div class="drawer__address">
          Воронеж, ул. Сакко и Ванцетти, д. 96, оф.2
        </div>
      </div>

      <a href="tel:" class="drawer__callback js-header-callback">
        <svg width="19px" height="20px" viewBox="0 0 19 20">
          <path fill-rule="evenodd" d="M5.578,14.311 C3.299,12.119 0.118,7.370 1.24,3.822 C2.591,-1.32 4.879,1.141 7.133,3.806 C8.620,5.563 6.525,6.304 5.318,7.174 C3.315,9.480 10.410,16.574 12.715,14.571 C13.585,13.365 14.326,11.269 16.84,12.756 C18.748,15.10 20.923,17.298 16.66,18.865 C12.520,20.8 7.771,16.591 5.578,14.311 L5.578,14.311 Z" />
        </svg>
      </a>
    </div>

    <div class="drawer__body">
      <?php wp_nav_menu([
        'theme_location' => 'main',
        'container' => false,
        'menu_class' => 'drawer__menu'
      ]); ?>

      <div class="drawer__contacts">
        <div class="drawer__phones">
          <a href="tel:+7 (905) 650-27-17">+7 (905) 650-27-17</a>
          <a href="tel:+7 (473) 255-34-46">+7 (473) 255-34-46</a>
        </div>
        <div class="drawer__time">
          Пн-Пт: с 9:00 до 18:00<br />
          Перерыв 13:00 - 14:00
        </div>
      </div>
    </div>
  </div>
</div>

<header class="header header_intro">
  <div class="header__container">
    <?php if (is_new_year()): ?>
    <div class="header_new_year_left_top_2"></div>
    <div class="header_new_year_right_top_2"></div>
    <div class="header_new_year_middle_top_1"></div>
    <?php endif; ?>

    <button class="header-toggle js-drawer-toggle">
      <span></span><span></span><span></span>
    </button>

    <div class="header-presence">
      <div class="header-presence__logo-and-address">
        <a href="/" class="header-presence__logo">
          <img
            src="<?php echo get_bloginfo('template_url') ?>/design/dist/images/content/logo.png"
            alt=""
            class="header-presence__logo-image"
          />
          <span class="header-presence__logo-text">ООО «ЦДС»</span>
        </a>
        <div class="header-presence__address">
          Воронеж, ул. Сакко и Ванцетти, д. 96, оф.2
        </div>
      </div>
      <div class="header-presence__slogan-and-time">
        <div class="header-presence__slogan">
          Оформление документов для перевозки крупногабаритных грузов
        </div>
        <div class="header-presence__time">
          <svg viewBox="0 0 16 16">
            <path
              d="M7.999,15.990 C3.581,15.990 0.0,12.408 0.0,7.990 C0.0,3.572 3.581,0.9 7.999,0.9 C12.417,0.9 15.999,3.572 15.999,7.990 C15.999,12.408 12.417,15.990 7.999,15.990 ZM7.934,1.545 C4.366,1.545 1.473,4.438 1.473,8.7 C1.473,11.575 4.366,14.469 7.934,14.469 C11.503,14.469 14.396,11.575 14.396,8.7 C14.396,4.438 11.503,1.545 7.934,1.545 ZM9.802,9.597 L7.359,9.597 C7.23,9.597 6.750,9.324 6.750,8.987 L6.750,5.282 C6.750,4.945 7.23,4.672 7.359,4.672 C7.695,4.672 7.968,4.945 7.968,5.282 L7.968,8.378 L9.802,8.378 C10.138,8.378 10.411,8.651 10.411,8.987 C10.411,9.324 10.138,9.597 9.802,9.597 Z"
            />
          </svg>
          Пн - Пт, 9:00 - 18:00
        </div>
      </div>
    </div>

    <nav class="header-menu">
      <?php wp_nav_menu([
        'theme_location' => 'main',
        'container' => false
      ]); ?>
    </nav>

    <div class="header-contacts">
      <div class="header-contacts__phones_and_email">
        <div class="header-contacts__phones">
          <a href="tel:+7 (905) 650-27-17" class="header-contacts__phone">+7 (905) 650-27-17</a>
          <a href="tel:+7 (473) 255-34-46" class="header-contacts__phone">+7 (473) 255-34-46</a>
        </div>
        <a href="#" class="header-contacts__email">
          <svg viewBox="0 0 13 10">
            <path
              d="M11.999,9.999 L8.793,5.387 L6.559,8.92 L4.325,5.387 L0.999,9.999 L11.999,9.999 ZM0.0,8.999 L3.579,4.485 L0.0,0.0 L0.0,8.999 ZM0.999,0.0 L6.559,6.339 L11.999,0.0 L0.999,0.0 ZM12.999,0.0 L9.539,4.485 L12.999,8.999 L12.999,0.0 Z"
            />
          </svg>
          <span>vdomov@yandex.ru</span>
        </a>
      </div>
      <button
        class="header-contacts__callback js-call-or-modal"
        data-tel="+74732553446"
        data-modal="modal-callback"
      >
        <svg viewBox="0 0 17 17">
          <path
            d="M15.653,15.926 L15.649,15.927 C15.650,15.928 14.28,16.624 14.28,16.624 L10.630,12.445 L12.251,11.747 C12.603,11.597 13.54,11.678 13.264,11.935 C13.265,11.937 15.912,15.183 15.912,15.183 L15.911,15.186 C16.110,15.433 16.24,15.766 15.653,15.926 ZM2.815,11.142 C-1.955,5.111 0.593,2.449 1.494,1.959 L4.972,6.227 C4.134,6.587 4.536,7.397 5.34,8.190 C5.42,8.228 7.452,11.177 7.473,11.188 C8.720,12.415 9.394,12.980 10.195,12.637 L13.585,16.804 C12.625,17.234 7.842,17.499 2.815,11.142 ZM7.37,5.339 L7.36,5.342 C7.36,5.343 5.415,6.37 5.415,6.37 L1.941,1.767 L3.563,1.68 C3.913,0.919 4.365,0.998 4.575,1.257 C4.576,1.257 7.299,4.598 7.299,4.598 L7.298,4.602 C7.497,4.848 7.409,5.179 7.37,5.339 Z"
          />
        </svg>
      </button>
    </div>
  </div>
</header>

<div class="header-placeholder"></div>
