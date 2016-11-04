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
			font-size: .8em;
		}
		.full th {
			text-align: center;
			font-family: 'Righteous';
			font-size: 3em;
		}
		.full td {
			width: 100%;
			padding: 2em;
			text-align: justify;
		}

		.w_img {
			text-align: justify;
			width: 100%;
			margin: 3.5% 0;
			background-color: #FFF;
			font-size: .8em;
		}
		.w_img th {
			width: 60%;
			text-align: center;
			font-family: 'Righteous';
			font-size: 2.4em;
		}

		.w_img td {
			width: 60%;
			padding: 2em;
			text-align: justify;
		}
		.w_img .img{
			width: 40%;
		}

		.participants {
			position: relative;
			text-align: center;
			width: 100%;
			height: 675px;
		}

		.medallion {
			display: inline-block;
			text-align: center;
			width: 260px;
			position: absolute;
			background-color: rgba(255, 150, 30, .2);
			border: solid 1px rgb(255,150,30);
			padding: 1em;
		}
		.medallion img {
			width: 200px;
		}
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="hentry" style="float: left;">
				<div class=header_cont style="width: 100%; height: 400px; float: left; margin-top: -9%;margin-bottom: 2em;">
					<div class="bg" style="background: #d25302 url(<?=get_bloginfo('template_directory');?>/img/quality_header.png) no-repeat 50% 50%; background-size: cover; height: 100%;">
					</div>
				</div>
				<table class="full">
					<tr>
						<th>O simulaci</th>
					</tr>
					<tr>
						<td>
							<a href="http://expedicemars.eu"><img style="float: right; width: 15em; margin: -1em 1em 1em" src="<?=get_bloginfo('template_directory');?>/img/em.jpg" alt="logo Expedice Mars"></a>
							<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
							<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

							<p>Základní shrnutí, co zde najdete.</p>
						</td>
					</tr>
				</table>

				<hr>
				<span>Nějaký grafický prvek.</span>
				<hr>

				<table class="w_img">
				<tr>
					<td rowspan="2" class="img">Společná fotka.</td>
					<th>Kdo jsme</th>
				</tr>
				<tr>
					<td>
						<p>A Chinese tale tells of some men sent to harm a young girl who, upon seeing her beauty, become her protectors rather than her violators. That's how I felt seeing the Earth for the first time. I could not help but love and cherish her.</p>
					</td>
					</tr>
				</table>

				<table class="w_img">
				<tr>
					<th>Vychloubání</th>
					<td rowspan="2" class="img">Fotka ze simulace.</td>
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
							<p>Where ignorance lurks, so too do the frontiers of discovery and imagination.</p>
							<p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>
							<p>Jména, ...</p>
							<div class="participants">
								<div class="medallion" style="left:calc(30% - 130px);">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
									<h2>Samuel Matějíčka</h2>
									<span>konstruktér, SK</span>
								</div>
								<div class="medallion" style="right:calc(30% - 130px);">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
									<h2>Tomáš Faikl</h2>
									<span>inženýr, CZ</span>
								</div>
								<div class="medallion" style="top:400px;left:calc(15% - 130px);">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
									<h2>Jakub Janoušek</h2>
									<span>astronom, CZ</span>
								</div>
								<div class="medallion" style="top:400px;left:calc(50% - 130px)">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
									<h2>Natalia Wirthová</h2>
									<span>lékařka, SK</span>
								</div>
								<div class="medallion" style="top:400px;right:calc(15% - 130px);">
									<img src="<?=get_bloginfo('template_directory');?>/img/participant.jpg" alt="">
									<h2>Beáta Plaskurová</h2>
									<span>astronomka, SK</span>
								</div>
							</div>
						</td>
					</tr>
				</table>

				<table class="w_img">
				<tr>
					<td rowspan="2" class="img">
						Mapa.
					</td>
					<th>Místo</th>
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