
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
    <div class="container">
        <input type="radio" name="slider" id="item-1" checked>
        <input type="radio" name="slider" id="item-2">
        <input type="radio" name="slider" id="item-3">
        <div class="cards">
            <label class="card" for="item-1" id="song-1">
            <img src="https://images.unsplash.com/photo-1530651788726-1dbf58eeef1f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=882&q=80" alt="song">
            </label>
            <label class="card" for="item-2" id="song-2">
            <img src="https://images.unsplash.com/photo-1559386484-97dfc0e15539?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1234&q=80" alt="song">
            </label>
            <label class="card" for="item-3" id="song-3">
            <img src="https://images.unsplash.com/photo-1533461502717-83546f485d24?ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="song">
            </label>
        </div>
    </div>
    </section>
    <section class="menu-principal">
        <h2 id="menu-principal__titre">Menu side</h2>
        
        <div class="menu-principal__nav">
           <a class="nav__lien" href="#">Cours</a> 
           <a class="nav__lien" href="#">Professeurs</a>
           <a class="nav__lien" href="#">Vie Communautaire</a>
           <a class="nav__lien" href="#">Autre?</a>
        </div>
    </section>

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






