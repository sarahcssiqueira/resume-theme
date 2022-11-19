<?php
/**
 * The header for Resume Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <title><?php echo get_bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>

<header class="header">
        <div class="headerTitle">
            <a href="<?php echo get_home_url(); ?>">
                <?php echo get_bloginfo('name'); ?>
            </a>
        </div>

        <div class="headerMenu">
              <ul class="headerMenuLinks">
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#downcv">Download CV</a></li>
                <li><a href="#links">Links</a></li>
              </ul>
            </div>

            <?php wp_nav_menu(
					array(
						'menu'=>'primary',
						'container'=>'',
						'theme_location'=>'primary',
						'items_wrap'=>'<ul class="headerMenuLinks"><li> <a%3$s/><li></ul>'
						)
					);?>

            <!-- Hard Coded, for a better user experience, create widgets -->

            <div class="headerIcons">
                <li><a href="mailto:sarahcosiqueira@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
                <li><a href="https://linkedin.com/in/sarahcssiqueira/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                <li><a href="https://github.com/sarahcssiqueira" target="_blank"><i class="fa-brands fa-square-github"></i></a></li>
            </div>
            

            <div class="headerMenuMobile">
               <i class="fa-solid fa-bars"></i>
            </div>
    </header>