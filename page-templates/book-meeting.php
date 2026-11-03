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
?>
<section class="v-section v-calendly" id="book">
	<div class="v-shell">
		<?php verus_the_calendly_embed(); ?>
	</div>
</section>
<?php
get_footer();
