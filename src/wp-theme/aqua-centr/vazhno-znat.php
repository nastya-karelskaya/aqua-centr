
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