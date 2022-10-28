<?php

/**
* DEFAULT TEMPLATE
 *
 * This is the global default template. If WordPress can't find a more appropriate, specific template file,
 * it will use this one.
 * @package RankMedia
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


get_header();

 ?>
	<div id="container" class="row">
		<div id="content" class=""  >
			 
			<?php wp_link_pages(); ?>

			<?php loop( 'parts/content', 'parts/content-empty' ) ?>
			
			<?php paginate_links(); ?>

			<?php get_template_part( 'parts/content-nav' ) ?>
		</div>

		<div id="sidebar" class="" itemscope itemtype="https://schema.org/WPSideBar">
			<?php dynamic_sidebar( 'sidebar-1' ) ?>
		</div>

	</div>
<?php
get_footer();