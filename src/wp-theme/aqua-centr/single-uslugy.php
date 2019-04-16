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
                  <a href="<?php echo home_url();?>">Главная</a> / <a href="<?php echo home_url() . '/uslugi';?>">Услуги</a> / <?php echo get_the_title(); ?> 
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
                <div class="services-page-descr">
                    Любое инженерное оборудование нуждается в техническом обслуживание. В процессе эксплуатации, оборудование 
                    подвергаются засорам и износу отдельных его частей, и для нормального функционирования возникает необходи-
                    мость в периодическом сервисном обслуживании.
                </div>
              </div>
              <div class="col-12">
                <div class="services-page-descr">
                    Для вашего удобства мы предлагаем наши услуги сервисного обслуживания:                   
                </div>
                <ul>
                      <li>
                          Услуги по обслуживанию, ремонту и модернизации любых систем очистки воды
                          
                      </li>
                      <li>
                          Услуги по обслуживанию и ремонту автономных канализаций.системы очистки воды
                          
                      </li>
                      <li>
                          Услуги по замене, настройке и ремонту насосного оборудования
                      </li>
                    </ul>
              </div>



            </div>

            <div class="row">
              <div class="col-7">
                <div class="services-page-descr">
                    Выполняемые работы по обслуживанию систем водоочистки (техническое 
                    обслуживание оборудования является обязательным условием безотказ-
                    ной работы системы водоочистки. Мы осуществляем сервисное обслужи-
                    вание как на основе Договора так и разового вызова):
                </div>
                
                  <ul>
                    <li>
                        Визуальный осмотр оборудования (наличие протечек в местах 
                        соединений)
                        
                    </li>
                    <li>
                        Анализ исходной и очищенной воды на содержание железа, мар-
                        ганца,солей жесткости
                        
                    </li>
                    <li>
                        Полная диагностика и настройка автоматики систем управления 
                        оборудования
                        
                    </li>
                    <li>
                        Промывка управляющих клапанов, инжекторов, солезаборных кла-
                        панов системы автоматики
                        
                    </li>
                    <li>
                        Полная регенерация системы водоподготовки с визуальным кон-
                        тролем всех циклов
                        
                    </li>
                    <li>
                        Проверка давления воды на входе системы водоподготовки, его 
                        настройка
                        
                    </li>
                    <li>
                        Доставка сменных и расходных материалов (таблетированная соль, 
                        реагенты, картриджи, УФ лампы и т.д.)
                    </li>
                  </ul>
         
              </div>
              <div class="col-5">
                <div class="services-page-descr__img">
                  <img src="<?php echo get_template_directory_uri() . '/assets/img/service/1.jpg';?>" alt="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-5">
                  <div class="services-page-descr__img">
                    <img src="<?php echo get_template_directory_uri() . '/assets/img/service/2.jpg';?>" alt="">
                  </div>
              </div>
              <div class="col-7">
                <div class="services-page-descr">
                  Работы по сервисному обслуживанию автономных канализаций.
                </div>
                <ul>
                    <li>
                        Откачка избыточного активного ила из камер
                        
                    </li>
                    <li>
                        Прочистка аэрлифтов и трубопроводов.
                        
                    </li>
                    <li>
                        Техническое обслуживание компрессоров.
                        
                    </li>
                    <li>
                        Диагностика электрооборудования
                    </li>
                  </ul>
                <div class="services-page-descr">
                    Преимущества нашего сервисного обслуживания:
                </div>
                <ul>
                      <li>
                          Профессиональный контроль оборудования
                          
                      </li>
                      <li>
                          Выезд сервис-инженера в течении 24 часов с момента обращения
                          
                      </li>
                      <li>
                          Техническая поддержка клиентов
                          
                      </li>
                      <li>
                          Гарантия низких цен
                          
                      </li>
                      <li>
                          Скидки на расходные материалы и сменные материалы
                      </li>
                    </ul>
              </div>
            </div>

            <div class="row">
              <div class="col-12">
                <div class="services-page-descr">
                    Мы устраняем чужие ошибки, и модернизируем оборудование водоподготовки.
                </div>
                <div class="services-page-descr">
                    Система очистки воды у Вас уже установлена, а из крана течет непонятно что? Вашему оборудованию требуется
                    срочная модернизация. Скорая помощь от "Аквацентр" приедет в любое удобное для Вас время. Мы проведем техни-
                    ческий осмотр и если потребуется модернизируем систему очистки воды, установленную некорректно с различными 
                    нарушениями технологий.
                </div>
                <div class="services-page-descr">
                    Как определить, что пора звонить нам?
                </div>
                <ul>
                  <li>
                      Водоочистное оборудование устарело и неспособно решать поставленные задачи.
                      
                      
                  </li>
                  <li>
                      Оборудование установленное несколько лет назад не отвечает современным требованиям. В этом случае необходимо провести диагностику и модернизацию системы очистки воды, с максимальным использованием комплектующих уже существующего оборудования. В итоге эксплуатационные расходы будут снижены, а эффективность работы повыситься.
                  </li>
                  <li>
                      Ресурс работы фильтрующей загрузки исчерпан или подходит к концу.При необходимости мы заменим фильтрующую загрузку, на более качественную и эффективную. 
                  </li>
                  <li>
                      Также могут  быть изношены отдельные части оборудования. В этом случае мы определим неисправность и заменим изношенные элементы. Вас не устраивает качество воды.Если качество воды после системы очистки оставляет желать лучшего, проблему решит полное техническое обслуживание с применением современных технологий. 
                  </li>
                  <li>
                      При возникновении проблемы обратитесь к нам.
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
        <!-- <div class="col-3">
          <div class="sidebar sidebar-services-main">
            <div class="sidebar-title">
                НАШИ УСЛУГИ
            </div>
            <ul class="sidebar-list">
              <li>
                  Монтаж водоочистного 
                  оборудования
              </li>
              <li>
                  Монтаж автономной 
                  канализации
                  
              </li>
              <li>
                 
                  Обустройство скважин
                  
 
              </li>
              <li>
                  Анализ воды
                  
              </li>
             
            </ul>

            <div class="sidebar-title">
                ВАЖНО ЗНАТЬ
            </div>
            <ul class="sidebar-list">
              <li>
                  Вредные примеси в воде               
              </li>
              <li>
                  Какие бывают системы 
                  очистки воды                 
              </li>
              <li>
                  Как не переплатить за 
                  водоочистку
              </li>
              <li>
                  10 рекомендаций: как 
                  сэкономить на расходе 
                  воды
              </li>
              <li>
                  Подбор оборудования 
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