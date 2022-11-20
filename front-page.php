<?php
/**
 * *
 * The template for displaying a static front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?>

<?php get_header();?>

	<div class="content">

		<?php if ( have_posts () ) {

				while ( have_posts ()) {

					the_post();
					
					get_template_part( 'template-parts/content' , 'banner' );

                    get_template_part( 'template-parts/content' , 'skills' );

                    /* Create feature 
					get_template_part( 'template-parts/content' , 'download' ); */

                    get_template_part( 'template-parts/content' , 'contact' );
					
				}
			};?>

		</div>

<?php get_footer();?>