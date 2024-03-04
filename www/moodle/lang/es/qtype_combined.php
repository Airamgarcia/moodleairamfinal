<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'qtype_combined', language 'es', version '3.4'.
 *
 * @package     qtype_combined
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['err_invalidquestionidentifier'] = 'El código identificador de su pregunta consta de uno o varios caracteres alfanuméricos.';
$string['err_you_must_provide_third_param'] = 'Debe proporcionar un tercer parámetro para el tipo de pregunta {$a}.';
$string['err_youneedmorechoices'] = 'Debe introducir dos o más opciones.';
$string['incorrectfeedback'] = 'Retroalimentación para cualquier respuesta incorrecta';
$string['pluginname'] = 'Combinada';
$string['pluginname_link'] = 'question/type/combined';
$string['pluginnameadding'] = 'Añadir una pregunta combinada';
$string['pluginnameediting'] = 'Editar una pregunta combinada';
$string['privacy:metadata'] = 'El plugin de la pregunta Combinada no almacena ningún dato personal.';
$string['subqheader'] = '\'{$a->qtype}\' entrada \'{$a->qid}\'';
$string['subqheader_not_in_question_text'] = '\'{$a->qtype}\' entrada \'{$a->qid}\' (no incrustada en el texto de la pregunta).';
$string['validationerror'] = 'Una parte de la respuesta requiere atención: {$a}';
$string['weighting'] = 'Ponderación';
$string['widthspecifier_embed_code'] = '[[{$a->qid}:{$a->qtype}:{width specifier}]] o simplemente [[{$a->qid}:{$a->qtype}]]';
$string['yougot1right'] = '1 de sus respuestas es correcta.';
$string['yougotnright'] = '{$a->num} de sus respuestas son correctas.';
