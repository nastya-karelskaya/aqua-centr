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
    <div class="picture-content">
      <div class="picture-img">
        <img src="<?php echo get_template_directory_uri() . '/assets/img/index/picture-smaller.png';?>" alt="Аква-Центр, оборудование">
      </div>
    
      <a href="<?php echo get_site_url() . '/oborudovaniye/sistemy-ochistki-vody/';?>" target="_blank" class="link-systems">системы <br> очистки воды</a>
      <a href="<?php echo get_site_url() . '/oborudovaniye/septiki-bio-stanczii/';?>" target="_blank" class="link-septics">автономная <br> канализация</a>
      <a href="<?php echo get_site_url() . '/oborudovaniye/inzhenernaya-santehnika';?>" target="_blank" class="link-hidro">гидроаккумулятор <br> и автоматика</a>
      <a href="<?php echo get_site_url() . '/oborudovaniye/nasosy-i-prinadlezhnosti';?>" target="_blank" class="link-pumps">скважинный <br> насос</a>

      <h1>
      Аква-центр, Петрозаводск
      </h1>
    </div>
    
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
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
          </div>
        </div>
      </div>
    </div>
    

    <div class="products-grid">
      
      <div class="container">
        <div class="row">

          <?php
             //     setup_postdata($post);
             $products_parent = get_page_by_title( 'Оборудование', OBJECT, 'page' );
             //echo $products_parent->ID;
             $products_args = array(
              'sort_order'   => 'ASC',
              'sort_column'  => 'post_title',
              'hierarchical' => 1,
              'exclude'      => '',
              'include'      => '',
              'meta_key'     => '',
              'meta_value'   => '',
              'authors'      => '',
              'child_of'     => $products_parent->ID,
              'parent'       => $products_parent->ID,
              'exclude_tree' => '',
              'number'       => '',
              'offset'       => 0,
              'post_type'    => 'page',
              'post_status'  => 'publish',
            ); 
            $products_pages = get_pages( $products_args );
            
            foreach( $products_pages as $post ){
              setup_postdata($post);
              //echo $post->ID . ' ' . $post->post_title . ' ';
            //echo  get_field( "vehicle_mark", $post->ID);
            $product_img = get_field( "vehicle_img", get_the_ID());
            if( get_field( "vehicle_mark", get_the_ID()) ) {
              
        ?>
        
            <div class="col-12 col-lg-6">
              <div class="products-item">
                <h3 class="products-item__title">
                  <?php the_title(); ?>
                </h3>
                <div class="products-item__descr">
                  <div class="products-item__img">
                    <img src="<?php echo $product_img;?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="products-item__txt">
                    <div class="products-item__txt-subtitle">
                      Категории:
                    </div>
                    <!-- <div class="products-item__txt-list-wrapper"> -->
                      <ul class="products-item__txt-list">
                      <?php 
                        $children_args = array(
                          'sort_order'   => 'ASC',
                          'sort_column'  => 'post_title',
                          'hierarchical' => 1,
                          'exclude'      => '',
                          'include'      => '',
                          'meta_key'     => '',
                          'meta_value'   => '',
                          'authors'      => '',
                          'child_of'     => get_the_ID(),
                          'parent'       => get_the_ID(),
                          'exclude_tree' => '',
                          'number'       => '',
                          'offset'       => 0,
                          'post_type'    => 'page',
                          'post_status'  => 'publish',
                        ); 
                        $children_pages = get_pages( $children_args );

                        $li_counter = 0;

                        foreach( $children_pages as $child_page ){
      
                          //echo get_page_link($child_page->ID);
                          //echo $child_page->
                          if($li_counter<3) {
                        ?>
                      
                            <li>
                              <a href="<?php echo get_page_link($child_page->ID);?>">
                                <?php echo $child_page->post_title;?>
                              </a>                      
                            </li>
                          
                          <?php 
                          $li_counter++;
                          }
                        }
                          ?>
                        <li>...</li>
                          
                      
                      </ul>
                    <!-- </div> -->
                    
                    
                  </div>
                </div>
                <div class="products-item__button">
                  <a class="button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>

          <?php 
              }

            }
              
            wp_reset_postdata(); // сброс
          ?>

        

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
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
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
                $services_parent = get_page_by_title( 'Услуги', OBJECT, 'page' );
                    //     setup_postdata($post);
                    $services_args = array(
                      'sort_order'   => 'ASC',
                      'sort_column'  => 'post_title',
                      'hierarchical' => 1,
                      'exclude'      => '',
                      'include'      => '',
                      'meta_key'     => '',
                      'meta_value'   => '',
                      'authors'      => '',
                      'child_of'     => $services_parent->ID,
                      'parent'       => $services_parent->ID,
                      'exclude_tree' => '',
                      'number'       => '',
                      'offset'       => 0,
                      'post_type'    => 'page',
                      'post_status'  => 'publish',
                    ); 
                    $services_pages = get_pages( $services_args );
                    foreach( $services_pages as $post ){
                      setup_postdata($post);
                      $service_img = get_field( "service_img", get_the_ID());

                      if(get_field( "service_mark", get_the_ID()) ) {
                ?>


                <div class="services-item">
                  <div class="services-item__img">
                    <img src="<?php echo $service_img;?>" alt="<?php the_title(); ?>">
                  </div>
                  <div class="services-item__title-wrapper">
                    <h3 class="services-item__title">
                      <?php the_title(); ?>
                    </h3>
                  </div>
                  
                  <a class="button services-item__button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                </div>
                

                <?php 

                  }
                }
                    
                  wp_reset_postdata(); // сброс
                ?>
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
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
          </div>
        </div>
      </div>
    </div>
    <div class="advantages-row">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-4">
            <div class="advantages-item1">
              <h3 class="advantages-item__title">
                ВСЕГДА <br> ЧЕСТНЫЕ ЦЕНЫ!                    
              </h3>
              <div class="advantages-item__imgs">
                <div class="advantages-item__img-1">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-3.png';?>" alt="ВСЕГДА ЧЕСТНЫЕ ЦЕНЫ!">
                </div>
                <div class="advantages-item__img-2">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-2.png';?>" alt="ВСЕГДА ЧЕСТНЫЕ ЦЕНЫ!">
                </div>
                <div class="advantages-item__img-3">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-1.png';?>" alt="ВСЕГДА ЧЕСТНЫЕ ЦЕНЫ!">
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="advantages-item2">
              <div class="advantages-item2__img">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-center.png';?>" alt="Ничего лишнего">
              </div>
              
              <h3 class="advantages-item__title">
                мы не навязываем лишнего, предложим только необходимое!
              </h3>
              
            </div>
          </div>
          <div class="col-12 col-lg-4">
            <div class="advantages-item3">
              <h3 class="advantages-item__title">
                несем ответственность <br> за результат!
              </h3>
              <div class="advantages-item__imgs">
                <div class="advantages-item__img-1">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-4.png';?>" alt="несем ответственность">
                </div>
                <div class="advantages-item__img-2">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-5.png';?>" alt="несем ответственность">
                </div>
                <div class="advantages-item__img-3">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/index/adv-6.png';?>" alt="несем ответственность">
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
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
              <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-12">
          <div class="order-subtitle">
            Для заказа услуг или продукции напишите нам!
          </div>
        </div>
      <!-- </div>

      <div class="row"> -->
        <div class="col-12 col-lg-6">
          
          <!-- <form class="order-form"> -->
            <!-- <div class="row">
              <div class="col-12 col-md-6">
                <div class="order-form__name">
                  <div class="order-form__name-txt">Ваше имя:</div>
                  <input type="text" class="order-form__name-input" placeholder="Имя">
                </div>
                <div class="order-form__mail">
                  <div class="order-form__mail-txt">Ваш e-mail:</div>
                  <input type="text" class="order-form__mail-input" placeholder="E-mail">
                </div>
              </div>
              <div class="col-12 col-md-6">
                <div class="order-form__text">
                  <div class="order-form__text-txt">Ваше сообщение:</div>
                  <textarea class="order-form__text-input" placeholder="Сообщение"></textarea>
                </div>
              </div>
            </div>
            <div class="order-form__button">
              <input type="button" class="button" value="Заказать">
            </div> -->
            <?php //echo do_shortcode('[contact-form-7 id="680" title="Контактная форма Контакты"]'); ?>
          <!-- </form> -->
          <!-- <div class="order-form"> -->
              <?php echo do_shortcode('[contact-form-7 id="679" title="Контактная форма Главная"]'); ?>
            <!-- </div> -->
        </div>
        <!-- <div class="col-12 col-lg-6"> -->
          
        <!-- </div> -->
      </div>

      <div class="order-photo">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/index/form-bg.jpeg';?>" alt="Аква-центр">
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
                <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
            </div>
          </div>
        </div>
      
        <div class="row">
          <div class="col-12 col-lg-6 col-xl-5">
            <div class="about-photo__wrapper">
              <div class="about-photo">
                <img src="<?php echo get_template_directory_uri() . '/assets/img/index/order.png';?>" alt="Заказать">
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-6 col-xl-7">
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
                  <a href="<?php echo get_site_url() . '/oborudovaniye/nasosy-i-prinadlezhnosti/'  ?>" class="about-txt__links">водоснабжения</a>,
                  <a href="<?php echo get_site_url() . '/oborudovaniye/septiki-bio-stanczii/'  ?>" class="about-txt__link">водоотведения</a>,
                  <a href="<?php echo get_site_url() . '/oborudovaniye/sistemy-ochistki-vody/'  ?>" class="about-txt__link">водоподготовки</a>.
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>


<?php
// get_sidebar();
get_footer("gray");
?>