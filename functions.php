<?php
	/* Child Theme Scripts */
	function theme_enqueue_styles() {
		wp_enqueue_style( 'kake-parent-stylesheet', get_template_directory_uri() . '/style.css' );
	}
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

	/* Custom Fonts List */
	$font_list = array(
		/**	Add custom font files in /fonts/ directory thru FTP.
		 ** Add list here, e.g.: 'FONT_NAME_HERE' => 'FONT_NAME_HERE',
		 **/
		
	);