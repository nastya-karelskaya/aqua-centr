<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aqua-centr
 */

?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Аква-Центр Петрозаводск</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="css/styles.css"> -->

</head>
<body>
  
  
  <header class="header">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-7 col-lg-9">

            <div class="header-top__wrapper">
              <div class="header-top__menu-mobile"></div>
              <div class="header-top__logo-mobile">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/header/logo-top.png';?>" alt="">
              </div>

              <div class="header-top__phones">
                <div class="phone-icon">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/header/phone.png';?>" alt="Телефон">
                </div>
                <div class="phone-txt">
                  <a href="tel:88142280201">8 (8142) 28 02 01</a>
                  <a href="tel:88142283201">8 (8142) 28 32 01</a>
                </div>
              </div>
            
              <div class="header-top__mail">
                <div class="mail-icon">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/header/mail.png';?>" alt="">
                </div>
                <a href="mailto:ac-ptz@mail.ru" class="mail-txt">ac-ptz@mail.ru</a>
              </div>
              <div class="header-top__time">
                <div class="time-icon">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/header/clock.png';?>" alt="">
                </div>
                <a class="time-txt">Пн-пт: с 9:00 до 18:00</a>
              </div>
            
              <div class="header-top__map">
                <div class="map-icon">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/header/map.png';?>" alt="">
                </div>
                <a class="map-txt">г. Петрозаводск, <br> 
                    ул. Онежской флотилии, 29а</a>
              </div>
            </div>
          </div>
          <div class="col-0 col-md-5 col-lg-3">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="header-nav">
      <div class="container">
        
        <nav class="navbar navbar-expand-lg">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/header/logo-top.png';?>"  alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <div class="navbar-toggler-icon">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
            </div>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <?php wp_nav_menu( [
            'theme_location'  => 'top',
            'menu'            => '', 
            'container'       => false, 
            // 'container_class' => '', 
            // 'container_id'    => '',
            'menu_class'      => 'navbar-nav', 
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 0,
            'walker'          => '',
          ] );?>
          
          </div>
        </nav>
      </div>
    </div>
  </header>

    <?php wp_head(); ?>




    

      