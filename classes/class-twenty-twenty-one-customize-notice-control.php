<?php
/**
 * Customize API: Twenty_Twenty_One_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/**
 * Customize Notice Control class.
 *
 * @since Twenty Twenty-One 1.0
 *
 * @see WP_Customize_Control
 */
class Twenty_Twenty_One_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @var string
	 */
	public $type = 'twenty-twenty-one-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
		
		</div>
		<?php
	}
}
