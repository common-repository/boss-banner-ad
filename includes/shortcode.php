<?php
	// [boss_banner image="http://cssboss.com/wp-content/uploads/2012/02/cssbosslogo.png" url="http://www.cssboss.com" alt="cssboss" width="300" height="200" newwindow="yes" nofollow="yes"]
	function boss_banner_shortcode( $atts ) {
		extract( shortcode_atts( array(
			'image' => 'http://cssboss.com/wp-content/uploads/2012/07/cssboss_website_logo2.png',
			'url' => 'http://www.cssboss.com',
			'width' => '',
			'height' => '',
			'newwindow' => 'yes',
			'alt' => '',
			'nofollow' => '',
		), $atts ) );

		if ( $width != ''  ) { $boss_width = 'width="'.$width.'"'; } else { $boss_width = ''; }
		if ( $height != ''  ) { $boss_height = 'height="'.$height.'"'; } else { $boss_height = ''; }
		if ( $nofollow == 'yes' ) { $boss_nofollow = 'rel="nofollow"'; } else { $boss_nofollow = ''; }
		if ( $newwindow == 'yes' ) { $boss_target = 'target="_blank"'; } else { $boss_newwindow = ''; }
		if ( isset( $alt ) ) { $boss_alt = $alt; } else { $boss_alt = ''; }
		
		return '<a href="'.$url.'" '. $boss_target . $boss_nofollow.'><img src="'.$image.'" '.$boss_height . $boss_width .' alt="'.$boss_alt.'"/></a>';
	}
	
	add_shortcode( 'boss_banner', 'boss_banner_shortcode' );
?>