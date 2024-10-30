<?php
	class boss_banner_ad_widget extends WP_Widget 
	{
		public function __construct() 
		{
			parent::__construct(
	 			'boss_banner_ad', // Base ID
				'BOSS Banner Ad', // Name
				array( 'description' => __( 'Link a banner', 'text_domain' ), ) // Args
			);
		}
	
		public function boss_banner_ad_widget()
		{
			$widget_ops = array(
				'classname'=>'boss-banner-ad', // class that will be added to li element in widgeted area ul
				'description'=>'Display a banner and link to a url' // description displayed in admin
			);
			$control_ops = array(
				'width'=>200, 'height'=>250, // width of input widget in admin
				'id_base'=>'boss-banner-ad' // base of id of li element ex. id="example-widget-1"
			);
			$this->WP_Widget('boss_banner_ad', 'BOSS Banner Ad', $widget_ops, $control_ops); 
		}
		
		public function form($instance)
		{
			if (isset($instance['link_url'])){ $link_url = $instance[ 'link_url' ]; } else { $link_url = __( 'http://www.cssboss.com', 'text_domain' ); }
			if (isset($instance['image_url'])){ $image_url = $instance[ 'image_url' ]; } else { $image_url = __( 'http://www.cssboss.com/images/logo.png', 'text_domain' ); }
			if (isset($instance['image_width'])){ $image_width = $instance[ 'image_width' ]; } else { $image_width = __( '', 'text_domain' ); }
			if (isset($instance['image_height'])){ $image_height = $instance[ 'image_height' ]; } else { $image_height = __( '', 'text_domain' ); }
			if ( isset( $instance[ 'newwindow' ] ) ) { $boss_newwindow = $instance[ 'newwindow' ]; } else { $boss_newwindow = __( 'checked' , 'text_domain' ); }
			if (isset($instance['alt'])) { $boss_alt = $instance['alt']; } else { $boss_alt = __('','text_domain'); }
			if ( isset( $instance[ 'nofollow' ] ) ) { $boss_nofollow = $instance[ 'nofollow' ]; } else { $boss_nofollow = __( 'checked' , 'text_domain' ); }
			
		?>
			<p>
				<label for="<?php echo $this->get_field_id( 'link_url' ); ?>"><?php _e( 'Link Image To URL:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'link_url' ); ?>" name="<?php echo $this->get_field_name( 'link_url' ); ?>" type="text" value="<?php echo esc_attr( $link_url ); ?>" />
			</p>	
			<p>
				<label for="<?php echo $this->get_field_id( 'image_url' ); ?>"><?php _e( 'URL To Image:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'image_url' ); ?>" name="<?php echo $this->get_field_name( 'image_url' ); ?>" type="text" value="<?php echo esc_attr( $image_url ); ?>"  />
			</p>	
			<p>
				<label for="<?php echo $this->get_field_id( 'image_width' ); ?>"><?php _e( 'Image Width:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'image_width' ); ?>" name="<?php echo $this->get_field_name( 'image_width' ); ?>" type="text" value="<?php echo esc_attr( $image_width ); ?>" />
			</p>	
			<p>
				<label for="<?php echo $this->get_field_id( 'image_height' ); ?>"><?php _e( 'Image Height:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'image_height' ); ?>" name="<?php echo $this->get_field_name( 'image_height' ); ?>" type="text" value="<?php echo esc_attr( $image_height ); ?>"/>
			</p>
			<p>
				<label for="<?php echo $this->get_field_id( 'alt' ); ?>"><?php _e( 'Image Alt Text:' ); ?></label> 
				<input class="widefat" id="<?php echo $this->get_field_id( 'alt' ); ?>" name="<?php echo $this->get_field_name( 'alt' ); ?>" type="text" value="<?php echo esc_attr( $boss_alt ); ?>"/>
			</p>		
			<p>
				<label for="<?php echo $this->get_field_id( 'newwindow' ); ?>"><?php _e( 'Open In New Window:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'newwindow' ); ?>" name="<?php echo $this->get_field_name( 'newwindow' ); ?>" type="checkbox" value="<?php echo esc_attr( $boss_newwindow ); ?>" <?php checked( (bool) $boss_newwindow, true ); ?> />
			</p>	
				
			<p>
				<label for="<?php echo $this->get_field_id( 'nofollow' ); ?>"><?php _e( 'No Follow:' ); ?></label> 
				<input id="<?php echo $this->get_field_id( 'nofollow' ); ?>" name="<?php echo $this->get_field_name( 'nofollow' ); ?>" type="checkbox" value="<?php echo esc_attr( $boss_nofollow ); ?>" <?php checked( (bool) $boss_nofollow, true ); ?> />
			</p>	
			<p style="text-align:right;">
				<a href="http://www.cssboss.com" target="_blank">CSSBoss.com</a> - <a href="http://www.youtube.com/subscription_center?add_user=thecssboss" target="_blank">Youtube</a> - <a href="http://www.csssboss.com/donate" target="_blank">Donate</a> <strong>&#9774;</strong>
			</p>
			
		<?php
		}
		
		public function update($new_instance, $old_instance) 
		{
			// save the widget info
			$instance = array();
			$instance['link_url'] = strip_tags( $new_instance['link_url'] );
			$instance['image_url'] = strip_tags( $new_instance['image_url']);
			$instance['image_width'] = strip_tags( $new_instance['image_width'] );
			$instance['image_height'] = strip_tags( $new_instance['image_height'] );
			$instance['alt'] = strip_tags( $new_instance['alt'] );
			$instance['nofollow'] = ( isset( $new_instance['nofollow'] ) ? 1 : 0 );
			$instance['newwindow'] = ( isset( $new_instance['newwindow'] ) ? 1 : 0 );
			return $instance;
		}
		
		public function widget($args, $instance) 
		{
			extract( $args );	// grabbing all the args for the widget

			// setting all the args for the widget
			$link_url = $instance['link_url'];
			$image_url= $instance['image_url'];
			if ( $instance['image_width'] != '' ) { $image_width = 'width="'.$instance['width'].'"'; } else { $image_width = ''; }
			if ( $instance['image_height'] != '' ) { $image_height = 'height="'.$instance['height'].'"'; } else { $image_height = ''; }
			if ( $instance['newwindow'] == 1 ) { $newwindow = 'target="_blank"'; } else { $newwindow = ''; }
			if ( $instance['nofollow'] == 1 ) { $nofollow = 'rel="nofollow"'; } else { $nofollow = ''; }
			if ( $instance['alt'] != '' ) { $alt = $instance['alt']; }
			
			echo $before_widget;
			?>
				<a href="<?php echo $link_url; ?>" <?php echo $nofollow . $newwindow; ?>><img src="<?php echo $image_url; ?>" <?php echo $image_height . $image_width; ?> alt="'.$alt.'" /></a>
			<?php
			echo $after_widget;
			
		}
	}
	add_action( 'widgets_init', create_function( '', 'register_widget( "boss_banner_ad_widget" );' ) );
?>