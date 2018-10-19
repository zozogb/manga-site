<?php $chemin = "../"; $nom = "/Sukone_Tei"; ?>

<?php include("$chemin"."head.php") ?>
	
	<body>
		
		<div id="conteneur">
			
			<?php include("$chemin"."pub-1.php") ?>
			
			<div id="article">
				<div class="image-perso right">
				<?php echo("<img src=\"".$chemin."images".$nom.".png\" alt=\"Sukone Tei\">"); ?>
				<p class="clear">fait par Uramiti</p>
				</div>
				<h1>Sukone Tei</h1>
				<p>
					<span class="important">Les UTAU sont beaucoup moins développer et connue que les VOCALOID</span><br>
					Sukone Tei a été développé pour être un faut VOCALOID (du même type que Kasane Teto). 
					Elle a réussi à faire croire à de nombreux personnes qu'elle était une vrais VOCALOID, ce qui a finalement conduit a la création de sa banque vocale. 
					Tei est devloper par vip@2ch et est sortie le 21 juin 2010; sa voix vient de Futaba Kako.
				</p>
				<p>
					Son nom signifie "son propre/sain".
				</p>
				<h2>Apparence</h2>
				<p>
					C'est Uramiti qui a créé le design original mais il a transféré le droit d’auteur à Shouyu le 01 Avril 2011. Tei a 19 ans et mesure 1m71 pour 50 kg. 
					Elle est décrite comme étant une Yandere aux très longs cheveux argent et aux yeux rouge sang. 
					Ses vêtements sont noir et rouge et ressemble aux tenues des VOCALOID de la série CV (Character Vocal Series) misse a par sa jupe rouge. Elle porte aussi un casque noir et bleu.
				</p>
				<h2>Réputation</h2>
				<p>
					Son coté Yandere et sa ressemblance avec les vrais VOCALOID font que des personne l'adore et que d'autre la déteste.
				</p>
				<h2>Anecdotes</h2>
				<ul>
					<li>
						Son coté Yandere est tellement importent qu'un design alternatif (quand elle est en mode Yandere) a était crée (voir dans la <?php echo("<a href=\"".$chemin."galerie.php\">galerie</a>"); ?>)
					</li>
					<li>
						Yandere: quelqu'un qui semble être aimante, mais peut être très violent pour une raison quelconque.<br>
						Dans le cas de Tei, elle sera violente si quelqu'un touche a kagamine Len (dont elle est amoureuse).
					</li>
					<li>
						La legende des fans veut que sa colère conduit au déploiement (Japan Self-Defense Forces)
					</li>
					<li>
						Elle est une parodie de la façon dont la plupart des UTAUloid sont faits.
					</li>
					<li>
						Dans son design alternatif ses yeux on le sharingan en reference au manga Naruto
					</li>
				</ul>
				<h2>Musiques et Videos</h2>
				<div id="musique">
					<div class="musique">
						<p>Psychotic Love (originale chanter par kagamine Len) de Lelele-P</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-1.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
					<div class="musique">
						<p>Sweetheart Desire de U・N・Owen (musique) et zeg (parole)</p>
						<audio controls preload="metadata">
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.mp3\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.aac\">"); ?>
							<?php echo("<source src=\"".$chemin."audio".$nom."-2.ogg\">"); ?>
							Votre navigateur ne supporte pas la balise audio.
						</audio>
					</div>
				</div>
				<div id="video">
					<p>Declare war on all VOC@LOID de Pandolist-P</p> 
					<?php echo("<video controls width=\"600\" poster=\"".$chemin."images".$nom.".jpg\" preload=\"metadata\">
						<source src=\"".$chemin."videos".$nom.".mp4\">
						<source src=\"".$chemin."videos".$nom.".webm\">
						Votre navigateur ne supporte pas la balise vidéo.
					</video>"); ?>
					<h5>image de uramiti</h5>
				</div>
			</div>
			
			<?php include("$chemin"."pub-2.php") ?>
			
		</div>
		
		<?php include("$chemin"."menu.php") ?>
		
		<?php include("$chemin"."footer.php") ?>
	
</html>