
    <!DOCTYPE html>

    <html <?php language_attributes(); ?> style="--accent-color: <?php echo carbon_get_theme_option('primary')?>;">
        
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo carbon_get_theme_option('logo_accent')?> <?php echo carbon_get_theme_option('logo_text')?></title>
            
            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Roboto:wght@400;500;700;900&display=swap"
            rel="stylesheet">
            
            <!-- Styles -->
            <?php wp_head(); ?>

            <?php wp_link_pages() ?>
              <?php if( is_page( 'portfolio' ) ){?>
                <link rel="stylesheet" href="<?php echo esc_url()?>/assets/css/portfolio.css" <?php post_class(); ?>>
                <?php } else{?>
                  <link rel="stylesheet" href="<?php echo esc_url()?>/assets/css/home.css">

                <?php }?>
</head>

 <?php wp_body_open(); ?>
<body  <?php body_class( $class ); ?>>
  <div class="modal" id="contactModal" style="display: none;">
    <div class="modal__content">
      <button class="modal__close" type="button" id="contactModalClose">
        <img src="<?php echo esc_url()?>/assets/images/cross.svg" alt="Close modal">
      </button>
      <h3 class="modal__title"><?php echo carbon_get_theme_option('modal_title')?></h3>
<?php echo do_shortcode('[contact-form-7 id="57" title="Contact form 1"]')?>
      <!-- <form class="modal__form">
        <div class="form-field">
          <label for="nameInput" class="form-field__label">Ім'я</label>
          <div class="form-field__control">
            <input type="text" class="form-field__input form-field__input_icon-left" id="nameInput" autocomplete="name"
              placeholder="Ім'я">
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="form-field__icon">
              <path
                d="M14 0H2C1.175 0 0.5075 0.675 0.5075 1.5L0.5 10.5C0.5 11.325 1.175 12 2 12H14C14.825 12 15.5 11.325 15.5 10.5V1.5C15.5 0.675 14.825 0 14 0ZM13.7 3.1875L8.3975 6.5025C8.1575 6.6525 7.8425 6.6525 7.6025 6.5025L2.3 3.1875C2.1125 3.0675 2 2.865 2 2.6475C2 2.145 2.5475 1.845 2.975 2.1075L8 5.25L13.025 2.1075C13.4525 1.845 14 2.145 14 2.6475C14 2.865 13.8875 3.0675 13.7 3.1875Z"
                fill="#212121" />
            </svg>
          </div>
        </div>

        <div class="form-field">
          <label for="phoneInput" class="form-field__label">Телефон</label>
          <div class="form-field__control">
            <input type="tel" class="form-field__input form-field__input_icon-left" id="phoneInput" autocomplete="tel"
              placeholder="Телефон">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="form-field__icon">
              <path
                d="M11.996 9.12268L10.1579 8.91281C9.71644 8.86216 9.28224 9.01413 8.97105 9.32531L7.63948 10.6569C5.59147 9.61479 3.91254 7.94308 2.87044 5.88782L4.20925 4.54901C4.52043 4.23782 4.6724 3.80361 4.62174 3.36217L4.41188 1.53849C4.32504 0.807567 3.70991 0.257568 2.97176 0.257568H1.71979C0.902035 0.257568 0.221776 0.93783 0.272434 1.75559C0.655984 7.93584 5.59871 12.8714 11.7717 13.2549C12.5894 13.3056 13.2697 12.6253 13.2697 11.8075V10.5556C13.2769 9.82465 12.7269 9.20952 11.996 9.12268Z"
                fill="#212121" />
            </svg>
          </div>
        </div>

        <div class="form-field">
          <label for="emailInput" class="form-field__label">Пошта</label>
          <div class="form-field__control">
            <input type="email" class="form-field__input form-field__input_icon-left" id="emailInput"
              autocomplete="email" placeholder="Пошта">
            <svg width="16" height="12" viewBox="0 0 16 12" fill="none" xmlns="http://www.w3.org/2000/svg"
              class="form-field__icon">
              <path
                d="M14 0H2C1.175 0 0.5075 0.675 0.5075 1.5L0.5 10.5C0.5 11.325 1.175 12 2 12H14C14.825 12 15.5 11.325 15.5 10.5V1.5C15.5 0.675 14.825 0 14 0ZM13.7 3.1875L8.3975 6.5025C8.1575 6.6525 7.8425 6.6525 7.6025 6.5025L2.3 3.1875C2.1125 3.0675 2 2.865 2 2.6475C2 2.145 2.5475 1.845 2.975 2.1075L8 5.25L13.025 2.1075C13.4525 1.845 14 2.145 14 2.6475C14 2.865 13.8875 3.0675 13.7 3.1875Z"
                fill="#212121" />
            </svg>
          </div>
        </div>

        <div class="form-field">
          <label for="commentInput" class="form-field__label">Коментарій</label>
          <div class="form-field__control">
            <textarea class="form-field__input" id="commentInput" placeholder="Введіть текст" rows="6"></textarea>
          </div>
        </div>

        <div class="checkbox">
          <input type="checkbox" class="checkbox__input visually-hidden" id="contactAccept">
          <label for="contactAccept" class="checkbox__label">
            <svg class="checkbox__icon" width="13" height="10" viewBox="0 0 13 10" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M1.95703 4.75166L1.88825 4.68604L1.81923 4.75141L0.93123 5.59258L0.854858 5.66492L0.930974 5.73753L4.42671 9.07236L4.49574 9.1382L4.56476 9.07236L12.069 1.91352L12.1449 1.84116L12.069 1.76881L11.1873 0.927644L11.1183 0.861826L11.0493 0.927611L4.49577 7.17353L1.95703 4.75166Z"
                fill="white" stroke="white" stroke-width="0.2" />
            </svg>
          </label>
          <label for="contactAccept" class="checkbox__text">
            Дозволяю розсилку і приймаю <a href="#" target="_blank" class="link_underline">Умови договору</a>
          </label>
        </div>

        <button class="btn modal__submit" type="submit">Надіслати</button>
      </form> -->
    </div>
  </div>

  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="navbar">
          <a href="index.html" class="logo">
            <?php if(!empty(carbon_get_theme_option('logo_accent'))) {?>
              <span class="logo__accent"><?php echo carbon_get_theme_option('logo_accent')?></span><?php echo carbon_get_theme_option('logo_text')?>
              <?php } else {?>
                <img src="<?php echo carbon_get_theme_option('logo')?>?">
              <?php } ?>
          </a>

          <input type="checkbox" id="navbarTogglerCheckbox" class="visually-hidden">
          <label for="navbarTogglerCheckbox" class="navbar-toggler">
            <div class="navbar-toggler__line"></div>
            <div class="navbar-toggler__line"></div>
            <div class="navbar-toggler__line"></div>
          </label>

          <div class="navbar__content">
          <?php
          wp_nav_menu( array( 
            'theme_location' => '', 
            'container_class' => 'nav' ) ); 
          ?>
            <div class="header__info">
              <a href="mailto:<?php echo carbon_get_theme_option('mail_address')?>" class="header__email">
                <?php echo carbon_get_theme_option('mail_address')?>
              </a>
              <a href="tel:<?php echo carbon_get_theme_option('phone_number')?>" class="header__phone">
              <?php echo carbon_get_theme_option('phone_number')?>
              </a>

            </div>
          </div>
        </div>
      </div>
    </header>