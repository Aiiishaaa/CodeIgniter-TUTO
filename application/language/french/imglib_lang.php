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

$lang['imglib_source_image_required'] = 'Vous devez indiquer l\'image source à utiliser dans les préférences.';
$lang['imglib_gd_required'] = 'La librairie d\'image GD est requise pour cette fonction.';
$lang['imglib_gd_required_for_props'] = 'Votre serveur doit supporter la librairie d\'image GD pour pouvoir déterminer les propriétés de l\'image.';
$lang['imglib_unsupported_imagecreate'] = 'Votre serveur doit supporter les fonctions de la librairie d\'image GD pour traiter ce type d\'image.';
$lang['imglib_gif_not_supported'] = 'GIF n\'est pas un format supporté pour des raisons de lience. Vous devriez utiliser des images JPG ou PNG à la place.';
$lang['imglib_jpg_not_supported'] = 'JPG n\'est pas supporté.';
$lang['imglib_png_not_supported'] = 'PNG n\'est pas supporté.';
$lang['imglib_jpg_or_png_required'] = 'Le protocole de redimensionnement choisi dans vos préférences ne fonctionne qu\'avec des images de type JPEG ou PNG.';
$lang['imglib_copy_error'] = 'Une erreur a été rencontrée lors du remplacement du fichier. Merci de vérifier que votre dossier a bien des droits en écriture.';
$lang['imglib_rotate_unsupported'] = 'La rotation d\'image ne semble pas supportée par votre serveur.';
$lang['imglib_libpath_invalid'] = 'Le chemin vers la bibliothèque ne semble pas correct. Merci d\'indiquer le chemin correct dans vos préférences.';
$lang['imglib_image_process_failed'] = 'Le traitement de l\'image a échoué. Merci de vérifier que votre serveur prend en charge le protocole choisi et que le chemin vers la bibliothèque est correct.';
$lang['imglib_rotation_angle_required'] = 'Un angle de rotation est requis pour pouvoir effectuer une rotation de l\'image.';
$lang['imglib_invalid_path'] = 'Le chemin vers l\'image n\'est pas correct.';
$lang['imglib_invalid_image'] = 'L\'image fournie n\'est pas valide.';
$lang['imglib_copy_failed'] = 'La procédure de copie de l\'image n\'a pas fonctionné.';
$lang['imglib_missing_font'] = 'Impossible de trouver la police de caractères à utiliser.';
$lang['imglib_save_failed'] = 'Impossible de sauvegarder l\'image. Assurez-vous que le fichier image ou que le dossier sont bien inscriptibles avec des droits en écriture.';
