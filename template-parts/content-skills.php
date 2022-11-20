<?php
/**
 * Template part for displaying skills section.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 */

?>

<div class="skills" id="skills">
        <div class="container">
            <h2>Main Skills</h2>
            <p> Click to read more about each one.</p>
              <div class="skillsList">
                <ul class="skills">
                
                  <?php $args = array(
                    'post_type' =>'skills',
                    'posts_per_page'=>-1, );

                    $post_data = new WP_Query($args);


                  if ( $post_data-> have_posts () ) {
                      while ( $post_data-> have_posts () ) {

                      $post_data->the_post (); ?>

                      <li> 
                        <a href="<?php the_permalink();?>">
                        <?php echo get_the_title();?>
                        </a>
                      </li>

                    <?php
                    }
                  }; ?>
    
                </ul>
              </div>

              <!-- For better user experience, transform skillsIcons on a widget -->
              
              <div class="skillsIcons">
              <i class="fa-brands fa-react"></i>
              <i class="fa-brands fa-git-alt"></i>
              <i class="fa-brands fa-js"></i>
              <i class="fa-brands fa-html5"></i>
              <i class="fa-brands fa-css3"></i>
              <i class="fa-brands fa-bootstrap"></i>
              <i class="fa-brands fa-node"></i>
              </div>
        </div>
      </div>