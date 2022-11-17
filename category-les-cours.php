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
							/* Start the Loop */
                            $compteur = 0;
							
							while ( have_posts() ) :?>
							
								<?php $permaLien = substr(get_the_permalink(),0,strrpos(get_the_permalink(), '/',-2));
										$permaLien .= "/category";
										$permaLien .= substr(get_the_permalink(),strrpos(get_the_permalink(), '/',-2));
								?>
								<div class="item prof">
									<a href="<?= $permaLien;?>" class="permalink"></a>
									
 									
										<?php
										the_post();
										echo the_content();
										
										//$permaLien = substr($chaine,0,strrpos($chaine, '/',-2)) + $category + substr($chaine,strrpos($chaine, '/',-2));
										//echo strrpos($chaine, '/',-2);
										//echo '-----------';
										//echo strlen($chaine);
										//echo substr($chaine,0,strrpos($chaine, '/',-2));
										//echo '-----------';
										//echo substr($chaine,strrpos($chaine, '/',-2));
										
									//	http://localhost:81/2022-5w5/3d/
										//echo print_r (get_the_category());
										?>
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