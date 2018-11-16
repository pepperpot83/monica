<?php
/*Questo file è parte di monica, penscratch-2-wpcom child theme.

Tutte le funzioni di questo file saranno caricate prima delle funzioni del tema genitore-
Per saperne di piùhttps://codex.wordpress.org/Child_Themes.

Nota: questa funzione carica prima il foglio di stile genitore, poi il foglio di stile figlio.
(non toccare se non sai cosa stai facendo)
*/

function monica_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'monica_enqueue_child_styles' );

/*Scrivi qui le tue funzioni */
