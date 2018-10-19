<?php $chemin = "../"; $nom = "/Megurine_Luka"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Megurine Luka\">"); ?>
				<p class="clear">fait par KEI</p>
				</div>
				<h1>Megurine Luka</h1>
				<p>
					Megurine Luka est la troisième VOCALOID déveloper et distribuer par <a href="http://www.crypton.co.jp/mp/pages/prod/vocaloid/index.jsp" target="_blank">
					Crypton Future Media Inc.</a>, et la première VOCALOID Bilingue. Elle a "01" (code CV01) tatouer sur son bras gauche car elle est la troisième VOCALOID de la série CV (Character Vocal Series).
					Elle est sortie le 30 janvier 2009 sur VOCALOID 2 et a ressue une mise à jour, le 19 Mars 2015, sur VOCALOID 4.<br>
					Son nom combine Meguri ( 巡 , circuler ou autour) et Ne ( 音 , son), tandis que le nom Luka invoque les homonymes japonais "nagare" ( 流 , écoulement) et "ka" ( 歌 , chanson ou 香 , parfum),
					on peut traduire par "les chansons qui circulent dans le monde comme s'étend le parfum".
				</p>
				<h2>Apparence</h2>
				<p>
					C'est Kei qui a crée le design de Luka, en raison de son logiciel bilingue sa conception a été faite pour être asymétrique. 
					Contrairement aux VOCALOID précédents de la série CV, son costume ne repose pas sur un uniforme scolaire. Elle porte un haut noir sans manches qui s'arrête au dessus du nombril, 
					une longue jupe noire fendue sur le côté qui est maintenue par une ceinture noire à motifs triangulaires comme d'autre VOCALOID (comme Miku Hatsune, Kagamine Rin/Len et Kasane Teto).
					Elle porte également un casque-micro qui lui sere de serre-tête. Elle a aussi des bottes jaunes à lacets noirs et des bas noir. Sur son bras droit, 
					elle porte une manche détachable noire avec motif inspirer des sytetyseur Yamaha VL1 VL-1. Luka a de longs cheveux roses descendant jusqu'au milieu des cuisses et des yeux bleu.
				</p>
				<h2>Réputation</h2>
				<p>
					Sa qualité en tant que VOCALOID2 est plutôt moyenne et sa voix a beaucoup de soucis à percer dans les registres supérieurs, 
					ce qui a freiné son utilisation et donc sa popularité. Néanmoins beaucoup de fans l’apprécient pour sa voix mature, charmeuse et métallique.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Comme Hatsune Miku, Luka a aussi sa petite mascotte : Tako Luka, une pieuvre rose qui porte le casque de Luka.
					</li>
					<li>
						En 2014, Luka était la 7ème Vocaloid le plus populaire.
					</li>
					<li>
						Malgré la banque vocale anglaise, Luka n'a pas été destiné à un large public mondial, mais principalement aux createurs japonais.
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>Just Be Friends de Dixie Flatline</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>Black Gold de otetsu</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
				<div id="video">
					<p> Double Lariat de Agoaniki-P</p>
					<?php echo("<video controls width=\"600\" poster=\"".$chemin."images/39's_Giving_Day.jpg\" preload=\"metadata\">
						<source src=\"".$chemin."videos".$nom.".mp4\">
						<source src=\"".$chemin."videos".$nom.".webm\">
						Votre navigateur ne supporte pas la balise vidéo.
					</video>"); ?>
					<h5>affiche du "Miku no Hi Kanshasai 39's Giving Day"</h5>
				</div>
			</div>
			
			<?php include("$chemin"."pub-2.php") ?>
			
		</div>
		
		<?php include("$chemin"."menu.php") ?>
		
		<?php include("$chemin"."footer.php") ?>
	
</html>