<?php $chemin = "../"; $nom = "/Hatsune_Miku"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Hatsune Miku V2\">"); ?>
				<p class="clear">fait par KEI</p>
				</div>
				<!-- La reine de vocaloid -->
				<h1>Hatsune Miku</h1>
				<p>
					Hatsune Miku ( 初音ミク ) est la 3ème VOCALOID Japonaise. Elle est considérée comme la VOCALOID le plus populaire et le premier à devenir une idole pop. 
					Elle a "01" (code CV01) tatouer sur son bras gauche; car c'est le premier VOCALOID développer et distribuer par 
					<a href="http://www.crypton.co.jp/mp/pages/prod/vocaloid/index.jsp" target="_blank">Crypton Future Media Inc.</a>, et la premier de la série CV (Character Vocal Series). 
				</p>
				<p>
					Elle a était commercialisée le 31 août 2007 pour le logiciel VOCALOID 2. La voix de Miku est synthétisée à partir de celle de l'actrice et seiyū japonaise Saki Fujita.<br>
					Hatsune Miku a eu une mise à jour sur VOCALOID 3 puis VOCALOID 4, elle possède aussi une banque vocale anglaise et a aussi eu une version Append (plusieurs styles de voix) en avril 2010.<br>
					En japonais, "Hatsu" ( 初 ) signifie premier, "Ne" ( 音 ) signifie son et "Miku" ( ミク ) signifie futur ce que donne "Premier son du futur" en français.
				</p>
				<h2>Apparence</h2>
				<p>
					Lorsque Kei a créé l'apparence de Miku il a demandé un schéma de couleur bleu-vert comme les synthétiseurs YAMAHA et a la dessiner comme un androïde, 
					CRYPTON lui a donné des concepts de Miku mais a aussi dit qu’il n’était pas facile de définir ce qu'est un VOCALOID pour eux.<br>
					A l'origine Miku devait avoir une coiffure en queue de cheval mais Kei pensé que des couettes longues étaient plus appropriées.<br>
					La jupe, les bas noir et ballerines à semelles bleues (et non des bottes) de Miku sont basé sur les couleurs du programme de synthétiseur de plus, 
					une partie de son design est basé sur certains des modèles de clavier de YAMAHA (DX-100 et le DX-7). 
					Les minces carrés autour de ses couettes sont des rubans futuristes spéciaux qui flottent en place.
				</p>
				<p>
					Après un mème internet impliquant Hachune Miku, Miku a été associé à un oignon de printemps (souvent confondu avec un poireau en raison de l'apparence similaire).
				</p>
				<h2>Réputation</h2>
				<p>
					Miku est en effet la première VOCALOID à faire le buzz sur Internet, notamment sur NicoNico (un site de partage vidéo japonaise).
					Ses chansons ont été visionnées des dizaines de millions de fois. Et elle est très vite devenue célèbre auprès de tous les publics. Miku surfe sur la vague du succès depuis lors.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Miku est souvent confondu avec la première VOCALOID alors qu'elle est la première a été développer et distribuer par 
						<a href="http://www.crypton.co.jp/mp/pages/prod/vocaloid/index.jsp" target="_blank">Crypton Future Media Inc.</a>.
					</li>
					<li>
						En 2010, Miku a remporté le titre de "Diva Virtuel" et est devenu une pop star.
					</li>
					<li>
						Miku est pas non plus la première VOCALOID2 d'avoir un avatar; le premier était Sweet Ann. Cependant, Miku était le premier à avoir un profil qui a élargi le concept d'un avatar.
					</li>
					<li>
						Miku est aparue dans une pub pour la Toyota Corolla.
					</li>
					<li>
						Miku Hatsune a fait la 1re partie de la tournée internationale de Lady Gaga.
					</li>
					<li>
						Comme Megurine Luka, Miku a aussi sa petite mascotte : Hachune Miku.
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>The Disappearance of Hatsune Miku de cosMo</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>Deep Sea Girl de Yuuyu-P</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
				<div id="video">
					<p>World is Mine de ryo（supercell） pandent le concert "Miku no Hi Kanshasai 39's Giving Day"</p>
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