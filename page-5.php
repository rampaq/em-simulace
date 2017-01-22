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
        .article{
            background: #fff;
            border-top: 1px solid rgba(51, 51, 51, 0.1);
            padding: 2%;
            margin-left: 1%;
            padding-right: 0;
        }
        .text-part{
            z-index: 0;
            width: 75%;
            position: relative;
            text-align: justify;
        }
        .pic-part{
            position:absolute;
        }
        .pic-res{
            display: none;
        }
        .text-part .odstavec1{
            margin-top: 9%;
        }
        .text-part .odstavec2{
            margin-top: 12%;
        }
        .text-part .odstavec3{
            margin-top: 25%;
        }
        .text-part .odstavec4{
            margin-top: 5%;
        }
        @media screen and (max-width: 60em) {
            .text-part{
                width: 70%;
            }
        }
        @media screen and (max-width: 44em) {
            .pic-part{
                width: 100%;
                position: relative;
            }
            .text-part{
                width: 100%;
                margin-right: 2%;
            }
            .text-part .odst{
                margin-top: auto;
            }
            .text-part h2{
                text-align: center;
            }
            .pic-part .pic-norm{
                display: none;
            }
            .pic-res{
                display: block;
            }
        }
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="article">
                <h1>Simulátor</h1>
                <div class="pic-part">
                    <img src="<?=get_bloginfo('template_directory');?>/img/Ship.png" style="width:100%;" class="pic-norm">
                    <img src="<?=get_bloginfo('template_directory');?>/img/ShipSmall.png" style="width:100%;" class="pic-res">
                </div>
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
                </div>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
