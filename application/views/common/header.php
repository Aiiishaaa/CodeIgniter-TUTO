<!DOCTYPE html>
<html>
<head>
  <head>
   
    <title><?= $title ?></title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![ endif ] -->
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                  data-target="#main_nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="site/index.html">Aicha HAMIDA</a>
        </div>

        
        <div class="collapse navbar-collapse" id="main_nav">
				<ul class="nav navbar-nav">
					<li><?= anchor('index', "Accueil"); ?></li>
					<li><?= anchor('apropos', "À propos"); ?></li>
					<?php if ($this->auth_user->is_connected) : ?>
						<li>
							<?= anchor('panneau_de_controle/index', "Panneau de contrôle"); ?>
						</li>
						<li><?= anchor('blog', "Blog"); ?></li>
					<?php endif; ?>
					<li><?= anchor('contact', "Contact"); ?></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if ($this->auth_user->is_connected) : ?>
						<li><?= anchor('deconnexion', "Déconnexion"); ?></li>
					<?php else : ?>
						<li><?= anchor('connexion', "Connexion"); ?></li>
					<?php endif; ?>
				</ul>
				<?php if ($this->auth_user->is_connected) : ?>
					<p class="navbar-text navbar-right">|</p>
					<p class="navbar-text navbar-right">Bienvenue <strong><?= $this->auth_user->username; ?></strong></p>
				<?php endif; ?>
			</div>
		</div>
	</nav>