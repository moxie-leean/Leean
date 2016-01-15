<?php namespace Leean;
/**
 * The template used for displaying page content in page.php
 *
 * @package Leean
 * @subpackage partials
 * @since 1.0.0
 */

?>
<article class="entry" id="post-<?php the_ID(); ?>" <?php post_class(); ?>
	itemscope itemType="http://schema.org/WebPage">
	<header class="entry__header">

		<h1 class="entry__title" itemprop="name"><?php the_title(); ?></h1>

	</header>


	<div class="entry__content" itemprop="mainContentOfPage">

		<?php the_content(); ?>

		<?php
		if ( function_exists( 'the_post_navigation' ) ) :
				the_post_navigation( [
					'prev_text'	=> esc_html__( '&larr; Previous Page', _TEXT_DOMAIN_ ),
					'next_text'	=> esc_html__( 'Next Page &rarr;', _TEXT_DOMAIN_ ),
					'screen_reader_text' => esc_html__( 'Page navigation', _TEXT_DOMAIN_ ),
				]);
		else :
			wp_link_pages( [
				'before' => '<div class="page__links">' . esc_html__( 'Pages:', _TEXT_DOMAIN_ ),
				'after'  => '</div>',
			]);
		endif;
		?>
	</div>
	<?php
		edit_post_link(
			esc_html__( 'Edit', _TEXT_DOMAIN_ ),
			'<span class="edit__link">', '</span>'
		);
	?>
</article>
