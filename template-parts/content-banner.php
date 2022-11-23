<?php
/**
 * Template part for displaying banner section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>

<div class="banner">
      <div class="container">      
            <section>
              <span>
              Hi! I'm 
              <?php echo get_post_meta( $post->ID , 'name', true);?>
             </span>
              <h1>
                <?php echo get_bloginfo('description'); ?>
              </h1>
            </section>
          
          <!-- New feature to next update, create a widget so user can customize it -->
            
            <section>

             
              <div class="bannerInfo">
                <li><i class="fa-solid fa-location-dot"></i> 
                  <?php echo get_post_meta( $post->ID , 'basedLocation', true);?>
              </li>
              
                <li><i class="fa-solid fa-clock"></i> 
                  <?php echo get_post_meta( $post->ID , 'timezone', true);?>
                </li>
                <li><i class="fa-solid fa-medal"></i>
                  <?php echo get_post_meta( $post->ID , 'experienceTime', true);?>
                </li>
              </div>
            </section>
      </div>
</div>