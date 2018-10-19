<?php $chemin = "../"; $nom = "/Kagamine_Rin_et_Len"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Rin et Len V2\">"); ?>
				<p class="clear">fait par KEI</p>
				</div>
				<h1>Kagamine Rin & Len</h1>
				<p>
					Kagamine Rin & Len sont deux VOCALOID développés et commercialisés par <a href="http://www.crypton.co.jp/mp/pages/prod/vocaloid/index.jsp" target="_blank">Crypton Future Media Inc.</a>. 
					Ils ont été initialement disponibles sur VOCALOID 2, le 27 Décembre 2007. La voix de Rin et Len est synthétisée à partir de celle de la chanteuse et seiyū japonaise Asami Shimoda. 
					Comme d'autre VOCALOID de la série CV (Character Vocal Series), Rin et Len ont un numéro tatoué sur son bras gauche, en l'occurrence "02" (code CV02).
				</p>
				<p>
					De nombreuse plaintes et problèmes avec les voix d'origine on pousser leur développeurs a sortir une mise à jour corrective appeler "Act2". 
					Les Kagamine ont aussi une version Append (plusieurs styles de voix) et une banque vocale anglaise.<br>
					Et le 29 octobre 2015, Rin et Len on eu une mise a jour sur VOCALOID 4.
				</p>
				<p>
					Leurs prénoms proviennent d'un jeu de mot avec les mots anglais "right/left" : Rin vient de "right" (droite en anglais) et Len vient de "left" (gauche). 
					Le nom "Kagamine", est composé des caractères "Kagami" ( 鏡 , miroir) et "Ne" ( 音 , son). Leur nom et prénom signifie "La Droite et la Gauche du miroir du son".  
				</p>
				<h2>Apparence</h2>
				<p>
					CRYPTON à donner à Kei une idée de l’âge approximatif de Rin et Len, ainsi que l'idée qu'ils étaient des "images miroirs", Kei n'a reçu aucune autre direction, 
					comme il avait déjà fait ses preuves avec le premier design de la série CV (Character Vocal Series).<br>
					Les bottes montantes (jusqu’aux genoux) des Kagamine ont été inspirées de haut-parleurs et portent, sur le côté, une ceinture à motifs triangulaires comme d'autre VOCALOID 
					(comme Miku Hatsune, Luka Megurine et Kasane Teto).<br>
					Leurs designs sont très semblables pour rappeler leur concept "Miroir".
				</p>
				<h3>Rin</h3>
				<p>
					Rin a un visage semblable à celui de Len (en plus rond), elle a des cheveux blond allant jusqu'au-dessus des épaules, son casque est surmonté d'un nœud de tissu blanc. 
					Deux barrettes blanches maintiennent sa frange. Elle porte une chemise blanche sans manches orné d'un grand nœud jaune et un mini-short noir, ainsi que des manches détachables noires. 
					Elle a 14 ans et mesure 1m52 pour 43 kg.
				</p>
				<h3>Len</h3>
				<p>
					Len est un garçon assez efféminé, son visage ressemble à celui de Rin (en moins rond). Comme sa sœur, il a de grands yeux bleus et de longs cheveux blonds (quand ils sont détachés) 
					coiffés en une petite queue de cheval et a un casque sur la tête. Ses vêtements ressembles a ces de Rin : une chemise blanche à manches courtes avec une cravate jaune et un short noir assez long, 
					ainsi que des manches détachables noires. Il a 14 ans et mesure 1m56 pour 47 kg.
				</p>
				<h2>Réputation</h2>
				<p>
					Les nombreuse plaintes et problèmes avec les voixs d'origine on frener leur populariter. Et meme apprer avoir gagné le deuxième plus grand nombre de chansons, 
					ils ne sont pas aussi populaires que Hatsune Miku. De plus Rin et plus populere que Len.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Quand mise à jour corrective appeler "Act2" est sortie, Kei en a profité pour corriger le design des Kagamine.
					</li>
					<li>
						Il a fallu 25 heures (4 heures par jour) pour enregistrer tous les banques vocales de la version Append.
					</li>
					<li>
						Rin et Len sont les premier VOCALOID à avoir une mise à jour.
					</li>
					<li>
						La relation entre Rin et Len est flou, bien que tout le monde les considère comme frère et sœur, leur relation n'été pas définit quand ils ont été commercialiser. 
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>Butterfly of the Right Shoulder de Nori-P (musique) et Yura Mizuno (parole)</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>Roshin Yuukai de iroha (musique) et kuma (parole)</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
				<div id="video">
					<p>True Love Restraint de Wakacha</p>
					<?php echo("<video controls width=\"600\" poster=\"".$chemin."images".$nom.".jpg\" preload=\"metadata\">
						<source src=\"".$chemin."videos".$nom.".mp4\">
						<source src=\"".$chemin."videos".$nom.".webm\">
						Votre navigateur ne supporte pas la balise vidéo.
					</video>"); ?>
					<h5>image de Bibi</h5>
				</div>
			</div>
			
			<?php include("$chemin"."pub-2.php") ?>
			
		</div>
		
		<?php include("$chemin"."menu.php") ?>
		
		<?php include("$chemin"."footer.php") ?>
	
</html>
