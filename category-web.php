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
		<?php
		 
		if ( have_posts() ) :?>
			
			<div class="contenant prof">
                <div id="bouton__droit"></div>
                <div id="bouton__gauche"></div>
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" checked/>
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
                    <input class="inputProf" type="radio" name="position" />
					<input class="inputProf" type="radio" name="position" />
                    <div class="carousel">
						<?php
							while ( have_posts() ) :?>

								<div class="item">
                                    <h2><?php
                                        the_title();
									?></h2>
									<div class="img_contenent">
										<?php
											the_post_thumbnail();
										?>
									</div>
                                    <div class="contenuCours">
										<div class="boutonFerme"></div>
                                        <?php
										the_post();
										echo the_content();
									
										?>
                                    </div>
                                        
										
								</div>
							<?php
							endwhile;
							?>
                    </div>

                    <?php  
					endif;
					?>
                   
                    
                </div>
			
			

	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();