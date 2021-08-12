<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<header id="masthead" class="" role="banner" style="max-width:99%;">
<div class="row align-items-center">

		<div class="col-4">
	        
		<div class="row align-items-center">
		<div class="col-6 text-center" style="padding-left:32px;"><img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2021/07/american-standard-logo-black.png" alt="" style="width:100%;"> </div>
		<div class="col-6 text-center"> <img src="<?php echo get_bloginfo('url');?>/wp-content/uploads/2021/07/energy-star.png" alt="">	</div>

		</div>
    


			
			
		</div>
		<div class="col-4 text-center">
		<img src="<?php echo get_bloginfo('url');?>wp-content/uploads/2021/08/Recurso-2.png" alt="">
		</div>

		<div class="col-4 text-right">
			<h2 style="text-align:right;">77784664</h2>
		</div>
</div>
<div class="row">
	<div class="col-12">
		
<?php if ( has_nav_menu( 'primary' ) ) : ?>
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
		<div class="menu-button-container">
			<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
				<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
				<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'twentytwentyone' ); ?>
					<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
				</span>
			</button><!-- #primary-mobile-menu -->
		</div><!-- .menu-button-container -->
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
	</nav><!-- #site-navigation -->
<?php endif; ?>


	</div>

</div>





</header><!-- #masthead -->
