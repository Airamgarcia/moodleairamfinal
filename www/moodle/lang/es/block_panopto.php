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
 * Strings for component 'block_panopto', language 'es', version '3.4'.
 *
 * @package     block_panopto
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['application_key'] = 'Clave de aplicación';
$string['back_to_config'] = 'Volver a la configuración';
$string['back_to_course'] = 'Volver al curso';
$string['begin_building_category_structure'] = 'Comenzar a construir la estructura de categorías';
$string['block_global_add_courses'] = 'Añadir cursos de Moodle a Panopto';
$string['block_global_build_category_structure'] = 'Sincronizar todas las categorías de Moodle con Panopto';
$string['block_global_reinitialize_all_imports'] = 'Reiniciar todas las importaciones de carpetas de Panopto';
$string['block_global_unprovision_courses'] = 'Desprovisión de carpetas Panopto de cursos Moodle';
$string['block_global_upgrade_all_folders'] = 'Actualice todas las carpetas e importaciones existentes';
$string['block_panopto_automatic_operation_target_server'] = 'Servidor de destino de funcionamiento automático';
$string['block_panopto_check_server_status'] = 'Comprobar la salud del servidor antes de cargar el bloque';
$string['block_panopto_creator_mapping'] = 'Mapeo del función del creador';
$string['block_panopto_publisher_mapping'] = 'Mapeo de la función del publicador';
$string['block_panopto_publisher_mapping_desc'] = 'Seleccione qué roles de curso se establecen como publicadores en las nuevas carpetas de curso de Panopto.';
$string['block_panopto_publisher_system_role_mapping'] = 'Roles del sistema con permisos de aprovisionamiento';
$string['block_panopto_publisher_system_role_mapping_desc'] = 'Seleccionar qué roles del sistema pueden aprovisionar nuevas carpetas de cursos de Panopto. La adición de roles a esta configuración puede tener un impacto en el rendimiento de los sistemas más grandes.';
$string['block_panopto_server_number_desc'] = 'Haga clic en "Guardar cambios" para actualizar el número de servidores.';
$string['course'] = 'Curso';
$string['course_already_provisioned'] = 'Este curso ya ha sido aprovisionado a carpeta con un Id público de: {$a}.';
$string['course_has_invalid_panopto_data'] = 'El curso Moodle de destino no está asociado a datos válidos de la carpeta Panopto.';
$string['creator'] = 'Creador';
$string['creator_help'] = 'Un creador puede crear y editar contenidos en Panopto';
$string['creators'] = 'Creadores';
$string['links'] = 'Enlaces';
$string['missing_moodle_required_version'] = 'El bloque Panopto requiere una versión de Moodle más reciente que {$a->requiredversion}, su versión actual de Moodle es: {$a->currentversion}';
$string['missing_required_version'] = 'La llamada a la API no devolvió una respuesta, esto podría deberse a que el servidor Panopto que intentó utilizar no cumple con la versión mínima requerida para soportar esta versión del Bloque Panopto de Moodle. Esto también podría deberse a que el servidor no está disponible.';
$string['moodle_course_not_exist'] = 'Trasladando la fila al antiguo mapa desplegable, el curso no existía dentro de Moodle.';
$string['name_style_combination'] = '[nombre corto]: [nombre completo]';
$string['name_style_fullname'] = '[nombre completo]';
$string['name_style_shortname'] = '[nombre corto]';
$string['no_access'] = 'No tiene acceso para ver esta carpeta de Panopto.';
$string['no_course_selected'] = 'Sin carpeta de cursos Panopto seleccionada';
$string['no_folder_associated_with_moodle_id'] = 'No se ha asociado ninguna carpeta Panopto a un curso Moodle con el Id  {$a}';
$string['no_publishers'] = 'Sin publicadores.';
$string['no_server'] = 'No hay servidores configurados para el aprovisionamiento. Póngase en contacto con el administrador del sistema.';
$string['no_viewers'] = 'Sin visualizadores.';
$string['or'] = 'o';
$string['panopto:addinstance'] = 'Añadir un nuevo bloque de Panopto';
$string['panopto:myaddinstance'] = 'Añadir un nuevo bloque de Panopto a mi página';
$string['panopto:provision_aspublisher'] = 'Provisión como editor publicador';
$string['panopto:provision_asteacher'] = 'Provisión como creador';
$string['panopto:provision_course'] = 'Provisión de un curso';
$string['panopto:provision_multiple'] = 'Aprovisionar varios cursos a la vez';
$string['pluginname'] = 'Panopto';
$string['provision'] = 'Aprovisionar';
$string['publisher'] = 'Publicador';
$string['publisher_help'] = 'Un publicador puede aprobar los contenidos enviados por los creadores';
$string['publishers'] = 'Publicadores';
$string['unprovisioned'] = 'Este curso aún no ha sido aprovisionado.';
$string['viewers'] = 'Visualizadores';
