			<section>
				<article class="centre">
					<h1>Formulaire d'ajout ... <span class="important">(Alpha !)</span></h1>
					<?= form_open_multipart('verification'); ?>
					<div>
						<?= form_label("Type du contenu:", "type"); ?>
						<?= form_dropdown('type', array('Vocaloid'=>'Vocaloid','UTAU'=>'UTAU')); ?>
						<?= form_error('type'); ?>
					</div>
					<div>
						<?= form_label("Nom de la page:", "name"); ?>
						<?= form_input(['name' => "name", 'id' => "name", 'value' => set_value('name')]); ?>
						<?= form_error('name'); ?>
					</div>
					<div>
						<?= form_label("Image de présentation:", "image"); ?>
						<?= form_upload(['name' => "image"]); ?>
					</div>
					<div>
						<?= form_submit("send", "Envoyer"); ?>
					</div>
					<?= form_close() ?>
				</article>
			</section>