<?php $chemin = "../"; $nom = "/Kaito"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Kaito V1\">"); ?>
				<p class="clear">fait par Takashi Kawasaki</p>
				</div>
				<h1>Kaito</h1>
				<p>
					KAITO est un VOCALOID japonais développé par Yamaha corporation et distribué par <a href="http://www.crypton.co.jp/mp/pages/prod/vocaloid/index.jsp" target="_blank">Crypton Future Media Inc.</a>. 
					Sa voix provient du célèbre chanteur japonais, Naoto Fūga. Il est sorti en février 2006 pour le premier logiciel VOCALOID par la suite il reçut une mise à jour pour VOCALOID 3 le 15 février 2013.
				</p>
				<p>
					C'est le public qui a choisir son nom, "KAITO" (proposé par Shu-tP) a été choisie car il est facilement prononçable et sonne bien avec "Meiko" (un autre VOCALOID).
				</p>
				<h2>Apparence</h2>
				<p>
					Le design original de Kaito a été fait par Takashi Kawasaki. Il faut rappeler que Kaito n'a pas être crée pour avoir un personnage lier a sa banque vocale. 
					Kaito a les yeux et les cheveux bleus et ne possède pas d’âge officiel mais il est considéré comme un homme d'environ 20 ans. La principale caractéristique du design de Kaito est son écharpe.
				</p>
				<h2>Réputation</h2>
				<p>
					Sachant que Kaito n'avait de design dans sa version sur VOCALOID il est dur de définir sa popularité. Tout faut les vente de cette première version ne sont pas bonne. 
					Mais sa version sur VOCALOID 3 en sont design définie il commencera gagner en popularité de plus il apparaissait de temps en temps dans des vidéos de Hatsune Miku. 
					Et en 2015 une enquête de popularité sur le site NicoNico montre que Kaito est le 5ème VOCALOID le plus populaire.
					</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						C'est le premier VOCALOID masculin.
					</li>
					<li>
						L'échec commercial de Kaito à contribuer au développement de VOCALOID principalement féminin.
					</li>
					<li>
						La popularité de Kaito à augmenter de manière significative après la publication d'une vidéo parodique où Hatsune Miku demander à Kaito "Où êtes-tu et que faites-tu actuellement ?".
					</li>
					<li>
						C'est une vidéo publié en réponse à la question d'Hatsune Miku où Kaito répondait "Oui? Je mangeais une glace." que la glace est devenue sont objet préférer (d'après les fans).
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>Denshi no Umi de Utau de Hinata</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>free word mind game de Iwashi-P</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
				<div id="video">
					<p>Yami no Ou (Le Seigneur des Ténèbres) de akunoP</p>
					<?php echo("<video controls width=\"600\" poster=\"".$chemin."images".$nom.".jpg\" preload=\"metadata\">
						<source src=\"".$chemin."videos".$nom.".mp4\">
						<source src=\"".$chemin."videos".$nom.".webm\">
						Votre navigateur ne supporte pas la balise vidéo.
					</video>"); ?>
					<h5>image de tsiih_chan</h5>
				</div>
			</div>
			
			<?php include("$chemin"."pub-2.php") ?>
			
		</div>
		
		<?php include("$chemin"."menu.php") ?>
		
		<?php include("$chemin"."footer.php") ?>
	
</html>