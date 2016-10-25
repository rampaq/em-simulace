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
		.left, .right {
			display: table;
			width: 60%;
			border: 1px solid #333;
			margin: 3.5% 5%;
			background-color: #FFF;
		}
		.left {
			float: left;
		}
		.right{
			float: right;
		}

		.r, .l {
			vertical-align: middle;
			text-align: justify;
			/*text-align: center;*/
		}

		.left .l, .right .r {
			/* obrázek */
			width: 35%;
			padding: 1em;
			background-repeat: no-repeat;
			background-position: center center;
		}
		.left .r, .right .l {
			/* hodně textu, popis */
			width: 65%;
			padding: 1.2em;
			font-size: .75em;
		}
		.left .r {
			/*text-align: left;*/
			border-left: 1px dashed #BBB;
		}
		.right .l {
			/*text-align: right;*/
			border-right: 1px dashed #BBB;
		}

		h1 {
			font-size: 2.85em;
			text-align: center;
			margin: 0 0 .2em;
			border-bottom: 1px solid #EEE;
		}

		.table-container:nth-of-type(even){
			/* zobraz pruh pouze u lichých */
			float: left;
			background-color: #DDD;
		}
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry" style="float: left;">
				<div class=header_cont style="width: 100%; height: 400px; float: left; margin-top: -9%;margin-bottom: 2em;">
					<div class="bg" style="background: #8D3B23 url(<?=get_bloginfo('template_directory');?>/img/quality_header.png); background-size: cover; height: 100%;">
					</div>
				</div>
				<span>ZRESPONZIVNIT!</span>
				<div class="table-container">
					<table class="left">
					<tr>
						<td class="l" style="background-image: url(<?=get_bloginfo('template_directory');?>/img/em.png); background-size: 200px;">
						Napsat o lepší logo.
						</td>
						<td class="r">
							<h1>Kdo jsme</h1>
							<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
							<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
						</td>
						</tr>
					</table>
				</div>

				<div class="table-container">
					<table class="right">
					<tr>
						<td class="l">
							<h1>Co je simulace</h1>
							<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
							<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
						</td>
						<td class="r">

						</td>

						</tr>
					</table>
				</div>

				<div class="table-container">
					<table class="left">
					<tr>
						<td class="l">
							Mapa.
						</td>
						<td class="r">
							<h1>Místo</h1>
							<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
						</td>
					</tr>
					</table>
				</div>
			</article>
		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>