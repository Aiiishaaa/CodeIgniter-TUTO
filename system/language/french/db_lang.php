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

$lang['db_invalid_connection_str'] = 'Impossible de déterminer les paramètres de base de données pour les instructions de connexion fournies.';
$lang['db_unable_to_connect'] = 'Impossible de se connecter au serveur de base de données en utilisant les instructions de connexions fournies.';
$lang['db_unable_to_select'] = 'Impossible de sélectionner la base de données spécifiée : %s';
$lang['db_unable_to_create'] = 'Impossible de créer la base de données spécifiée : %s';
$lang['db_invalid_query'] = 'La requête soumise est invalide.';
$lang['db_must_set_table'] = 'Vous devez paramétrer la base de données à utiliser pour votre requête.';
$lang['db_must_use_set'] = 'Vous devez utiliser la méthode "set" pour mettre à jour une entrée.';
$lang['db_must_use_index'] = 'Vous devez spécifier un index de correspondance pour les mise à jour par lot.';
$lang['db_batch_missing_index'] = 'Index manquant pour une ligne ou plus qui ont été soumises dans la mise à jour par lot.';
$lang['db_must_use_where'] = 'Les mises à jour ne sont pas autorisées si elles ne contiennent pas une composante "where".';
$lang['db_del_must_use_where'] = 'Les suppressions ne sont pas autorisées si elles ne contiennent pas une composante "where" ou "like".';
$lang['db_field_param_missing'] = 'Récupérer les champs nécessite que le nom de la table soit fourni en paramètre.';
$lang['db_unsupported_function'] = 'Cette fonction n\'est pas disponible pour la base de données que vous utilisez.';
$lang['db_transaction_failure'] = 'La transaction a échouée. Un "Rollback" a été déclenché.';
$lang['db_unable_to_drop'] = 'Impossible de supprimer la base de données indiquée.';
$lang['db_unsupported_feature'] = 'Cette possibilité n\'est pas disponible pour la base de données que vous utilisez.';
$lang['db_unsupported_compression'] = 'Le format de compression choisi n\'est pas supporté par votre serveur.';
$lang['db_filepath_error'] = 'Impossible d\'écrire des données au chemin de fichier que vous avez indiqué.';
$lang['db_invalid_cache_path'] = 'Le dossier de cache que vous avez indiqué est non valide, ou non accessible en écriture.';
$lang['db_table_name_required'] = 'Un nom de table est requis pour permettre cette opération.';
$lang['db_column_name_required'] = 'Un nom de colonne est requis pour permettre cette opération.';
$lang['db_column_definition_required'] = 'Une définition de colonne est requise pour permettre cette opération.';
$lang['db_unable_to_set_charset'] = 'Impossible de déterminer l\'encodage utilisé, il vous faut le définir : %s';
$lang['db_error_heading'] = 'Une erreur de base de données a été rencontrée.';
