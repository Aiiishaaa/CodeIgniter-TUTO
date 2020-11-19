<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2017, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team edited by Nicolas Béliard (beliard.net) for French users
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (https://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2017, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	https://codeigniter.com
 * @since	Version 1.0.0
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

$lang['email_must_be_array'] = 'La validation de l\'email doit être passée dans un tableau (array).';
$lang['email_invalid_address'] = 'L\'adresse mail fournie est invalide : %s';
$lang['email_attachment_missing'] = 'Impossible d\'atteindre le fichier attaché suivant : %s';
$lang['email_attachment_unreadable'] = 'Impossible d\'ouvrir le fichier attaché suivant : %s';
$lang['email_no_from'] = 'Il est impossible d\'envoyer un mail sans en-tête de destinataire ("From").';
$lang['email_no_recipients'] = 'Vous devez indiquer au moins un destinataire avec : To, Cc, ou Bcc';
$lang['email_send_failure_phpmail'] = 'Impossible d\'envoyer le mail en utilisant PHP mail(). Votre serveur doit certainement ne pas être configuré pour envoyer des mails de cette manière.';
$lang['email_send_failure_sendmail'] = 'Impossible d\'envoyer le mail en utilisant PHP Sendmail. Votre serveur doit certainement ne pas être configuré pour envoyer des mails de cette manière.';
$lang['email_send_failure_smtp'] = 'Impossible d\'envoyer le mail en utilisant PHP SMTP. Votre serveur doit certainement ne pas être configuré pour envoyer des mails de cette manière.';
$lang['email_sent'] = 'Votre message a été envoyé avec succès en utilisant le protocole : %s';
$lang['email_no_socket'] = 'Impossible d\'ouvrir un "socket" jusqu\'à Sendmail. Vérifiez s\'il vous plaît les paramètres.';
$lang['email_no_hostname'] = 'Vous n\'avez pas spécifié un serveur SMTP.';
$lang['email_smtp_error'] = 'L\'erreur SMTP suivante a été rencontrée : %s';
$lang['email_no_smtp_unpw'] = 'Erreur : vous devez paramétrer un nom d\'utilisateur et un mot de passe SMTP.';
$lang['email_failed_smtp_login'] = 'Impossible d\'envoyer la commande AUTH LOGIN. Erreur : %s';
$lang['email_smtp_auth_un'] = 'Impossible de vérifier le nom d\'utilisateur SMTP. Erreur : %s';
$lang['email_smtp_auth_pw'] = 'Impossible de vérifier le mot de passe SMTP. Error: %s';
$lang['email_smtp_data_failure'] = 'Impossible d\'envoyer les données via SMTP : %s';
$lang['email_exit_status'] = 'Code d\'erreur EXIT rencontré : %s';
