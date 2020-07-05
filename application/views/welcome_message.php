<!DOCTYPE html>
<title>Abed | Accueil</title>
<meta charset="utf-8" />
<link rel="stylesheet" href="<?= base_url() ?>template/styles/style.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url() ?>template/styles/prettyphoto.css" type="text/css" />
<link rel="stylesheet" href="<?= base_url() ?>template/styles/totop.css" type="text/css" />

<!--[if IE]>
<style>#header h1 a:hover {
    font-size: 75px;
}</style><![endif]-->
</head>

<body>
	<div class="main-container">
		<header>
			<h1><a href="<?= base_url() ?>">ABED</a></h1>

			<p id="tagline"><strong>Association de Bienfaisance pour l’Education et le Développement</strong></p>
		</header>
	</div>
	<div class="main-container">
		<div id="sub-headline">
			<div class="tagline_left">
				<p id="tagline2">Tel: (+221) 77 517 40 94 | Email: <a href="mailto:cherifabdoulaziz@gmail.com">cherifabdoulaziz@gmail.com</a></p>
				<p id="tagline2">Tel: (+221) 77 517 40 94</a></p>
				<p id="tagline2">Tel: (+221) 70 654 57 72</a></p>
				<p id="tagline2">Tel: (+221) 77 300 47 72</a></p>
			</div>
			<div class="tagline_right">
				<form action="#" method="post">
					<fieldset>
						<legend>Site Search</legend>
						<input type="text" placeholder="Rechercher&hellip;" onfocus="if (this.value == 'Rechercher&hellip;') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Rechercher&hellip;';}" />
						<input type="submit" name="go" id="go" value="Search" />
					</fieldset>
				</form>
			</div>
			<br class="clear" />
		</div>
	</div>
	<div class="main-container">
		<div id="nav-container">
			<nav>
				<ul class="nav">
					<li class="active"><a href="<?= base_url() ?>">Accueil</a></li>
					<li><a href="typo.html">Blog</a></li>
					<li><a href="#">Layouts</a>
						<ul>
							<li><a href="#">Sidebar</a>
								<ul>
									<li><a href="right_sidebar.html">Right Sidebar</a>
									</li>
								</ul>
							<li><a href="full_width.html">Full Width</a></li>
						</ul>
					</li>
					<li><a href="portfolio.html">Portfolio</a></li>
					<li><a href="gallery.html">Galerie photo</a></li>
					<li class="last"><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div>
	</div>
	<div class="main-container">
		<div class="container1">
			<div id="mySlides">
				<div id="slide1">
					<img src="<?= base_url() ?>assets/img/abed_section.jpg" alt="Slide 1 jFlow Plus" />
					<!-- <span><b class="slideheading">First Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read
							More!</a></span> -->
				</div>
				<div id="slide2">
					<img src="<?= base_url() ?>assets/img/gal_6.jpg" alt="Slide 2 jFlow Plus" />
					<!-- <span><b class="slideheading">Second Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read
							More!</a></span> -->
				</div>
				<div id="slide3">
					<img src="<?= base_url() ?>assets/img/gal_5.jpg" alt="Slide 3 jFlow Plus" />
					<!-- <span><b class="slideheading">Third Featured Slide</b><br />Featured Text.....<a href="#" title="Coolness" class="readmore">Read
							More!</a></span> -->
				</div>
			</div>

			<div id="myController">
				<span class="jFlowControl"></span>
				<span class="jFlowControl"></span>
				<span class="jFlowControl"></span>
			</div>

			<section class="jFlowPrev">
				<div></div>
			</section>
			<section class="jFlowNext">
				<div></div>
			</section>
			<br />
			<br />

			<article class="box" id="home_featured21">
				<div class="block">
					<h2>Qui Sommes Nous</h2>

					<p>L’Association de Bienfaisance pour l’Education et le Développement (ABED) qui a vu le jour depuis Mai 2016 entend dérouler des activités de sensibilisation au profit de la communauté rufiskoise à Sébikotane. Selon le président Monsieur Abdou Aziz Niang, l’Association de Bienfaisance pour l’Education et le Développement travaille sur quatre axes majeurs que sont l’Education, la Santé, le Développement et le travail d’Equipe.<br />
						<!-- <a href="#" class="read_more">Read More</a> -->
					</p>
				</div>
				<div class="block">
					<h2>Qu'est Ce Que Nous Faisons</h2>
					<ul id="list">
						<li>Sensibilisation au profit de la communauté rufiskoise à Sébikotane.</li>
						<li>L’Association appelle à toutes et à tous pour une adhésion de masse..</li>
						<li>Travailler dans l’union et la joie au profit de la communauté.</li>
						<li>L’Education, la Santé, le Développement et le travail d’Equipe.</li>
					</ul>
					<br />
					<br />
					<!-- <img src="<?= base_url() ?>template/images/browsers.png" alt="Web Browsers" /> -->

				</div>
				<div class="block last">
					<h2>Notre Emplacement</h2>

					<p>Nos activités de sensibilisation au profit de la communauté rufiskoise à Sébikotane se deroulent partout au Senegal. . <br />
						<!-- <a href="#" class="read_more">Read More</a></p> -->
				</div>
				<div class="clear"></div>
			</article>

		</div>

		<div class="callout">
			<div class="calloutcontainer">
				<div class="container_12">
					<div class="grid">
						<div class="alignleft">
							<h3>Association de Bienfaisance pour l’Education et le Développement ABED : Ensemble pour le travail</h3>

							<p>Rétrouver nous sur <a href="https://www.abed.com">www.abed.com</a>
							</p>
						</div>
						<a href="https://www.abed.com" class="more" target="_blank">ABED</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="calloutoverlay"></div>
				<div class="calloutoverlaybottom"></div>
			</div>
		</div>
		<br /><br />

		<div class="container2">
			<article id="home_featured2">
				<ul>
					<li>
						<div class="imgholder"><a href="<?= base_url() ?>assets/img/abed_doc.jpg" data-gal="prettyPhoto[featured]" title="First Featured Title"><img src="<?= base_url() ?>assets/img/abed_doc.jpg" width="275" height="145" alt="" /></a></div>
						<h4>Récépissé officielle</h4>

						<p>Association qui a déjà en sa possession son récépissé de reconnaissance officielle.</p>
					</li>
					<li>
						<div class="imgholder"><a href="<?= base_url() ?>assets/img/gal_3.jpg" data-gal="prettyPhoto[featured]" title="Second Featured Title"><img src="<?= base_url() ?>assets/img/gal_3.jpg" width="275" height="145" alt="" /></a></div>
						<h4>Plantation des arbres</h4>

						<p>Les arbres achetés en racines nues doivent être plantés pendant la période de repos végétatif,.</p>
					</li>
					<li class="last">
						<div class="imgholder"><a href="<?= base_url() ?>assets/img/gal_1.jpg" data-gal="prettyPhoto[featured]" title="Third Featured Title"><img src="<?= base_url() ?>assets/img/gal_1.jpg" width="275" height="145" alt="" /></a></div>
						<h4>Secours Islamique</h4>

						<p>Construire des puits pour donner l'accès à l'eau aux plus vulnérables. L'eau est vitale. Pourtant plus de 2 milliards de personnes n'ont pas accès à une eau potable.</p>
					</li>
				</ul>
				<br class="clear" />
			</article>
		</div>
	</div>
	<div class="main-container">
	</div>

	<div class="callout">
		<div class="calloutcontainer">
			<div class="container_12">
				<div class="grid">
					<article class="footbox">
						<h2>Blog</h2>
						<ul>
							<li><a href="#">Lorem Ipsum Dolor</a><br />
								Orciint erdum condimen terdum nulla mcorper elit nam curabitur...
							</li>
							<li><a href="#">Praesent Et Eros</a><br />
								Orciint erdum condimen terdum nulla mcorper elit nam curabitur...
							</li>
							<li><a href="#">Suspendisse In Neque</a><br />
								Orciint erdum condimen terdum nulla mcorper elit nam curabitur...
							</li>
						</ul>
					</article>
					<article class="footbox last">
						<h2>Reseaux Sociaux!</h2>

						<div id="social">
							<a href="#" class="s3d twitter"> Twitter <span class="icons twitter"></span> </a>
							<a href="#" class="s3d facebook"> Facebook <span class="icons facebook"></span> </a>
							<a href="#" class="s3d flickr"> Youtube <span class="icons flickr"></span> </a>
						</div>
					</article>
					<article class="latestgallery">
						<h2>Derniers travaux</h2>
						<ul>
							<li><a href="<?= base_url() ?>assets/img/gal_6.jpg" data-gal="prettyPhoto[gallery]" title="Title"><img src="<?= base_url() ?>assets/img/gal_6.jpg" alt="" width="150" height="95" /></a></li>
							<li><a href="<?= base_url() ?>assets/img/gal_7.jpg" data-gal="prettyPhoto[gallery]" title="Title"><img src="<?= base_url() ?>assets/img/gal_7.jpg" alt="" width="150" height="95" /></a></li>
							<li><a href="<?= base_url() ?>assets/img/gal_8.jpg" data-gal="prettyPhoto[gallery]" title="Title"><img src="<?= base_url() ?>assets/img/gal_8.jpg" alt="" width="150" height="95" /></a></li>
							<li><a href="<?= base_url() ?>assets/img/gal_9.jpg" data-gal="prettyPhoto[gallery]" title="Title"><img src="<?= base_url() ?>assets/img/gal_9.jpg" alt="" width="150" height="95" /></a></li>
						</ul>
					</article>

					<div class="clear"></div>
				</div>
				<div class="calloutoverlay"></div>
				<div class="calloutoverlaybottom"></div>
			</div>
		</div>
	</div>
	<footer>
		<p class="tagline_left">Copyright &copy; 2020 - Tout droit reservé - <a href="<?= base_url() ?>">https://www.abed.com</a></p>

		<p class="tagline_right">Conçu par <a href="https://github.com/taalralgo" title="Daouda S. THERA" target="_blank">Daouda THERA</a>
		</p>
		<br class="clear" />
	</footer>

	<br />
	<br />
	<script src="<?= base_url() ?>template/scripts/jquery.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>template/scripts/prettyphoto.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>template/scripts/jflow.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>template/scripts/easing.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>template/scripts/totop.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>template/scripts/superfish.js" type="text/javascript"></script>
	<script src="<?= base_url() ?>template/scripts/functions.js" type="text/javascript"></script>
</body>

</html>