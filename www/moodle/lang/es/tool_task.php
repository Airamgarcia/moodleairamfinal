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
 * Strings for component 'tool_task', language 'es', version '3.4'.
 *
 * @package     tool_task
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['asap'] = 'Tan pronto como sea posible';
$string['backtoscheduledtasks'] = 'Regresar a trabajos agendados';
$string['blocking'] = 'Bloqueando';
$string['component'] = 'Componente';
$string['corecomponent'] = 'Núcleo';
$string['default'] = 'Por defecto';
$string['disabled'] = 'Deshabilitado';
$string['disabled_help'] = 'Los trabajos agendados deshabilitados no son ejecutados desde cron; sin embargo, todavía podrían ejecutarse manualmente mediante la herramienta CLI de Interfaz por Línea de Comando.';
$string['edittaskschedule'] = 'Editar tarea programada: {$a}';
$string['enablerunnow'] = 'Permitir \'Ejecutar ahora\' (Run now) para tareas programadas';
$string['enablerunnow_desc'] = 'Permitirle a administradores el correr un solo trabajo agendado inmediatamente, en lugar de esperar para que corra como está agendado. El trabajo corre en el servidor web, por lo que algunos sitios podrían desear deshabilitar esta característica para evitar problemas potenciales de desempeño.';
$string['faildelay'] = 'Retardo del fallo';
$string['lastruntime'] = 'Último arranque';
$string['nextruntime'] = 'Siguiente arranque';
$string['plugindisabled'] = 'Plugin deshabilitado';
$string['pluginname'] = 'Configuración de la tarea programada';
$string['privacy:metadata'] = 'El plugin de Configuración de trabajo agendado no almacena ningún dato personal.';
$string['resettasktodefaults'] = 'Restablecer la configuración de la tarea programada a por defecto';
$string['resettasktodefaults_help'] = 'Esto descartará cualquier cambio local y revertirá la agenda para este trabajo a sus configuraciones originales';
$string['runnow'] = 'Ejecutar ahora';
$string['runnow_confirm'] = '¿Está seguro de querer correr este trabajo agendado ‘{$a}’ ahora? El trabajo agendado correrá en el servidor web y puede tomar bastante tiempo para completarse.';
$string['scheduledtaskchangesdisabled'] = 'Se han impedido modificaciones a la lista de trabajos (\'\'tasks\'\') agendados en la configuración de Moodle';
$string['scheduledtasks'] = 'Tareas programadas';
$string['taskdisabled'] = 'Tareas deshabilitadas';
$string['taskscheduleday'] = 'Día';
$string['taskscheduledayofweek'] = 'Día de la semana';
$string['taskschedulehour'] = 'Hora';
$string['taskscheduleminute'] = 'Minuto';
$string['taskschedulemonth'] = 'Mes';
