
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
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="headerAcc">
	<div class="menu-burger cacherDesk">
		<input type="checkbox" id="chk-burger">
		<label for="chk-burger" id="burger__contenant">
                <div id="burger__ligne1"class="burger__ligne"></div>
                <div id="burger__ligne2"class="burger__ligne"></div>
                <div id="burger__ligne3" class="burger__ligne"></div>
        </label>
		<div id="burger__fondActif">
			<?php 
				wp_nav_menu(
					array(
						"menu" => "menu_burger"
					)
			);
			?>
		</div>
	</div>
		
		<div class="menu-burgerHome cacherMobile">
            <?php 
                wp_nav_menu(
                    array(
                        "menu" => "menu_burger"
                    )
            );
            ?>
		</div>
	</header>
<main>
        
    <section class="accueil">
		<div class="menuSide">
		<div class="menuCours">
				<h3 class="cacherDesk">Les cours</h2>
				<ul>
					<li><a href="https://timm177.sg-host.com/category/jeu/">JEUX</a></li>
					<li><a href="https://timm177.sg-host.com/category/design/">DESIGN</a></li>
					<li><a href="https://timm177.sg-host.com/category/video/">VIDEO</a></li>
					<li><a href="https://timm177.sg-host.com/category/web/">Web</a></li>
					<li><a href="https://timm177.sg-host.com/category/3d/">3D</a></li>
				</ul>
        
			</div>

			<div class="cheminement cacherMobile" link="https://www.cmaisonneuve.qc.ca/" >
				
				<a href="https://www.cmaisonneuve.qc.ca/programme/integration-multimedia/#liste_des_cours_programme" target="_blank">Cheminement</a>

			</div>
		</div>
		<div id="videoAcc_Contenant">
			<div id="video">
				<video src="https://i.imgur.com/lhLAny2.mp4" class="videoAcc" autoplay="" muted="" playsinline="" loop=""></video>
			</div>
 			
			 
		</div>
       
    </section>
   
</main>    
<?php get_footer(); ?>
</html>






