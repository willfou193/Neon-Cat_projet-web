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
 * @package _underscore
 */

get_header();
?>

	<main id="primary" class="site-main">
    <h1>Les profs</h1>
		<?php
		if ( have_posts() ) :?>
			
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
						<?php
							/* Start the Loop */
							while ( have_posts() ) :?>
							<div class="item prof">
							<?php
								the_post();
								echo the_content();?>
							</div>
								<?php
							endwhile;
						endif;
						
						?>
                        
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
			
			

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();