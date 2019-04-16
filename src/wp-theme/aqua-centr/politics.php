
<?php
/*
Template Name: Политика конфиденциальности
*/
?>

<!-- Здесь html/php код шаблона -->


<?php 
get_header();
?>
       
  <!-- reviews -->
  <section class="section section-first politics">
    <div class="container-fluid">
      <!-- content -->
      <div class="content">
        
        <div class="row">
          <div class="col-12">
            <!-- title -->
            <div class="title">
              <h1>Политика конфиденциальности</h1>
              
            </div>
            <!-- ./title -->

          </div>
        </div>

        <div class="row">
          <div class="col-12">

            <div>
            <?php while( have_posts() ) : the_post();
                        $more = 1; // отображаем полностью всё содержимое поста
                       
                        the_content(); // выводим контент
                    endwhile; ?>
            </div>
          </div>
        </div>

        

       
    </div>




          
      </div>
      <!-- ./content -->
    </div>
  </section>
  <!-- ./reviews -->


<?php 
get_footer(); 
?>