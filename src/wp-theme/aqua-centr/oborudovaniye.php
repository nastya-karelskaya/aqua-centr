
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
        <div class="col-12 col-xl-9">
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
                  //$post_obj = get_page_by_title( 'насосы и принадлежности', OBJECT, 'page' );
                  

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
                    // формат вывода
                  //}  

                  $obj_img = get_field( "vehicle_img", get_the_ID() );

                  
                  

                ?>
              
                <div class="col-12 col-lg-6">
                  <div class="products-main__item">
                    <div class="products-main__item-title-wrapper">
                      <h2 class="products-main__item-title">
                        <?php the_title(); ?>
                      </h2>
                    </div>
                    <div class="products-main__item-txt">
                    
                      <div class="products-main__item-img">
                        <img src="<?php 
                          echo $obj_img;
                        ?>" alt="">
                      </div>
                      <div class="products-main__item-descr">
                        <div class="products-main__item-descr-title">
                            Категории:
                        </div>
                        <ul class="products-main__item-descr-list">

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
                      
                        </ul>
                      </div>
                    </div>
                    <div class="products-main__item-button">
                      <a class="button" href="<?php the_permalink(); ?>">ПОДРОБНЕЕ</a>
                    </div>  
                  </div>
                </div>


                <?php 
                  }
                  wp_reset_postdata();
                  
                ?>
                


              

              </div>

            </div>
          </div>
        </div>  

        <div class="col-12 col-xl-3">
          <?php wp_nav_menu( [
              'theme_location'  => 'right_products',
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


<?php 
get_footer("white"); 
?>