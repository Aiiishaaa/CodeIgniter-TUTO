<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config = array(
	'site/contact' => array(
		array(
			'field' => 'name',
			'label' => 'Nom',
			'rules' => 'required'
		),
		array(
			'field' => 'email',
			'label' => 'E-mail',
			'rules' => array('valid_email', 'required')
		),
		array(
			'field' => 'emailconf',
			'label' => 'Confirmation e-mail',
			'rules' => array('valid_email', 'required', 'matches[email]')
		),
		array(
			'field' => 'title',
			'label' => 'Titre',
			'rules' => 'required'
		),
		array(
			'field' => 'message',
			'label' => 'Message',
			'rules' => 'required'
		)
	),

	'site/connexion' => array(
		array(
			'field' => 'username',
			'label' => "Nom d'utilisateur",
			'rules' => 'required'
		),
		array(
			'field' => 'password',
			'label' => 'Mot de passe',
			'rules' => 'required'
		)
	),

	'blog/edition' => array(
		array(
			'field' => 'title',
			'label' => "Titre",
			'rules' => array('required', 'max_length[64]')
		),
		array(
			'field' => 'content',
			'label' => "Contenu",
			'rules' => 'required'
		),
		array(
			'field' => 'status',
			'label' => "Statut",
			'rules' => 'required'
		),
	)

);