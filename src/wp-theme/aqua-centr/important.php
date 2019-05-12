<?php
/*
Template Name: Важно знать (страница статьи)
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>


  <section class="posts-page">
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
                  //print_r($hole_page_pieces);
                  //echo $hole_page_url;
                  
                  
                  $link = '';//home_url();
                  $page = '';
                  $sub_link = '';

                  for($i=1; $i<count($hole_page_pieces); $i++) {
                    if($hole_page_pieces[$i] && (($i + 1) != (count($hole_page_pieces)) )) {

                    
                    $link .= '/' . $hole_page_pieces[$i];
                    $sub_link .= $hole_page_pieces[$i] . '/';
                    $page = get_page_by_path( $sub_link, OBJECT );
                    //echo $hole_page_pieces[$i];
                    //echo $link . ' ';
                    //echo $sub_link;

                    //echo '  ' . $page->post_title;

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
                <div class="posts-page__content">
                  <?php $img = get_field("image"); 
                        if($img) {
                  ?>

                  <div class="posts-page__content-img ">
                    <img src="<?php echo $img;?>" alt="<?php the_title();?>">
                  </div>
                  

              



                  <?php 
                        }
                      
                      $fields = get_fields();


                      
                  ?>

                    <div>

                      <?php 
                        if($fields['subtitle']) {
                      ?>

                        <h2>
                          <?php 
                              echo $fields['subtitle'];                         
                          ?>
                        </h2>
                        

                      <?php 
                        }
                      ?>


                      <?php 
                        if($fields['par_1']) {
                      ?>

                        <p>
                          <?php 
                              echo $fields['par_1'];                         
                          ?>
                        </p> 

                      <?php 
                        }
                      ?>

                    </div>

                    <div>

                        <?php 
                          if($fields['subtitle_2']) {
                        ?>

                          <h2>
                            <?php 
                                echo $fields['subtitle_2'];                         
                            ?>
                          </h2>
                          

                        <?php 
                          }
                        ?>


                        <?php 
                          if($fields['par_2']) {
                        ?>

                          <p>
                            <?php 
                                echo $fields['par_2'];                         
                            ?>
                          </p> 

                        <?php 
                          }
                        ?>

                    </div>

                    <div>

                      <?php 
                        if($fields['subtitle_3']) {
                      ?>

                        <h2>
                          <?php 
                              echo $fields['subtitle_3'];                         
                          ?>
                        </h2>
                        

                      <?php 
                        }
                      ?>


                      <?php 
                        if($fields['par_3']) {
                      ?>

                        <p>
                          <?php 
                              echo $fields['par_3'];                         
                          ?>
                        </p> 

                      <?php 
                        }
                      ?>

                    </div>

                    <div>

                      <?php 
                        if($fields['subtitle_4']) {
                      ?>

                        <h2>
                          <?php 
                              echo $fields['subtitle_4'];                         
                          ?>
                        </h2>
                        

                      <?php 
                        }
                      ?>


                      <?php 
                        if($fields['par_4']) {
                      ?>

                        <p>
                          <?php 
                              echo $fields['par_4'];                         
                          ?>
                        </p> 

                      <?php 
                        }
                      ?>

                    </div>


                    <div>

                      <?php 
                        if($fields['subtitle_5']) {
                      ?>

                        <h2>
                          <?php 
                              echo $fields['subtitle_5'];                         
                          ?>
                        </h2>
                        

                      <?php 
                        }
                      ?>


                      <?php 
                        if($fields['par_5']) {
                      ?>

                        <p>
                          <?php 
                              echo $fields['par_5'];                         
                          ?>
                        </p> 

                      <?php 
                        }
                      ?>

                    </div>


                    <div>

                        <?php 
                          if($fields['subtitle_6']) {
                        ?>

                          <h2>
                            <?php 
                                echo $fields['subtitle_6'];                         
                            ?>
                          </h2>
                          

                        <?php 
                          }
                        ?>


                        <?php 
                          if($fields['par_6']) {
                        ?>

                          <p>
                            <?php 
                                echo $fields['par_6'];                         
                            ?>
                          </p> 

                        <?php 
                          }
                        ?>

                    </div>

                    <div>

                        <?php 
                          if($fields['subtitle_7']) {
                        ?>

                          <h2>
                            <?php 
                                echo $fields['subtitle_7'];                         
                            ?>
                          </h2>
                          

                        <?php 
                          }
                        ?>


                        <?php 
                          if($fields['par_7']) {
                        ?>

                          <p>
                            <?php 
                                echo $fields['par_7'];                         
                            ?>
                          </p> 

                        <?php 
                          }
                        ?>

                    </div>




                </div>
                
              </div>
            </div>

        

          </div>
        </div>

        <div class="col-12 col-xl-3">
          <?php wp_nav_menu( [
              'theme_location'  => 'right_posts',
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
get_footer("gray");
?>