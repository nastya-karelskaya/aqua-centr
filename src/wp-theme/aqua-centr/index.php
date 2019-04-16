<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package aqua-centr
 */

get_header();
?>

      
  <div class="picture">
    <div class="container">
    <h1>
    Аква-центр, Петрозаводск
    </h1>
    </div>
  </div>

  <section class="products">
      <div class="products-left__font"></div>
      <div class="products-right__font"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>ОБОРУДОВАНИЕ</h2>
          </div>
          <div class="section-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
          </div>
        </div>
      </div>
    </div>
    

    <div class="products-grid">
      
      <div class="container">
        <div class="row">
          <?php
              //     setup_postdata($post);
              $products_posts = get_posts( array(
              
                'orderby'     => 'date',
                'order'       => 'ASC',
                //'meta_key'    => '',
                //'meta_value'  =>'',
                'post_type'   => 'oborudovanie',
                //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
              ) );

              foreach( $products_posts as $post ){
                setup_postdata($post);
          ?>
            <div class="col-6">
              <div class="products-item">
                <div class="products-item__title">
                  <?php the_title(); ?>
                </div>
                <div class="products-item__descr">
                  <div class="products-item__img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/index/prod-2.png';?>" alt="">
                  </div>
                  <div class="products-item__txt">
                    <div class="products-item__txt-subtitle">
                      Категории:
                    </div>
                    <ul class="products-item__txt-list">
                      <li>Скважинные  Насосы AquamotoR</li>
                      <li>Скважинные RНасосы КАСКАД</li>
                      <li>Скважинные Насосы Grundfos</li>
                      <li>Автоматика и гидробаки </li>
                    
                    </ul>
                    
                  </div>
                </div>
                <div class="products-item__button">
                  <a class="button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>

          <?php 

            }
              
            wp_reset_postdata(); // сброс
          ?>

          <!-- <div class="col-6">
            <div class="products-item2">
              <div class="products-item2__title">Системы очистки воды</div>
              <div class="products-item2__descr">
                <div class="products-item2__img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/index/prod-1.png';?>" alt="">
                </div>
                <div class="products-item2__txt">
                  <div class="products-item2__txt-subtitle">
                      Категории:
                    </div>
                    <ul class="products-item2__txt-list">
                      <li>Типовые решения</li>
                      <li>Системы комплексной очистки от железа, марганца, 
                          жесткости</li>
                      
                    </ul>
                </div>
                </div>
              <div class="products-item2__button">
                <button>ПОДРОБНЕЕ</button>
              </div>
            </div>
          </div>
          
          <div class="col-6">
            <div class="products-item3">
              <div class="products-item3__title">Инженерная сантехника</div>
              <div class="products-item3__descr">
                <div class="products-item3__img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/index/prod-3.png';?>" alt="">
                </div>
                <div class="products-item3__txt">
                  <div class="products-item3__txt-subtitle">
                    Категории:
                  </div>
                  <ul class="products-item3__txt-list">
                    <li>Водопроводные трубы и фитинги</li>
                    <li>Канализационные трубы и фитинги</li>
                    <li>Запорная арматура</li>
                    
                  
                  </ul>
                  
                </div>
              </div>
              <div class="products-item3__button">
                <button>ПОДРОБНЕЕ</button>
              </div>
            </div>
          </div>
          
          <div class="col-6">
            <div class="products-item4">
              <div class="products-item4__title">Септики (био-станции)</div>
              <div class="products-item4__descr">
                <div class="products-item4__img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/index/prod-4.png';?>" alt="">
                </div>
                <div class="products-item4__txt">
                  <div class="products-item4__txt-subtitle">
                    Категории:
                  </div>
                  <ul class="products-item4__txt-list">
                    <li>Станции (Септики) Юнилос</li>
                    <li>Станции (Септики) Топас</li>
                    <li>Станции септики Евробион</li>
                    <li>Станции (СЕПТИКИ) VORTEX</li>
                  
                  </ul>
                </div>
              </div>
              <div class="products-item4__button">
                <button>ПОДРОБНЕЕ</button>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>УСЛУГИ</h2>
          </div>
          <div class="section-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
          </div>
        </div>
      </div>
    </div>
    

    <div class="services-row__wrapper">
        <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="services-row">

                  <?php
                      //     setup_postdata($post);
                      $services_posts = get_posts( array(
                      
                        'orderby'     => 'date',
                        'order'       => 'ASC',
                        //'meta_key'    => '',
                        //'meta_value'  =>'',
                        'post_type'   => 'uslugy',
                        //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                      ) );

                      foreach( $services_posts as $post ){
                        setup_postdata($post);
                  ?>


                  <div class="services-item1">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/index/service-1.png';?>" alt="">
                    <div class="services-item__title-wrapper">
                      <div class="services-item__title">
                        <?php the_title(); ?>
                        <!-- Обустройство 
                          скважин -->
                      </div>
                    </div>
                    
                    <a class="button services-item__button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                  </div>
                  <!-- <div class="services-item2">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/index/service-2.png';?>" alt="">
                    <div class="services-item__title">Анализ
                        воды
                        </div>
                    <div class="button services-item__button">ПОДРОБНЕЕ</div>
                  </div>
                  <div class="services-item3">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/index/service-3.png';?>" alt="">
                    <div class="services-item__title">Монтаж 
                        водоочистного 
                        оборудования</div>
                    <div class="button services-item__button">ПОДРОБНЕЕ</div>
                  </div>
                  <div class="services-item4">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/index/service-4.png';?>" alt="">
                    <div class="services-item__title">Монтаж 
                        автономной 
                        канализации</div>
                    <div class="button services-item__button">ПОДРОБНЕЕ</div>
                  </div>
                  <div class="services-item5">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/index/service-5.png';?>" alt="">
                    <div class="services-item__title">Сервис</div>
                    <div class="button services-item__button">ПОДРОБНЕЕ</div>
                  </div> -->

                  <?php 

                    }
                      
                    wp_reset_postdata(); // сброс
                  ?>
                </div>
              </div>
            </div>
          </div>
    </div>
      
    </div>
  </section>

  <section class="advantages">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>ВСЕГО 3 КАЧЕСТВА ОТЛИЧАЮТ НАС ОТ ДРУГИХ <br> 
            Но эти 3 качества выделяют нас:              </h2>
          </div>
          <div class="section-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
          </div>
        </div>
      </div>
    </div>
    <div class="advantages-row">
      <div class="container">
        <div class="row">
          <div class="col-4">
            <div class="advantages-item1">
              <div class="advantages-item__title">
                ВСЕГДА <br> ЧЕСТНЫЕ ЦЕНЫ!                    
              </div>
              <div class="advantages-item__imgs">
                <div class="advantages-item__img-1">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-3.png';?>" alt="">
                </div>
                <div class="advantages-item__img-2">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-2.png';?>" alt="">
                </div>
                <div class="advantages-item__img-3">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-1.png';?>" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="advantages-item2">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-center.png';?>" alt="">
                <div class="advantages-item__title">
                  мы не навязываем лишнего, предложим только необходимое!
                </div>
              
            </div>
          </div>
          <div class="col-4">
            <div class="advantages-item3">
              <div class="advantages-item__title">
                несем ответственность <br> за результат!
              </div>
              <div class="advantages-item__imgs">
                <div class="advantages-item__img-1">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-4.png';?>" alt="">
                </div>
                <div class="advantages-item__img-2">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-5.png';?>" alt="">
                </div>
                <div class="advantages-item__img-3">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-6.png';?>" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="order">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>ЗАКАЗАТЬ</h2>
          </div>
          <div class="section-img">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-6">
          <div class="order-subtitle">
            Для заказа услуг или продукции напишите нам!
          </div>
          <form class="order-form">
            <div class="row">
              <div class="col-6">
                <div class="order-form__name">
                  <div class="order-form__name-txt">Ваше имя:</div>
                  <input type="text" class="order-form__name-input" placeholder="Имя">
                </div>
                <div class="order-form__mail">
                  <div class="order-form__mail-txt">Ваш e-mail:</div>
                  <input type="text" class="order-form__mail-input" placeholder="E-mail">
                </div>
              </div>
              <div class="col-6">
                <div class="order-form__text">
                  <div class="order-form__text-txt">Ваше сообщение:</div>
                  <textarea class="order-form__text-input" placeholder="Сообщение"></textarea>
                </div>
              </div>
            </div>
            <div class="order-form__button">
              <input type="button" class="button" value="Заказать">
            </div>
          </form>
        </div>
        <div class="col-6">
          <div class="order-photo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/index/form-bg.jpeg';?>" alt="">
          </div>
        </div>
      </div>
    </div>  
  </section>

  <section class="about">
    <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title">
              <h2>О КОМПАНИИ</h2>
            </div>
            <div class="section-img">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-5">
            <div class="about-photo__wrapper">
              <div class="about-photo">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/index/order.png';?>" alt="">
              </div>
            </div>
          </div>
          <div class="col-7">
            <div class="about-txt">
              <div class="about-txt__descr">
                  "Аква-Центр" предоставляет услуги по поставке и монтажу оборудования 
                  для частных домов и коттеджей в Карелии.                  
              </div>
              <div class="about-txt__descr">
                  Широкий ассортимент продукции позволяет нам подобрать индивидуальное 
                  решение для каждого клиента.                   
              </div>
              <div class="about-txt__descr">
                  Мы поставляем и монтируем оборудование для 
              </div>
              <div class="about-txt__links">
                  <a href="#" class="about-txt__links">водоснабжения</a>,
                  <a href="#" class="about-txt__link">водоотведения</a>,
                  <a href="#" class="about-txt__link">водоподготовки</a>.
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>


<?php
// get_sidebar();
get_footer();
?>