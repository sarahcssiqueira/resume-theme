<?php

/**
 * The template for displaying 404 pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */


get_header();?>

<div class="postContent">

		<h1>Page Not Found</h1>

        <?php get_search_form();?>

		<?php the_posts_pagination();?>

</div>

<?php get_footer(); ?>