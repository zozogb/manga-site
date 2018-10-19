<?php $chemin = "../"; $nom = "/Megpoid_Gumi"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Megpoid Gumi\">"); ?>
				<p class="clear">fait par Masami Yuuki</p>
				</div>
				<h1>Megpoid Gumi</h1>
				<p>
					 Gumi une VOCALOID développée et distribuée par <a href="http://www.ssw.jp/" target="_blank">Internet Co., Ltd.</a> sous nom de Megpoid (Gumi est le nom de l'avatar et Megpoid est le nom du logiciel). 
					 Elle a eter comersialiser en Juin 2009. Devant le succès des Appends des VOCALOID de CRYPTON Internet Co., Ltd Megpoid resoi une mise a jour "extend" sur VOCALOID 3 en 2011, 
					 il eu aussi une mise a jour de sa version VOCALOID 2 et sa version anglaise. La voix de Gumi vient de Megumi Nakajima.
				</p>
				<p>
					Le nom du logiciel "Megpoid" vient pour la premiere partie de Megumi et la seconde partie ("poid"), est l'abréviation de "comme un Vocaloid". On peut donc traduire par "Megumi en tant qu'un VOCALOID". 
				</p>
				<h2>Apparence</h2>
				<p>
					Masami Yuuki, le dessinateur de Gumi, l'avatar du logiciel Megpoid, s'est inspirer de "Ranka Lee" (un des premiers roles de Megumi Nakajima); mais cela n'a jamais été confirmé par l'auteur. Neanmoins, 
					la tenue de Gumi resemble a celle de "Ranka Lee" (exemple: les couleurs verte, jaune et orange).
					Rien a etre define offisielement conserner sa taille, son poids et son age, mais au vu de son phisique on peut estimer qu'elle a entre 14 et 17 ans (enfonction des version).
				</p>
				<h2>Réputation</h2>
				<p>
					Gumi a etre fait pour lutté contre la popularité des VOCALOID de la série CV (Character Vocal Series), mais a été considerer comme n'eient "rien de spécial" lors de sa sortie. 
					Elle a cependant gagner en popularité et en 2010,  la popularité de GUMI était à égalité avec les Vocaloids de CRYPTON et en 2015, 
					sondage de popularité sur NicoNico confirma que GUMI était le deuxième VOCALOID le plus populaire.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Gumi était le surnom de sa donatrice de voix, Megumi Nakajima lorsqu'elle était plus jeune.
					</li>
					<li>
						les devlopeur on tweeté qu'il y avait un âge approximatif préféré pour GUMI: l'adolescence. 
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>Donut Hole de Hachi</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>ECHO de CrusherP (musique) et CircusP</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
				<div id="video">
					<p>A Fake, Fake, Psychotropic de Kairiki Bear</p>
					<?php echo("<video controls width=\"600\" poster=\"".$chemin."images".$nom.".jpg\" preload=\"metadata\">
						<source src=\"".$chemin."videos".$nom.".mp4\">
						<source src=\"".$chemin."videos".$nom.".webm\">
						Votre navigateur ne supporte pas la balise vidéo.
					</video>");?>
					<h5>image du site http://www.fanpop.com</h5>
				</div>
			</div>
			
			<?php include("$chemin"."pub-2.php") ?>
			
		</div>
		
		<?php include("$chemin"."menu.php") ?>
		
		<?php include("$chemin"."footer.php") ?>
	
</html>