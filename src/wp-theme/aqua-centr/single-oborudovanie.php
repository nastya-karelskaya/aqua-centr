<?php
/*

*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>

 <section class="product-category">
    <div class="container">
      <div class="row">
        <div class="col-9">
          <div class="content">
            <div class="row">
              <div class="col-12">
                <div class="section-subtitle">
                    Главная / Оборудование / Септики (био-станции)
                </div>
                <div class="section-title">
                  <h1>СЕПТИКИ (БИО-СТАНЦИИ)</h1>
                  <div class="section-img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="product-category-item">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/septics/1.jpeg';?>" alt="">
                  <div class="product-category-item__title">
                      Станции (Септики) 
                      Кристалл 
                  </div>
                  <div class="button product-category-item__button">ПОДРОБНЕЕ</div>
                </div>
              </div>
              <div class="col-4">
                  <div class="product-category-item">
                    <img src="img/septics/2.jpeg" alt="">
                    <div class="product-category-item__title">
                        Станции (Септики) Топас 
                    </div>
                    <div class="button product-category-item__button">ПОДРОБНЕЕ</div>
                  </div>
                </div>
             
            </div>

          </div>
        </div>
        <!-- <div class="col-3">
          <div class="sidebar sidebar-septics">
            <div class="sidebar-title">
                СЕПТИКИ
            </div>
            <ul class="sidebar-list">
              <li>
                  Станции (Септики) Юнилос   
              </li>
              <li>
                  Станции (Септики) Топас    
              </li>
              <li>
                  Станции септики Евробион 
              </li>
              <li>
                  Станции (СЕПТИКИ) VORTEX 
              </li>
              <li>
                  Станция очистки Эком 
              </li>
              <li>
                  Станции Ergobox 
              </li>
              <li>
                  Станции (Септики) 
              </li>
              <li>
                  Кристалл 
              </li>
            </ul>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  



<?php
// get_sidebar();
get_footer();
?>