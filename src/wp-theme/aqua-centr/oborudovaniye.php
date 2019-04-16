
<?php
/*
Template Name: Оборудование
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
  <section class="products-main">
    <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-title-left">
                  <h1>ОБОРУДОВАНИЕ</h1>
                  <div class="section-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="products-main__grid">
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
                <div class="products-main__item">
                  <div class="products-main__item-title-wrapper">
                    <div class="products-main__item-title">
                      <?php the_title(); ?>
                    </div>
                  </div>
                  <div class="products-main__item-txt">
                    <div class="products-main__item-img">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/products/1.jpeg';?>" alt="">
                    </div>
                    <div class="products-main__item-descr">
                      <div class="products-main__item-descr-title">
                          Категории:
                      </div>
                      <ul class="products-main__item-descr-list">
                        <li>
                          Скважинные Насосы AquamotoR                            
                        </li>
                        <li>
                          Скважинные RНасосы КАСКАД    
                        </li>
                        <li>
                          Скважинные Насосы Grundfos   
                        </li>
                        <li>
                          Автоматика и гидробаки
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                  <div class="products-main__item-button">
                    <a class="button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                  </div>  
                </div>
              </div>
              <!-- <div class="col-6">
                <div class="products-item">
                  <div class="products-item__title">
                    Насосы и принадлежности
                  </div>
                  <div class="products-item__txt">
                    <div class="products-item__img">
                      <img src="<?php echo get_template_directory_uri() . '/assets/img/products/1.jpeg';?>" alt="">
                    </div>
                    <div class="products-item__descr">
                      <div class="products-item__descr-title">
                          Категории:
                      </div>
                      <ul class="products-item__descr-list">
                        <li>
                          Скважинные Насосы AquamotoR                            
                        </li>
                        <li>
                          Скважинные RНасосы КАСКАД    
                        </li>
                        <li>
                          Скважинные Насосы Grundfos   
                        </li>
                        <li>
                          Автоматика и гидробаки
                        </li>
                        ...
                      </ul>
                    </div>
                    <div class="products-item__txt-button">
                      <button>ПОДРОБНЕЕ</button>
                    </div>
                  </div>
                  
                </div>
              </div> -->

              <?php 

                }
                  
                wp_reset_postdata(); // сброс
              ?>
              


            </div>
            </div> 
            

          </div>
        </div>
        <!-- <div class="col-3">
          <div class="sidebar sidebar-services">
            <div class="sidebar-title">
                НАШИ УСЛУГИ
            </div>
            <ul class="sidebar-list">
              <li>
                  Монтаж водоочистного 
                  оборудования
              </li>
              <li>
                  Монтаж автономной 
                  канализации
                  
              </li>
              <li>
                 
                  Обустройство скважин
                  
 
              </li>
              <li>
                  Анализ воды
                  
              </li>
             
            </ul>

            <div class="sidebar-title">
                ВАЖНО ЗНАТЬ
            </div>
            <ul class="sidebar-list">
              <li>
                  Вредные примеси в воде               
              </li>
              <li>
                  Какие бывают системы 
                  очистки воды                 
              </li>
              <li>
                  Как не переплатить за 
                  водоочистку
              </li>
              <li>
                  10 рекомендаций: как 
                  сэкономить на расходе 
                  воды
              </li>
              <li>
                  Подбор оборудования 
              </li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </section>


<?php 
get_footer(); 
?>