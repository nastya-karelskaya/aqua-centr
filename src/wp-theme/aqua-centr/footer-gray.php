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

  <footer class="footer gray">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-5 col-md-4 col-lg-3 col-xl-2">
          <div class="footer-logo">
            <a href="<?php echo home_url(); ?>">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/logo-bottom.png';?>" alt="Логотип">
            </a>
            
          </div>
  
        </div>
        <div class="col-12 col-sm-7 col-md-8 col-lg-9 col-xl-10">
       
          <?php wp_nav_menu( [
            'theme_location'  => 'bottom',
            'menu'            => '', 
            'container'       => false, 
            // 'container_class' => '', 
            // 'container_id'    => '',
            'menu_class'      => 'footer-menus', 
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
          

          
            <div class="footer-menu__contacts">
                <div class="footer-menu__title">контакты</div>
                <div class="footer-menu__items">
                  <div class="footer-menu__phones">
                    <div class="phone-icon">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/phone-blue.png';?>" alt="Телефон">
                    </div>
                    <div class="phone-txt">
                      <a href="tel:88142280201">8 (8142) 28 02 01</a>
                      <a href="tel:88142283201">8 (8142) 28 32 01</a>
                    </div>
                  </div>
                  <div class="footer-menu__time">
                      <div class="time-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/clock-blue.png';?>" alt="Режим работы">
                      </div>
                      <a class="time-txt">Пн-пт: с 9:00 до 18:00</a>
                    </div>
                  
                  
                  <div class="footer-menu__map">
                    <div class="map-icon">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/map-blue.png';?>" alt="Местоположение">
                    </div>
                    <a class="map-txt">г. Петрозаводск, 
                        ул. Онежской флотилии, 29а</a>
                  </div>
                  <div class="footer-menu__mail">
                      <div class="mail-icon">
                        <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/mail-blue.png';?>" alt="E-mail">
                      </div>
                      <a href="mailto:ac-ptz@mail.ru" class="mail-txt">ac-ptz@mail.ru</a>
                    </div>
                    
                </div>
            </div>
         
        </div>
      </div>
    </div>
    
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="footer-bottom__copy">
                "Аква-Центр" @ 2019  www.ac-ptz.ru
            </div>
          </div>
          
          <div class="col-12 col-md-6">
            <a class="footer-bottom__politics" href="<?php echo get_site_url() . '/privacy-policy/';?>">
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

  <script>
    function init() {

        $(".navbar-nav > li.menu-item-has-children > a").on("mouseover", function(){
          if( $(window).width() > 991 ) {

            $activeSubMenu = $(".navbar-nav > li.menu-item-has-children > a.current");
          
            if($activeSubMenu) {      
              
              $activeSubMenu.siblings(".sub-menu").css({'display' : 'none'});
              $activeSubMenu.removeClass("current");
              
            }
             
              $(this).siblings(".sub-menu").css({'display' : 'block'});
              $(this).addClass('clicked');
              $(this).addClass('current');
              
          }

        });

        $(".navbar-nav > li.menu-item-has-children > a").on("mouseleave", function(){
          if( $(window).width() > 991 ) {

          $clickedSubMenu = $(".navbar-nav > li.menu-item-has-children > a.clicked");
        
            
            if(!$clickedSubMenu.hasClass("current")) {
              
              $(this).siblings(".sub-menu").css({'display' : 'none'});
              $(this).removeClass('clicked');
              $(this).removeClass('current');
             
            }


            
          }

        });


        $(".navbar-nav > li.menu-item-has-children > .sub-menu > li.menu-item-has-children").on("mouseover", function(){
          if( $(window).width() > 991) {
            
            $(this).find("ul.sub-menu").css({'display' : 'block'});
    
        
          }
          
        });

        $(".navbar-nav > li.menu-item-has-children > .sub-menu > li.menu-item-has-children").on("mouseleave", function(){
          if( $(window).width() > 991) {
            
            
            $(this).find("ul.sub-menu").css({'display' : 'none'});
       
            
          }
          
        });

        $(".navbar-nav > li.menu-item-has-children > .sub-menu").on("mouseleave", function(){ 
         
          $(this).css({'display' : 'none'});
        });

    }

    window.onload = init;

  </script>
  
</body>
</html>