<?php $chemin = "../"; $nom = "/Macne_Nana"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Macne Nana\">"); ?>
				<p class="clear">fait par Gomoku Akatsuki</p>
				</div>
				<h1>Macne Nana</h1>
				<p>
					Macne Nana est une VOCALOID spéciale pour Mac OS mais grâce à sa licence libre elle peut fonctionne sur d'autre logiciel comme UTAU ou Reason. 
					Elle est développée et distribuée par Bplats, Inc. et elle a été créé en collaboration avec Macne Nana Project. Elle a été commercialisée en Janvier 2014 sur VOCALOID 3. 
					C'est l'actrice Haruna Ikezawa qui lui a donné sa voix.
				</p>
				<p>
					Macne est la combinaison des mots "Mac" qui fait référence à Macintosh et "Ne" qui veut dire son on peut donc le traduire par "Son de/du Macintosh".
				</p>
				<h2>Apparence</h2>
				<p>
					La conception de la série Macne en général, incorporer divers aspects de l'ordinateur Mac et de son apparence physique (ports USB, disques durs, iPod.) et Nana a été designer pour évoquer une pomme.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Nana a été conçue pour être la première voix sur Mac OS.
					</li>
					<li>
						Macne Nana est la 1ère des Macne Series (Macne Coco, Macne Petit, Macne Papa et bien sûr Macne Nana).
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>Ryuu no Se ni Notte de Rin Ginsuke</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>"dieu solitaire" (reprise de さみしいかみさま de DAOKO) de Ariotsu (parole)</p>
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