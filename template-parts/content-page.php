<?php
/**
 * Template part for displaying the content on static pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>



<div class="postContent">

    <div class="titleContent"> 
        <h2> 
			<a href="
				<?php the_permalink();?>">
				<?php the_title(); ?>
			</a> 
		<h2>
    </div>

	<span class="date">
		<?php the_date();?>
	</span>

	<div class="textContent">
			<?php the_excerpt(); ?>
    </div>

</div>