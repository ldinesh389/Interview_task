<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage IAN_Green
 * @since IAN-Green 1.0
 */

?>
<?php if ( has_nav_menu( 'primary' ) ) : ?>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
		
		<?php
		$phone = get_theme_mod('iangreen_contact_settings');
	$menu =	wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'items_wrap'      => '<ul  class="navbar-nav ml-auto mt-2"><a class="nav-link phone-link" href="tel:'.$phone.'">T '.$phone.'</a>%3$s</ul>',
				'fallback_cb'     => false,
				'add_li_class'  => 'nav-item'
			)
		);
		
		?> <img src="<?php echo get_template_directory_uri() ?>/assets/images/burger-menu.svg" alt="menu" class="menu-btn" id="open-menu">
	
        </div>
		<?php endif; ?>

