<?php $chemin = "../"; $nom = "/Namine_Ritsu"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Namine Ritsu\">"); ?>
				<p class="clear">fait par Caffein</p>
				</div>
				<h1>Namine Ritsu</h1>
				<p>
					<span class="important">Les UTAU sont beaucoup moins développer et connue que les VOCALOID</span><br>
					Namine Ritsu est un UTAUloid développé par vip@2ch et sortie le 12 octobre 2012. Sa voix vient de Canon (Pseudo de Mamiko Noto).
				</p>
				<p>
					Son nom est composé de deux mots: "Nami"( 波 ) qui signifie "vague" et "ne"( 音 ) qui signifie "son" et son prénom "Ritsu"( リツ ) signifie "rythme". 
				</p>
				<h2>Apparence</h2>
				<p>
					Officiellement Ritsu a 6 ans et mesure 1m56 pour 25 Tonnes. Pour donner un âge et un poids plus réaliste à Ritsu, les fans ont multiplié son âge et son poids officiels par 3 (car c'est le 3e UTAU de vip@2ch). 
					Ce qui donne 18 ans et 75 kg. Ritsu est un garçon travesti. Il a de longs cheveux roux qui lui arrivent en bas du dos et des yeux verts et violets. Son style vestimentaire est le "gothic lolita" : 
					un chapeau avec un voile noir sur le côté gauche de sa tête, un crop-top noir au décolleté dont les motifs rappelle les touches d'un piano et un ras-de-cou, une jupe volumineuse qui arrive aux genoux et 
					de longues bottes violettes à petits talons. Zenigame ou Caffein (Zenigame est le pseudo de Caffein en tant que membre de l'équipe Ritsu).<!-- Ils ont abuser sur ce coup -->
				</p>
				<h2>Réputation</h2>
				<p>
					Namine Ritsu a une qualité équivalente à VOCALOID3 quand il est bien utilisé et a une reputation neutre.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Son poids officiel de 25 Tonnes est dû aux missiles implantés dans sa poitrine. <!-- 25 Tonnes pour deux missile ? Fat Man pesait 4 Tonnes ... -->
					</li>
					<li>
						Ritsu est mysanthrope, il déteste le Japon mais adore la Corée .
					</li>
				</ul>
				<h2>Musiques</h2>
				<div id="musique">
					<div class="musique">
						<p>FIRST de niki</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>Eternal Force Blizzard de PandolistP</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
			</div>
			
			<?php include("$chemin"."pub-2.php") ?>
			
		</div>
		
		<?php include("$chemin"."menu.php") ?>
		
		<?php include("$chemin"."footer.php") ?>
	
</html>