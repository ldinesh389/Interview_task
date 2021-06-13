<?php
/**
 * Customize API: IAN_Green_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage IAN_Green
 * @since IAN-Green 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since IAN-Green 1.0
 *
 * @see WP_Customize_Control
 */
class IAN_Green_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since IAN-Green 1.0
	 *
	 * @var string
	 */
	public $type = 'ian-green-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @access public
	 *
	 * @since IAN-Green 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'iangreen' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/ian-green/#dark-mode-support', 'iangreen' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'iangreen' ); ?>
			</a></p>
		</div>
		<?php
	}
}
