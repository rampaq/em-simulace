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
            margin-right: 1%;
        }

        .member div{
            float: left;
        }
        .member-text{
            width: 70%;
            padding-right: 2%;
            margin-top: 4%;
            text-align: justify;
        }
        .member-pic{
            width: 30%;
            padding-right: 2%;
            padding-top: 4%;
            text-align: center;
        }

        .member img{
            border-radius: 200px;
            max-width: 95%;
        }

        @media screen and (max-width: 60em) {

        }
        @media screen and (max-width: 44em) {
            .member div{
                float: none;
            }
            .member h2{
                text-align: center;
            }

            .member-text{
                width: 100%;
            }
            .member-pic{
                width: 100%;
            }
            .member-pic img{
                max-width: 40%;
            }
        }
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="article">
                <div class="hlavni-pos">
                <h1>Hlavní posádka roku 2017</h1>
                    <div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div>
                    <div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div>
                </div>
                <div class="zalozni-pos">
                <h1>Záložní posádka roku 2017</h1>
                    <div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div><div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div><div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div><div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div><div class="member">
                        <div class="member-pic">
                        <img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt=""></div>
                        <div class="member-text">
                        <h2>Samuel Matějíčka</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
                        </div>
                    </div>
                </div>
                <h1></h1>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>