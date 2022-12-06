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
		 
		if ( have_posts() ) :
			?>
			
			<div class="contenant prof">
                <div id="bouton__droit"></div>
                <div id="bouton__gauche"></div>
				<?php
					for($i = 0; $i < $wp_query->post_count; $i++ ){
						
						if($i != 1){
							?><input class="inputProf" type="radio" name="position" /><?php
						}else{
							?><input class="inputProf" type="radio" name="position" checked/><?php
						}
					}
				?>
                    <div class="carousel">
						<?php
							while ( have_posts() ) : the_post();
							
									$leTitre = get_the_title();
									$longueur = strlen($leTitre);
									$court = 20;
									$moyen = 30;
									$long = 40;
								?>	

								<div class="item">
									<!-- Début du H2-->
                                    <h2 class="<?php if($longueur < $court){
										?>
										courtTitre
										<?php
									}else if($longueur < $moyen && $longueur > $court){
										?>
										moyenTitre
										<?php
									}else if($longueur < $long && $longueur > $moyen){
										?>
										longTitre
										<?php
										}?>">


										<?php
											echo $leTitre;
										?>
									</h2>
									<!-- Fin du H2-->
									<div class="img_contenent">
										<?php
											the_post_thumbnail();
										?>
									</div>
                                    <div class="contenuCours">
										<div class="boutonFerme"></div>
                                        <?php
										
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