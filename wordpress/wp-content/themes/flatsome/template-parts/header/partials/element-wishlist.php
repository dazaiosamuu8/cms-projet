<?php
/**
 * Wishlist element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.19.0
 */

if ( ! class_exists( 'YITH_WCWL' ) ) {
	return;
}

$icon                  = get_theme_mod( 'wishlist_icon', 'heart' );
$icon_style            = get_theme_mod( 'wishlist_icon_style' );
$wishlist_title        = get_theme_mod( 'wishlist_title', '1' );
$has_items             = YITH_WCWL()->count_products() > 0;
$header_wishlist_label = get_theme_mod( 'header_wishlist_label' );
$header_wishlist_label = ! empty( $header_wishlist_label ) ? $header_wishlist_label : esc_html__( 'Wishlist', 'flatsome' );

$link_atts = [
	'href'       => YITH_WCWL()->get_wishlist_url(),
	'class'      => [ 'wishlist-link' ],
	'title'      => esc_attr__( 'Wishlist', 'flatsome' ),
	'aria-label' => ! $wishlist_title ? esc_attr__( 'Wishlist', 'flatsome' ) : null,
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

if ( $has_items ) {
	$icon_atts['class'][] = 'has-products';
}

?>
<li class="header-wishlist-icon">
	<?php if ( $icon_style ) echo '<div class="header-button">'; ?>
		<a <?php echo flatsome_html_atts( $link_atts ); ?>>
			<?php if ( $wishlist_title ) : ?>
				<span class="hide-for-medium header-wishlist-title">
				<?php echo $header_wishlist_label; // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			<?php endif; ?>
			<?php if ( $icon ) : ?>
				<i <?php echo flatsome_html_atts( $icon_atts ); ?>></i>
			<?php endif; ?>
		</a>
	<?php if ( $icon_style ) echo '</div>'; ?>
</li>
