
<?php
/*
Template Name: Услуги
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
  <section class="services-main">
    <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-title-left">
                  <h1>УСЛУГИ</h1>
                  <div class="section-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="services-main__descr">
              <div class="row">
                <div class="col-6">
                    Мы предоставляем все виды услуг по водо-
                    подготовке и водоочистке по доступным це-
                    нам и гарантируем полную техническую и 
                    информационную поддержку.                   
                </div>
                <div class="col-6">
                    Для заказа оборудования и консультаций 
                    обращайтесь к нашим специалистам по 
                    указанным телефонам: 
                    <div>
                        <span>8 (8142) 28 02 01</span>   <span>8 (8142) 28 32 01</span>  
                    </div>
                                  
                </div>
              </div>
            </div>

            <div class="services-main__grid">
            <div class="row">
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
              <div class="col-6">
                <div class="services-main__item">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/uslugi/1.jpeg';?>" alt="">
                  <div class="services-main__item-title-wrapper">
                    <div class="services-main__item-title">
                        <?php the_title(); ?>
                    </div>
                  </div>
                  
                  <a class="button services-main__item-button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                </div>
              </div>

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


<?php 
get_footer(); 
?>