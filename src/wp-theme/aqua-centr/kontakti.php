<?php
/*
Template Name: Контакты
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
  <!-- contacts -->
  <section class="contacts">
    <div class="container">
      <div class="row">
        <div class="col-12">
        <div class="section-subtitle" style="margin-bottom:35px;margin-top:0;">
                 <a href="<?php echo home_url();?>">Главная</a>
                  <?php 
                    $hole_page_url = get_the_permalink(); //get_site_url( get_the_ID()); 
                    $hole_page_pieces_all = explode("//", $hole_page_url);
                    $hole_page_pieces_raw = explode("/", $hole_page_pieces_all[1]);
                    $hole_page_pieces = array_diff($hole_page_pieces_raw, array(''));
                  
                    $link = '';//home_url();
                    $page = '';
                    $sub_link = '';

                    for($i=1; $i<count($hole_page_pieces); $i++) {
                      if($hole_page_pieces[$i] && (($i + 1) != (count($hole_page_pieces)) )) {

                      
                      $link .= '/' . $hole_page_pieces[$i];
                      $sub_link .= $hole_page_pieces[$i] . '/';
                      $page = get_page_by_path( $sub_link, OBJECT );

                  ?>
                      / <a href="<?php echo $link;?>">
                        <?php echo $page->post_title;?>
                      </a>

                  <?php  
                      }  
                      else 
                      {
                  ?>
                  / <?php the_title(); ?>
                  <?php     

                      }
                    }

                ?>

                </div>
          <div class="section-title">
            <h1>КОНТАКТЫ</h1>
          </div>
          <div class="section-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
          </div>
          <div class="section-subtitle">
            Для заказа услуг или продукции напишите нам!
          </div>
        </div>
      </div>
    </div>
    
    <div class="contacts-grid">
      <div class="contacts-map">
      <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A61064b46ae6deb08acbe94166a9feefe66939f17638543ffbc20869df2608cdf&amp;width=810&amp;height=450&amp;lang=ru_RU&amp;scroll=true"></script>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-7 col-xl-3"></div>
          <div class="col-12 col-md-6 col-lg-5 col-xl-4">
            <div class="contacts-info">
              <h2 class="contacts-info__title">
                  Контактная информация
              </h2>
              <div class="contacts-info__phone">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/phone-blue.png';?>" alt="Телефон">
                <div class="phone">
                    <a href="tel:88142280201">8 (8142) 28 02 01  </a> 
                </div>
                <div class="phone">
                    <a href="tel:88142283201">8 (8142) 28 32 01</a>
                </div>
              </div>
              <div class="contacts-info__time">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/clock-blue.png';?>" alt="Режим работы">
                <div class="time">
                    Пн-пт: с 9:00 до 18:00
                </div>
              </div>
              <div class="contacts-info__map">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/map-blue.png';?>" alt="Местоположение">
                <div class="map">
                    г. Петрозаводск, 
                    ул. Онежской флотилии, 29а
                </div>
              </div>
              <div class="contacts-info__mail">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/mail-blue.png';?>" alt="E-mail">
                <div class="mail">
                   <a href="mailto:ac-ptz@mail.ru">ac-ptz@mail.ru</a> 
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-xl-5">
            <!-- <form class="contacts-form">
              <div class="contacts-form__name">
                <label for="name">
                    Ваше имя:
                </label>
                <input type="text" name="name" placeholder="Телефон">
              </div>
              <div class="contacts-form__mail">
                  <label for="phone">
                      Ваш e-mail:
                  </label>
                  <input type="text" name="phone" placeholder="E-mail">
              </div>
              <div class="contacts-form__txt">
                  <label for="txt">
                      Ваше сообщение:
                  </label>
                  <textarea name="txt" id="" cols="30" rows="10" placeholder="Сообщение">

                  </textarea>
              
              </div>
              <div class="contacts-form__button">
                <button>Отправить</button>
              </div>
             
            </form> -->
            <div class="contacts-form">
              <?php echo do_shortcode('[contact-form-7 id="680" title="Контактная форма Контакты"]'); ?>
            </div>
            
            
          </div>
        </div>
      </div>
    </div>

  </section>
    <!-- ./contacts -->

<?php 
get_footer("gray"); 
?>