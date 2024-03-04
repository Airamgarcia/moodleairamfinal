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
 * Strings for component 'block_opencast', language 'es', version '3.4'.
 *
 * @package     block_opencast
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['accesspolicies'] = 'Políticas de acceso';
$string['aclgroupdeleted'] = 'Acceso suprimido para vídeo: {$a->title}';
$string['aclnothingtobesaved'] = 'No se han introducido cambios en la visibilidad.';
$string['aclrolesadded'] = 'El cambio de visibilidad se ha activado para que todos los alumnos del curso puedan acceder al vídeo {$a->title}<br />Por favor, actualice el sitio después de algún tiempo para ver el estado de visibilidad actual.';
$string['aclrolesaddedgroup'] = 'El cambio de visibilidad se ha activado para que los alumnos de los grupos seleccionados puedan acceder al vídeo: {$a->title}<br />Por favor, actualice el sitio después de algún tiempo para ver el estado de visibilidad actual.';
$string['aclroleschangeerror'] = 'Error durante el cambio de visibilidad del vídeo: {$a->title}<br />Es posible que algunos cambios no se hayan guardado. Si esto ocurre repetidamente, ponte en contacto con tu equipo de soporte.';
$string['aclrolesdeleted'] = 'El cambio de visibilidad se ha activado para evitar que todos los alumnos del curso accedan al vídeo: {$a->title}<br />Por favor, actualice el sitio después de algún tiempo para ver el estado de visibilidad actual.';
$string['aclrolesname'] = 'Roles';
$string['actions'] = 'Lista de acciones separadas por comas';
$string['addrole'] = 'Añadir nuevo rol';
$string['addvideo'] = 'Añadir vídeo';
$string['adhocfiledeletion'] = 'Eliminar archivo de vídeo de moodle';
$string['adhocfiledeletiondesc'] = 'Si está activado, el plugin intenta eliminar el archivo de vídeo del sistema de archivos de moodle justo después de que se haya cargado en el servidor de opencast. Tenga en cuenta que el archivo permanecerá en el sistema de archivos, si se utiliza dentro de otros lugares en moodle.';
$string['allowunassign'] = 'Permitir desasignar del curso';
$string['allowunassigndesc'] = 'Elimine la asignación de una serie de cursos para controlar la visibilidad en el selector de archivos y en las listas de cursos. Esta función sólo está disponible cuando es posible tener eventos sin series en opencast. Consulte al administrador del sistema opencast antes de activarla.';
$string['blocksettings'] = 'Configuración de una instancia de bloque';
$string['changevisibility'] = 'Alterar la visibilidad';
$string['changevisibility_group'] = 'El vídeo es visible para todos los alumnos pertenecientes a los grupos seleccionados. Haga clic para modificar la visibilidad.';
$string['changevisibility_header'] = 'Cambiar la visibilidad de {$a->title}';
$string['changevisibility_hidden'] = 'El vídeo no es visible para ningún alumno. Haga clic para modificar la visibilidad.';
$string['changevisibility_mixed'] = 'La visibilidad del vídeo está en un estado no válido. Haga clic para elegir la visibilidad correcta.';
$string['changevisibility_visible'] = 'El vídeo es visible para todos los alumnos del curso. Haga clic para modificar la visibilidad.';
$string['coursefullnameunknown'] = 'Nombre desconocido';
$string['createdby'] = 'Subido por';
$string['createseriesforcourse'] = 'Crear una nueva serie';
$string['cronsettings'] = 'Configuración de trabajos cargados';
$string['deleteaclgroup'] = 'Borrar vídeo de esta lista.';
$string['deleteevent'] = 'Eliminar un evento en Opencast';
$string['deleteeventdesc'] = 'Está a punto de eliminar este vídeo de forma permanente e irreversible de Opencast.<br />Todos los enlaces incrustados al mismo quedarán invalidados. Por favor, no continúe a menos que esté absolutamente seguro.';
$string['deletegroupacldesc'] = 'Está a punto de eliminar el acceso a este vídeo de este curso.<br />Si se elimina el acceso, el vídeo no se muestra en el selector de archivos ni en la lista de vídeos disponibles. Esto no afecta a los vídeos que ya están incrustados.<br />El vídeo no se borrará en Opencast.';
$string['deleteworkflow'] = 'El flujo de trabajo debe iniciarse antes de que se elimine el evento';
$string['deleteworkflowdesc'] = 'Antes de eliminar un vídeo, se puede definir un flujo de trabajo, que se llama para retirar el evento de todos los canales de publicación.';
$string['deleting'] = 'Va a ser eliminado';
$string['dodeleteaclgroup'] = 'Eliminar el acceso a los vídeos de este curso';
$string['dodeleteevent'] = 'Eliminar un vídeo de forma permanente';
$string['duplicateworkflow'] = 'Flujo de trabajo para la duplicación de eventos';
$string['error_eventid_taskdata_missing'] = 'Los datos de la tarea no contienen ningún id de evento. Tarea de evento duplicado opencast ({$a->taskid}) para el curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_seriesid_missing_course'] = 'El curso {$a->coursefullname} (ID: {$a->courseid}) no tiene series de cursos. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_missing_opencast'] = 'Las series del curso {$a->coursefullname} (ID: {$a->courseid}) no se pueden encontrar en el sistema opencast. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_not_matching'] = 'El curso {$a->coursefullname} (ID: {$a->courseid}) tiene unas series de curso que no coinciden con el seriesid de la tarea. El evento ({$a->eventid}) no se ha podido restaurar.';
$string['error_seriesid_taskdata_missing'] = 'Los datos de la tarea no contienen ningún id de serie. Tarea de evento duplicado opencast ({$a->taskid}) para el curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_workflow_not_exists'] = 'El flujo de trabajo {$a->duplicateworkflow} no se encuentra en el sistema opencast. El evento ({$a->eventid}) no se ha podido restaurar para el curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_workflow_not_started'] = 'No se ha podido iniciar el flujo de trabajo para copiar el vídeo ({$a->eventid}) asignado al curso {$a->coursefullname} (ID: {$a->courseid}).';
$string['error_workflow_setup_missing'] = 'El plugin block_opencast no está configurado correctamente. Falta el flujo de trabajo de duplicación.';
$string['errorduplicatetaskretry'] = 'Se ha producido un error al ejecutar una tarea de duplicación de un evento: {$a} Se intentará iniciar de nuevo el flujo de trabajo mediante la siguiente tarea cron.';
$string['errorduplicatetaskterminate'] = 'Se ha producido un error al ejecutar una tarea de duplicación de un evento: {$a} Después de intentarlo varias veces la tarea terminará ahora.';
$string['erroremailbody'] = '{$a->errorstr} Detalles: {$a->message}.';
$string['erroremailsubj'] = 'Error al ejecutar la tarea duplicada del proceso opencast';
$string['errorgetblockvideos'] = 'No se puede cargar la lista (Error: {$a})';
$string['errorrestoremissingevents_body'] = 'Se ha producido un problema en el proceso de restauración del curso {$a->coursefullname} (ID: {$a->courseid}). El/los vídeo(s) con el/los siguiente(s) identificador(es) no pudo(n) ser encontrado(s) en el sistema opencast. Este(os) vídeo(s) no se restaurará(n):';
$string['errorrestoremissingevents_subj'] = 'Error de Opencast durante el proceso de restauración';
$string['errorrestoremissingseries_body'] = 'Se ha producido un problema en el proceso de restauración del curso {$a->coursefullname} (ID: {$a->courseid}). No se pudo crear ninguna serie abierta. Por lo tanto, los siguientes eventIDs no pudieron ser duplicados:';
$string['errorrestoremissingseries_subj'] = 'Error de Opencast durante el proceso de restauración';
$string['eventdeleted'] = 'El vídeo ha sido eliminado.';
$string['eventdeletedfailed'] = 'Error al borrar el evento';
$string['eventdeletionstarted'] = 'El vídeo se borrará próximamente.';
$string['eventuploadfailed'] = 'Error de carga';
$string['eventuploadsucceeded'] = 'Carga efectuada';
$string['form_seriesid'] = 'ID de las series';
$string['form_seriestitle'] = 'Título de las series';
$string['gotooverview'] = 'Ir al resumen...';
$string['group_name_empty'] = 'El nombre del grupo no debe estar vacío si se desea crear un grupo.';
$string['groupcreation'] = 'Crear un grupo';
$string['groupcreationdesc'] = 'Si está marcada, se crea un grupo durante la carga.';
$string['groupname'] = 'Nombre del grupo';
$string['groupnamedesc'] = 'Grupo al que se añade el vídeo. Importante: La longitud del nombre del grupo está restringida a 128 Bytes. Puede utilizar los marcadores de posición [COURSEID] y [COURSENAME] que se sustituyen automáticamente.';
$string['groupseries_header'] = 'Grupo y Series';
$string['heading_actions'] = 'Acciones';
$string['heading_delete'] = 'Borrar';
$string['heading_permanent'] = 'Permanente';
$string['heading_role'] = 'Rol';
$string['hend_date'] = 'Fecha de finalización';
$string['hlocation'] = 'Ubicación';
$string['hpublished'] = 'Publicado';
$string['hstart_date'] = 'Fecha de inicio';
$string['htitle'] = 'Título';
$string['hvisibility'] = 'Visibilidad';
$string['hworkflow_state'] = 'Estado';
$string['invalidacldata'] = 'Datos acl no válidos';
$string['limituploadjobs'] = 'Limitar el trabajo de carga mediante cron';
$string['limituploadjobsdesc'] = 'Limitar el número de uploadjobs realizados por un cronjob. El cronjob puede programarse aquí: {$a}';
$string['limitvideos'] = 'Número de vídeos';
$string['limitvideosdesc'] = 'Número máximo de vídeos a mostrar en bloque';
$string['missingevent'] = 'Error en la creación del evento';
$string['missinggroup'] = 'Falta un grupo en opencast';
$string['missingseries'] = 'Faltan series en opencast';
$string['missingseriesassignment'] = 'Falta la asignación de series';
$string['morevideos'] = 'Más vídeos ...';
$string['mstatecreatingevent'] = 'Cargando ...';
$string['mstatecreatinggroup'] = 'Creando Grupo Opencast ...';
$string['mstatecreatingseries'] = 'Creando Series Opencast...';
$string['mstatereadytoupload'] = 'Listo para la transferencia';
$string['mstatetransferred'] = 'Transferido';
$string['mstateunknown'] = 'Estado desconocido';
$string['mstateuploaded'] = 'Procesamiento de tareas posteriores a la carga ...';
$string['noseriesid'] = 'El ID de la serie aún no está definido.';
$string['notpublished'] = 'No publicado';
$string['novideosavailable'] = 'No hay vídeos disponibles';
$string['ocstatecapturing'] = 'Capturando';
$string['ocstatefailed'] = 'Falló';
$string['ocstateneedscutting'] = 'Necesita ser cortado';
$string['ocstateprocessing'] = 'Procesamiento';
$string['ocstatesucceeded'] = 'Con éxito';
$string['opencast:addinstance'] = 'Añadir un nuevo bloque de subida a opencast';
$string['opencast:addvideo'] = 'Añadir un nuevo vídeo al bloque de subida de opencast';
$string['opencast:createseriesforcourse'] = 'Crear una nueva serie en opencast para un curso moodle';
$string['opencast:defineseriesforcourse'] = 'Vincular una serie opencast existente a un curso moodle';
$string['opencast:deleteevent'] = 'Borrar por fin un vídeo (evento) en opencast';
$string['opencast:myaddinstance'] = 'Añadir un nuevo bloque de subida de opencast al panel de control';
$string['opencast:unassignevent'] = 'Desasignar un vídeo del curso, donde se cargó el vídeo.';
$string['opencast:viewunpublishedvideos'] = 'Ver todos los vídeos del servidor de opencast, aunque no estén publicados';
$string['overview'] = 'Visión general';
$string['planned'] = 'Planificado';
$string['pluginname'] = 'Vídeos Opencast';
$string['privacy:metadata:block_opencast_uploadjob'] = 'Información sobre las cargas del vídeo.';
$string['privacy:metadata:block_opencast_uploadjob:courseid'] = 'ID del curso en el que se ha cargado el vídeo';
$string['privacy:metadata:block_opencast_uploadjob:fileid'] = 'ID del archivo/vídeo cargado';
$string['privacy:metadata:block_opencast_uploadjob:opencasteventid'] = 'ID del evento opencast que se creó durante la carga';
$string['privacy:metadata:block_opencast_uploadjob:status'] = 'Estado del proceso de carga';
$string['privacy:metadata:block_opencast_uploadjob:timecreated'] = 'La fecha en que se creó el trabajo de carga.';
$string['privacy:metadata:block_opencast_uploadjob:timemodified'] = 'La fecha en que se modificó por última vez el trabajo de carga.';
$string['privacy:metadata:block_opencast_uploadjob:userid'] = 'ID del usuario que subió el vídeo';
$string['privacy:metadata:core_files'] = 'El bloque opencast almacena archivos (vídeos) que han sido cargados por el usuario.';
$string['privacy:metadata:opencast'] = 'El bloque interactúa con una instancia de opencast y, por tanto, es necesario intercambiar datos.';
$string['privacy:metadata:opencast:file'] = 'El archivo seleccionado se carga en opencast.';
$string['processdelete'] = 'Proceso de eliminación de trabajos para Opencast';
$string['processupload'] = 'Proceso de carga';
$string['publishtoengage'] = 'Publicar para captar la atención';
$string['publishtoengagedesc'] = 'Seleccione esta opción para publicar el vídeo después de cargarlo en engage player. El flujo de trabajo de configuración debe admitir esta opción.';
$string['reuseexistingupload'] = 'Reutilizar cargas existentes';
$string['reuseexistinguploaddesc'] = 'Si se activa, varios vídeos con el mismo hash de contenido se suben a opencast una sola vez. Esto ahorra almacenamiento y capacidad de procesamiento, pero puede causar problemas cuando se utilizan políticas de acceso específicas basadas en series de opencast.';
$string['rolename'] = 'Nombre del rol';
$string['series_already_exists'] = 'Este curso ya se ha asignado a una serie.';
$string['series_does_not_exist'] = 'La serie asignada a este curso no es válida. ¡Por favor, póngase en contacto con su administrador!';
$string['series_does_not_exist_admin'] = 'La serie con el identificador \'{$a}\' no se ha podido recuperar de Opencast.';
$string['series_name_empty'] = 'El nombre de las series no debe estar vacío.';
$string['seriescreated'] = 'Se han creado las series';
$string['seriesidsaved'] = 'Se ha guardado el ID de las series.';
$string['seriesidunset'] = 'Se ha eliminado el identificador de las series.';
$string['seriesname'] = 'Nombre de las series';
$string['seriesnotcreated'] = 'No se ha podido crear las series';
$string['setting_permanent'] = 'Es permanente';
$string['settings'] = 'Vídeos Opencast';
$string['submit'] = 'Guardar cambios';
$string['uploadingeventfailed'] = 'Error en la creación del evento';
$string['uploadjobssaved'] = 'Carga de vídeo correcta.<br />El vídeo está programado para ser transferido a Opencast ahora. No es necesario que espere en esta página a que finalice esta transferencia.';
$string['uploadqueuetoopencast'] = 'Vídeos programados para transferir a Opencast';
$string['uploadworkflow'] = 'Flujo de trabajo a iniciar tras la carga';
$string['uploadworkflowdesc'] = 'Establece el nombre corto único del flujo de trabajo, que debe iniciarse después de subir con éxito un archivo de vídeo a opencast. Si se deja en blanco, se utilizará el flujo de trabajo estándar (ng-schedule-and-upload). Pregunte por flujos de trabajo adicionales que pueda haber creado el administrador de opencast.';
$string['videonotfound'] = 'Vídeo no encontrado';
$string['videosavailable'] = 'Vídeos disponibles en este curso';
$string['videostoupload'] = 'Vídeos para subir a opencast';
$string['visibility'] = 'Visibilidad del vídeo';
$string['visibility_group'] = 'Permitir el acceso al vídeo a todos los alumnos pertenecientes a los grupos seleccionados';
$string['visibility_hide'] = 'Impedir que cualquier alumno acceda al vídeo';
$string['visibility_show'] = 'Permitir el acceso al vídeo a todos los alumnos del curso';
$string['workflownotdefined'] = 'El flujo de trabajo para actualizar los metadatos no está definido.';
$string['worklowisrunning'] = 'Se está ejecutando un flujo de trabajo. No se puede cambiar la visibilidad en este momento';
$string['wrongmimetypedetected'] = 'Se ha utilizado un mimetype no válido al subir el vídeo {$a->filename} del curso {$a->coursename}. Sólo se permiten archivos de vídeo.';
