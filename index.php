
<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscore
 */
?>
<?php get_header(); ?>
<main>
    <section class="accueil">
        <p>Page d'accueil</p>
        <div class="menu-burger">
            <div class="burger__contenant">
                <p>burger</p>
            </div>
        </div>
        <div class="contenant "><!-- Debut carrousel -->
            <input type="radio" name="position" checked />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
            <input type="radio" name="position" />
                
            <!-- Ajout d'une input -->
            <div class="carousel">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <!-- Ajout d'une div -->
            <div>
        </div>
    </section>
   <!-- <section class="menu-principal">
        <h2 id="menu-principal__titre">Menu side</h2>
        
        <div class="menu-principal__nav">
           <a class="nav__lien" href="#">Cours</a> 
           <a class="nav__lien" href="#">Professeurs</a>
           <a class="nav__lien" href="#">Vie Communautaire</a>
           <a class="nav__lien" href="#">Autre?</a>
        </div>
    </section> -->

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
</html>






