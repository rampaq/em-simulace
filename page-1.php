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
		.full {
			width: 90%;
			margin: 3.5% 5%;
			background-color: #FFF;
			font-size: 1em;
		}
		.full th {
			text-align: center;
			font-family: 'Righteous';
			font-size: 2em;
		}
		.full td {
			width: 100%;
			padding: 2em;
			text-align: justify;
		}

		article > h1 {
			margin: 0 10%;
		}



	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry" style="float: left; padding:0;">
				<!--
				<div class=header_cont style="width: 100%; height: 200px; float: left; margin-top: -9%;margin-bottom: 2em;">
					<div class="bg" style="background: #d25302 url(<?=get_bloginfo('template_directory');?>/img/quality_header.png) no-repeat 50% 50%; background-size: cover; height: 100%;">
					</div>
				</div>
				-->
				<?php //masterslider(1); ?>
				<table class="full">
				<h1 class="entry-title">Simulace Expedice Mars</h1>
					<tr>
						<th>Základní informace</th>
					</tr>
					<tr>
						<td>
							<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
							<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

							<p>Základní shrnutí, co zde najdete.</p>
						</td>
					</tr>
				</table>

			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>