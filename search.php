<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 */
?>


<?php get_header(); ?>

		<div class="postContent">

			<?php if ( have_posts () ) {

					while( have_posts () ) {

						the_post();
					
						get_template_part( 'template-parts/content' , 'archive' );
					}
			};

			?>

	    </div>

<?php get_footer(); ?>