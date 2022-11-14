
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
			<div id="burger__fondActif">
				<?php 
					wp_nav_menu(
						array(
							"menu" => "menu_burger"
						)
				);
				?>
			</div>
			<div id="burger__contenant">
				<div class="burger__ligne"></div>
				<div class="burger__ligne"></div>
				<div class="burger__ligne"></div>
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
					<li><a>Web</a></li>
					<li><a>Web</a></li>
					<li><a>Web</a></li>
					<li><a>Web</a></li>
					<li><a>Web</a></li>
				</ul>
			</div>
			<div class="cheminement cacherMobile">
				<p>Cheminement</p>
			</div>
			<div class="stage cacherMobile">
				<p>Stage</p>
				<div></div>
			</div>
		</div>
		<div id="videoAcc_Contenant">
			<div id="video">
				<iframe id="videoAcc" src="https://www.youtube.com/embed/WGvBFuDdNzE?&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 
			</div>
 			
			 
		</div>
       
    </section>
   
</main>    
<?php get_footer(); ?>
</html>






