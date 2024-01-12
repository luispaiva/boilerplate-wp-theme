<?php
/**
 * The template for displaying archive pages
 *
 * @package Duicode
 */

get_header();
?>

	<section class="container pt-5 my-5 pb-lg-4">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;

			the_posts_navigation();
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</section><!-- #section -->

<?php
get_sidebar();
get_footer();
