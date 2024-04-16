<div class="container navMenu">
  <!-- Output the logo image -->
  <a class="navMenu__logo" href="<?php echo esc_url(home_url('/')); ?>">
    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Logo.svg'); ?>" alt="Company Logo">

    Company
  </a>

  <div class="navMenu__burger"></div>

  <div class="navMenu__items">
    <div class="dropdown">
      <div class="dropdown__name">
        Services

        <div class="arrow"></div>
      </div>

      <div class="dropdown__content">
        lorem
      </div>
    </div>

    <div class="dropdown">
      <div class="dropdown__name">
        Case Studies
      </div>
    </div>

    <div class="dropdown">
      <div class="dropdown__name">
        Industries & Solutions

        <div class="arrow"></div>
      </div>

      <div class="dropdown__content">
        lorem
      </div>
    </div>

    <div class="dropdown">
      <div class="dropdown__name">
        Partnership Models

        <div class="arrow"></div>
      </div>

      <div class="dropdown__content">
        lorem
      </div>
    </div>

    <div class="dropdown">
      <div class="dropdown__name">
        Company

        <div class="arrow"></div>
      </div>

      <div class="dropdown__content">
        <?php
          wp_nav_menu(
              array(
                'theme-location' => 'top-menu',
              )
          );
        ?>
      </div>
    </div>
  </div>

  <button class="pinkButton">
    Get in touch
  </button>
</div>
