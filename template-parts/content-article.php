<?php
/**
 * Template for Single post
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

?>

<div class="postContent">
    <div class="titleContent"> 
        <h2> <?php the_title();?> <h2>
    </div>
    
    <div class="textContent"> 
        <p> <?php the_content();?> </p>
    </div>

</div>