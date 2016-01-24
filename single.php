<?php namespace Leean;
/**
 * The Template for displaying all single posts.
 *
 * @package Leean
 * @since 1.0.0
 */

use Leean\Inc\Helpers as Helpers;

get_header();
?>

<div id="primary" class="entry__area">
	<main id="main" class="site__main" role="main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'partials/content', 'single' );

		wp_link_pages();
		the_post_navigation();

		// If comments are open or we have at least one comment.
		if ( comments_open() || 0 !== absint( get_comments_number() ) ) :
			comments_template();
		endif;

	endwhile;
	?>
	</main>
</div>

<?php get_footer(); ?>
