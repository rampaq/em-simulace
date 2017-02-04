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
	/*
        .article{
            background: #fff;
            border-top: 1px solid rgba(51, 51, 51, 0.1);
            padding: 2%;
            margin-left: 1%;
            margin-right: 1%;
        }
        */

				.hlavni-pos{
						margin-bottom: 2%;
				}

				.member{
						margin-bottom: 2%;
				}

				.member > div{
						float: left;
				}

        .member-text{
            width: 75%;
            padding-right: 2%;
            margin-top: 4%;
            text-align: justify;
        }
        .member-pic{
            width: 25%;
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
                max-width: 30%;
            }
        }
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry">
        <div class="hlavni-pos">
        	<header class="entry-header">
          		<h1 class="entry-title">Hlavní posádka roku 2017</h1>
          	</header>
						<div class="member">
							<div class="member-pic">
								<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
							</div>
							<div class="member-text">
								<h2>Samuel Matějíčka</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<div class="member">
							<div class="member-pic">
								<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
							</div>
							<div class="member-text">
								<h2>Samuel Matějíčka</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<div class="member">
							<div class="member-pic">
								<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
							</div>
							<div class="member-text">
								<h2>Samuel Matějíčka</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<div class="member">
							<div class="member-pic">
								<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
							</div>
							<div class="member-text">
								<h2>Samuel Matějíčka</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
							</div>
						</div>
						<div style="clear: both;"></div>
						<div class="member">
							<div class="member-pic">
								<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
							</div>
							<div class="member-text">
								<h2>Samuel Matějíčka</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
							</div>
						</div>
						<div style="clear: both;"></div>
        	</div>
					<div class="zalozni-pos">
	        <header class="entry-header">
          		<h1 class="entry-title">Záložní posádka roku 2017</h1>
          	</header>
							<div class="member">
								<div class="member-pic">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
								</div>
								<div class="member-text">
									<h2>Samuel Matějíčka</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
								</div>
							</div>
							<div style="clear: both;"></div>
							<div class="member">
								<div class="member-pic">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
								</div>
								<div class="member-text">
									<h2>Samuel Matějíčka</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
								</div>
							</div>
							<div style="clear: both;"></div>
							<div class="member">
								<div class="member-pic">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
								</div>
								<div class="member-text">
									<h2>Samuel Matějíčka</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
								</div>
							</div>
							<div style="clear: both;"></div>
							<div class="member">
								<div class="member-pic">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
								</div>
								<div class="member-text">
									<h2>Samuel Matějíčka</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
								</div>
							</div>
							<div style="clear: both;"></div>
							<div class="member">
								<div class="member-pic">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
								</div>
								<div class="member-text">
									<h2>Samuel Matějíčka</h2>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed suscipit nisi elementum tincidunt convallis. Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.Vivamus consequat turpis blandit eleifend congue. Aenean sodales tincidunt dictum.</p>
								</div>
							</div>
							<div style="clear: both;"></div>
	        	</div>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
