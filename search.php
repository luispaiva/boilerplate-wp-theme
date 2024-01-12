<?php
/**
 * The template for displaying search results pages
 *
 * @package Duicode
 */

get_header();
?>

	<section class="container pt-5 my-5 pb-lg-4">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'duicode' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'search' );
			endwhile;

			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

	</section><!-- #main -->

<?php
get_sidebar();
get_footer();
