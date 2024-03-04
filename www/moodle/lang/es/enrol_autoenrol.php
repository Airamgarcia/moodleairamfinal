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
 * Strings for component 'enrol_autoenrol', language 'es', version '3.4'.
 *
 * @package     enrol_autoenrol
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['alwaysenrol'] = 'Inscribir siempre';
$string['alwaysenrol_help'] = 'Cuando se pone "Sí" los plugins siempre matricularán a los usuarios, aún cuando ellos ya hubieran accedido al curso mediante otro método.';
$string['auto'] = 'Automático';
$string['auto_desc'] = 'Este grupo ha sido creado automáticamente por el plugin Auto Enrol. Será eliminado si usted quita el plugin Auto Enrol del curso.';
$string['autoenrol:config'] = 'Configurar inscripciones automáticas';
$string['autoenrol:hideshowinstance'] = 'El usuario puede habilitar o deshabilitar instancias de automatrícula';
$string['autoenrol:manage'] = 'Gestionar usuarios autoinscritos';
$string['autoenrol:method'] = 'El usuario puede matricular a otros usuarios en el curso al entrar';
$string['autoenrol:unenrol'] = 'Usuario puede dar de baja usuarios automatriculados';
$string['autoenrol:unenrolself'] = 'Los usuarios pueden darse de baja a sí mismos si fueron matriculados en el acceso';
$string['autounenrolaction'] = 'Acción de darse de baja uno mismo';
$string['autounenrolaction_help'] = 'Seleccionar la actividad a realizar cuando  la regla de filtrado de usuarios ya no concuerde más. Por favor, tenga en cuenta que algunos datos de usuario y configuraciones se purgan del curso durante la desmatriculación del curso';
$string['cannotenrol'] = 'Usted no puede matricularse en este curso usando automatrícula.';
$string['config'] = 'Configuración';
$string['confirmbulkdeleteenrolment'] = '¿Está seguro de querer eliminar estas matrículas de usuario?';
$string['countlimit'] = 'Límite';
$string['countlimit_help'] = 'Esta instancia cuenta el número de matriculaciones que se realizan en un curso y permite detener la inscripción de usuarios una vez que se alcanza un cierto nivel. El ajuste predeterminado de 0 significa ilimitado.';
$string['customwelcomemessage'] = 'Mensaje de bienvenida personalizado';
$string['defaultrole'] = 'Asignación de rol por defecto';
$string['defaultrole_desc'] = 'Seleccionar rol que será asignado a los usuarios durante las inscripciones automáticas';
$string['deleteselectedusers'] = 'Eliminar inscripciones seleccionadas de usuario';
$string['editselectedusers'] = 'Editar inscripciones seleccionadas de usuario';
$string['emptyfield'] = 'No {$a}';
$string['enrolenddate'] = 'Fecha de término';
$string['enrolenddate_help'] = 'Si está habilitado, los usuarios solamente estarán matriculados hasta esta fecha.';
$string['enrolstartdate'] = 'Fecha de inicio';
$string['enrolstartdate_help'] = 'Si se habilita, los usuarios estarán inscritos solamente a partir de esta fecha.';
$string['filter'] = 'Permitir solamente';
$string['filter_help'] = 'Cuando se selecciona un enfoque de grupo, Usted puede usar este campo para filtrar qué tipo de usuario desea inscribir al curso. Por ejemplo: si agrupó por autenticación y filtró para solamente "manual", solamente los usuarios que hubieran sido registrados directamente en el sitio serían inscritos.';
$string['filtering'] = 'Filtrado de usuarios';
$string['g_auth'] = 'Método de Autenticación';
$string['g_dept'] = 'Departamento';
$string['g_email'] = 'Dirección Email';
$string['g_inst'] = 'Institución';
$string['g_lang'] = 'Idioma';
$string['g_none'] = 'Seleccionar...';
$string['general'] = 'General';
$string['groupon'] = 'Agrupar por';
$string['groupon_help'] = 'AutoInscribir puede añadir usuarios a un grupo automáticamente cuando son inscritos basados en uno de estos campos de usuario.';
$string['instancename'] = 'Etiqueta personalizada';
$string['instancename_help'] = 'Usted puede añadir una etiqueta personalizada paradejar bien claro lo que hace este método de inscripción. Esta opción es más útil cuando existen varias instancias de AutoInscripción en un curso.';
$string['m_course'] = 'Cargando el curso';
$string['m_site'] = 'Registrando dentro del sitio';
$string['method'] = 'Matricular cuando';
$string['method_help'] = 'Los usuarios poderosos pueden usar esta configuración para cambiar el comportamiento del plugin, de forma que los usuarios sean inscritos al curso al entrar al sitio, en lugar de esperar a que entren al curso. Esto es útil para cursos que deberían ser visibles por defecto en la lista de "mis cursos" de los usuarios.';
$string['pluginname'] = 'Automatrícula';
$string['pluginname_desc'] = 'El módulo de inscripción automática permite una opción para que a los usuarios que han ingresado al sitio se les otorgue entrada a un curso y sean inscritos en él. Ésto es similar a permitir el acceso a invitados, pero los estudiantes quedarán permanentemente inscritos y por lo tanto, podrán participar en foros y actividades dentro del área.';
$string['pluginnotenabled'] = 'Plugin de Autoinscripción no habilitado';
$string['privacy:metadata:core_group'] = 'El plugin Autoenrol (Autoinscribir) puede crear nuevos grupos o usar grupos existentes para añadir participantes que concuerden con el filtro Autoenrol (Autoinscribir).';
$string['removegroups'] = 'Remover grupos';
$string['removegroups_desc'] = 'Cuando se elimina una instancia de inscripción, ¿debería de intentarse remover  a los grupos que haya creado?';
$string['role_help'] = 'Los usuarios poderosos pueden usar esta configuración para cambiar el nivel de permiso al que los usuarios son inscritos,';
$string['selfunenrol'] = 'Habilitar auto des-inscribir';
$string['selfunenrol_help'] = 'Cuando se configura a Si, los usuarios pueden des-inscribirse ellos mismos.';
$string['sendcoursewelcomemessage'] = 'Mandar mensaje de BienVenida al curso';
$string['sendcoursewelcomemessage_help'] = 'Cuando un usuario es auto-inscrito en el curso, se le puede enviar un mensaje de BienVenida. Si se envía desde el contacto del curso (por defecto el profesor), y más de un usuario tienen este rol, el Email es enviado desde el primer usuario que tenga este rol asignado.';
$string['softmatch'] = 'Coincidencia Suave';
$string['softmatch_help'] = 'Cuando se habilita, AutoInscripción inscribirá a un usuario cuando coincida parcialmente con el valor de "Permitir Solamente" en lugar de requirir una coincidencia exacta. Las coincidencias suaves también son sensibles a MAY/minúsculas. El valor de "Filtrar por" será usado para el nombre del grupo.';
$string['syncenrolmentstask'] = 'Trabajo de Sincronizar Autoinscripción';
$string['unenrolselfconfirm'] = '¿Realmente desea des-inscribirse (darse de baja) a sí mismo del curso "{$a}"? Usted puede volver a visitar el curso para volverse a inscribir, pero se perderá la información de sus calificaciones y envíos de tareas.';
$string['unenrolusers'] = 'Des-inscribir usuarios';
$string['warning'] = '¡Precaución!';
$string['warning_message'] = 'Al añadir este plugin a su curso le permitirá a cualquier usuario registrado de Moodle accesar a su curso. Solamente instale este plugin si quiere permitir acceso abierto a su curso para usuarios que hayan entrado al sitio.';
$string['welcomemessage'] = 'Mensaje de BienVenida';
$string['welcometocourse'] = 'BenVenido/a a {$a}';
