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
 * Strings for component 'publication', language 'es', version '3.4'.
 *
 * @package     publication
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['add_uploads'] = 'Añadir archivos';
$string['allfiles'] = 'Todos los archivos';
$string['allowedfiletypes_err'] = '¡ Revise lo que puso! Extensión de archivo o separadores inválidos';
$string['allowedfiletypes_help'] = 'Se puede restringir los tipos de archivo aceptados introduciendo una lista de tipos MIME separados por punto y coma, por ejemplo\'video/mp4; audio/mp3; image/png; image/jpeg\', o bien extensiones de archivo incluyendo el punto, por ejemplo \'.png; .jpg\'. Si la casilla se deja vacía, será aceptado cualquier tipo de archivo.';
$string['allowsubmissionsanddescriptionfromdatesummary'] = 'Los detalles de la tarea y el formato para envío estarán disponibles en <strong>{$a}</strong>';
$string['allowsubmissionsfromdate'] = 'a partir de';
$string['allowsubmissionsfromdate_import'] = 'Aprobación a partir de';
$string['allowsubmissionsfromdateh_help'] = 'Usted puede determinar el período de tiempo durante el cual los estudiantes pueden subir archivos o dar su aprobación para la publicación del archivo. Durante este período de tiempo, los estudiantes pueden editar sus archivos y también pueden quitar su aprobación para publicación.';
$string['allowsubmissionsfromdatesummary'] = 'Esta Tarea aceptará envíos a partir de <strong>{$a}</strong>';
$string['alwaysshowdescription'] = 'Siempre  mostrar descripción';
$string['approval_timeover'] = 'Usted solamente puede cambiar su aprobación durante el período_de_cambios.';
$string['approved'] = 'Aprobado';
$string['assignment'] = 'Tarea';
$string['assignment_help'] = 'Elija a tarea desde la cual importará archivos. En el momento, las tareas-grupales no están soportadas y por lo tanto, no son seleccionables.';
$string['assignment_notfound'] = 'La tarea desde la cual fueron importados los archivos, ya no pudo encontrarse.';
$string['assignment_notset'] = 'No se han elegido Tareas.';
$string['configautoimport'] = 'Si Usted prefiere que los envíos de los estudiantes sean importados automáticamente dentro de las instancias de carpeta del estudiante. Esta característica puede ser habilitada/deshabilitada para cada instancia de carpeta del estudiante en forma separada.';
$string['configmaxbytes'] = 'Tamaño máximo por defecto para todos los archivos en la carpeta del estudiante.';
$string['configmaxfiles'] = 'Número máximo por defecto de anexos permitidos por usuario.';
$string['configobtainstudentapproval'] = 'Los documentos son visibles después del consentimiento del estudiante.';
$string['configobtainteacherapproval'] = 'Los documento de los estudiantes por defecto son visibles para todos los otros participante.';
$string['configrequiremodintro'] = 'Deshabilite esta opción si no desea forzar a los usuarios a que escriban descripciones de cada actividad.';
$string['courseuploadlimit'] = 'Límite de subida del curso';
$string['cutoffdate'] = 'Fecha límite';
$string['cutoffdate_help'] = 'Si se configura, las tareas no aceptarán envíos después de esta fecha si no hubiera una extensión.';
$string['cutoffdate_import'] = 'Última aprobación hasta';
$string['cutoffdatefromdatevalidation'] = 'La fecha de corte debe ser posterior a la fecha de "permitir envíos a partir de".';
$string['cutoffdatevalidation'] = 'La fecha de corte no puede ser antes de la fecha esperada.';
$string['details'] = 'Detalles';
$string['downloadall'] = 'Descargar todos los archivos como ZIP';
$string['duedate'] = 'a';
$string['duedate_help'] = 'Esta es la fecha para la cual es esperada la tarea. Se seguirán permitiendo los envíos después de esta fecha, pero todos los envíos posteriores a esta fecha serán marcados como tardíos. Para impedir los envíos después de una cierta fecha - configure la fecha_de_corte de la Tarea.';
$string['duedate_import'] = 'Probar para';
$string['duedatevalidation'] = 'La fehca esperada debe ser despues de la fecha de "permitir envíos después de ".';
$string['edit_timeover'] = 'Los archivos solamente pueden ser editados dentro del período_de_cambios.';
$string['entiresperpage'] = 'Participantes mostrados por página';
$string['extensionduedate'] = 'Extensión de fecha esperada';
$string['extensionnotafterduedate'] = 'La extensión de fecha esperada debe ser después de la fecha esperada.';
$string['extensionnotafterfromdate'] = 'La extensión de fecha esperada debe ser después de la fecha a partir de la cual se permiten los envíos';
$string['extensionto'] = 'Extensión para';
$string['filedetails'] = 'Detalles';
$string['filesofthesetypes'] = 'Pueden añadirse archivos de estos tipos:';
$string['go'] = 'Ir';
$string['groupapprovalmode'] = 'Modo aprobación_de_grupo';
$string['groupapprovalmode_help'] = 'Aquí Usted decide si se necesita que aprueben todos los miembros del grupo o solamente con que apruebe un miembro del grupo es suficiente para que los archivos sean visibles. Los archivos solamente serán visibles después de la aprobación por todos los miembros del grupo o al menos por un miembro del grupo.';
$string['hidden'] = 'oculto';
$string['importfrom_err'] = 'Usted tiene que elegir una tarea a partir de la cual desea importar.';
$string['maxbytes'] = 'Tamaño máximo de anexo';
$string['maxfiles'] = 'Número máximo de anexos';
$string['mode'] = 'Modo';
$string['mode_help'] = 'Elija si es que los estudiantes pueden subir documentos en la carpeta de una tarea o documentos d una tarea de las que son orígenes.';
$string['modulename'] = 'Carpeta del estudiante';
$string['modulenameplural'] = 'Carpetas de estudiantes';
$string['myfiles'] = 'Archivos propios';
$string['mygroupfiles'] = 'Mis archivos del grupo';
$string['name'] = 'Nombre de carpeta del estudiante';
$string['noentries'] = 'Sin entradas';
$string['nofiles'] = 'Sin archivos disponibles';
$string['nofilestozip'] = 'Sin archivos para comprimir en ZIP';
$string['nonexistentfiletypes'] = 'Los siguientes tipos de archivo no fueron reconocidos: {$a}';
$string['nopublicationsincourse'] = 'No hay instancias de carpeta de estudiante en este curso.';
$string['nothingtodisplay'] = 'No hay entradas para mostrar';
$string['notice'] = 'Aviso:';
$string['notice_groupimportrequireallapproval'] = 'Decidir si es que los archivos están disponibles para todos. Todos los miembros del grupo tienen que dar su aprobación antes de que el archivo sea visible.';
$string['notice_groupimportrequireoneapproval'] = 'Decidir si es que sus archivos están disponibles para todos, La aprobación de solamente un miembro del grupo es suficiente para que el archivo sea visible. ¡Por favor, discuta internamente en el grupo si es que su archivo debería de ser visible o no antes de aprobarlo!';
$string['notice_importnoapproval'] = 'Los archivos siguientes son visibles para todos.';
$string['notice_importrequireapproval'] = 'Decidir si sus archivos son disponibles para todos.';
$string['notice_uploadnoapproval'] = 'Todos los archivos serán visibles inmediatamente para todos en cuanto sean subidos. El profesor se reserva el derecho de ocultar archivos publicados en cualquier momento.';
$string['notice_uploadrequireapproval'] = 'Todos los archivos subidos serán hechos visibles ssolamente después de la revisión pro el profesor.';
$string['obtainstudentapproval'] = 'Obtener aprobación';
$string['obtainteacherapproval'] = 'Aprobado por defecto';
$string['optionalsettings'] = 'Opciones';
$string['pending'] = 'Pendiente';
$string['pluginadministration'] = 'Administración de la carpeta del estudiante';
$string['pluginname'] = 'Carpeta del estudiante';
$string['publication:addinstance'] = 'Añadir una nueva carpeta del estudiante';
$string['publication:approve'] = 'Decidir si es que los archivos son visible spara todos los estudiantes.';
$string['publication:grantextension'] = 'Otorgar extensión';
$string['publication:upload'] = 'Subir archivos a una carpeta de estudiante';
$string['publication:view'] = 'Ver carpeta del estudiante';
$string['publicfiles'] = 'Archivos públicos';
$string['rejected'] = 'Rechazado';
$string['requiremodintro'] = 'Requerir descripción de la actividad';
$string['reset'] = 'Revertir';
$string['reset_userdata'] = 'Todos los datos';
$string['resetstudentapproval'] = 'Reiniciar estatus';
$string['save_changes'] = 'Guardar cambios';
$string['search:activity'] = 'Carpeta de estudiante - información de actividad';
$string['show_details'] = 'Mostrar detalles';
$string['status'] = 'Estatus';
$string['studentapproval'] = 'Estatus';
$string['teacher_rejected'] = 'rechazada';
$string['teacherapproval'] = 'Aprobación';
$string['updatefiles'] = 'Subir archivos';
$string['updatefileswarning'] = 'Los archivos de un estudiante individual dentro de la carpeta del estudiante serán actualizados con su envío de la tarea. Los archivos que ya eran visibles de los estudiantes también serán remplazados si fueran eliminados o refrescados. Las configuraciones del estudiante con respecto a visibilidad no serán cambiadas.';
$string['warning_changefromobtainstudentapproval'] = 'Si Usted realiza este cambio, solamente Usted puede decidir cuales archivos son visibles para todos los estudiantes. A los estudiantes no se les pide su aprobación. Todos los archivos marcados como aprobados se volverán visibles para todos los estudiantes independientemente de la decisión de los estudiantes.';
$string['warning_changefromobtainteacherapproval'] = 'Después de arctivar esta configuración, todos los archivos subidos serán visibles para otros participantes. Todos los archivos subidos serán todos visibles.Usted puede hacer visibles manualmente archivos para ciertos estudiantes.';
$string['warning_changetoobtainstudentapproval'] = 'Si Usted realiza este cambio, a los estudiantes se les pedirá su aprobación para que todos los archivos sean marcados como visibles. Los archivos solamente serán visibles después de la aprobación por los estudiantes.';
$string['warning_changetoobtainteacherapproval'] = 'Deespués de desactivar esta opción los archivos subidos no serán visibles automáticamente para otros participantes. Usted tendrá que determinar cuales archivos serán visibles. Los archivos que ya eran visibles de volverán invisibles.';
$string['withselected'] = 'Con los seleccionados...';
$string['zipusers'] = 'Descargar como ZIP';
