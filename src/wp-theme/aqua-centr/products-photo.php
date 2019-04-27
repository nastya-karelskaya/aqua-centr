<?php
/*
Template Name: Оборудование (подкатегории в виде фотографии)
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>

 <section class="products-category">
    <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-subtitle">
                 <a href="<?php echo home_url();?>">Главная</a>
                  <?php 
                    $hole_page_url = get_the_permalink(); 
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
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="products-category__grid">
              <div class="row">
                <div class="col-12">
                  <div class="products-category__photo">
                    <img src="<?php echo get_field("product_img");?>" alt="">
                  </div>
                </div>
              </div>
            </div>

            
          </div>
        </div>

        <div class="col-3">
          <?php wp_nav_menu( [
              'theme_location'  => 'right_products_part',
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
// get_sidebar();
get_footer("white");
?>