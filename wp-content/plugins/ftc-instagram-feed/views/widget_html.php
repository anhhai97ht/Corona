<div class="ftc-instagram-widget <?php if($instance['is_slider'] == true){ echo 'slider'; } ?>" data-slider="<?php echo esc_attr( $instance['is_slider']); ?>" data-show_nav="<?php echo esc_attr( $instance['show_nav']); ?>"  data-auto_play="<?php echo esc_attr( $instance['auto_play']); ?>" data-columns="<?php echo esc_attr( $instance['columns']); ?>" data-margin="<?php echo esc_attr( $instance['photo_space'] ); ?>" style="max-width: 100%; margin: 0">
		
	<?php if ( !empty($photos) ): ?>

		<?php foreach ( $photos as $photo ): ?>
		
			<div style="padding: <?php echo esc_attr( $instance['photo_space']/2 ); ?>px; -webkit-box-flex: 0;-ms-flex: 0 0 <?php echo esc_attr( $size['flex'] ); ?>%; flex: 0 0 <?php echo esc_attr( $size['flex'] ); ?>%; ">

				<a href="<?php echo esc_attr( $photo['link'] ); ?>" title="<?php echo esc_attr( $photo['caption'] ); ?>" target="_blank" rel="nofollow">
					<img src="<?php echo esc_attr( $photo[$size['thumbnail']] ); ?>"  class="elementor-animation-<?php  echo esc_attr( $instance['hover_animation'] ); ?>" alt="<?php echo esc_attr( $photo['caption'] ); ?>">
				</a>


			</div>

		<?php endforeach; ?>

	<?php endif; ?>

</div>

<?php if ( !empty($instance['link_text']) && !empty($follow_link) ): ?>
	
	<p class="ftc-instagram-follow-link">
		<a href="<?php echo esc_attr( $follow_link ) ?>" target="_blank" rel="nofollow" class="ftc-button-follow"><i class="fa fa-instagram"></i> <?php echo esc_html( $instance['link_text'] ); ?></a>
	</p>

<?php endif; ?>