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
    <?php if(have_posts()):the_post(); ?>
    <h1><?php the_title(); ?></h1>
        <?php
           global $wp;
           $current_slug = add_query_arg( array(), $wp->request );
        ?>
            <?php if($current_slug == 'les-profs'): ?>
                <div class="contenant ">
                    <input type="radio" name="position" checked />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
                    <input type="radio" name="position" />
            
                    <div class="carousel">
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                        <div class="item"></div>
                    <div>
                </div>
            <?php endif; ?>
                
     
    <?php endif; ?>
</main>
<?php get_footer(); ?>