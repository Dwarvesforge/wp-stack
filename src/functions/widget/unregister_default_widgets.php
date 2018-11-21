<?php

namespace WPS;

/**
 * Unregister default wordpress widgets
 *
 * @example    php
 * WPS::unregister_default_widgets();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function unregister_default_widgets() {
	add_action( 'widgets_init', 'WPS\_unregister_default_widgets' );
}
function _unregister_default_widgets() {
	unregister_widget( 'WP_Widget_Pages' ); // Le widget Pages
	unregister_widget( 'WP_Widget_Calendar' ); // Le widget Calendrier
	unregister_widget( 'WP_Widget_Archives' ); // Le widget Archives
	unregister_widget( 'WP_Widget_Meta' ); // Le widget Meta
	unregister_widget( 'WP_Widget_Search' ); // Le widget Rechercher
	unregister_widget( 'WP_Widget_Text' ); // Le widget de texte
	unregister_widget( 'WP_Widget_Media_Audio' ); // Le widget Audio
	unregister_widget( 'WP_Widget_Media_Image' ); // Le widget Image
	unregister_widget( 'WP_Widget_Media_Video' ); // Le widget Vidéo
	unregister_widget( 'WP_Widget_Custom_HTML' ); // Le widget HTML personnalisé
	unregister_widget( 'WP_Widget_Categories' ); // Le widget catégories
	unregister_widget( 'WP_Widget_Recent_Posts' ); // Le widget articles récents
	unregister_widget( 'WP_Widget_Recent_Comments' ); // Le widget Commentaires récents
	unregister_widget( 'WP_Widget_RSS' ); // Le widget RSS
	unregister_widget( 'WP_Widget_Tag_Cloud' ); // Le widget nuage d'étiquettes
	unregister_widget( 'WP_Nav_Menu_Widget' ); // Le widget menu personnalisé
	unregister_widget( 'WP_Widget_Media_Gallery' ); // Le widget menu personnalisé
}
