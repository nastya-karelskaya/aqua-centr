<?php
/*
Template Name: Услуга (подкатегория)
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>


  <section class="services-page">
    <div class="container">

      <div class="row">
        <div class="col-12 col-xl-9">
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
                  <h1><?php the_title();?></h1>
                  <div class="section-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
                <?php 

                    $fields = get_fields();

                    if( $fields ) {
                        
                        foreach( $fields as $name => $value ) {

                         

                ?>

              <div class="col-12">
                <?php 
                    if(substr($name, 0, 3) == 'par') {
                              
                ?>
                <div class="services-page-descr">

                <?php
                    echo $value; 
                ?>

                </div>

                <?php 
                   }
                ?>


                <?php 
                    if(substr($name, 0, 3) == 'lis') {
                              
                ?>
                <ul class="services-page-list">

                    <?php
                   
                    foreach( $value as $vname => $vvalue ) {
                 
                        if(substr($vvalue, 0, 3)) {

                        ?>
                        <li>
                          <?php  echo $vvalue; ?>
                        </li>
                        
              

                    <?php 
                           }
                        }
                    
                    ?>

                </ul>

                <?php 
                   }
                ?>

              </div>
            
            <?php 
                        }
                    }
            
            
            ?>


            </div>

         

          </div>
        </div>
        <div class="col-12 col-xl-3">
            <?php wp_nav_menu( [
                'theme_location'  => 'right_services_part',
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
// get_sidebar();
get_footer("white");
?>