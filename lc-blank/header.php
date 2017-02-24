<?php
/**
 * This is the template that displays all of the <head> section.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?>Quatro Rodas</title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

</head>
<body>
     
    <div id="page" class="site">
        
        <header>
            <div class="tam">
                <h1 class="logo">Quatro Rodas</h1>
                <nav role="navigation">
                    <h2>navegação principal</h2>
                    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu')); ?>
                    <form class="form">
                        <input class="" type="text"
                           id="pesquisar" name="busca" placeholder="Pesquisar...">
                    </form>
                </nav>
            </div>
        </header>
        
        
    </div>
