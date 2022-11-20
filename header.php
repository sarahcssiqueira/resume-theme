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
    <link rel="icon" type="image/svg+xml" href="favicon.svg"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<header class="header">
        <div class="headerTitle">
            <a href="<?php echo get_home_url(); ?>">
                <?php echo get_bloginfo('name'); ?>
            </a>
        </div>

        <div class="headerMenu">
            <div class="headerMenuLinks">

            <!-- In the future, improve it using class Walker {} -->
                        
                    <?php wp_nav_menu(
                        array(
                            'menu'=>'primary',
                            'container'=>'',
                            'theme_location'=>'primary',
                            'items_wrap'=>'<li>%3$s</li>'
                            )
                        ); ?>
            </div>
        </div>

            <!-- Hard Coded, in the future for a better user experience, create widgets -->

        <div class="headerIcons">
            <li><a href="mailto:sarahcosiqueira@gmail.com" target="_blank"><i class="fa-solid fa-envelope"></i></a></li>
            <li><a href="https://linkedin.com/in/sarahcssiqueira/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/sarahcssiqueira" target="_blank"><i class="fa-brands fa-square-github"></i></a></li>
        </div>
            

        <div class="headerMenuMobile">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>