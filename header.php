<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Versa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site container mx-auto grid grid-cols-4 gap-x-16 gap-y-10">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'versa' ); ?></a>

	<header id="masthead" class="site-header py-4 col-span-4 grid grid-cols-4 lg:flex justify-between gap-4 lg:gap-56 items-center">
		<div class="site-branding grid col-span-3 text-center">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title "><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$versa_description = get_bloginfo( 'description', 'display' );
			if ( $versa_description || is_customize_preview() ) :
				?>
				<p class="site-description hidden"><?php echo $versa_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation grid">
			<button class="menu-toggle w-[32px] h-[32px] border-0 justify-self-end z-50" aria-controls="primary-menu" aria-expanded="false">
				<svg  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[32px] h-[32px] stroke-1">
					<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
				</svg>
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'	=> 'flex flex-col gap-4 w-full ',
					'container_class' => 'menu-container hidden fixed bg-white py-32 !px-4 left-0 top-0 bottom-0 w-full z-40 text-right overflow-y-scroll'

					// position: fixed;
					// left: 0;
					// top: 0;
					// background: #fff;
					// padding: 1rem;
					// box-shadow: 3px 10px 14px 0px rgba(0,0,0,0.2);
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
