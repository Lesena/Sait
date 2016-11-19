<?php
function theme_name_scripts() {
     wp_enqueue_script('slider', get_template_directory_uri() . '/js/slider.js');
	 wp_enqueue_script('animate', get_template_directory_uri() . '/css/animate.css');
	 wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
	 wp_enqueue_script('flexslider', get_template_directory_uri() . '/css/flexslider.css');
	 wp_enqueue_script('prettyPhoto', get_stylesheet_uri());
	 wp_enqueue_script('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','theme_name_scripts');

//Миниатюра
add_theme_support('post-thumbnails');
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
function enqueue_scripts () {
	wp_register_script('html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
	wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

//HeaderMenu

add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'menu' => 'Меню в шапке'
		
	) );
});
add_action('after_setup_theme', function(){
register_nav_menus(array(

'sidebar_menu' =>'Меню в сайдбаре'));
});;
if (function_exists('add_theme_support')) {
	add_theme_support('menu');
}
add_action( 'init', 'custom_remove_footer_credit', 10 );

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
}

// Своя надпись

function custom_storefront_credit() {
    ?>
    <div class="contact_info">
        &copy; <?php echo 'Ваш текст'; ?>
    </div><!-- .site-info -->
    <?php
}
function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
  return $html;

}

$args_footer = array(
'name'   => 'Виджет footer',
'id'     =>  'footer',
'description' => 'Здесь добавляем виджеты footer',
'before_widget' => '<li id="%1" class="widget %2">',
'after_widget' => '</li>',
'before_title' => '<h2 class="widgettitle">',
'after_title' => '</h2>'
);

register_sidebar($args_footer);
function remove_comment_author_class( $classes ) {
    foreach( $classes as $key => $class ) {
        if(strstr($class, "comment-author-")) {
            unset( $classes[$key] );
        }
    }
    return $classes;
}
add_filter( 'comment_class' , 'remove_comment_author_class' );
add_filter('login_errors',create_function('$a', "return null;"));

function remove_version_data( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', 'remove_version_data', 15, 1 );
add_filter( 'style_loader_src', 'remove_version_data', 15, 1 );

/**
 * добавляем миниатюры к категориям.
 */
function tutsplus_add_attachments_to_categories() {
 
    register_taxonomy_for_object_type( 'category', 'attachment' );
 
}
 
add_action( 'init' , 'tutsplus_add_attachments_to_categories' );
function my_custom_init() {
    add_post_type_support( '...', 'custom-fields' );
    add_post_type_support( '...', 'custom-fields' );
}
add_action( 'init', 'my_custom_init' );
/*Feature Custom Field*/
function feature_customfield(){


}

function new_excerpt_length($length) {
   return 20;
}
add_filter('excerpt_length', 'new_excerpt_length');


 
function admin_init(){
   add_meta_box('feature', 'Интересные акции', 'feature_customfield', 'post', 'normal', 'low');
}
 
add_action('admin_init', 'admin_init');
//Код поддержки пользовательского фона
add_custom_background();
//Включите ссылки загрузок RSS-читалок постов и комментариев
add_theme_support( 'automatic-feed-links' );

add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}

register_sidebar( array(
        'name' => __( 'Контакты в footer ', '' ),
        'id' => 'top-area',
        'description' => __( 'footer', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

 register_sidebar(array(
    'name' => 'Первая колонка для фото',
    'id' => 'img-wrap1',
    'description' => 'Первая область',
    'before_widget' => '<div id="img-wrap1">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	
	register_sidebar(array(
    'name' => 'Вторая колонка для фото',
    'id' => 'img-wrap2',
    'description' => 'Первая область',
    'before_widget' => '<div id="img-wrap2">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	register_sidebar(array(
    'name' => 'Третья колонка для фото',
    'id' => 'img-wrap3',
    'description' => 'Первая область',
    'before_widget' => '<div id="img-wrap3">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	register_sidebar(array(
    'name' => 'Карта',
    'id' => 'content-sidebar',
    'description' => 'Первая область',
    'before_widget' => '<div id="content-sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	register_sidebar(array(
    'name' => 'Язык',
    'id' => 'languege',
    'description' => 'Язык',
    'before_widget' => '<div id="languege">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	register_sidebar(array(
    'name' => 'Новости',
    'id' => 'title_one',
    'description' => 'Новости',
    'before_widget' => '<div id="title_one">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	register_sidebar(array(
    'name' => 'Фото',
    'id' => 'title_two',
    'description' => 'Фото',
    'before_widget' => '<div id="title_two">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
    register_sidebar(array(
    'name' => 'Пост',
    'id' => 'post_one',
    'description' => 'Пост',
    'before_widget' => '<div id="post_one">',
    'after_widget' => '</div>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
    ));
	
?>