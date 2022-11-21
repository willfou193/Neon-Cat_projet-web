<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
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
		<div class="logo">
			<?php
				if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}
			?>
		</div>
		<div class="menu-burger">

    

            

            <section class="site__bare">
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
			</section>
			<h1>
			<?php wp_title(false) ?>
			</h1>
		</div>
		<div></div>
	</header>
<?php wp_body_open(); ?>
<!--<div id="page" class="site">
	<header id="masthead" class="site-header">
		<p>Page d'accueil</p>
	</header> -->
