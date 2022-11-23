# WordPress Theme inspired on a Resume Online

Inspired on [sarahsiqueira.ga](https://sarahcssiqueira.ga/). This theme alows user to customize banner informations and describe skills.
- Name;
- Headline;
- Location;
- Timezone;
- Years of experience;
- Skills.

## Custom Fields

Used for create customizable location, timezone and years of experience. The user can simply edit these fields on ther homepage.

## Custom Post Types 

Used for allow users add and describe their skills, simply adding as if it where a post.

## Next features

- Custom Header Image support
- Donwload CV section
- Widgets for customize icons
- Language support

## Structure of files in the theme directory

- root
    - style.css: information about the theme (they will appear in the Dashboard theme manager).
    - index.php: home display control.
    - functions.php: theme settings.
    - header.php: title, meta tags, libraries and the like.
    - footer.php: libraries loaded at the bottom of the page, and the like.
    - page.php: page display control.
    - single.php: post display control.
    - 404.php: non-existing page error.
    - searchform.php: search field control.
    - screenshot.png: thumbnail of the image that will appear in the themes administration area in the Wordpress Dashboard.
- js
    - script.js
- prototype
    - original project wich inpired this theme
- styles
    - contains partials scss files 
- template-parts
    - 