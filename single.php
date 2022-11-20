<?php
/**
 * The template for displaying single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */
?>

<?php get_header();?>

	<div class="postContent">

			<?php if ( have_posts () ) {

				while( have_posts () ) {
					
					the_post();
					
					get_template_part( 'template-parts/content' , 'article' );
					
				}
			};?>

	</div>
    
<?php get_footer(); ?>