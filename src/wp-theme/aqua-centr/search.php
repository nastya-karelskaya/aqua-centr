<?php get_header(); ?>

 <!-- section search -->
 <section class="section section-first search ">
      <div class="container">
   
        <div class="content">

          <div class="row">
            <div class="col-9">

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

            <div class="col-3">
          <?php wp_nav_menu( [
              'theme_location'  => 'right_search',
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


        <!-- ./content -->
        </div>

      </div>

  </section>
        



 
 <?php get_footer("gray"); ?>