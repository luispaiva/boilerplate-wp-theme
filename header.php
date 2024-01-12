<?php
/**
 * The header for our theme
 *
 * @package Duicode
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container">
			<a href="<?php echo esc_url( site_url() ); ?>" class="navbar-brand me-3 me-xl-4">
				<span class="fs-4">
					<?php echo esc_html( bloginfo( 'name' ) ); ?>
				</span>
			</a>

			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'duicode' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarContent">
				<?php
				if ( has_nav_menu( 'primary-menu' ) ) :
					wp_nav_menu(
						array(
							'theme_location'  => 'primary-menu',
							'menu_id'         => 'primary-menu',
							'container_class' => 'ms-auto',
							'menu_class'      => 'navbar-nav d-flex flex-row gap-3',
						)
					);
				endif;
				?>
			</div>
		</div>
	</header>
