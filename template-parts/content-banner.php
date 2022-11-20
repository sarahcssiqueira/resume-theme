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
              <?php echo get_bloginfo('name'); ?>
             </span>
              <h1>
                <?php echo get_bloginfo('description'); ?>
              </h1>
            </section>
          
          <!-- New feature to next update, create a widget so user can customize it -->
            
            <section>
              <!--<div class="bannerInfo">
                <li><i class="fa-solid fa-location-dot"></i> Based in Brazil</li>
                <li><i class="fa-solid fa-clock"></i> UTC -3</li>
                <li><i class="fa-solid fa-medal"></i>+ 6 years experience</li>
              </div> -->
            </section>
      </div>
</div>