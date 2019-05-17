<?php
/*
Template Name: О компании
Template Post Type: page
*/
?>

<!-- Здесь html/php код шаблона -->

<?php 
get_header();
?>
       
    <!-- about -->
    <section class="about-main">
     
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
             <h1>О компании</h1>
            </div>
           <div class="section-img">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/drop-blue.png';?>" alt="Капля">
             <img src="<?php echo get_template_directory_uri() . '/assets/img/wave.png';?>" alt="Волна">
           </div>
         </div>
       </div>
     </div>
       
     <div class="container">
 
       <div class="row">
         <div class="col-12">
           <div class="about-main__subtitle">
               Наша компания работает в Карелии с 2001 года — специализируется на поставке и монтаже оборудования для 
               водоснабжения, очистке воды из скважин, колодцев, открытых источников, водопровода, а так же очистки сточных 
               вод для частных домов, дач и предприятий.Мы продолжаем укреплять свои позиции на рынке Карелии, демонстрируя 
               значительный рост. На сегодняшний день в компании работают высококвалифицированные специалисты.
           </div>
         </div>
         
       </div>
 
       <div class="row">
         <div class="col-12 col-xl-7">
           <div class="about-main__exp">
             <div class="about-main__exp-img">
               <img src="<?php echo get_template_directory_uri() . '/assets/img/about/exp.jpg';?>" alt="Уникальный опыт">
               <div class="about-main__exp-drop"></div>
             </div>
             <div class="about-main__exp-txt">
                 <h2 class="about-main__exp-title">
                     Уникальный опыт
                 </h2>
                 <p class="about-main__exp-descr">
                     Главная ценность компании — уникальные знания
                     и опыт, накопленные в течение длительного 
                     времени.Мы постоянно анализируем новые 
                     научные разработки и быстро начинаем 
                     использовать лучшие.Это преимущество — основа
                     философии нашей компании. Мы всегда на шаг 
                     впереди конкурентов и предоставляем нашим 
                     заказчикам наилучшие технологии.   
                 </p>
 
             </div>
           </div>
           <div class="about-main__do">
             
             <div class="about-main__do-txt">
                 <h2 class="about-main__do-title">
                     Направления деятельности
                 </h2>
                 <p class="about-main__do-descr">
                     Компания «АКВАЦЕНТР» предлагает клиентам 
                     комплексные решения в области водоснабжения, 
                     водоотведения и очистки воды от примесей из 
                     природных источников:поставка и монтаж 
                     насосного оборудования,проектирование и 
                     поставка систем очистки воды из скважин и 
                     колодцев,монтаж всего спектра оборудования 
                     для водоподготовки и очистки сточных вод,
                     монтажные и шефмонтажные работы на объекте,
                     пуско-наладку поставленного оборудования на 
                     объекте.
                 </p>
             </div>
             <div class="about-main__do-img">
                 <img src="<?php echo get_template_directory_uri() . '/assets/img/about/do.jpg';?>" alt="Направления деятельности">
                 <div class="about-main__do-drop"></div>
               </div>
           </div>
 
         </div>
         <div class="col-12 col-xl-5">
           <div class="about-main__info">
             <p>
               У нас представлено оборудование для воды поступающей из 
               природных источников, а также системы для очистки сточных вод. Для удобства пользования и обслуживания установки комплектуются дополнительными аксессуарами и блоками управления.                
             </p>
             <p>
               Покупка полного комплекта оборудования по выгодной цене 
               позволяет получить воду желаемого качества с разумными 
               затратами. Обладатели собственных очистительных систем 
               от нашей компании контролируют все этапы процесса и 
               уверены в качестве используемой воды. На все оборудование распространяются гарантии производителя и предоставляется сервисное обслуживание.
             </p>
             <p>
               Перед тем как выбрать систему очистки воды наши специалисты настоятельно рекомендуют сдать воду на анализ. Для 
               этого необходимо сделать отбор пробы воды и связаться с 
               нашим офисом по указанному телефону.  
             </p>
             <p>
               Проанализировав состав образца и определив характер 
               примесей, мы сможем подобрать оптимальный комплект оборудования для очистки воды — от набора бытовых фильтров 
               до автоматизированной промышленной установки. В комплекс 
               услуг входят:
             </p>
             <ul>
               <li>
                 Предварительный выезд на объект
               </li>
               <li>
                   Подбор комплекта оборудования 
               </li>
               <li>
                   Проведение монтажных и пусконаладочных работ
               </li>
               <li>
                   Техническое обслуживание и гарантийный ремонт
               </li>
             </ul>
           </div>
         </div>
       </div>
     </div>
   </section>
    <!-- ./about -->

<?php 
get_footer("gray"); 
?>