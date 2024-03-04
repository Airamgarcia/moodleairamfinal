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
 * Strings for component 'local_checkmarkreport', language 'es', version '3.4'.
 *
 * @package     local_checkmarkreport
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['additional_columns'] = 'Columnas adicionales';
$string['additional_information'] = 'Información adicional';
$string['additional_settings'] = 'Configuraciones adicionales';
$string['attendances'] = 'Asistencias';
$string['by'] = 'por';
$string['checkmarkreport:view'] = 'Ver reporte de marca de verificación';
$string['checkmarkreport:view_courseoverview'] = 'Ver reporte-de-curso de marca de verificación';
$string['checkmarkreport:view_own_overview'] = 'Ver mi reporte de marca de verificación';
$string['checkmarkreport:view_students_overview'] = 'Ver reporte-de-usuario de marca de verificación';
$string['error_retriefing_members'] = 'Error al obtener los miembros-del-grupo';
$string['eventexported'] = 'Reporte-de-marca de verificación exportado';
$string['eventoverviewexported'] = 'Vista general de Reporte-de-marca de verificación exportada';
$string['eventoverviewviewed'] = 'Vista general de Reporte-de-marca-de-verificación vista';
$string['eventuseroverviewexported'] = 'Vista-general-del-usuario de Reporte-de-marca de verificación exportada';
$string['eventuseroverviewviewed'] = 'Vista-general-del-usuario de Reporte-de-marca de verificación vista';
$string['eventuserviewexported'] = 'Vista-del-usuario de Reporte-de-marca de verificación exportada';
$string['eventuserviewviewed'] = 'Vista-del-usuario de Reporte-de-marca de verificación vista';
$string['eventviewed'] = 'Reporte-de-marca de verificación vista';
$string['example'] = 'Ejemplo';
$string['examples'] = 'Ejemplos';
$string['exportas'] = 'Exportar como';
$string['filter'] = 'Filtro';
$string['grade'] = 'Calificación';
$string['grade_help'] = 'Mostrar calificación, calificación sumada para marcas de verificación mostradas y también como puntos teóricos por la revisión de los ejemplos.';
$string['grade_useroverview'] = 'Calificación';
$string['groupings'] = 'Agrupamientos';
$string['groups'] = 'Grupos';
$string['groups_help'] = 'Use esto para seleccionar los grupos a mostrar. Los grupos vacíos están deshabilitados y solamente son mostrados los miembros de los grupos seleccionados en la selección de usuarios (después de la actualización).';
$string['loading'] = 'Cargando...';
$string['noaccess'] = 'Usted no tiene acceso a este módulo.  A Usted le faltan las capacidades necesarias para ver este contenido.';
$string['overview'] = 'Vista general';
$string['overview_alt'] = 'Ver reporte-del-curso de marca de verificación';
$string['overwritten'] = 'Sobre-escrito';
$string['pluginname'] = 'Reporte de marca de verificación';
$string['pluginname_help'] = 'Los reportes de marca de verificación extienden la funcionalidad del mod_checkmark al hacer conveniente el poder ver reportes de vista general del curso para todas las marcas de verificación disponibles.';
$string['pluginnameplural'] = 'Reportes de marca de verificación';
$string['showattendances'] = 'Mostrar intentos';
$string['showattendances_help'] = 'Si se habilita, las asistencias de los estudiantes estarán incluidas en el reporte si al menos una de las instancias de marca-de-verificación monitorea la asistencia. ¡Si las instancias no monitorean la asistencia, entonces no se mostrará información para la instancia!';
$string['showexamples'] = 'Mostrar ejemplos';
$string['showexamples_help'] = 'Si se habilita, serán incluidos en los reportes los ejemplos de instancias de marca-de-verificación con información detallada.';
$string['showgrade'] = 'Mostrar calificación';
$string['showpoints'] = 'Mostrar puntos';
$string['showpoints_help'] = 'Mostrar los puntos correspondientes para cada ejemplo en lugar de símbolos de seleccionado (☒) o no-seleccionado (☐).';
$string['showpresentationcount'] = 'Mostar número de presentaciones calificadas';
$string['showpresentationcount_help'] = 'Si se activa, la columna de "# calificaciones de presentaciones" muestra para todos los usuarios el número de calificaciones de presentaciones que fueron ingresadas en todas las instancias de marca-de-verificación del curso. Las calificaciones vacías fueron ignoradas y no contaron.';
$string['showpresentationgrades'] = 'Mostrar calificación de presentación';
$string['showpresentationgrades_help'] = 'Mostrar la retroalimentación a la calificación dada para las presentaciones de los estudiantes';
$string['showsignature'] = 'Incluir campos de firma en archivos XLSX y ODS';
$string['showsignature_help'] = 'Si se habilita, las áreas reservadas para las firmas de los estudiantes se incluirán en las exportaciones XLSX y ODS. Esto no está disponible para las exportaciones TXT ni XML.';
$string['signature'] = 'Firma';
$string['status'] = 'Estatus';
$string['sumabs'] = 'Mostrar ejemplos x/y';
$string['sumabs_help'] = 'Mostrar cuantos ejemplos han sido seleccionados en el curso completo y para cada marca de verificación.';
$string['sumrel'] = 'Mostrar % de ejemplos/calificaciones';
$string['sumrel_help'] = 'Mostrar valores relativos  ( XX % ) de ejemplos seleccionados y también de calificaciones calculadas por ejemplos seleccionados para el curso en total y para cada marca-de-verificación.';
$string['update'] = 'Actualizar';
$string['useroverview'] = 'Vista general del estudiante';
$string['useroverview_alt'] = 'Ver reporte-del-usuario de marca-de-verificación';
$string['userview'] = 'Vista del usuario';
$string['userview_alt'] = 'Ver mi reporte de marca-de-verificación';
$string['xlsover256'] = 'El formato de archivo XLS solamente soporta 256 columnas como máximo. El archivo que Usted está a punto de generar excede este límite. Por favor, des-seleccione algunas instancias o evite emplear XLS.';
