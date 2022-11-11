
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
    <header>
		<div class="menu-burgerHome">
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
				<ul>
					<li>Web</li>
					<li>Web</li>
					<li>Web</li>
					<li>Web</li>
					<li>Web</li>
				</ul>
			</div>
			<div id="cheminement">
				<p>Cheminement</p>
			</div>
			<div id="stage">
				<p>Stage</p>
			</div>
		</div>
		<div id="videoAcc_Contenant">
 			<!--<iframe id="videoAcc" width="1800" height="1000" src="https://www.youtube.com/embed/WGvBFuDdNzE?&showinfo=0&controls=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			 -->
		</div>
       
    </section>
   
</main>    
<?php get_footer(); ?>
</html>






