
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
          <div class="section-subtitle" style="margin-bottom:35px;margin-top:0;text-align:center;">
            <a href="<?php echo home_url();?>">Главная</a>
            <?php 
              $hole_page_url = get_the_permalink(); //get_site_url( get_the_ID()); 
              $hole_page_pieces_all = explode("//", $hole_page_url);
              $hole_page_pieces_raw = explode("/", $hole_page_pieces_all[1]);
              $hole_page_pieces = array_diff($hole_page_pieces_raw, array(''));
            
              $link = '';//home_url();
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
          <div class="section-title">
            <h1>Важно знать</h1>
          </div>
          <div class="section-img">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
          </div>
        </div>
      </div>
    </div>

    <div class="posts-grid">
      <div class="container">
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
                // $pages_count = count($pages);
                // $counter=1;
                  
                foreach( $pages as $post ){
                  setup_postdata( $post );
                  $post_img = get_field("ava", get_the_ID());
                  $post_exerp =  substr(get_field("par_1", get_the_ID()), 0, 173);
                  //$post_exerp =  substr($post_exerp, 0, 170) . '...';
                  //d0
                  $post_exerp = str_replace('d0', '', $post_exerp);
                  //$post_exerp .= '...';

                  //if($counter != $pages_count) {
                  
            ?>

              <div class="col-12 col-lg-6">
                <div class="posts-grid__item ">
                  <div class="posts-grid__item-img">
                    <img src="<?php echo $post_img;?>" alt=" <?php the_title();?>">
                  </div>
                  <div class="posts-grid__item-txt">
                    <a href="<?php the_permalink();?>" class="posts-grid__item-title">
                      <h2><?php the_title(); ?></h2>
                    </a>
                    <div class="posts-grid__item-descr">
                    <?php echo $post_exerp; ?> 
                    ...
                    </div>
                  </div>
                  <div class="posts-grid__item-button">
                    <a href="<?php the_permalink();?>" class="button">ПОДРОБНЕЕ</a>
                  </div>
                </div>
              </div>

              <!-- <?php 
                  //}
                 // else {
                  
              ?> -->

              <!-- <div class="col-12">
                <div class="posts-grid__item item-last">
                  <div class="posts-grid__item-img">
                    <img src="<?php //echo $post_img;?>" alt=" <?php the_title();?>">
                  </div>
                  <div class="posts-grid__item-txt">
                    <a href="<?php //the_permalink();?>" class="posts-grid__item-title">
                      <h2><?php //the_title(); ?></h2>
                    </a>
                    <div class="posts-grid__item-descr">
                    <?php //echo $post_exerp; ?> 
                    ...
                    </div>
                  </div>
                  <div class="posts-grid__item-button">
                    <a href="<?php //the_permalink();?>" class="button">ПОДРОБНЕЕ</a>
                  </div>
                </div>
              </div> -->


              <?php
                  // }
                  // $counter = $counter + 1;
                }
                  
                wp_reset_postdata(); // сброс
              ?>

           
              
            </div>
      </div>
      
    </div>
  </section>


<?php 
get_footer("gray"); 
?>