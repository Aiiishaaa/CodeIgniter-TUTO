<p class="alert alert-danger" role="alert">
  Êtes-vous sûr(e) de vouloir supprimer cet article ?
</p>
<?= form_open(uri_string(), ['class' => 'form-horizontal']); ?>
<div class="form-group">
  <p style="text-align: center">
    <?= form_submit('confirm', "Supprimer", ['class' => "btn btn-default"]); ?>
    &nbsp;&nbsp;&nbsp;
    <?= anchor(['blog', $this->article->alias . '_' . $this->article->id], "Annuler", ['id' => 'cancel_delete', 'class' => 'btn btn-default']) ?>
  </p>
</div>
<?= form_close() ?>
