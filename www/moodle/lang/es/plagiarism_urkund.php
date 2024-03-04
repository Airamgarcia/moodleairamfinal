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
 * Strings for component 'plagiarism_urkund', language 'es', version '3.4'.
 *
 * @package     plagiarism_urkund
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['allowallsupportedfiles'] = 'Permitir todos los tipo de archivo soportados';
$string['allowallsupportedfiles_help'] = 'Permite que el profesor restrinja qué tipos de archivo serán enviados a URKUND para su procesamiento. No impide que los estudiantes realicen entregas de otros tipos de archivo.';
$string['assessmentresubmitted'] = 'Evaluación reenviada';
$string['attempts'] = 'Intentos realizados';
$string['charcount'] = 'Número mínimo de caracteres';
$string['confirmresetall'] = 'Esto restablecerá todos los archivos en el estado: {$a}';
$string['cronwarning'] = 'El script de mantenimiento <a href="../../admin/cron.php">cron.php</a> no ha sido ejecutado desde al menos  30 minutos - Debe configurar cron para permitir que URKUND funcione correctamente.';
$string['debugfilter'] = 'Filtrar archivos por';
$string['defaultsdesc'] = 'Los siguientes parámetros se establecen por defecto al habilitar URKUND en un Módulo de Actividad.';
$string['defaultupdated'] = 'Valores por defecto actualizados';
$string['deletedwarning'] = 'Este archivo no ha sido encontrado - pudo haber sido borrado por el usuario';
$string['explainerrors'] = 'Esta página muestra los archivos actualmente en estado de error.  <br/>Los archivos eliminados en esta página no serán reenviados y los errores dejarán de ser mostrados a profesores y estudiantes';
$string['file'] = 'Archivo';
$string['filedeleted'] = 'Archivo eliminado de la cola';
$string['fileresubmitted'] = 'Fichero encolado para volver a enviar';
$string['filesresubmitted'] = '{$a} ficheros reenviados';
$string['filter30'] = 'Excluir más antiguos de 30 días';
$string['filter7'] = 'Excluir más antiguos de 7 días';
$string['filter90'] = 'Excluir más antiguos de 90 días';
$string['getallscores'] = 'Conseguir todos los porcentajes';
$string['getscore'] = 'Conseguir porcentaje';
$string['getscores'] = 'Conseguir porcentajes';
$string['heldevents'] = 'Retener eventos';
$string['id'] = 'ID';
$string['identifier'] = 'Identificador';
$string['module'] = 'Módulo';
$string['modulenotfound'] = 'Podría no encontrar el módulo {$a->module} con el id {$a->modid}.';
$string['name'] = 'Nombre';
$string['nofilter'] = 'Sin filtro';
$string['noreceiver'] = 'No se especificó la dirección de destino';
$string['optout'] = 'Opt-out';
$string['previouslysubmitted'] = 'Enviado previamente como';
$string['receivernotvalid'] = 'No es dirección destino valida.';
$string['regenerationrequested'] = 'Todos los informes han sido marcados para volver a ser generados, puede llevar un tiempo hasta que estén disponibles los nuevos informes.';
$string['report'] = 'informe';
$string['restrictcontent'] = 'Envíe archivos adjuntos y texto en línea';
$string['restrictcontentfiles'] = 'Sólo enviar ficheros';
$string['restrictcontentno'] = 'Enviar todo';
$string['restrictcontenttext'] = 'Sólo enviar texto en línea';
$string['restrictfiles'] = 'Tipos de archivo a enviar';
$string['resubmit'] = 'Reenviar';
$string['resubmitall'] = 'Reenviar todos los que tengan estado: {$a}';
$string['resubmitclose'] = 'Reenviar después de la fecha límite';
$string['resubmitdue'] = 'Reenviar después de la fecha de entrega';
$string['savedconfigsuccess'] = 'Configuración antiplagio guardada';
$string['sendfiles'] = 'Enviar ficheros encolados';
$string['showall'] = 'Mostrar todos los errores';
$string['showwhencutoff'] = 'Después de la fecha límite de la actividad';
$string['showwhendue'] = 'Después de la fecha de entrega de la actividad';
$string['status'] = 'Estado';
$string['studentdisclosure_help'] = 'Texto visualizado por los estudiantes en la página de subida de ficheros.';
$string['submitondraft'] = 'Enviar el fichero nada más subirse';
$string['submitonfinal'] = 'Enviar el fichero cuando el estudiante lo envíe para su calificación';
$string['timesubmitted'] = 'Hora envío';
$string['updateallowedfiletypes'] = 'Actualizar los tipos de archivo permitidos y borrar los registros de URKUND asociados a actividades eliminadas.';
$string['urkund_advanceditems'] = 'Ajustes considerados avanzados';
$string['urkund_advanceditems_help'] = 'Lista de ajustes considerados avanzadas, serán mostrados como avanzados en los ajustes del módulo. Estos, se ocultarán a los profesores sin el permiso \'urkund:advancedsettings\'.';
$string['urkund_draft_submit'] = 'Cuando se envía el fichero';
$string['urkund_enableoptout'] = 'Mostrar enlace opt-out';
$string['urkund_enableoptoutdesc'] = 'Deshabilitado no permite a los alumnos elegir si no desean que sus trabajos sean utilizados para el análisis antiplagio en otros sitios diferentes (depende los ajustes por defecto). Al desactivar este opción, asume la responsabilidad de la gestión del copyright de las entregas de los estudiantes y está seguro de que no va en contra de las leyes aplicables en su país.';
$string['urkund_hidefilename'] = 'Ocultar el nombre del fichero enviado';
$string['urkund_lang'] = 'Idioma';
$string['urkund_lang_help'] = 'Código de lenguaje proporcionado por URKUND';
$string['urkund_password'] = 'Contraseña';
$string['urkund_password_help'] = 'Contraseña proporcionada por URKUND para acceder a API';
$string['urkund_receiver'] = 'Dirección del receptor';
$string['urkund_resubmit_on_close'] = 'Volver a enviar los trabajos al cerrar la tarea';
$string['urkund_show_student_report'] = 'Mostrar al estudiante informe de similaridad';
$string['urkund_show_student_score'] = 'Mostrar puntuación de similitud al alumno';
$string['urkund_show_student_score_help'] = 'La puntuación de similitud es el porcentaje del envío que ha sido emparejado con otros contenidos.';
$string['urkund_studentemail'] = 'Enviar un correo electrónico al alumno';
$string['urkund_studentemail_help'] = 'Esta opción enviará un correo electrónico al estudiante cuando se haya procesado un archivo para informarle que el informe está disponible, el correo electrónico también incluye el enlace de exclusión.';
$string['urkund_username'] = 'Usuario';
$string['urkunddebug'] = 'Depurando';
$string['urkunddefaults_assign'] = 'Ajustes por defecto de la tareas';
$string['urkunddefaults_forum'] = 'Ajustes por defecto de los foros';
$string['urkunddefaults_hsuforum'] = 'Ajustes por defecto para los hsuforum';
$string['urkunddefaults_workshop'] = 'Ajustes por defecto de los talleres';
$string['useurkund'] = 'Habilitar URKUND';
$string['waitingevents'] = 'Hay {$a->countallevents} eventos esperando a la ejecución del cron y {$a->countheld} pendientes de reenvío';
