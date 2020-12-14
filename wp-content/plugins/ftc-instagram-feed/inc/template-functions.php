<?php

add_shortcode( 'ftc_insta_photo_feed', 'ftc_shortcode_intsta_photo_feed' );

function ftc_shortcode_intsta_photo_feed( $atts ) {

	$atts = shortcode_atts(
		array(
			'title'          => '',
			'username_hashtag'       => '',
			'photos_number'  => 12,
			'columns'        => 3,
			'photo_space'    => 2, 
			'container_size' => 300,
			'link_text'      => '',
			'hover_animation' => '',
			'is_slider'       => 0,
			'show_nav'        => 1,
			'auto_play'       => 1,

		),
		$atts
	);

	ob_start();

	the_widget(
		'Ftc_Instagrams_Widget',
		array(
			'title'            => $atts['title'],
			'username_hashtag' => $atts['username_hashtag'],
			'photos_number'    => $atts['photos_number'],
			'columns'          => $atts['columns'],
			'photo_space'      => $atts['photo_space'],
			'container_size'   => $atts['container_size'],
			'link_text'        => $atts['link_text'],
			'hover_animation'  => $atts['hover_animation'],
			'is_slider'        => $atts['is_slider'],
			'show_nav'         => $atts['show_nav'],
			'auto_play'        => $atts['auto_play'],
		)
	);

	$output = ob_get_contents();
	ob_end_clean();

	return $output;

}
