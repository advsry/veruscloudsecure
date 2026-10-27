<?php
/**
 * Template Name: Book a Meeting
 * Description: On-site Calendly embed so meeting CTAs stay on veruscloudsecure.com.
 *
 * @package Verus
 */

defined( 'ABSPATH' ) || exit;

get_header();

$data = verus_service_data( 'book-a-meeting' );
$data['hero']['primary_label']   = '';
$data['hero']['secondary_label'] = '';
$data['hero']['crumbs']          = true;

verus_render_hero( $data['hero'] );

$calendly = verus_calendly_embed_url();
?>
<section class="v-section v-calendly" id="book">
	<div class="v-shell">
		<div
			class="calendly-inline-widget"
			data-url="<?php echo esc_url( $calendly ); ?>"
			style="min-width:320px;height:700px;"
			title="<?php esc_attr_e( 'Schedule a meeting with Verus', 'verus' ); ?>"
		></div>
	</div>
</section>
<?php
get_footer();
