<footer class="footer">
      <div class="container">
        <div class="footer__grid">
          <div class="footer__info">
            <a href="index.html" class="logo logo_dark footer__logo">
              <span class="logo__accent">Web</span>Studio
            </a>
            <a href="<?php echo carbon_get_theme_option('place_url')?>" class="footer__address footer__link"><?php echo carbon_get_theme_option('place')?></a>
            <a href="mailto:<?php echo carbon_get_theme_option('mail_address')?>" class="footer__email footer__link"><?php echo carbon_get_theme_option('mail_address')?></a>
            <a href="tel:<?php echo carbon_get_theme_option('phone_number')?>" class="footer__phone footer__link"><?php echo carbon_get_theme_option('phone_number')?></a>
          </div>

          <div class="footer__socials">
            <h3 class="footer__title">Приєднюйтесь</h3>
            <?php $footerSocials = carbon_get_theme_option('socials')?>
            <?php if(! empty($footerSocials)) : ?>
            <ul class="socials socials_dark footer__socials-list">
            <?php foreach($footerSocials as $footerSocial) : ?>
                <li class="socials__item">
                <a href="<?php echo $footerSocial['socials_url']?>" class="socials__link" target="_blank">
                    <img src="<?php echo $footerSocial['socials_img']?>">
                </a>
              </li>
            <?php endforeach ?>
            </ul>
            <?php endif ?>
          </div>

          <div class="footer__subscribe">
            <h3 class="footer__title">Підпишіться на розсилку</h3>

            <form class="footer__form form">
              <input type="email" class="form__control footer__input" required placeholder="E-mail">
              <button type="submit" class="btn footer__subscribe-btn">
                Підписатись<img src="<?php echo esc_url()?>/assets/images/icon-send.svg" class="btn__icon btn__icon_after">
              </button>
              <!-- <input type="submit" value="Підписатись"> -->
            </form>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <?php if( is_page( 'portfolio' ) ){?>
      <script src="<?php echo esc_url()?>/assets/js/portfolio.js"></script>
  <?php }?>
  <?php wp_footer()?>
</body>

</html>
