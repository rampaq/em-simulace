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
			/*width: 100%;*/
			/*margin: 3.5% 5%;*/
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
			/*width: 90%;*/
			/*margin: 3% 5%;*/
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
			margin: 1em 10%;
		}

		.main {
			display: table;
			text-align: justify;
			width: 100%;
			/*width: 90%;*/
			/*margin: 3% 5%;*/
			margin-bottom: 2em;
			background-color: #FFF;
			font-size: 1em;
			border: 1px solid rgba(51,51,51,.1);
			position: relative;
		}

		.main .title {
			width: 100%;
			text-align: center;
			font-family: 'Righteous';
			font-weight: 700;
			font-size: 2em;
			border-bottom: 1px solid rgba(51,51,51,.1);
			padding: .4em;
		}

		.main .text {
			width: 100%;
			padding: 2em;
			text-align: justify;
		}
		.main .img{
			width: 50%;
			background-color: #fff;
			background-position: center center;
			background-size: cover;
			background-repeat: no-repeat;
			/*right: 0;*/
			/*float: right;*/
			height: 100%;
			display: table-cell;
		}

		.main .all_text {
			width: 50%;
			/*float: left;*/
			display: table-cell;
		}

		@media screen and (max-width: 650px) {
			.main {
				display: block;
			}
			.main .all_text {
				display: block;
				width: 100%;
			}
			.main .img {
				display: block;
				width: 100%;
				height: 200px;
			}
		}

	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry" style="float: left;">
				<h1>O projektu</h1>

				<div class="main">
					<div class="all_text">
						<div class="title">Kdo jsme</div>
						<div class="text">
							<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
						</div>
					</div>
					<div class="img" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/unsplash1.jpg');"></div>
				</div>
				<div class="main">
					<div class="img" style="background-image: url('<?=get_bloginfo('template_directory');?>/img/unsplash2.jpg');"></div>
					<div class="all_text">
						<div class="title">Vychloubání</div>
						<div class="text">
							<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
						<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
						</div>
					</div>
				</div>

				<div class="main">
					<div class="all_text">
						<div class="title">Místo</div>
						<div class="text">
							<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
						</div>
					</div>
					<div class="img" style="padding:0; position: relative;">
						<span style="color: #fff;font-size:1px; line-height: 0.1;">.</span>
						<?php echo do_shortcode('[gmap-embed id="97"]'); ?>
					</div>
				</div>
<!--
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

				<table class="w_img">
				<tr>
					<th>Místo</th>
					<td rowspan="2" class="img" style="padding:0; position: relative;">
						<span style="color: #fff;font-size:1px; line-height: 0.1;">.</span>
						<?php echo do_shortcode('[gmap-embed id="97"]'); ?>
					</td>
				</tr>
				<tr>
					<td>
						<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
					</td>
				</tr>
				</table>
-->
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>