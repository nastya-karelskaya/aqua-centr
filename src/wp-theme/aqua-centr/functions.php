<?php
/**
 * svartechkom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package svartechkom
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
	register_nav_menu('top', 'desktop_menu');
	register_nav_menu('bottom', 'footer_menu');

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
  //remove_menu_page( 'upload.php' );                 //Медиафайлы
  //remove_menu_page( 'edit.php?post_type=page' );    //Страницы
  remove_menu_page( 'edit-comments.php' );          //Комментарии
  //remove_menu_page( 'themes.php' );                 //Внешний вид
  //remove_menu_page( 'plugins.php' );                //Плагины
  //remove_menu_page( 'users.php' );                  //Пользователи
  //remove_menu_page( 'tools.php' );                  //Инструменты
  //remove_menu_page( 'options-general.php' );        //Настройки
}
add_action( 'admin_menu', 'remove_menu_items' );



/**
 * Register Services type post
 */

add_action('init', 'register_services');
function register_services(){
	register_post_type('uslugy', array(
		'labels'             => array(
			'name'               => 'Услуги', // Основное название типа записи
			'singular_name'      => 'Услуга', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую услугу',
			'edit_item'          => 'Редактировать услугу',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть услугу',
			'search_items'       => 'Найти услугу',
			'not_found'          =>  'Услуг не найдено',
			'not_found_in_trash' => 'В корзине услуг не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Услуги'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		//'taxonomies'         => array('services_type'),
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 4,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}


add_action('init', 'register_products');
function register_products(){
	register_post_type('oborudovanie', array(
		'labels'             => array(
			'name'               => 'Оборудование', // Основное название типа записи
			'singular_name'      => 'Оборудование', // отдельное название записи типа Book
			'add_new'            => 'Добавить новое',
			'add_new_item'       => 'Добавить новое оборудование',
			'edit_item'          => 'Редактировать оборудование',
			'new_item'           => 'Новое оборудование',
			'view_item'          => 'Посмотреть оборудование',
			'search_items'       => 'Найти оборудование',
			'not_found'          =>  'Оборудование не найдено',
			'not_found_in_trash' => 'В корзине оборудование не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Оборудование'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}

add_action('init', 'register_important');
function register_important(){
	register_post_type('statiyi', array(
		'labels'             => array(
			'name'               => 'Статьи', // Основное название типа записи
			'singular_name'      => 'Статьи', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую статью',
			'edit_item'          => 'Редактировать статью',
			'new_item'           => 'Новая статья',
			'view_item'          => 'Посмотреть статью',
			'search_items'       => 'Найти статью',
			'not_found'          =>  'Статья не найдено',
			'not_found_in_trash' => 'В корзине статьи не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Статьи'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
	) );
}


// add_action('init', 'register_svar_reviews');
// function register_svar_reviews(){
// 	register_post_type('allreviews', array(
// 		'labels'             => array(
// 			'name'               => 'Отзывы', // Основное название типа записи
// 			'singular_name'      => 'Отзыв', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить новый',
// 			'add_new_item'       => 'Добавить новый отзыв',
// 			'edit_item'          => 'Редактировать отзыв',
// 			'new_item'           => 'Новый отзыв',
// 			'view_item'          => 'Посмотреть отзыв',
// 			'search_items'       => 'Найти отзыв',
// 			'not_found'          =>  'Отзывов не найдено',
// 			'not_found_in_trash' => 'В корзине отзывов не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Отзывы'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => 6,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')
// 	) );
// }










?>
