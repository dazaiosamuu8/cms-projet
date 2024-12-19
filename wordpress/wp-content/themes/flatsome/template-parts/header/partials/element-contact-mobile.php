<?php
/**
 * Mobile contact element.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.18.0
 */

?>
<li class="header-contact-wrapper">
	<?php
		$class = 'has-icon';
		$icon_size = flatsome_option('contact_icon_size');
		$class_link = 'tooltip';
		$nav = 'nav-divided nav-uppercase';
		$label = true;

		if(flatsome_option('contact_style') == 'icons'){
			$label = false;
		}

		if(flatsome_option('contact_style') == 'top'){
			$class .= ' icon-top';
		}
	?>

	<div class="header-button"><a href="#"
		data-open="#header-contact"
		data-visible-after="true"  data-class="text-center" data-pos="center"
		class="icon show-for-medium"><?php echo get_flatsome_icon('icon-envelop',$icon_size); ?></a>
	</div>

	<ul id="header-contact" class="nav <?php echo $nav; ?> header-contact hide-for-medium">
		<?php if(flatsome_option('contact_location')){ ?>
			<li class="<?php echo $class; ?>">
			  <a target="_blank" rel="noopener" href="https://maps.google.com/?q=<?php echo flatsome_option('contact_location'); ?>" title="<?php echo flatsome_option('contact_location'); ?>" class="<?php echo $class_link;?>">
			  	 <?php echo get_flatsome_icon('icon-map-pin-fill',$icon_size); ?>
			     <?php if($label) _e('Location','flatsome'); ?>
			  </a>
			</li>
			<?php } ?>

			<?php if(flatsome_option('contact_email')){ ?>
			<li class="<?php echo $class; ?>">
			  <a href="mailto:<?php echo flatsome_option('contact_email'); ?>" class="<?php echo $class_link;?>" title="<?php echo flatsome_option('contact_email'); ?>">
				  <?php echo get_flatsome_icon('icon-envelop',$icon_size); ?>
			      <?php if($label) _e('Contact','flatsome'); ?>
			  </a>
			</li>
			<?php } ?>

			<?php if(flatsome_option('contact_hours')){ ?>
			<li class="<?php echo $class; ?>">
			  <a class="<?php echo $class_link;?>" title="<?php echo flatsome_option('contact_hours').' | '.flatsome_option('contact_hours_details'); ?>">
			  	   <?php echo get_flatsome_icon('icon-clock',$icon_size); ?>
			       <?php if($label) echo flatsome_option('contact_hours'); ?>
			  </a>
			 </li>
			<?php } ?>

			<?php if(flatsome_option('contact_phone')){ ?>
			<li class="<?php echo $class; ?>">
			  <a href="tel:<?php echo flatsome_option('contact_phone'); ?>" class="<?php echo $class_link;?>" title="<?php echo flatsome_option('contact_phone'); ?>">
			     <?php echo get_flatsome_icon('icon-phone',$icon_size); ?>
			     <?php if($label) echo flatsome_option('contact_phone'); ?>
			  </a>
			</li>
			<?php } ?>

		<?php if ( get_theme_mod( 'contact_whatsapp', '' ) ) { ?>
			<li class="<?php echo esc_attr( $class ); ?>">
				<a href="<?php echo esc_url( 'https://wa.me/' . get_theme_mod( 'contact_whatsapp', '' ) ); ?>" class="<?php echo esc_attr( $class_link ); ?>" title="<?php echo esc_attr( get_theme_mod( 'contact_whatsapp', '' ) ); ?>" target="_blank" rel="noopener">
					<?php echo get_flatsome_icon( 'icon-whatsapp', $icon_size ); ?>
					<span>
							<?php
							if ( $label ) {
								$contact_whatsapp_label = get_theme_mod( 'contact_whatsapp_label', '' );
								if ( $contact_whatsapp_label ) {
									echo esc_html( $contact_whatsapp_label );
								} else {
									esc_html_e( 'WhatsApp', 'flatsome' );
								}
							}
							?>
						</span>
				</a>
			</li>
		<?php } ?>
	</ul>
</li>
