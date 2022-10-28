<?php
	/**
	 * Shortcut to simplify a standard loop. You simply provide a template part path and the loop is handled for you.
	 *
	 * @param string $part    The template part to load
	 * @param string $no_part The template part to load if there are no results
	 */
	  function loop( $part, $no_part = '' ) {
		// START the loop
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( $part, get_post_format() );
			}
		} else if ( ! empty( $no_part ) ) {
			get_template_part( $no_part );
		}
		// END the loop
	}

/**
	 * Outputs the name of the file as an HTML comment for easy-peesy troubleshooting.
	 *
	 * @param string $file This function should always be passed the value of __FILE__
	 */
	  function output_file_marker( $file ) {
		
		// Don't output this info if WP_DEBUG is off
		if ( ! WP_DEBUG ) {
			return;
		}
		
		// Strip out system path (keeping only site-root-relative path)
		$file = preg_replace( '|' . preg_quote( ABSPATH ) . '|', '', $file );

		// Output an HTML comment with the current template path
		printf( "\n\n<!-- " . __( 'Template file: %s', 'rankmedia' ) . " -->\n\n", '/' . $file );
	}