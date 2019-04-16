<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package aqua-centr
 */

?>

 

  <?php wp_footer(); ?>

  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-2">
          <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/logo-bottom.png';?>" alt="">
          </div>
  
        </div>
        <div class="col-10">
          <div class="footer-menus">
            <div class="footer-menu__services">
              <div class="footer-menu__title">наши услуги</div>
              <ul class="footer-menu__list">
                <li><a href="#">Монтаж водоочистного 
                    оборудования</a></li>
                <li><a href="#">
                    Монтаж автономной 
                    канализации</a></li>
                <li><a href="#">
                    Обустройство скважин</a></li>
                <li><a href="#">
                    Анализ воды</a></li>
                <li><a href="#">
                    Сервис</a></li>
              </ul>
            </div>
            <div class="footer-menu__products">
                <div class="footer-menu__title">оборудование</div>
                <ul class="footer-menu__list">
                  <li><a href="#">
                    Насосы и принадлежности</a></li>
                  <li><a href="#">
                      Инженерная сантехника</a></li>
                  <li><a href="#">
                      Системы очистки воды</a></li>
                  <li><a href="#">
                      Септики</a></li>
                </ul>
            </div>
            <div class="footer-menu__articles">
                <div class="footer-menu__title">важно знать</div>
                <ul class="footer-menu__list">
                  <li><a href="#">Вредные примеси в воде</a></li>
                  <li><a href="#">Какие бывают системы 
                      очистки воды
                      </a></li>
                  <li><a href="#">
                      <a href="#">Как не переплатить за 
                      водоочистку</a></li>
                  <li><a href="#">
                      <a href="#">10 рекомендаций: как 
                      сэкономить на расходе 
                      воды</a></li>
                  <li><a href="#">
                      Подбор оборудования</a></li>
                </ul>
            </div>
            <div class="footer-menu__contacts">
                <div class="footer-menu__title">контакты</div>
                <div class="footer-menu__items">
                  <div class="footer-menu__phones">
                    <div class="phone-icon">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/phone-blue.png';?>" alt="">
                    </div>
                    <div class="phone-txt">
                      <a href="tel:88142280201">8 (8142) 28 02 01</a>
                      <a href="tel:88142283201">8 (8142) 28 32 01</a>
                    </div>
                  </div>
                  <div class="footer-menu__time">
                      <div class="time-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/clock-blue.png';?>" alt="">
                      </div>
                      <a class="time-txt">Пн-пт: с 9:00 до 18:00</a>
                    </div>
                  
                  
                  <div class="footer-menu__map">
                    <div class="map-icon">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/map-blue.png';?>" alt="">
                    </div>
                    <a class="map-txt">г. Петрозаводск, 
                        ул. Онежской флотилии, 29а</a>
                  </div>
                  <div class="footer-menu__mail">
                      <div class="mail-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/mail-blue.png';?>" alt="">
                      </div>
                      <a href="mailto:ac-ptz@mail.ru" class="mail-txt">ac-ptz@mail.ru</a>
                    </div>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <div class="footer-bottom__copy">
                "Аква-Центр" @ 2019  www.ac-ptz.ru
            </div>
          </div>
          
          <div class="col-6">
            <a class="footer-bottom__politics">
                Политика конфиденциальности
            </a>
          </div>
        </div>
      </div>
        
    </div>
    
  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</body>
</html>