<?php $chemin = "../"; $nom = "/Tsukiko_Yami"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Tsukiko Yami\">"); ?>
				<p class="clear">fait par NamieyXcarletLaytis</p>
				</div>
				<h1>Tsukiko Yami</h1>
				<p>
					<span class="important">Les UTAU sont beaucoup moins développer et connue que les VOCALOID</span><br>
					Yami tien sa voix de Chitose Asahina Nami. Elle est sortie le 15 mars 2011 sur UTAU. Elle a 18 ans et messure 1m58 pour 45 kg. Sont prenom signifie "Enfant de lune"
				</p>
				<h2>Apparence</h2>
				<p>
					Yami a etre designé par nyappyxmine, elle a les cheveux noir et les yeux violet foncer. Elle porte une robe noir avec des motif violet et sont nom signifie "sombre", 
					"noir" ou "obscur" on peut donc traduire par "Enfant de la lune noir".
				</p>
				<h2>Musique</h2>
				<div id="musique">
					<div class="musique">
						<p>World's End Dancehall de Asahina Yoko</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
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