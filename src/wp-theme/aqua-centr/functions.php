<?php
/**
 * aqua-centr functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package aqua-centr
 */



/**
 * Enqueue scripts and styles.
 */


add_action( 'wp_enqueue_scripts', 'aqua_centr_scripts' ); 

function aqua_centr_scripts() {

	

	wp_enqueue_style( 'aqua-centr-main-style', get_stylesheet_uri() );

	// wp_enqueue_style( 'aqua-centr-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	// wp_enqueue_style( 'aqua-centr-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');

	wp_enqueue_style( 'aqua-centr-styles', get_template_directory_uri() . '/assets/css/styles.css');


	// wp_enqueue_script( 'aqua-centr-js-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', true);

	//wp_enqueue_script( 'aqua-centr-js-main', get_template_directory_uri() . '/assets/js/main.js', true);

	

}



/** 
 * Register Nav Menu
 */

add_action('after_setup_theme', 'aqua_centr_menus');

function aqua_centr_menus() {
	register_nav_menu('top', 'верхнее меню');
	register_nav_menu('bottom', 'нижнее меню');
	// register_nav_menu('right', 'боковое меню (базовое)');
	register_nav_menu('right_products', 'боковое меню (страница оборудования)');
	register_nav_menu('right_products_part', 'боковое меню (страница подкатегории оборудования)');
	register_nav_menu('right_services', 'боковое меню (страница услуг)');
	register_nav_menu('right_services_part', 'боковое меню (страница подкатегории услуг)');
	register_nav_menu('right_card', 'боковое меню (карточка оборудования)');
	register_nav_menu('right_posts', 'боковое меню (страница статьи)');
	register_nav_menu('right_search', 'боковое меню (страница результатов поиска)');
	// register_nav_menu('right_ingeneer', 'боковое меню (сантехника)');
	// register_nav_menu('right_system', 'боковое меню (системы очистки)');
	// register_nav_menu('right_pumps', 'боковое меню (насосы)');

	//add_theme_support('post-thumbnails', array( 'post', 'objects', 'services', 'reviews' ) );

	add_theme_support( 'html5', array( 'search-form' ) );

	// add_theme_support( 'custom-logo', [
	// 	'height'      => 70,
	// 	'width'       => 70,
	// 	'flex-width'  => false,
	// 	'flex-height' => false,
	// 	'header-text' => '',
	// ] );


}


/**
 * Remove admin menu items
 */

function remove_menu_items(){
	//remove_menu_page( 'index.php' );                  //Консоль
  remove_menu_page( 'edit.php' );                   //Записи
  remove_menu_page( 'upload.php' );                 //Медиафайлы
  //remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  remove_menu_page( 'themes.php' );                 //Внешний вид
  //remove_menu_page( 'plugins.php' );                //Плагины
  //remove_menu_page( 'users.php' );                  //Пользователи
  //remove_menu_page( 'tools.php' );                  //Инструменты
  //remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menu_items' );







## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
if( 'disable_gutenberg' ){
	add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

	// отключим подключение базовых css стилей для блоков
	// ВАЖНО! когда выйдут виджеты на блоках или что-то еще, эту строку нужно будет комментировать
	remove_action( 'wp_enqueue_scripts', 'wp_common_block_scripts_and_styles' );

	// Move the Privacy Policy help notice back under the title field.
	add_action( 'admin_init', function(){
		remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
		add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
	} );
}


?>
