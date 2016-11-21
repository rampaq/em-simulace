<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
	<style>
        .hentry{
            padding: 2%;
            padding-top: 1%;
        }
        .pic-part{
            max-width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        .pic-room{
            opacity: 0;
            position: absolute;
        }
        .pic-room:hover{
            opacity: 100;
        }
        .room1{
            max-width: 17%;
            left: 41.5%;
            top: 18%;
        }
        .room2{
            max-width: 17%;
            left: 41.5%;
            top: 42%;
        }
        .room3{
            max-width: 15%;
            left: 42.5%;
            top: 60.5%;
        }
        .room4{
            max-width: 15%;
            left: 42.5%;
            top: 72%;
        }
        
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry article">
                <h1>Simulátor</h1>
                <div class="pic-part">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-Main.png" class="pic-norm">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-1.png" class="pic-room room1">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-2.png" class="pic-room room2">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-3.png" class="pic-room room3">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-4.png" class="pic-room room4">
                </div>
                <!--
                <div class="text-part">
                    <div class="odstavec1 odst">
                    <h2>Hlavní modul</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                    </div>
                    <div class="odstavec2 odst">
                    <h2>Laboratoř</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                    </div>
                    <div class="odstavec3 odst">
                    <h2>Servisní modul (záchod)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                    </div>
                    <div class="odstavec4 odst">
                    <h2>Přistávací modul</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                    </div>
                </div>-->
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>