<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package aqua-centr
 */

get_header();
?>

	<!-- section 404 -->
	<section class="section-first section-404 main">
    <div class="container">
  
      <div class="content">
          <div class="main-title">
            <div class="row">
              <div class="col-12">
                  <h1>
                      Похоже, информация, которую вы ищете, не существует.
                  </h1>
              </div>
            </div>
          </div>
          <div class="main-txt">
            <div class="row">
              <div class="col-12">
                
                <div class="main-txt__descr">
                  Попробуйте <a href="<?php echo home_url();?>">вернуться на главную страницу</a> и поискать снова.
                  Или <a href="<?php echo home_url() . '/kontakty';?>">напишите нам</a>.
                </div>
              </div>
              <div class="col-12 col-lg-4">
              </div>
            </div>
            
          </div>
      </div>
      

    </div>
  </section>
  <!-- ./ section 404 -->

  
<?php
get_footer();
