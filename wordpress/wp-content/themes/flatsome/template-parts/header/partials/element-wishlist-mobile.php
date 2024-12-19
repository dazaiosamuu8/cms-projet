<?php
/**
 * Mobile wishlist element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.19.0
 */

if ( ! class_exists( 'YITH_WCWL' ) ) {
	return;
}

$icon       = get_theme_mod( 'wishlist_icon', 'heart' );
$icon_style = get_theme_mod( 'wishlist_icon_style' );
$has_items  = YITH_WCWL()->count_products() > 0;

$link_atts = [
	'href'       => YITH_WCWL()->get_wishlist_url(),
	'class'      => [ 'wishlist-link' ],
	'title'      => esc_attr__( 'Wishlist', 'flatsome' ),
	'aria-label' => esc_attr__( 'Wishlist', 'flatsome' ),
];

if ( $icon_style ) {
	$link_atts['class'][] = get_flatsome_icon_class( $icon_style, 'small' );
}

$icon_atts = [
	'class'           => [
		'wishlist-icon',
		'icon-' . $icon,
	],
	'data-icon-label' => $has_items ? YITH_WCWL()->count_products() : null,
];

?>
<li class="header-wishlist-icon has-icon">
	<?php if ( $icon_style ) echo '<div class="header-button">'; ?>
	<a <?php echo flatsome_html_atts( $link_atts ); ?>>
		<i <?php echo flatsome_html_atts( $icon_atts ); ?>></i>
	</a>
	<?php if ( $icon_style ) echo '</div>'; ?>
</li>
