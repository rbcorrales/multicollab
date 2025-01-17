<div class="cf-cnt-box-body">
	<p><?php printf( '%s <b>%s</b> %s', esc_html__( 'Multicollab is Default to the', 'content-collaboration-inline-commenting' ), esc_html__( 'English', 'content-collaboration-inline-commenting' ), esc_html__( 'language. But compatible with these languages and will sync with your selected language for the WordPress Admin area.', 'content-collaboration-inline-commenting' ) ); ?></p>
	<?php
	$lang          = get_bloginfo( 'language' );
	$supported_lan = array(
		'English' => 'en-US',
		'Chinese' => 'zh-CN',
		'Hindi'   => 'hi-IN',
		'Spanish' => 'es',
		'French'  => 'fr-FR',
		'Bengali' => 'bn-BD',
		'German'  => 'de-DE',
	);

	?>
	<ul>
		<?php
		foreach ( $supported_lan as $key => $val ) {
			?>
				<li><input type="checkbox" id="<?php echo esc_attr( $key ); ?>" value="<?php echo esc_attr( $key ); ?>" disabled 
														  <?php
															if ( $lang === $val ) {
																echo esc_html( 'checked' ); }
															?>
				>
				<label for="<?php echo esc_attr( $key ); ?>">
					<?php
					if ( $lang === $val ) {
						?>
						<?php esc_html_e( $key, 'content-collaboration-inline-commenting' ); ?>
						<?php
					} else {
						esc_html_e( $key, 'content-collaboration-inline-commenting' );
					}
					?>
				</label></li>
				<?php
		}
		?>
	</ul>
</div>
