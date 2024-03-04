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
 * Strings for component 'tool_mobile', language 'es', version '3.4'.
 *
 * @package     tool_mobile
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adodbdebugwarning'] = 'Depuración ADOdb está habilitada. Debería de ser deshabilitada en la configuración del plugin de inscripción por base de datos externa o autenticación de base de datos externa.';
$string['androidappid'] = 'Identificador único de aplicación de Android';
$string['androidappid_desc'] = 'Esta configuración puede dejarse como predeterminada a menos que tenga una aplicación de Android personalizada.';
$string['autologinkeygenerationlockout'] = 'La generación de claves de inicio de sesión automático está bloqueada. Debe esperar 6 minutos entre solicitudes.';
$string['autologinnotallowedtoadmins'] = 'No se permite el inicio de sesión automático para los administradores del sitio.';
$string['cachedef_plugininfo'] = 'Esto almacena la lista de complementos con addons (complementos) móviles';
$string['clickheretolaunchtheapp'] = 'Haga clic aquí si la aplicación no se abre automáticamente.';
$string['configmobilecssurl'] = 'Archivo CSS para personalizar su interfaz de aplicaciones móviles.';
$string['customlangstrings'] = 'Cadenas personalizadas del idioma';
$string['customlangstrings_desc'] = 'Las palabras y frases que se muestran en la aplicación se pueden personalizar aquí. Introduzca cada cadena de idioma personalizado en una nueva línea con formato: identificador de cadena, cadena de idioma personalizado y código de idioma, separados por caracteres de barra vertical (tubería). Por ejemplo:
<pre>
mm.user.student | Learner | en
mm.user.student | Aprendiz | es
</pre>
Para obtener una lista completa de identificadores de cadena, consulte la documentación.';
$string['custommenuitems'] = 'Elementos de menú personalizados';
$string['disabledfeatures'] = 'Características deshabilitadas';
$string['disabledfeatures_desc'] = 'Seleccione aquí las funciones que desea deshabilitar en la aplicación móvil para su sitio. Tenga en cuenta que algunas de las funciones enumeradas aquí ya podrían estar deshabilitadas a través de la configuración de otro sitio. Tendrá que cerrar la sesión y volver a iniciarla en la aplicación para ver los cambios.';
$string['displayerrorswarning'] = 'La visualización de mensajes de depuración (debugdisplay) está habilitada. Debería estar desactivado.';
$string['enablesmartappbanners'] = 'Habilitar banners de aplicación';
$string['enablesmartappbanners_desc'] = 'Si está habilitado, se mostrará un banner que promociona la aplicación móvil al acceder al sitio utilizando un navegador móvil.';
$string['forcedurlscheme_key'] = 'Esquema de URL';
$string['forcelogout'] = 'Forzar cierre de sesión';
$string['forcelogout_desc'] = 'Si está habilitada, la opción de la aplicación \'Cambiar sitio\' se reemplaza por \'Cerrar sesión\'. Esto da como resultado que el usuario se desconecte por completo. Luego, deben volver a introducir su contraseña la próxima vez que deseen acceder al sitio.';
$string['getmoodleonyourmobile'] = 'Descargar la app para dispositivos móviles';
$string['httpsrequired'] = 'HTTPS requerido';
$string['insecurealgorithmwarning'] = 'Parece que el certificado HTTPS usa un algoritmo inseguro para firmar (SHA-1). Intente actualizar el certificado.';
$string['invalidcertificatechainwarning'] = 'Parece que la cadena de certificados no es válida.';
$string['invalidcertificateexpiredatewarning'] = 'Parece que el certificado HTTPS del sitio ha expirado.';
$string['invalidcertificatestartdatewarning'] = 'Parece que el certificado HTTPS para este sitio aún no es válido (tiene una fecha de inicio en el futuro).';
$string['invalidprivatetoken'] = 'Token privado no válido. El token no debe estar vacío ni pasar a través del parámetro GET.';
$string['invaliduserquotawarning'] = 'La cuota del usuario (userquota) está configurada a un número inválido. Debería de configurarse a un número válido (un valor entero) en las Configuraciones de seguridad del sitio.';
$string['iosappid'] = 'Identificador único de la aplicación iOS';
$string['iosappid_desc'] = 'Esta configuración puede dejarse como predeterminada a menos que tenga una aplicación iOS personalizada.';
$string['loginintheapp'] = 'A través de la aplicación';
$string['logininthebrowser'] = 'A través de una ventana del navegador (para complementos SSO)';
$string['loginintheembeddedbrowser'] = 'A través de un navegador incrustado (para complementos SSO)';
$string['mainmenu'] = 'Menú principal';
$string['mobileapp'] = 'App para dispositivos móviles';
$string['mobileappconnected'] = 'App para dispositivos móviles conectada.';
$string['mobileappearance'] = 'Apariencia móvil';
$string['mobileappenabled'] = 'Este sitio tiene activado el acceso desde la app.<br /><a href="{$a}">Descargar la app</a>.';
$string['mobileauthentication'] = 'Autenticación Móvil';
$string['mobilecssurl'] = 'CSS';
$string['mobilefeatures'] = 'Características móviles';
$string['mobilenotificationsdisabledwarning'] = 'Las notificaciones Mobile no están habilitadas. Deberían de ser habilitadas en Gestionar salidas de mensaje.';
$string['mobilesettings'] = 'Ajustes móviles';
$string['pluginnotenabledorconfigured'] = 'Complemento no habilitado o no configurado.';
$string['privacy:metadata:core_userkey'] = 'Claves de usuario utilizadas para crear una clave de inicio de sesión automático para el usuario actual.';
$string['privacy:metadata:preference:tool_mobile_autologin_request_last'] = 'La fecha de la última petición de clave de inicio de sesión automático. Se necesitan 6 minutos entre intentos.';
$string['remoteaddons'] = 'Complementos remotos';
$string['selfsignedoruntrustedcertificatewarning'] = 'Parece que el certificado HTTPS está autofirmado o no es de confianza. La aplicación móvil solo funcionará con sitios de confianza.';
$string['setuplink'] = 'Página de descarga de la aplicación';
$string['smartappbanners'] = 'Banners de la aplicación';
$string['typeoflogin'] = 'Tipo de inicio de sesión';
$string['typeoflogin_desc'] = 'Si el sitio utiliza un método de autenticación SSO, seleccione a través de una ventana del navegador o mediante un navegador integrado. Un navegador integrado proporciona una mejor experiencia de usuario, aunque no funciona con todos los complementos de SSO.';
