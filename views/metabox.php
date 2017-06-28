<?php
$classes = array( 'mailster_live_wrap' );
if ( is_mailster_dashboard() ) {
	$classes[] = 'is-dashboard';
	$classes[] = 'expanded';
}
?>
<div class="<?php echo implode( ' ', $classes ) ?>" style="height:<?php echo mailster_option( 'live_height', 500 ) ?>px;">
	<?php if ( ! mailster_option( 'google_api_key' ) ) : ?>
		<p class="mailster_live_no_api_key"><?php printf( esc_html__( 'Please define a valid Google API Key on the %s', 'mailster_live' ), '<a href="edit.php?post_type=newsletter&page=mailster_settings#general">' . esc_attr__( 'Settings Page', 'mailster_live' ) . '</a>' ); ?></p>
	<?php else : ?>

	<span class="mailster_live_paused"><?php esc_html_e( 'paused', 'mailster_live' ); ?></span>
	<a href="" class="mailster_toggle_fullscreen" title="<?php esc_html_e( 'toggle fullscreen', 'mailster_live' ); ?>"></a>
	<span class="mailster_live_collapse" >
		<a href="#" class="mailster_live_collapse-button button-secondary mailster-icon" title="<?php esc_html_e( 'Collapse Sidebar', 'mailster_live' ); ?>"></a>
		<span class="mailster_live_collapse-label"><?php esc_html_e( 'Collapse', 'mailster_live' ); ?></span>
	</span>
	<div class="mailster_live_map_wrap">
		<div class="mailster_live_map"></div>
	</div>
	<div class="mailster_live_activity_wrap">
		<div class="mailster_live_activity">
			<div class="mailster_live_info"><h4><?php esc_html_e( 'no action!', 'mailster_live' ); ?></h4></div>
			<header class="mailster_live_totals">
				<div class="mailster_live_total_opens hidden" data-id="opens"><span>0</span><?php esc_html_e( 'opens', 'mailster_live' ); ?></div>
				<div class="mailster_live_total_clicks hidden" data-id="clicks"><span>0</span><?php esc_html_e( 'clicks', 'mailster_live' ); ?></div>
				<div class="mailster_live_total_unsubscribes hidden" data-id="unsubscribes"><span>0</span><?php esc_html_e( 'unsubscribes', 'the noun', 'mailster_live' ); ?></div>
				<div class="mailster_live_total_others hidden" data-id="others"><span>0</span><?php esc_html_e( 'others', 'mailster_live' ); ?></div>
			</header>
			<ul class="mailster_live_activities">
			</ul>
			<div class="mailster_live_userdetail">
				<header>
					<a class="mailster_live_back">&larr; <?php esc_html_e( 'back', 'mailster_live' ); ?></a>
					<a href="#" title="<?php _e( 'visit profile', 'mailster_live' ); ?>"><div class="mailster_live_avatar"></div></a>
					<h4 class="mailster_live_username"></h4>
					<h5 class="mailster_live_email"></h5>
				</header>
				<ul>
				</ul>
			</div>
		</div>
	</div>
	<?php endif; ?>
</div>