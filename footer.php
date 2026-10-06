<?php
/**
 * Site footer.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;
?>
</main>

<footer class="v-footer">
	<div class="v-shell v-footer__grid">
		<div class="v-footer__brand">
			<a class="v-logo v-logo--foot" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url( VERUS_URI . '/assets/images/logo-white.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" width="150" height="62">
			</a>
			<p><?php echo esc_html( verus_opt( 'footer_blurb', 'Since 2002, Verus has been the senior-led partner for cybersecurity, managed IT, and AI — keeping mid-sized organizations secure and running.' ) ); ?></p>
			<p class="v-footer__meta">
				<a href="tel:<?php echo esc_attr( verus_tel( verus_opt( 'phone', '1-800-958-3787' ) ) ); ?>"><?php echo esc_html( verus_opt( 'phone', '1-800-958-3787' ) ); ?></a><br>
				<a href="mailto:<?php echo esc_attr( verus_opt( 'email', 'info@veruscloudsecure.com' ) ); ?>"><?php echo esc_html( verus_opt( 'email', 'info@veruscloudsecure.com' ) ); ?></a><br>
				<?php echo esc_html( verus_opt( 'offices', 'Philadelphia · Chicago' ) ); ?>
			</p>
			<?php
			$fb = verus_opt( 'facebook', 'https://www.facebook.com/veruscloudsecure/' );
			$li = verus_opt( 'linkedin', '' );
			if ( $fb || $li ) :
				?>
				<p class="v-footer__social">
					<?php if ( $fb ) : ?><a href="<?php echo esc_url( $fb ); ?>" rel="noopener" target="_blank">Facebook</a><?php endif; ?>
					<?php if ( $li ) : ?><a href="<?php echo esc_url( $li ); ?>" rel="noopener" target="_blank">LinkedIn</a><?php endif; ?>
				</p>
			<?php endif; ?>
		</div>

		<?php
		$cols = array(
			'footer_col_1' => __( 'AI & Consulting', 'verus' ),
			'footer_col_2' => __( 'Cybersecurity', 'verus' ),
			'footer_col_3' => __( 'Managed IT', 'verus' ),
			'footer_col_4' => __( 'Company', 'verus' ),
		);
		foreach ( $cols as $loc => $title ) :
			echo '<div class="v-footer__col">';
			echo '<h2>' . esc_html( $title ) . '</h2>';
			if ( has_nav_menu( $loc ) ) {
				wp_nav_menu( array(
					'theme_location' => $loc,
					'container'      => false,
					'menu_class'     => 'v-footer__list',
					'depth'          => 1,
					'fallback_cb'    => false,
				) );
			} else {
				verus_footer_fallback( $loc );
			}
			echo '</div>';
		endforeach;
		?>
	</div>

	<div class="v-footer__legal">
		<div class="v-shell v-footer__legal-inner">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. <?php esc_html_e( 'All rights reserved.', 'verus' ); ?></p>
			<nav aria-label="<?php esc_attr_e( 'Legal', 'verus' ); ?>">
				<?php
				if ( has_nav_menu( 'footer_legal' ) ) {
					wp_nav_menu( array(
						'theme_location' => 'footer_legal',
						'container'      => false,
						'menu_class'     => 'v-footer__legal-list',
						'depth'          => 1,
						'fallback_cb'    => false,
					) );
				} else {
					echo '<ul class="v-footer__legal-list">';
					echo '<li><a href="' . esc_url( home_url( '/privacy-policy/' ) ) . '">' . esc_html__( 'Privacy Policy', 'verus' ) . '</a></li>';
					echo '<li><a href="' . esc_url( home_url( '/sms-terms/' ) ) . '">' . esc_html__( 'SMS Terms', 'verus' ) . '</a></li>';
					echo '</ul>';
				}
				?>
			</nav>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
