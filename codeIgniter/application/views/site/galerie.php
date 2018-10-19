			<section>
				<article>
					<h1>Galerie d'images <span class="important">(Vesion Beta)</span></h1><h5>Générer automatiquement avec toutes les images du site</h5>
					<?php 
					$n = 1 ;
					$dir = 'assets/images/' ; // define le chemin pour acceder au images
					$files = scandir($dir); // crée un tableau avec tout les nom de fichiers + extension du dossier $dir
					echo ("<div class=\"galerie\">");
					foreach($files as $element) // boucle speciale tableau pour treter un par un les fichier
					{
						if ($element != '.' and $element != '..' and $element != 'utile') // n'affiche pas le . .. et le dossier utile
						{
							echo('<div class="test centre">'.img($element, $element, '', 'img-galerie').'<p>'.strtok($element,'.').'</p> </div>');
							if ($n==3) // crée des div de 3 images chaqu'une
							{
								echo ("</div>");
								echo ("<div class=\"galerie\">");
								$n = 1;
							}
							else
							{
								$n ++ ;
							}
						}
					}
					echo ("</div>");
					?>
				</article>
			</section>