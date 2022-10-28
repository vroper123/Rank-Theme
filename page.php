<?php

/**
 * The template for displaying the default page.
 *
 * @package RankMedia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 
 ?>
	<div id="main" class="site-content">
		<div   class=" container-fluid "  >
			<?php loop( 'parts/content-page', 'parts/content-none' ) ?>
			<?php wp_link_pages(); ?>
		</div>
        
	</div>
<?php
get_footer();