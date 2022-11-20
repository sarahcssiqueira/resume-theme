<?php
/**
 * Template part for displaying posts.
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
    
    <div class="textContent"> 
        <p> <?php the_content();?> </p>
    </div>

    <div class="backButton">
        <a href="<?php echo get_home_url(); ?>">
              Back Home
        </a>
    </div>

    <!--No comments on this project -->
    
</div>