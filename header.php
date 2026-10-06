<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0d1b2e">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'verus' ); ?></a>

<header class="v-header" id="site-header">
	<div class="v-header__bar">
		<div class="v-header__brand">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a class="v-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( VERUS_URI . '/assets/images/logo.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="160" height="66">
				</a>
			<?php endif; ?>
		</div>

		<nav class="v-nav" id="primary-nav" aria-label="<?php esc_attr_e( 'Primary', 'verus' ); ?>">
			<?php verus_the_primary_nav(); ?>
		</nav>

		<div class="v-header__cta">
			<a class="v-header__phone hide-mobile" href="tel:<?php echo esc_attr( verus_tel( verus_opt( 'phone', '1-800-958-3787' ) ) ); ?>"><?php echo esc_html( verus_opt( 'phone', '1-800-958-3787' ) ); ?></a>
			<a class="v-btn v-btn--gold v-btn--nav" href="<?php echo esc_url( verus_meeting_url() ); ?>"<?php echo verus_link_atts( verus_meeting_url() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>><?php echo esc_html( verus_opt( 'meeting_label', 'Book A Meeting' ) ); ?></a>
			<button class="v-nav-toggle" type="button" aria-expanded="false" aria-controls="primary-nav">
				<span class="v-nav-toggle__box" aria-hidden="true"><span></span><span></span><span></span></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'verus' ); ?></span>
			</button>
		</div>
	</div>
	<div class="v-mega-backdrop" hidden></div>
</header>

<main id="main-content" class="v-main">
