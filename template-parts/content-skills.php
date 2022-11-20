<div class="skills" id="skills">
        <div class="container">
            <h2>Skills</h2>
              <div class="skillsList">
                <ul class="skills">
                <li>Proficiency creating layouts with CSS/HTML</li>
                <li>Javascript / PHP</li>
                <li>React/JSX</li>
                <li>CSS preprocessors SASS/SCSS</li>
                <li>WordPress with WordPress Multisite, Woocommerce, Elementor and ACF Fields. 
                </li>
                <li>Headless WordPress Architecture, specifically using React.</li>
                <li>Experience fixing compatibility issues between WordPress plugins and themes, and also migrations between servers. 
                </li>
                <li>Experience with version control systems, specifically Git 
                </li>
                <li>Experience consuming APIs</li>
                <li>Knowledge of browser animated libraries</li>
                <li>Knowledge of Node</li>
                <li>Knowledge of relational and non-relational databases, specifically MySQL and MongoDB
                </li>
                <li>Knowledge and some experience with IaaS like Digital Ocean.
                </li>
                <li>Knowledge about CI/CD</li>
                <li>Knowledge about Agile methods: Scrum, Kanban.</li>

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
                };

                ?>
    
                </ul>
              </div>
              
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