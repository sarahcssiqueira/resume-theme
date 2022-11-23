<?php
/**
 * *
 * The template for displaying a static front page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */
?><?php get_header();?>

	<div class="content">

		<?php get_template_part( 'template-parts/content' , 'banner' ); ?>

        <?php get_template_part( 'template-parts/content' , 'skills' ); ?>

    	<?php get_template_part( 'template-parts/content' , 'contact' ); ?>


	</div>

<?php get_footer();?>