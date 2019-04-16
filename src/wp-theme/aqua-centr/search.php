<?php get_header(); ?>

 <!-- section search -->
 <section class="section section-first search ">
      <div class="container">
   
        <div class="content">

          <div class="row">
            <div class="col-12">

              <div class="title">
                <h1>
                Результаты поиска по запросу: "<?php echo $_GET['s'];?>"
                </h1>
              </div>

              <div class="subtitle">

                <ul>
                  <?php 
                    if (have_posts()) : while (have_posts()) : the_post(); 
                  ?>
                  
                    <li class="link">
                      <h2 class="link-title"><?php the_title(); ?></h2>

                      <a href="<?php the_permalink();?>">Открыть</a>

                      <?php the_content(''); ?>
                    </li>

                  <?php endwhile; else: ?>
                </ul>

                  <p>Поиск не дал результатов.</p>

                <?php endif;?>


              </div>

            </div>
          </div>


        <!-- ./content -->
        </div>

      </div>

  </section>
        



 
 <?php get_footer(); ?>