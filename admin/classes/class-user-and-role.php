<?php
/**
 * User and role management.
 *
 * @package multicollab
 */

/**
 * Class for User and role.
 */
class User_And_Role {


	/**
	 * Construct method.
	 */
	function __construct() {

		// load class.
		$this->setup_hooks();
	}

	/**
	 * To register action/filter.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	protected function setup_hooks() {

		/**
		 * Actions/filters.
		 */
		
		add_action( 'init', [ $this, 'add_guest_role' ] );
		
		add_action( 'admin_head', [ $this, 'guest_restrict_access' ] );
	}

	/**
	 * Add Guest role.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function add_guest_role() {
		// phpcs:ignore WordPressVIPMinimum.Functions.RestrictedFunctions.custom_role_add_role
		add_role(
			'guest',
			'Guest',
			[
				'edit_posts'           => true,
				'edit_others_posts'    => true,
				'edit_published_posts' => true,
				'publish_posts'        => false,
				'read'                 => true,
				'level_7'              => false,
				'level_6'              => false,
				'level_5'              => true,
				'level_4'              => true,
				'level_3'              => true,
				'level_2'              => true,
				'level_1'              => true,
				'level_0'              => true,
				'edit_private_posts'   => true,
				'read_private_posts'   => true,
				'unfiltered_html'      => true,
				'edit_pages'           => true,
				'edit_published_pages' => true,
				'edit_others_pages'    => true,
				'publish_pages'        => false,
			]
		);

		// To resolve comment vanish issue in guest functionality @author Mayank Jain.
		if( is_user_logged_in() ) {
			global $current_user;
			$user_roles = $current_user->roles;

			if ( in_array( 'guest', (array) $user_roles, true ) ) {
				kses_remove_filters(); // To resolve comment vanish issue.
			}
		}
	
	}

	/**
	 * Restrict access for guest role.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	public function guest_restrict_access() {

		if ( ! is_user_logged_in() ) {
			return;
		}

		global $current_user,$current_screen;
		$user_roles = $current_user->roles;

		if ( ! in_array( 'guest', $user_roles, true ) ) {
			return;
		}

		if ( 'post' !== $current_screen->base ) {
			wp_safe_redirect( site_url() );
			exit();
		}
	}
}

new User_And_Role();