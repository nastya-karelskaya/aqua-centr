
<?php
/*
Template Name: Важно знать
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
       <section class="posts">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h1>Важно знать</h1>
          </div>
          <div class="section-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="posts-grid">
      <div class="container">
          <div class="row">

            <?php
                //     setup_postdata($post);
                $important_posts = get_posts( array(
                
                  'orderby'     => 'date',
                  'order'       => 'ASC',
                  //'meta_key'    => '',
                  //'meta_value'  =>'',
                  'post_type'   => 'statiyi',
                  //'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $important_posts as $post ){
                  setup_postdata($post);
            ?>

              <div class="col-12 col-md-6">
                <div class="posts-grid__item">
                  <div class="posts-grid__item-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/posts/post-1.jpeg';?>" alt="">
                  </div>
                  <div class="posts-grid__item-txt">
                    <a href="<?php the_permalink();?>" class="posts-grid__item-title">
                      <?php the_title(); ?>
                    </a>
                    <div class="posts-grid__item-descr">
                      Содержание железа и марганца может 
                      нанести непоправимый вред вашему 
                      здоровью, вызывать аллергическую 
                      реакцию, а также у некоторых людей 
                      может быть причиной болезни ..
                    </div>
                  </div>
                  <div class="posts-grid__item-button">
                    <a href="<?php the_permalink();?>" class="button">ПОДРОБНЕЕ</a>
                  </div>
                </div>
              </div>

              <?php 

                }
                  
                wp_reset_postdata(); // сброс
              ?>

              <!-- <div class="col-12 col-md-6">
                <div class="posts-grid__item2">
                  <div class="posts-grid__item2-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/posts/post-2.jpeg';?>" alt="">
                  </div>
                  <div class="posts-grid__item2-txt">
                    <div class="posts-grid__item2-title">
                      Какие бывают системы 
                      очистки воды
                    </div>
                    <div class="posts-grid__item2-descr">
                      Разберём плюсы и минусы некоторых 
                      из них.Потребителю в наше время 
                      очень сложно определится с выбором 
                      системы очистки воды, в виду их 
                      многообразия ...
                    </div>
                  </div>
                  <div class="posts-grid__item2-button">
                    <button>ПОДРОБНЕЕ</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mt-5">
                <div class="posts-grid__item3">
                  <div class="posts-grid__item3-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/posts/post-3.jpeg';?>" alt="">
                  </div>
                  <div class="posts-grid__item3-txt">
                    <div class="posts-grid__item3-title">
                      Как не переплатить за 
                      водоочистку.
                    </div>
                    <div class="posts-grid__item3-descr">
                      Системы очистки воды требуют от 
                      владельцев частных домов, не малых 
                      затрат и к выбору нужно подходить 
                      очень внимательно. Высокая стоимость 
                      их связана с тем, что ...
                    </div>
                  </div>
                  <div class="posts-grid__item3-button">
                    <button>ПОДРОБНЕЕ</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-6 mt-5">
                <div class="posts-grid__item4">
                  <div class="posts-grid__item4-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/posts/post-4.jpeg';?>" alt="">
                  </div>
                  <div class="posts-grid__item4-txt">
                    <div class="posts-grid__item4-title">
                      10 рекомендаций: как 
                      экономить деньги 
                      на расходе воды
                    </div>
                    <div class="posts-grid__item4-descr">
                      Если у Вас есть желание сохранить 
                      свой бюджет и не тратиться на воду 
                      больше чем необходимо, возьмите на 
                      заметку несколько наших ...
                    </div>
                  </div>
                  <div class="posts-grid__item4-button">
                    <button>ПОДРОБНЕЕ</button>
                  </div>
                </div>
              </div>

              
              <div class="col-12 mt-5">
                <div class="posts-grid__item5">
                  <div class="posts-grid__item5-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/posts/post-5.jpeg';?>" alt="">
                  </div>
                  <div class="posts-grid__item5-txt">
                    <div class="posts-grid__item5-title">
                      Подбор оборудования
                    </div>
                    <div class="posts-grid__item5-descr">
                      Фильтры для загородного водоснаб-
                      жения из скважины принципиально 
                      отличаются от картриджных и малых 
                      засыпных, которые стоят в городских 
                      квартирах. По используемым 
                      технологиям и высокой ...
                    </div>
                  </div>
                  <div class="posts-grid__item5-button">
                    <button>ПОДРОБНЕЕ</button>
                  </div>
                </div>
              </div> -->
              
            </div>
      </div>
      
    </div>
  </section>


<?php 
get_footer(); 
?>