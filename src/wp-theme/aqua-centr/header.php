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
          <div class="col-9">
            <div class="header-top__wrapper">

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
          <div class="col-3">
            <!-- <div class="header-top__search"> -->
              <!-- <input type="text" class="search-input" placeholder="Поиск">
              <img src="<?php //echo get_template_directory_uri() . '/assets/img/header/search.png';?>" alt="" class="search-img"> -->
              
            <!-- </div> -->
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="header-nav">
      <div class="container">
        
        <nav class="navbar navbar-expand-lg ">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/header/logo-top.png';?>"  alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <?php wp_nav_menu( [
            'theme_location'  => 'bottom',
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
            <!-- <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="#">О компании <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Оборудование</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Услуги</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Важно знать</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Контакты</a>
              </li>
            </ul> -->
          </div>
        </nav>
      </div>
    </div>
  </header>

    <?php wp_head(); ?>




    

      