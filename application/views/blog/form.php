<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?= heading($title); ?>
      <hr />
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <?= form_open(uri_string(), ['class' => 'form-horizontal']); ?>
      <div class="form-group">
        <?= form_label("Titre&nbsp;:", "title", ['class' => "col-md-2 control-label"]) ?>
        <div class="col-md-10 <?= empty(form_error('title')) ? "" : "has-error" ?>">
          <?= form_input(['name' => "title", 'id' => "title", 'class' => 'form-control'], set_value('title', $this->article->title)) ?>
          <span class="help-block"><?= form_error('title'); ?></span>
        </div>
      </div>
      <div class="form-group">
        <?= form_label("Texte&nbsp;:", "content", ['class' => "col-md-2 control-label"]) ?>
        <div class="col-md-10 <?= empty(form_error('content')) ? "" : "has-error" ?>">
          <?= form_textarea(['name' => "content", 'id' => "content", 'class' => 'form-control'], set_value('content', $this->article->content)) ?>
          <span class="help-block"><?= form_error('content'); ?></span>
        </div>
      </div>
      <div class="form-group">
        <?= form_label("Statut&nbsp;:", "status", ['class' => "col-md-2 control-label"]) ?>
        <div class="col-md-10 <?= empty(form_error('status')) ? "" : "has-error" ?>">
          <?= form_dropdown("status", $this->article_status->text, set_value('status', $this->article->status), ['id' => "content", 'class' => 'form-control']) ?>
          <span class="help-block"><?= form_error('status'); ?></span>
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-offset-2 col-md-10">
          <?= form_submit("send", "Envoyer", ['class' => "btn btn-default"]); ?>
        </div>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>
