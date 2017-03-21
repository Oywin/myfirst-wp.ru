<?php get_header(); ?>

	<main id="content" role="main">
		<!-- section -->
		<div class="section">
			<div class="container">
				<div class="row">
					<div class="three-quarters-block">
						<div class="content">
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
						</div>
					</div>
					<div class="one-quarter-block" role="complementary">
						<div class="sidebar">
<?php get_sidebar(); ?>							
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
