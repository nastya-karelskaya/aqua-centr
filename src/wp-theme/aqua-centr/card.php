<?php
/*
Template Name: Карточка объекта
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>

 <section class="card">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-subtitle">

                <a href="<?php echo home_url();?>">Главная</a>
                <?php 
                  $hole_page_url = get_the_permalink(); //get_site_url( get_the_ID()); 
                  $hole_page_pieces_all = explode("//", $hole_page_url);
                  $hole_page_pieces_raw = explode("/", $hole_page_pieces_all[1]);
                  $hole_page_pieces = array_diff($hole_page_pieces_raw, array(''));
                
                  $link = '';
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
                <div class="section-title-left">
                  <h1><?php the_title(); ?></h1>
                  <div class="section-img">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-xl-7">
                <div class="card-descr">
                  <div class="card-descr__img-wrapper">
                  
                    
                  </div>
                  <div class="card-descr__img">
                      <img src="<?php echo get_field("ava");?>" alt="<?php the_title(); ?>" >
                    </div>
                  <div class="card-descr__txt">
                    <div class="card-descr__txt-title">
                        ОПИСАНИЕ

                        
                    </div>
                    <div class="card-descr__txt-subtitle">
                        <?php echo get_field('descr'); ?>
                    </div>
                    <div class="card-descr__txt-price">
                        ЦЕНА: <span><?php echo get_field('price'); ?></span>
                    </div>
                    <div class="card-descr__txt-button">
                      <button data-toggle="modal" data-target="#orderModal">ЗАКАЗАТЬ</button>
                    </div>
                  </div>
                  
                </div>

                <?php $descr_big = get_field("descr_big"); 
                  if($descr_big) {
                
                ?>
                  <div class="card-descr__big">
                    <?php echo $descr_big; ?>
                    </div>

                  <?php } ?>


                
                <?php $descr_big_2 = get_field("descr_big_2"); 
                  if($descr_big_2) {
                
                ?>
                  <div class="card-descr__big">
                    <?php echo $descr_big_2; ?>
                    </div>

                  <?php } ?>
                

                
              </div>
              <div class="col-12 col-xl-5">
                <div class="card-passport">
                  <div class="card-passport__title">ХАРАКТЕРИСТИКИ</div>
                  <ul class="card-passport__list">
                  <?php 

                    $fields = get_fields();

                    if( $fields ): ?>
                  
                            <?php foreach( $fields as $name => $value ): ?>
                                
                                  <?php 
                                    if( ($name != "descr") && ($name != "descr_big") && ($name != "descr_big_2") && ($name != "price") && ($name != "ava") && ($value))  {
                                  ?>
                                  <li>
                                    <?php  echo $value; ?>
                                  </li>
                                  <?php
                                    }
                                  ?>
                                
                            <?php endforeach; ?>
                        
                    <?php endif; ?>
                    
                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-12 col-xl-3">
        <?php wp_nav_menu( [
              'theme_location'  => 'right_card',
              'menu'            => '', 
              'container'       => false, 
              // 'container_class' => '', 
              // 'container_id'    => '',
              'menu_class'      => 'sidebar sidebar-services', 
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
            ] );
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">
          Заказать
        </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="order-form">
          <div class="row">
            <div class="col-12">
              <div class="order-form__name">
                <div class="order-form__name-txt">Ваше имя:</div>
                <input type="text" class="order-form__name-input" placeholder="Имя">
              </div>
              <div class="order-form__mail">
                <div class="order-form__mail-txt">Ваш e-mail:</div>
                <input type="text" class="order-form__mail-input" placeholder="E-mail">
              </div>
            </div>
            <div class="col-12">
              <div class="order-form__text">
                <div class="order-form__text-txt">Ваше сообщение:</div>
                <textarea class="order-form__text-input" placeholder="Сообщение"></textarea>
              </div>
            </div>
          </div>
          <div class="order-form__button">
            <input type="button" class="button" value="Заказать">
          </div>
          <?php //echo do_shortcode('[contact-form-7 id="681" title="Контактная форма Карточка оборудования"]'); ?>

        </form>
      </div>
      
    </div>
  </div>
</div>
  



<?php
// get_sidebar();
get_footer("white");
?>