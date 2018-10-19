			<section>
				<article class="centre">
					<h1>Formulaire d'ajout ... <span class="important">(Alpha !)</span></h1>
					<?= form_open('verification'); ?>
					<div>
						<?= form_label("Type du contenu:", "type"); ?>
						<?= form_input(['name' => "type", 'id' => "type", 'value' => set_value('type')]); ?>
						<?= form_error('type'); ?>
					</div>
					<div>
						<?= form_label("Nom de la page:", "name"); ?>
						<?= form_input(['name' => "name", 'id' => "name", 'value' => set_value('name')]); ?>
						<?= form_error('name'); ?>
					</div>
					<div>
						 <?= form_submit("send", "Envoyer"); ?>
					</div>
					<?= form_close() ?>
				</article>
			</section>