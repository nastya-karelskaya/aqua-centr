<?php
/*

*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>


  <section class="services-page">
    <div class="container">

      <div class="row">
        <div class="col-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-subtitle">
                  <a href="<?php echo home_url();?>">Главная</a> / <a href="<?php echo home_url() . '/vazhno-znat';?>">Важно знать</a> / <?php echo get_the_title(); ?> 
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
              <div class="col-12">
                
              </div>
            </div>

        

          </div>
        </div>
       
      </div>
      
    </div>
  </section>



<?php
// get_sidebar();
get_footer();
?>