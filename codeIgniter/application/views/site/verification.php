			<section>
				<article class="centre">
					<?php
						$verif=0;
						if($type=="anime"){
							$fichier = fopen("application/controllers/anime.php", "r+") or die("<p>Impossible d'éditer le fichier de contréle!</p>");
							$verif=1;
						}
						else if($type=="manga"){
							$fichier = fopen("application/controllers/manga.php", "r+") or die("<p>Impossible d'éditer le fichier de contréle!</p>");
							$verif=1;
						}
						else{
							echo('<p>Merci de choisir un type de contenu valide.</p>');
						}
						
						if($verif==1){
							fseek($fichier, -1, SEEK_END);
							$texte = '	public function '.$name.'() {
		$this->output->enable_profiler(true);
		$data["title"] = "Voca-site";
		$this->load->view(\'common/header\', $data);
		$data["npub"] = "1";
		$this->load->view(\'common/pub\', $data);
		$this->load->view(\''.$type.'/'.$name.'\', $data);
		$data["npub"] = "2";
		$this->load->view(\'common/pub\', $data);
		$this->load->view(\'common/footer\', $data);
	}
}';
							//fwrite($fichier, $texte); Eviton de tout foutre en l'air pour le moment...
							fclose($fichier);
						}
						
						
						
						
						
						
						
						
					?>
				</article>
			</section>