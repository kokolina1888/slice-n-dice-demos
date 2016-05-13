<?php 
 $args = array(
	'name'          => __( 'left sidebar'),
	'id'            => 'left-sidebar', 
	'before_widget' => '<ul class="list1">',
	'after_widget'  => '</ul>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );
 register_sidebar( $args );

function register_my_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

//register_nav_menu('header-menu', 'this is my top menu');
 ?>