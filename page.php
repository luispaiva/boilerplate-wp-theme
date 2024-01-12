<?php
/**
 * The template for displaying all pages
 *
 * @package Duicode
 */

get_header(); ?>

<section class="container pt-5 my-5 pb-lg-4">

	<?php
	if ( have_posts() ) :

		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;

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
get_footer();
