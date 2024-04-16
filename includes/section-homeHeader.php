<header class='header'>
  <span class='header__glow'></span>

  <?php get_header(); ?>

  <div class="header__main container">
    <h1 class="header__main__title">Lorem Ipsum Is Simply<br><span class='header__main__title__subtitle'>Dummy Text</span></h1>

    <h3 class='header__main__description'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna </h3>

    <div class="header__main__explore">
      <button class="darkButton"><div class="darkButton__content">Explore</div></button>

      <div class="verticalBar"></div>

      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/innovation-excellence-award-logo.png'); ?>" alt="reward winner">

      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/reward.png'); ?>" alt="reward winner">
    </div>

    <div class="header__main__options">
      <div class="header__main__options__item">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/check-mark.svg'); ?>" alt="check mark"> Lorem Ipsum
      </div>

      <div class="header__main__options__item">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/check-mark.svg'); ?>" alt="check mark"> Lorem Ipsum
      </div>

      <div class="header__main__options__item">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/check-mark.svg'); ?>" alt="check mark"> Lorem Ipsum
      </div>  
    </div>
  </div>
</header>
