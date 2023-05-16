<form class="cf-cnt-box-body" method="post" id ="cf_suggestion_mode">
	<div id="cf-notice">
		<div class="cf-success notices notice-success" style="display: none">
			<p><?php esc_html_e( 'Settings saved!', 'content-collaboration-inline-commenting' ); ?></p>
		</div>
		<div class="cf-error notices notice-error" style="display: none">
			<p><?php esc_html_e( 'Please select any option to save!', 'content-collaboration-inline-commenting' ); ?></p>
		</div>
	</div>
	<?php
	$disabled       = '';
	$disabled_class = '';
	if ( ! $cf_edd->is__premium_only() || true === $cf_edd->is_plan( 'plus', true ) ) {
		$disabled       = 'disabled';
		$disabled_class = 'cf_disabled_input';
	}
	?>
	<div class="cf_suggestion_option">
		<div class="cf-notification-settings">
			<div class="cf-check-wrap">
				<input type="checkbox" name="cf_suggestion_mode_option_name" class="cf-checkbox cf_suggestion_mode_options" id="cf_suggestion_all_posts_pages" value="cf_suggestion_all_posts_pages" class="regular-text" <?php echo 'cf_suggestion_all_posts_pages' === $cf_suggestion_mode_option_name ? 'checked' : ''; ?> <?php echo esc_html( $disabled ); ?>/>
				<span class="cf-check"></span>
			</div>
			<label for="cf_suggestion_all_posts_pages">											
				<span class="cf_suggestion_optionlabel"><?php printf( '%s <b>%s</b> %s', esc_html__( 'Turn ON', 'content-collaboration-inline-commenting' ), esc_html__( 'Suggestions', 'content-collaboration-inline-commenting' ), esc_html__( 'for all posts and pages on my website (Not Recommended).', 'content-collaboration-inline-commenting' ) ); ?> 
					<span class="md-plugin-tooltip"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 3.2c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8 4.8 0 8.8-3.9 8.8-8.8 0-4.8-4-8.8-8.8-8.8zm0 16c-4 0-7.2-3.3-7.2-7.2C4.8 8 8 4.8 12 4.8s7.2 3.3 7.2 7.2c0 4-3.2 7.2-7.2 7.2zM11 17h2v-6h-2v6zm0-8h2V7h-2v2z"></path></svg>
					<div class="cf_suggestion-tooltip-box">	<a href="#." class="cf_tooltip-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path id="Icon_material-close" data-name="Icon material-close" d="M27.5,9.514,25.486,7.5,17.5,15.486,9.514,7.5,7.5,9.514,15.486,17.5,7.5,25.486,9.514,27.5,17.5,19.514,25.486,27.5,27.5,25.486,19.514,17.5Z" transform="translate(-7.5 -7.5)" fill="#000"></path></svg></a>  <?php esc_html_e( "By default, Suggestions Mode is OFF on for each post in Multicollab. Selecting this option will automatically turn ON Suggestions on all future posts on your website. You can still manually turn OFF suggestions mode for individual posts. We don't recommend turning Suggestions Mode ON for all the new posts unless you have specific business needs.", 'content-collaboration-inline-commenting' ); ?></div> </span>
				</span>
			</label> 
		</div>

		<div class="cf-notification-settings">
			<div class="cf-check-wrap">
				<input type="checkbox" name="cf_suggestion_mode_option_name" class="cf-checkbox cf_suggestion_mode_options" id="cf_suggestion_specific_post_categories" value="cf_suggestion_specific_post_categories" class="regular-text" <?php echo 'cf_suggestion_specific_post_categories' === $cf_suggestion_mode_option_name ? 'checked' : ''; ?> <?php echo esc_html( $disabled ); ?>/>
				<span class="cf-check"></span>
			</div>
			<label for="cf_suggestion_specific_post_categories">
				<span class="cf_suggestion_optionlabel"><?php printf( '%s <b>%s</b> %s', esc_html__( 'Turn ON', 'content-collaboration-inline-commenting' ), esc_html__( 'Suggestions', 'content-collaboration-inline-commenting' ), esc_html__( 'for these post categories:', 'content-collaboration-inline-commenting' ) ); ?>  
					<span class="md-plugin-tooltip"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 3.2c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8 4.8 0 8.8-3.9 8.8-8.8 0-4.8-4-8.8-8.8-8.8zm0 16c-4 0-7.2-3.3-7.2-7.2C4.8 8 8 4.8 12 4.8s7.2 3.3 7.2 7.2c0 4-3.2 7.2-7.2 7.2zM11 17h2v-6h-2v6zm0-8h2V7h-2v2z"></path></svg>
					<div class="cf_suggestion-tooltip-box">	<a href="#." class="cf_tooltip-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path id="Icon_material-close" data-name="Icon material-close" d="M27.5,9.514,25.486,7.5,17.5,15.486,9.514,7.5,7.5,9.514,15.486,17.5,7.5,25.486,9.514,27.5,17.5,19.514,25.486,27.5,27.5,25.486,19.514,17.5Z" transform="translate(-7.5 -7.5)" fill="#000"></path></svg></a><?php esc_html_e( 'By default, Suggestions Mode is OFF on for each post in Multicollab. This option will automatically turn ON Suggestions for selected post categories for future posts. You can still manually turn OFF suggestions mode for individual posts.', 'content-collaboration-inline-commenting' ); ?></div> </span>
				</span>
			</label>
			<div class="cf_specific_post_categories_section" 
			<?php
			if ( 'cf_suggestion_specific_post_categories' !== $cf_suggestion_mode_option_name ) {
				echo 'style="display:none;"'; }
			?>
			>
				<div class="cf_category_lists">
				<?php
				$categories_list = new Commenting_block_Functions();
				$cf_categories   = $categories_list->cf_get_posts_categories();
				if ( ! empty( $cf_categories ) ) {
					?>
					<select class="cf-specific-post-categories-multiple" name="cf_specific_post_categories_values[]" multiple="multiple">
						<option value=""><?php esc_html_e( 'Please select a category', 'content-collaboration-inline-commenting' ); ?></option>
						<?php
						foreach ( $cf_categories as $cf_categories_info ) {
							?>
								<option value="<?php echo esc_attr( $cf_categories_info->term_id ); ?>" 
															<?php
															if ( ! empty( $cf_specific_post_categories_values ) && in_array( (string) $cf_categories_info->term_id, $cf_specific_post_categories_values, true ) ) {
																echo esc_html( 'selected' ); }
															?>
								><?php echo esc_html( $cf_categories_info->name ); ?></option>
							<?php
						}
						?>
					</select>
					<?php
				}
				?>
				</div>
			</div>
		</div>
		<?php
			$post_types_list = new Commenting_block_Functions();
			$post_types      = $post_types_list->cf_get_posts_types();
		if ( ! empty( $post_types ) ) {
			?>
		<div class="cf-notification-settings">
			<div class="cf-check-wrap">
				<input type="checkbox" name="cf_suggestion_mode_option_name" class="cf-checkbox cf_suggestion_mode_options" id="cf_suggestion_specific_post_types" value="cf_suggestion_specific_post_types" class="regular-text" <?php echo 'cf_suggestion_specific_post_types' === $cf_suggestion_mode_option_name ? 'checked' : ''; ?> <?php echo esc_html( $disabled ); ?>/>
				<span class="cf-check"></span>
			</div>
			<label for="cf_suggestion_specific_post_types">
				<span class="cf_suggestion_optionlabel">
					<?php printf( '%s <b>%s</b> %s', esc_html__( 'Turn ON', 'content-collaboration-inline-commenting' ), esc_html__( 'Suggestions', 'content-collaboration-inline-commenting' ), esc_html__( 'for these custom post types:', 'content-collaboration-inline-commenting' ) ); ?>
					<span class="md-plugin-tooltip"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M12 3.2c-4.8 0-8.8 3.9-8.8 8.8 0 4.8 3.9 8.8 8.8 8.8 4.8 0 8.8-3.9 8.8-8.8 0-4.8-4-8.8-8.8-8.8zm0 16c-4 0-7.2-3.3-7.2-7.2C4.8 8 8 4.8 12 4.8s7.2 3.3 7.2 7.2c0 4-3.2 7.2-7.2 7.2zM11 17h2v-6h-2v6zm0-8h2V7h-2v2z"></path></svg>
					<div class="cf_suggestion-tooltip-box">	<a href="#." class="cf_tooltip-close"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"><path id="Icon_material-close" data-name="Icon material-close" d="M27.5,9.514,25.486,7.5,17.5,15.486,9.514,7.5,7.5,9.514,15.486,17.5,7.5,25.486,9.514,27.5,17.5,19.514,25.486,27.5,27.5,25.486,19.514,17.5Z" transform="translate(-7.5 -7.5)" fill="#000"></path></svg></a><?php esc_html_e( 'By default, Suggestions Mode is OFF on for each post in Multicollab. This option will automatically turn ON Suggestions for selected Custom Post Types for future posts. You can still manually turn OFF suggestions mode for individual posts.', 'content-collaboration-inline-commenting' ); ?></div> </span>
				</span>
			</label>

			<div class="cf_specific_post_type_section"
			<?php
			if ( 'cf_suggestion_specific_post_types' !== $cf_suggestion_mode_option_name ) {
				echo 'style="display:none;"'; }
			?>
			>
				<div class="cf_post_types_lists">
					<select class="cf-specific-post-type-multiple" name="cf_specific_post_types_values[]" multiple="multiple">
						<option value=""><?php esc_html_e( 'Please select a post type', 'content-collaboration-inline-commenting' ); ?></option>
						<?php
						if ( ! empty( $post_types ) ) {
							foreach ( $post_types as $key => $post_types_values ) {
								if ( 'attachment' !== $key ) {
									?>
								<option value="<?php echo esc_attr( $key ); ?>"
																	<?php
																	if ( ! empty( $cf_specific_post_types_values ) && in_array( $key, $cf_specific_post_types_values, true ) ) {
																		echo esc_html( 'selected' ); }
																	?>
										><?php echo esc_html( $post_types_values->labels->name ); ?></option>
										<?php
								}
							}
						}
						?>
					</select>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<div class="cf-submit-button-settings"><?php submit_button( __( 'Save', 'content-collaboration-inline-commenting' ) ); ?>
	<?php
	if ( ! $cf_edd->is__premium_only() || true === $cf_edd->is_plan( 'plus', true ) ) {
		?>
			<a href="https://www.multicollab.com/pricing/?utm_source=plugin_setting_header_free-user_upgrade_to_premium&utm_medium=header_free-user_upgrade_to_premium_link&utm_campaign=plugin_setting_free-user_upgrade_to_premium_link&utm_id=plugin_setting_header_link.++" target="_blank" class="cf-board-premi-btn">Upgrade to Premium<svg id="Group_52548" data-name="Group 52548" xmlns="http://www.w3.org/2000/svg" width="27.263" height="24.368" viewBox="0 0 27.263 24.368"><path id="Path_199491" data-name="Path 199491" d="M333.833,428.628a1.091,1.091,0,0,1-1.092,1.092H316.758a1.092,1.092,0,1,1,0-2.183h15.984a1.091,1.091,0,0,1,1.091,1.092Z" transform="translate(-311.117 -405.352)" fill="#d0a823"></path><path id="Path_199492" data-name="Path 199492" d="M312.276,284.423h0a1.089,1.089,0,0,0-1.213-.056l-6.684,4.047-4.341-7.668a1.093,1.093,0,0,0-1.9,0l-4.341,7.668-6.684-4.047a1.091,1.091,0,0,0-1.623,1.2l3.366,13.365a1.091,1.091,0,0,0,1.058.825h18.349a1.09,1.09,0,0,0,1.058-.825l3.365-13.365A1.088,1.088,0,0,0,312.276,284.423Zm-4.864,13.151H290.764l-2.509-9.964,5.373,3.253a1.092,1.092,0,0,0,1.515-.4l3.944-6.969,3.945,6.968a1.092,1.092,0,0,0,1.515.4l5.373-3.253Z" transform="translate(-285.455 -280.192)" fill="#d0a823"></path></svg></a>
		<?php
	}
	?>
	</div>
</form>
