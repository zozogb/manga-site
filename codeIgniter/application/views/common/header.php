<?= doctype('html5');?>
<html>
	<head>
		<?= meta("UTF-8", "", 'charset');?>
		<?= meta("X-UA-Compatible", "IE=edge", 'http-equiv');?>
		<?= meta("viewport", "width=device-width, initial-scale=1");?>
		<?= link_tag(css_url('style'))?>
		<title><?= $title ?></title>
	</head>
	<body>
		<header>
			<a href="<?= site_url(); ?>"><?= img('utile/logo.png', 'logo de'.$title, 'logo');?></a>
			
			<!-- Menu normal -->
			<ul class="menu">
				<li><a href="#">Navigation</a>
					<ul>
						<li><a href="<?= site_url(); ?>">Accueil</a></li>
						<li><a href="<?= site_url(); ?>">A propos</a></li>
						<li><a href="<?= site_url('ajout'); ?>">DEV-ajoute</a></li>
						<li><a href="<?= site_url('galerie'); ?>">galerie<br> <span class="important">(Vesion Beta)</span></a></li>
					</ul>
				</li>
				<li><a href="#">Vocaloid</a>
					<ul>
						<!--<li><a href="<?= site_url(); ?>">Hatsune Miku</a></li>
						<li><a href="<?= site_url(); ?>">Kagamine Rin/Len</a></li>
						<li><a href="<?= site_url(); ?>">Megurine Luka</a></li>
						<li><a href="<?= site_url(); ?>">Megpoid Gumi</a></li>
						<li><a href="<?= site_url(); ?>">Kaito</a></li>-->
						<li><a href="<?= site_url('Vocaloid/alys'); ?>">Alys</a></li>
					</ul>
				</li>
				<li><a href="#">UTAU</a>
					<ul>
						<li><a href="<?= site_url('UTAU/kasane'); ?>">Kasane Teto</a></li>
						<!--<li><a href="<?= site_url(); ?>">Tsukiko Yami</a></li>
						<li><a href="<?= site_url(); ?>">Sukone Tei</a></li>
						<li><a href="<?= site_url(); ?>">Namine Ritsu</a></li>
						<li><a href="<?= site_url(); ?>">Macne Nana</a></li>-->
					</ul>
				</li>
			</ul>
		</header>
		<div id="conteneur">