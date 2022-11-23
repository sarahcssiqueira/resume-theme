<?php
/**
 * Template part for displaying banner section, with custom fields
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @link https://wordpress.org/support/article/custom-fields/
 * 
 *
 */
?><div class="banner">
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