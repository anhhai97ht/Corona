<?php
namespace Elementor;

use Elementor\Controls_Manager;
use Elementor\Group_Control_Image_Size;
use Elementor\Group_Control_Typography;
use Elementor\Repeater;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Ftc_Price_List extends Widget_Base {

	public function get_name() {
		return 'ftc-price-list';
	}

	public function get_title() {
		return __( 'FTC - Price List', 'ftc-element' );
	}

	public function get_icon() {
		return 'ftc-icon';
	}

	public function get_categories() {
		return [ 'ftc-elements' ];
	}

	public function get_keywords() {
		return [ 'pricing', 'list', 'product', 'image', 'menu' ];
	}

	protected function _register_controls() {
		$this->start_controls_section(
			'section_list',
			[
				'label' => __( 'List', 'ftc-element' ),
				'tab' => Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new Repeater();

		$repeater->add_control(
			'price',
			[
				'label' => __( 'Price', 'ftc-element' ),
				'type' => Controls_Manager::TEXT,
			]
		);

		$repeater->add_control(
			'title',
			[
				'label' => __( 'Title', 'ftc-element' ),
				'type' => Controls_Manager::TEXT,
				'default' => '',
				'label_block' => 'true',
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'item_description',
			[
				'label' => __( 'Description', 'ftc-element' ),
				'type' => Controls_Manager::TEXTAREA,
				'default' => '',
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'image',
			[
				'label' => __( 'Image', 'ftc-element' ),
				'type' => Controls_Manager::MEDIA,
				'default' => [],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$repeater->add_control(
			'link',
			[
				'label' => __( 'Link', 'ftc-element' ),
				'type' => Controls_Manager::URL,
				'default' => [ 'url' => '#' ],
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'price_list',
			[
				'label' => __( 'List Items', 'ftc-element' ),
				'type' => Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => __( 'First item on the list from only', 'ftc-element' ),
						'item_description' => __( 'I am item content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'ftc-element' ),
						'price' => '$20',
						'link' => [ 'url' => '#' ],
					],
					[
						'title' => __( 'Second item on the list from only', 'ftc-element' ),
						'item_description' => __( 'I am item content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'ftc-element' ),
						'price' => '$9',
						'link' => [ 'url' => '#' ],
					],
					[
						'title' => __( 'Third item on the list from only', 'ftc-element' ),
						'item_description' => __( 'I am item content. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'ftc-element' ),
						'price' => '$32',
						'link' => [ 'url' => '#' ],
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'section_list_style',
			[
				'label' => __( 'List', 'ftc-element' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'heading__title',
			[
				'label' => __( 'Title & Price', 'ftc-element' ),
				'type' => Controls_Manager::HEADING,
			]
		);

		$this->add_control(
			'heading_color',
			[
				'label' => __( 'Color', 'ftc-element' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_1,
				],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-header' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'heading_typography',
				'scheme' => Scheme_Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .ftc-price-list-header',
			]
		);

		$this->add_control(
			'heading_item_description',
			[
				'label' => __( 'Description', 'ftc-element' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'description_color',
			[
				'label' => __( 'Color', 'ftc-element' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_3,
				],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-description' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'scheme' => Scheme_Typography::TYPOGRAPHY_3,
				'selector' => '{{WRAPPER}} .ftc-price-list-description',
			]
		);

		$this->add_control(
			'heading_separator',
			[
				'label' => __( 'Separator', 'ftc-element' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->add_control(
			'separator_style',
			[
				'label' => __( 'Style', 'ftc-element' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'solid' => __( 'Solid', 'ftc-element' ),
					'dotted' => __( 'Dotted', 'ftc-element' ),
					'dashed' => __( 'Dashed', 'ftc-element' ),
					'double' => __( 'Double', 'ftc-element' ),
					'none' => __( 'None', 'ftc-element' ),
				],
				'default' => 'dotted',
				'render_type' => 'template',
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-separator' => 'border-bottom-style: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'separator_weight',
			[
				'label' => __( 'Weight', 'ftc-element' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 10,
					],
				],
				'condition' => [
					'separator_style!' => 'none',
				],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-separator' => 'border-bottom-width: {{SIZE}}{{UNIT}}',
				],
				'default' => [
					'size' => 2,
				],
			]
		);

		$this->add_control(
			'separator_color',
			[
				'label' => __( 'Color', 'ftc-element' ),
				'type' => Controls_Manager::COLOR,
				'scheme' => [
					'type' => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_2,
				],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-separator' => 'border-bottom-color: {{VALUE}};',
				],
				'condition' => [
					'separator_style!' => 'none',
				],
			]
		);

		$this->add_control(
			'separator_spacing',
			[
				'label' => __( 'Spacing', 'ftc-element' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 40,
					],
				],
				'condition' => [
					'separator_style!' => 'none',
				],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-separator' => 'margin-left: {{SIZE}}{{UNIT}}; margin-right: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_image_style',
			[
				'label' => __( 'Image', 'ftc-element' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			]
		);

		$this->add_group_control(
			Group_Control_Image_Size::get_type(),
			[
				'name' => 'image_size',
				'default' => 'thumbnail',
			]
		);

		$this->add_control(
			'border_radius',
			[
				'label' => __( 'Border Radius', 'ftc-element' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-image img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'image_spacing',
			[
				'label' => __( 'Spacing', 'ftc-element' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'body.rtl {{WRAPPER}} .ftc-price-list-image' => 'padding-left: calc({{SIZE}}{{UNIT}}/2);',
					'body.rtl {{WRAPPER}} .ftc-price-list-image + .ftc-price-list-text' => 'padding-right: calc({{SIZE}}{{UNIT}}/2);',
					'body:not(.rtl) {{WRAPPER}} .ftc-price-list-image' => 'padding-right: calc({{SIZE}}{{UNIT}}/2);',
					'body:not(.rtl) {{WRAPPER}} .ftc-price-list-image + .ftc-price-list-text' => 'padding-left: calc({{SIZE}}{{UNIT}}/2);',
				],
				'default' => [
					'size' => 20,
				],
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'section_item_style',
			[
				'label' => __( 'Item', 'ftc-element' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'show_label' => false,
			]
		);

		$this->add_control(
			'row_gap',
			[
				'label' => __( 'Rows Gap', 'ftc-element' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
					'em' => [
						'max' => 5,
						'step' => 0.1,
					],
				],
				'size_units' => [ 'px', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list li:not(:last-child)' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
				'default' => [
					'size' => 20,
				],
			]
		);

		$this->add_control(
			'vertical_align',
			[
				'label' => __( 'Vertical Align', 'ftc-element' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'top' => __( 'Top', 'ftc-element' ),
					'bottom' => __( 'Bottom', 'ftc-element' ),
					'center' => __( 'Center', 'ftc-element' ),
				],
				'selectors' => [
					'{{WRAPPER}} .ftc-price-list-item' => 'align-items: {{VALUE}};',
				],
				'selectors_dictionary' => [
					'top' => 'flex-start',
					'bottom' => 'flex-end',
				],
				'default' => 'top',
			]
		);

		$this->end_controls_section();
	}

	private function render_image( $item, $instance ) {
		$image_id = $item['image']['id'];
		$image_size = $instance['image_size_size'];
		if ( 'custom' === $image_size ) {
			$image_src = Group_Control_Image_Size::get_attachment_image_src( $image_id, 'image_size', $instance );
		} else {
			$image_src = wp_get_attachment_image_src( $image_id, $image_size );
			$image_src = $image_src[0];
		}

		return sprintf( '<img src="%s" alt="%s" />', $image_src, $item['title'] );
	}

	private function render_item_header( $item ) {
		$url = $item['link']['url'];

		$item_id = $item['_id'];

		if ( $url ) {
			$unique_link_id = 'item-link-' . $item_id;

			$this->add_render_attribute( $unique_link_id, [
				'href' => $url,
				'class' => 'ftc-price-list-item',
			] );

			if ( $item['link']['is_external'] ) {
				$this->add_render_attribute( $unique_link_id, 'target', '_blank' );
			}

			return '<li><a ' . $this->get_render_attribute_string( $unique_link_id ) . '>';
		} else {
			return '<li class="ftc-price-list-item">';
		}
	}

	private function render_item_footer( $item ) {
		if ( $item['link']['url'] ) {
			return '</a></li>';
		} else {
			return '</li>';
		}
	}

	protected function render() {
		$settings = $this->get_settings_for_display(); ?>

		<ul class="ftc-price-list">

		<?php foreach ( $settings['price_list'] as $item ) : ?>
			<?php if ( ! empty( $item['title'] ) || ! empty( $item['price'] ) || ! empty( $item['item_description'] ) ) : ?>
				<?php echo $this->render_item_header( $item ); ?>
				<?php if ( ! empty( $item['image']['url'] ) ) : ?>
					<div class="ftc-price-list-image">
					<?php echo $this->render_image( $item, $settings ); ?>
				</div>
				<?php endif; ?>

				<div class="ftc-price-list-text">
				<?php if ( ! empty( $item['title'] ) || ! empty( $item['price'] ) ) : ?>
					<div class="ftc-price-list-header">
					<?php if ( ! empty( $item['title'] ) ) : ?>
						<span class="ftc-price-list-title"><?php echo $item['title']; ?></span>
					<?php endif; ?>
						<?php if ( 'none' != $settings['separator_style'] ) : ?>
							<span class="ftc-price-list-separator"></span>
						<?php endif; ?>
						<?php if ( ! empty( $item['price'] ) ) : ?>
							<span class="ftc-price-list-price"><?php echo $item['price']; ?></span>
						<?php endif; ?>
				</div>
				<?php endif; ?>
					<?php if ( ! empty( $item['item_description'] ) ) : ?>
						<p class="ftc-price-list-description"><?php echo $item['item_description']; ?></p>
					<?php endif; ?>
			</div>
				<?php echo $this->render_item_footer( $item ); ?>
			<?php endif; ?>
		<?php endforeach; ?>

		</ul>

		<?php
	}

	protected function _content_template() {
		?>
		<ul class="ftc-price-list">
			<#
				for ( var i in settings.price_list ) {
					var item = settings.price_list[i],
						item_open_wrap = '<li class="ftc-price-list-item">',
						item_close_wrap = '</li>';
					if ( item.link.url ) {
						item_open_wrap = '<li><a href="' + item.link.url + '" class="ftc-price-list-item">';
						item_close_wrap = '</a></li>';
					}

					if ( ! _.isEmpty( item.title ) || ! _.isEmpty( item.price ) || ! _.isEmpty( item.description ) || ! _.isEmpty( item.image ) ) { #>

					{{{ item_open_wrap }}}
					<# if ( item.image && item.image.id ) {

						var image = {
							id: item.image.id,
							url: item.image.url,
							size: settings.image_size_size,
							dimension: settings.image_size_custom_dimension,
							model: view.getEditModel()
						};

						var image_url = elementor.imagesManager.getImageUrl( image );

						if ( image_url ) { #>
							<div class="ftc-price-list-image"><img src="{{ image_url }}" alt="{{ item.title }}"></div>
						<# } #>

					<# } #>


					<# if ( ! _.isEmpty( item.title ) || ! _.isEmpty( item.price ) || ! _.isEmpty( item.item_description ) ) { #>
						<div class="ftc-price-list-text">

							<# if ( ! _.isEmpty( item.title ) || ! _.isEmpty( item.price ) ) { #>
								<div class="ftc-price-list-header">

								<# if ( ! _.isEmpty( item.title ) ) { #>
									<span class="ftc-price-list-title">{{{ item.title }}}</span>
								<# } #>

								<# if ( 'none' != settings.separator_style ) { #>
									<span class="ftc-price-list-separator"></span>
								<# } #>

								<# if ( ! _.isEmpty( item.price ) ) { #>
									<span class="ftc-price-list-price">{{{ item.price }}}</span>
								<# } #>

								</div>
							<# } #>

							<# if ( ! _.isEmpty( item.item_description ) ) { #>
								<p class="ftc-price-list-description">{{{ item.item_description }}}</p>
							<# } #>

						</div>
					<# } #>

					{{{ item_close_wrap }}}

					<# } #>
			 <# } #>
		</ul>
		<?php
	}
}
Plugin::instance()->widgets_manager->register_widget_type( new Ftc_Price_List() );
