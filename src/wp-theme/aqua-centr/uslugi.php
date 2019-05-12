
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
        <div class="col-12 col-xl-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-title-left">
                  <h1>УСЛУГИ</h1>
                  <div class="section-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                  </div>
                </div>
              </div>
            </div>

            <div class="services-main__descr">
              <div class="row">
                <div class="col-12 col-lg-6">
                  <div class="text">
                    <?php echo get_field("text_1",get_the_ID());?>   
                  </div>
                                
                </div>
                <div class="col-12 col-lg-6">
                  <div class="text">
                    <?php echo get_field("text_2",get_the_ID());?>   
                      <div class="phones">
                        <?php 
                          $phone_1_raw = get_field("phone_1", get_the_ID()); 
                          $phone_2_raw = get_field("phone_2", get_the_ID()); 
                          //str_replace("(%body%)", "black", "<body text='%body%'>"); 
                          $phone_1 = str_replace("(", "", $phone_1_raw); 
                          $phone_1 = str_replace(")", "", $phone_1); 
                          $phone_1 = str_replace(" ", "", $phone_1); 

                          $phone_2 = str_replace("(", "", $phone_2_raw); 
                          $phone_2 = str_replace(")", "", $phone_2); 
                          $phone_2 = str_replace(" ", "", $phone_2); 
                        ?>
                        <a href="<?php echo 'tel:' . $phone_1;?>"><?php echo $phone_1_raw;?></a>    
                        <a href="<?php echo 'tel:' . $phone_2;?>"><?php echo $phone_2_raw;?></a>   
                      </div>

                  </div>

                    
                                  
                </div>
              </div>
            </div>

            <div class="services-main__grid">
            <div class="row justify-content-center">
              <?php                 

                  $args = array(
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
                  $pages = get_pages( $args );
                  foreach( $pages as $post ){
                    setup_postdata( $post );
                

                  $obj_img = get_field( "service_img", get_the_ID() );
              ?>
              <div class="col-12 col-md-6">
                <div class="services-main__item">
                  <img src="<?php echo $obj_img;?>" alt=" <?php the_title();?>">
                  <div class="services-main__item-title-wrapper">
                    <h2 class="services-main__item-title">
                        <?php the_title(); ?>
                    </h2>
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

        <div class="col-12 col-xl-3">
          <?php wp_nav_menu( [
              'theme_location'  => 'right_services',
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
            ] );?>
         
        </div>
        
      </div>
    </div>
  </section>


<?php 
get_footer("white"); 
?>