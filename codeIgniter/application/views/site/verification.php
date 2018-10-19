			<section>
				<article class="centre">
					<?php
						if($type=="Vocaloid"){
							$fichier = fopen("application/controllers/Vocaloid.php", "r+") or die("Unable to open file!");
						}
						else if($type=="UTAU"){
							$fichier = fopen("application/controllers/UTAU.php", "r+") or die("Unable to open file!");
						}
						
						
						fseek($fichier, -1, SEEK_END);
						$texte = '	public function '.$name.'() {
		$this->output->enable_profiler(true);
		$data["title"] = "Voca-site";
		$this->load->view(\'common/header\', $data);
		$data["npub"] = "1";
		$this->load->view(\'common/pub\', $data);
		$this->load->view(\'UTAU/'.$name.'\', $data);
		$data["npub"] = "2";
		$this->load->view(\'common/pub\', $data);
		$this->load->view(\'common/footer\', $data);
	}
}';
						fwrite($fichier, $texte);
						fclose($fichier);
					?>
				</article>
			</section>