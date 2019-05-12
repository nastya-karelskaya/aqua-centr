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
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-12">

              <!-- PICTURE -->
                <?php 
          
                  $fields = get_fields();



                  if( $fields ) {
                    $picture_1 = $fields["picture_1"];
                    $picture_2 = $fields["picture_2"];
                    $picture_3 = $fields["picture_3"];
                    $picture_4 = $fields["picture_4"];

                    $subtitle_1 = $fields["subtitle_1"];
                    $subtitle_2 = $fields["subtitle_2"];
                    $subtitle_3 = $fields["subtitle_3"];
                    $subtitle_4 = $fields["subtitle_4"];
                    $subtitle_5 = $fields["subtitle_5"];

                    //$fields["list_1"]["list_1_7"]


                    $list_1 = array();
                    $list_1[] = $fields["list_1"]["list_1_1"] . '<span>' . $fields["list_1"]["span_1"] . '</span>';
                    $list_1[] = $fields["list_1"]["list_1_2"] . '<span>' . $fields["list_1"]["span_2"] . '</span>';
                    $list_1[] = $fields["list_1"]["list_1_3"] . '<span>' . $fields["list_1"]["span_3"] . '</span>';
                    $list_1[] = $fields["list_1"]["list_1_4"] . '<span>' . $fields["list_1"]["span_4"] . '</span>';
                    $list_1[] = $fields["list_1"]["list_1_5"] . '<span>' . $fields["list_1"]["span_5"] . '</span>';
                    $list_1[] = $fields["list_1"]["list_1_6"] . '<span>' . $fields["list_1"]["span_6"] . '</span>';
                    $list_1[] = $fields["list_1"]["list_1_7"] . '<span>' . $fields["list_1"]["span_7"] . '</span>';

                    $list_2 = array();
                    $list_2[] = $fields["list_2"]["list_1_1"] . '<span>' . $fields["list_2"]["span_1"] . '</span>';
                    $list_2[] = $fields["list_2"]["list_1_2"] . '<span>' . $fields["list_2"]["span_2"] . '</span>';
                    $list_2[] = $fields["list_2"]["list_1_3"] . '<span>' . $fields["list_2"]["span_3"] . '</span>';
                    $list_2[] = $fields["list_2"]["list_1_4"] . '<span>' . $fields["list_2"]["span_4"] . '</span>';
                    $list_2[] = $fields["list_2"]["list_1_5"] . '<span>' . $fields["list_2"]["span_5"] . '</span>';
                    $list_2[] = $fields["list_2"]["list_1_6"] . '<span>' . $fields["list_2"]["span_6"] . '</span>';
                    $list_2[] = $fields["list_2"]["list_1_7"] . '<span>' . $fields["list_2"]["span_7"] . '</span>';

                    $list_3 = array();
                    $list_3[] = $fields["list_3"]["list_1_1"] . '<span>' . $fields["list_3"]["span_1"] . '</span>';
                    $list_3[] = $fields["list_3"]["list_1_2"] . '<span>' . $fields["list_3"]["span_2"] . '</span>';
                    $list_3[] = $fields["list_3"]["list_1_3"] . '<span>' . $fields["list_3"]["span_3"] . '</span>';
                    $list_3[] = $fields["list_3"]["list_1_4"] . '<span>' . $fields["list_3"]["span_4"] . '</span>';
                    $list_3[] = $fields["list_3"]["list_1_5"] . '<span>' . $fields["list_3"]["span_5"] . '</span>';
                    $list_3[] = $fields["list_3"]["list_1_6"] . '<span>' . $fields["list_3"]["span_6"] . '</span>';
                    $list_3[] = $fields["list_3"]["list_1_7"] . '<span>' . $fields["list_3"]["span_7"] . '</span>';
                    
                    
                    $list_4 = array();
                    $list_4[] = $fields["list_4"]["list_1_1"] . '<span>' . $fields["list_4"]["span_1"] . '</span>';
                    $list_4[] = $fields["list_4"]["list_1_2"] . '<span>' . $fields["list_4"]["span_2"] . '</span>';
                    $list_4[] = $fields["list_4"]["list_1_3"] . '<span>' . $fields["list_4"]["span_3"] . '</span>';
                    $list_4[] = $fields["list_4"]["list_1_4"] . '<span>' . $fields["list_4"]["span_4"] . '</span>';
                    $list_4[] = $fields["list_4"]["list_1_5"] . '<span>' . $fields["list_4"]["span_5"] . '</span>';
                    $list_4[] = $fields["list_4"]["list_1_6"] . '<span>' . $fields["list_4"]["span_6"] . '</span>';
                    $list_4[] = $fields["list_4"]["list_1_7"] . '<span>' . $fields["list_4"]["span_7"] . '</span>';

                    $list_5 = array();
                    $list_5[] = $fields["list_5"]["list_1_1"] . '<span>' . $fields["list_5"]["span_1"] . '</span>';
                    $list_5[] = $fields["list_5"]["list_1_2"] . '<span>' . $fields["list_5"]["span_2"] . '</span>';
                    $list_5[] = $fields["list_5"]["list_1_3"] . '<span>' . $fields["list_5"]["span_3"] . '</span>';
                    $list_5[] = $fields["list_5"]["list_1_4"] . '<span>' . $fields["list_5"]["span_4"] . '</span>';
                    $list_5[] = $fields["list_5"]["list_1_5"] . '<span>' . $fields["list_5"]["span_5"] . '</span>';
                    $list_5[] = $fields["list_5"]["list_1_6"] . '<span>' . $fields["list_5"]["span_6"] . '</span>';
                    $list_5[] = $fields["list_5"]["list_1_7"] . '<span>' . $fields["list_5"]["span_7"] . '</span>';



                    $par_1 = $fields["par_1"];
                    $par_2 = $fields["par_2"];
                    $par_3 = $fields["par_3"];
                    $par_4 = $fields["par_4"];
                    $par_5 = $fields["par_5"];
                    $par_6 = $fields["par_6"];
                    $par_7 = $fields["par_7"];
                    $par_8 = $fields["par_8"];
                    $par_9 = $fields["par_9"];
                    $par_10 = $fields["par_10"];

                  }

                    // if($fields["picture_1"]) {

                    //   $picture = $fields["picture_1"];


                    // }

                    // if($fields["subtitle_1"]) {

                    //   $subtitle_1 = $fields["subtitle_1"];


                    // }


                    // if($fields["list_1"]["list_1_1"]) {

                              
                ?>

                <?php 
                  if($picture_1 != '') {

                ?>

                  <div class="services-page-descr">
                    <img src="<?php echo $picture_1; ?>" alt="<?php the_title();?>">
                  </div>

                <?php 
                  }
                ?>

              <!-- ./PICTURE -->

              <!-- BLOCK -->

                <?php 
                   //}
                
                    if($subtitle_1 != '') {
                              
                ?>

                <h2 class="services-page-descr__subtitle">
                  <?php echo $subtitle_1; ?>
                </h2>

                <?php 
                  }
               
                  if($par_1 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_1; ?>
                  </div>

                <?php 
                  }

                  if($par_2 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_2; ?>
                  </div>

                <?php 
                  }

                  if($list_1 != '') {


                ?>

                <ul class="services-page-list">

                    <?php

                    
                   
                      foreach( $list_1 as $value ) {

                       

                    ?>
                        
                          <?php  
                             if(strlen($value)>14) { echo '<li>' . $value . '</li>'; }
                            
                          ?>

                        

                    <?php 
                           }
                        //}
                    
                    ?>

                </ul>

              <!-- ./BLOCK  -->


              <!-- BLOCK -->
                <?php 
                  }
                
                  if($subtitle_2 != '') {
                            
                ?>

                <h2 class="services-page-descr__subtitle">
                  <?php echo $subtitle_2; ?>
                </h2>

                <?php 
                  }
              
                  if($par_3 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_3; ?>
                  </div>

                <?php 
                  }

                  if($par_4 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_4; ?>
                  </div>

                <?php 
                  }

                  if($list_2 != '') {
                ?>

                <ul class="services-page-list">

                    <?php
                  
                      foreach( $list_2 as $value ) {
                  
                          
                    ?>
                        <?php  
                             if(strlen($value)>14) { echo '<li>' . $value . '</li>'; }
                            
                          ?>

                    <?php 
                          
                        }
                    
                    ?>

                </ul>

              <!-- ./BLOCK -->


              <!-- BLOCK -->

                <?php 
                  }
                  
                  if($subtitle_3 != '') {
                            
                ?>

                <h2 class="services-page-descr__subtitle">
                  <?php echo $subtitle_3; ?>
                </h2>

                <?php 
                  }
                
                  if($par_5 != '') {
                          
                ?>

                <div class="services-page-descr">
                  <?php echo $par_5; ?>
                </div>

                <?php 
                  }

                  if($par_6 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_6; ?>
                  </div>

                <?php 
                  }

                  if($list_3 != '') {
                ?>

                <ul class="services-page-list">

                    <?php
                    
                      foreach( $list_3 as $value ) {
                  
                        

                    ?>
                        <?php  
                             if(strlen($value)>14) { echo '<li>' . $value . '</li>'; }
                            
                          ?>

                    <?php 
                            //}
                        }
                    
                    ?>

                </ul>

              <!-- ./BLOCK -->



              <!-- BLOCK -->
                  <?php 
                    }
                      
                    if($subtitle_4 != '') {
                              
                ?>

                <h2 class="services-page-descr__subtitle">
                  <?php echo $subtitle_4; ?>
                </h2>

                <?php 
                  }
                
                  if($par_7 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_7; ?>
                  </div>

                <?php 
                  }

                  if($par_8 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_8; ?>
                  </div>

                <?php 
                  }

                  if($list_4 != '') {
                ?>

                <ul class="services-page-list">

                    <?php
                    
                      foreach( $list_4 as $value ) {
                  
                          //if($vvalue != 0) {

                    ?>
                        <?php  
                             if(strlen($value)>14) { echo '<li>' . $value . '</li>'; }
                            
                          ?>

                    <?php 
                            //}
                        }
                    
                    ?>

                </ul>

              <!-- ./BLOCK -->


              <!-- BLOCK -->
                <?php 
                    }
                      
                    if($subtitle_5 != '') {
                              
                ?>

                <h2 class="services-page-descr__subtitle">
                  <?php echo $subtitle_5; ?>
                </h2>

                <?php 
                  }
              
                  if($par_9 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_9; ?>
                  </div>

                <?php 
                  }

                  if($par_10 != '') {
                          
                ?>

                  <div class="services-page-descr">
                    <?php echo $par_10; ?>
                  </div>

                <?php 
                  }

                  if($list_5 != '') {
                    
                ?>

                <ul class="services-page-list">

                    <?php
                    
                  
                      foreach( $list_5 as $value ) {
                  
                          //if($vvalue != 0) 
                          //var_dump($list_5);

                    ?>
                       <?php  
                             if(strlen($value)>14) { echo '<li>' . $value . '</li>'; }
                            
                          ?>

                    <?php 
                          }
                        //}
                    
                    ?>

                </ul>

                <?php 
                  }



                ?>

              <!-- ./BLOCK -->


                <?php

                   
                  //}
                ?>

              


              </div>
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
                'depth'           => '',
                'walker'          => '',
                ] );?>
         
        </div> 
      </div>
      
    </div>
  </section>



<?php
// get_sidebar();
get_footer("gray");
?>