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

$lang['upload_userfile_not_set'] = 'Impossible de trouver la variable POST nommée "userfile".';
$lang['upload_file_exceeds_limit'] = 'Le fichier téléversé dépasse la taille maximum autorisée de votre fichier de configuration PHP.';
$lang['upload_file_exceeds_form_limit'] = 'Le fichier téléversé dépasse la taille maximum autorisée par le champ de formulaire.';
$lang['upload_file_partial'] = 'Le fichier n\'a été téléversé que partiellement.';
$lang['upload_no_temp_directory'] = 'Le dossier temporaire est manquant/inexistant.';
$lang['upload_unable_to_write_file'] = 'Le fichier n\'a pas pu être écrit sur le disque.';
$lang['upload_stopped_by_extension'] = 'Le téléversement du fichier a été arrêté en raison de son extension.';
$lang['upload_no_file_selected'] = 'Aucun fichier n\'a été choisi pour le téléversement.';
$lang['upload_invalid_filetype'] = 'Le type (extension) du fichier que vous avez choisi ne correspond pas à un type autorisé.';
$lang['upload_invalid_filesize'] = 'Le fichier que vous essayez de téléverser est plus grand que la taille maximale autorisée.';
$lang['upload_invalid_dimensions'] = 'L\'image que vous essayez de téléverser est plus grande que les dimensions maximales autorisées.';
$lang['upload_destination_error'] = 'Un problème a été rencontré alors que le système tentait de déplacer le fichier du dossier temporaire à son emplacement définitif.';
$lang['upload_no_filepath'] = 'Le dossier de destination ne semble pas valide.';
$lang['upload_no_file_types'] = 'Vous n\'avez pas spécifié les types de fichier autorisés.';
$lang['upload_bad_filename'] = 'Le fichier téléversé existe déjà sur le serveur.';
$lang['upload_not_writable'] = 'Le dossier de destination du fichier ne semble pas inscriptible / ouvert à l\'écriture.';
