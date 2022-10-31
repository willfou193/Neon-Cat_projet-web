<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package _underscore
 */

get_header();
?>

<main class="site__main">
    
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post(); 
                //the_title('<h2>','</h2>');
                //the_content(null, true);
            endwhile;
        endif;
    ?>    
</main>
<?php get_footer(); ?>