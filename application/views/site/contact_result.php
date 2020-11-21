<div class="container">
	<div class="row">
		<?= heading($title); ?>
	</div>
	<div class="row alert alert-success" role="alert">
		Merci de nous avoir envoyer ce mail. Nous y répondrons dans les meilleurs délais!
	</div>
	<div class="row text-center">
		<?= anchor("index", "Fermer", ['class' => "btn btn-primary"]); ?>
	</div>
</div>