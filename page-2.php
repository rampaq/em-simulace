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
		td {
			height: 100%;
		}
		#srm_gmp_embed_1 {
			height: 100%;
			width: 100%;
			position: absolute;
			top:0;
			left: 0;
			margin: 0 !important;
		}
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

		.w_img {
			text-align: justify;
			width: 90%;
			margin: 3.5% 5%;
			background-color: #FFF;
			font-size: 1em;
		}
		.w_img th {
			width: 50%;
			text-align: center;
			font-family: 'Righteous';
			font-size: 2em;
		}

		.w_img td {
			width: 50%;
			padding: 2em;
			text-align: justify;
		}
		.w_img .img{
			width: 50%;
			background-color: #fff;
			background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;
		}

		article > h1 {
			margin: 0 10%;
		}

	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry" style="float: left;">
				<h1 class="entry-title">O projektu</h1>
				<table class="w_img">
					<tr>
						<th>Kdo jsme</th>
						<td rowspan="2" class="img" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/unsplash1.jpg');"></td>

					</tr>
					<tr>
						<td>
							<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
						</td>
					</tr>
				</table>

				<table class="w_img">
				<tr>
					<td rowspan="2" class="img" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/unsplash2.jpg');"></td>
					<th>Vychloubání</th>
				</tr>
				<tr>
					<td>
						<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
						<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
					</td>
					</tr>
				</table>
<!--
				<table class="full">
					<tr>
						<th>Posádka roku 2017</th>
					</tr>
					<tr>
						<td>
							Posádka
						</td>
					</tr>
				</table>
-->
				<table class="w_img">
				<tr>
					<th>Místo</th>
					<td rowspan="2" class="img" style="padding:0; position: relative;>
						<span style="color: #fff;font-size:1px; line-height: 0.1;">.</span>
						<?php echo do_shortcode('[gmap-embed id="48"]'); ?>
					</td>
				</tr>
				<tr>
					<td>
						<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
					</td>
				</tr>
				</table>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>