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
            transition: 0.3s;
            opacity: 0.7;
        }
        .room1{
            max-width: 17%;
            left: 41.5%;
            top: 18.5%;
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
        
        .text-room{
            left: 9%;
            width: 30%;
            padding: 1%;
            padding-top: 0;
            padding-bottom: 0;
            border-style: solid;
            border-width: 2px;
            border-radius: 5px;
            position: absolute;
            background-color: #f1f1f1;
            opacity: 0;
        }
        .text-room p{
            font-size: 80%;
            text-align: justify;
        }
        
        .text-room1{
            top: 18%;
        }
        .text-room2{
            top: 38%;
        }
        .text-room3{
            top: 50%;
        }
        .text-room4{
            top: 62%;
        }
        
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry article">
                <h1>Simulátor</h1>
                <div class="pic-part">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-Main.png" class="pic-norm">
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-1.png" class="pic-room room1" onMouseOver="show('text-room1')" onMouseOut="hide('text-room1')">
                        <div class="text-room text-room1" id="text-room1">
                        <h2>Hlavní modul</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis...</p>
                        </div>
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-2.png" class="pic-room room2" onMouseOver="show('text-room2')" onMouseOut="hide('text-room2')">
                        <div class="text-room text-room2" id="text-room2">
                        <h2>Laboratoř</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis...</p>
                        </div>
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-3.png" class="pic-room room3" onMouseOver="show('text-room3')" onMouseOut="hide('text-room3')">
                        <div class="text-room text-room3" id="text-room3">
                        <h2>Servisní (záchod)</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis...</p>
                        </div>
                    <img src="<?=get_bloginfo('template_directory');?>/img/simulator/Sim-4.png" class="pic-room room4" onMouseOver="show('text-room4')" onMouseOut="hide('text-room4')">
                        <div class="text-room text-room4" id="text-room4">
                        <h2>Výstupový modul</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis...</p>
                        </div>
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
                <script>
                    function show(id) {
                        document.getElementById(id).style.transition = "0.3s";
                        document.getElementById(id).style.opacity = "0.95";
                      }
                      function hide(id) {
                        document.getElementById(id).style.transition = "0s";
                        document.getElementById(id).style.opacity = "0";
                      }
                </script>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>