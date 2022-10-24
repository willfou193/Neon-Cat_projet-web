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
                <div class="contenant prof">
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" checked/>
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
            
                    <div class="carousel">
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                        <div class="item prof"></div>
                    </div>
                    <div id="bouton__droit"></div>
                    <div id="bouton__gauche"></div>
                   
                    
                </div>
            <?php endif; ?>
                
     
    <?php endif; ?>
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