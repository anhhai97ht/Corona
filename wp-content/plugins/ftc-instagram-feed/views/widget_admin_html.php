<p>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title', 'ftc-instagram-feed' ); ?>:</label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $instance['title'] ); ?>" />
</p>


<?php if($this->is_authorized()):?>
	<p>
		<label for="<?php echo $this->get_field_id( 'username_hashtag' ); ?>"><?php _e( 'Your Instagram username', 'ftc-instagram-feed' ); ?>:</label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'username_hashtag' ); ?>" name="<?php echo $this->get_field_name( 'username_hashtag' ); ?>" type="text" value="<?php echo esc_attr( $instance['username_hashtag'] ); ?>" />
	</p>
	<?php else: ?>
		<p>
			<label for="<?php echo $this->get_field_id( 'username_hashtag' ); ?>"><?php _e( 'Username or Hashtag', 'ftc-instagram-feed' ); ?>:</label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'username_hashtag' ); ?>" name="<?php echo $this->get_field_name( 'username_hashtag' ); ?>" type="text" value="<?php echo esc_attr( $instance['username_hashtag'] ); ?>" />
			<small class="howto"><?php _e( 'Multiple usernames and hastags are alowed.<br/>Example 1: @natgeo<br/>Example 2: #flowers<br/>Example 3: @natgeo, #flowers, @someother', 'ftc-instagram-feed' ); ?></small>
		</p>
	<?php endif; ?>

	<p>
		<label for="<?php echo $this->get_field_id( 'photos_number' ); ?>"><?php _e( 'Number of photos', 'ftc-instagram-feed' ); ?>:</label><br/>
		<input class="ftc-instagram-widget-input-slider" type="range" min="1" step="1" max="12" id="<?php echo $this->get_field_id( 'photos_number' ); ?>" name="<?php echo $this->get_field_name( 'photos_number' ); ?>" value="<?php echo absint( $instance['photos_number'] ); ?>">
		<span class="ftc-instagram-widget-slider-opt-count"><?php echo absint( $instance['photos_number'] ); ?></span>
	</p>


	<p>
		<label for="<?php echo $this->get_field_id( 'columns' ); ?>"><?php _e( 'Columns', 'ftc-instagram-feed' ); ?>:</label><br/>
		<select id="<?php echo $this->get_field_id( 'columns' ); ?>" name="<?php echo $this->get_field_name( 'columns' ); ?>" class="widefat">
			<option value="1" <?php selected( $instance['columns'], 1 );?>> 1 </option>
			<option value="2" <?php selected( $instance['columns'], 2 );?>> 2 </option>
			<option value="3" <?php selected( $instance['columns'], 3 );?>> 3 </option>
			<option value="4" <?php selected( $instance['columns'], 4 );?>> 4 </option>
			<option value="5" <?php selected( $instance['columns'], 5 );?>> 5 </option>
			<option value="6" <?php selected( $instance['columns'], 6 );?>> 6 </option>
			<option value="7" <?php selected( $instance['columns'], 6 );?>> 7 </option>
			<option value="8" <?php selected( $instance['columns'], 6 );?>> 8 </option>
			<option value="9" <?php selected( $instance['columns'], 6 );?>> 9 </option>
			<option value="10" <?php selected( $instance['columns'], 6 );?>> 10 </option>
			<option value="11" <?php selected( $instance['columns'], 6 );?>> 11 </option>
			<option value="12" <?php selected( $instance['columns'], 6 );?>> 12 </option>
		</select>
	</p>


	<p>
		<label for="<?php echo $this->get_field_id( 'photo_space' ); ?>"><?php _e( 'Space items', 'ftc-instagram-feed' ); ?>:</label><br/>
		<input class="small-text" type="text" value="<?php echo absint( $instance['photo_space'] ); ?>" id="<?php echo $this->get_field_id( 'photo_space' ); ?>" name="<?php echo $this->get_field_name( 'photo_space' ); ?>" /> px
		<small class="howto"><?php _e( 'Spacing between your photos', 'ftc-instagram-feed' ); ?></small>
	</p>


	<p>
		<label for="<?php echo $this->get_field_id( 'container_size' ); ?>"><?php _e( 'Widget container size', 'ftc-instagram-feed' ); ?>:</label><br/>
		<input class="small-text widefat" type="text" value="<?php echo absint( $instance['container_size'] ); ?>" id="<?php echo $this->get_field_id( 'container_size' ); ?>" name="<?php echo $this->get_field_name( 'container_size' ); ?>" /> px
	</p>


	<p>
		<label for="<?php echo $this->get_field_id( 'transient_time' ); ?>"><?php _e( 'Refresh interval', 'ftc-instagram-feed' ); ?>:</label><br/>
		<select id="<?php echo $this->get_field_id( 'transient_time' ); ?>" name="<?php echo $this->get_field_name( 'transient_time' ); ?>" class="widefat">
			<?php if( $this->is_authorized() ): ?>
				<option value="<?php echo esc_attr(1 * HOUR_IN_SECONDS); ?>" <?php selected( $instance['transient_time'], 1 * HOUR_IN_SECONDS );?>> 1 <?php _e( 'Hour', 'ftc-instagram-feed' ); ?></option>
				<option value="<?php echo esc_attr(6 * HOUR_IN_SECONDS); ?>" <?php selected( $instance['transient_time'], 6 * HOUR_IN_SECONDS );?>> 6 <?php _e( 'Hours', 'ftc-instagram-feed' ); ?></option>
			<?php endif; ?>
			<option value="<?php echo esc_attr(12 * HOUR_IN_SECONDS); ?>" <?php selected( $instance['transient_time'], 12 * HOUR_IN_SECONDS );?>> 12 <?php _e( 'Hours', 'ftc-instagram-feed' ); ?></option>
			<option value="<?php echo esc_attr(DAY_IN_SECONDS); ?>" <?php selected( $instance['transient_time'], DAY_IN_SECONDS );?>> 24 <?php _e( 'Hours', 'ftc-instagram-feed' ); ?></option>
		</select>
		<small class="howto"><?php _e( 'Time to refresh Instagram photos', 'ftc-instagram-feed' ); ?></small>
	</p>

	<p>
		<label for="<?php echo $this->get_field_id( 'link_text' ); ?>"><?php _e( '"Follow" link text', 'ftc-instagram-feed' ); ?>:</label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'link_text' ); ?>" name="<?php echo $this->get_field_name( 'link_text' ); ?>" type="text" value="<?php echo esc_attr( $instance['link_text'] ); ?>" />
		<small class="howto"><?php _e( 'Specify a text for your "follow" link, or leave empty if you do not want to display the "follow" link. Follow link will use username from "Your Instagram username" input above.', 'ftc-instagram-feed' ); ?></small>
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'hover_animation' ); ?>"><?php _e( 'Hover Animation', 'ftc-instagram-feed' ); ?>:</label><br/>
		<select id="<?php echo $this->get_field_id( 'hover_animation' ); ?>" name="<?php echo $this->get_field_name( 'hover_animation' ); ?>" class="widefat">
			<option value="push" <?php selected( $instance['hover_animation'], 1 );?>> None </option>
			<option value="sink" <?php selected( $instance['hover_animation'], 2 );?>> 2 </option>
			<option value="" <?php selected( $instance['hover_animation'], 3 );?>> 3 </option>
			<option value="4" <?php selected( $instance['hover_animation'], 4 );?>> 4 </option>
			<!--  -->
		</select>
	</p>
	<p>
		<input type="checkbox" id="<?php echo $this->get_field_id('is_slider'); ?>" name="<?php echo $this->get_field_name('is_slider'); ?>" value="0" <?php echo ($instance['is_slider'])?'checked':''; ?> />
		<label for="<?php echo $this->get_field_id('is_slider'); ?>"><?php esc_html_e('Show in a carousel slider', 'themeftc'); ?></label>
	</p>

	<p>
		<input type="checkbox" id="<?php echo $this->get_field_id('show_nav'); ?>" name="<?php echo $this->get_field_name('show_nav'); ?>" value="1" <?php echo ($instance['show_nav'])?'checked':''; ?> />
		<label for="<?php echo $this->get_field_id('show_nav'); ?>"><?php esc_html_e('Show navigation button', 'themeftc'); ?></label>
	</p>

	<p>
		<input type="checkbox" id="<?php echo $this->get_field_id('auto_play'); ?>" name="<?php echo $this->get_field_name('auto_play'); ?>" value="1" <?php echo ($instance['auto_play'])?'checked':''; ?> />
		<label for="<?php echo $this->get_field_id('auto_play'); ?>"><?php esc_html_e('Auto play', 'themeftc'); ?></label>
	</p>