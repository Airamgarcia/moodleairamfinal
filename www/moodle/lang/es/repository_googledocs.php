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
 * Strings for component 'repository_googledocs', language 'es', version '3.4'.
 *
 * @package     repository_googledocs
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['both'] = 'Interno y Externo.';
$string['cachedef_folder'] = 'ID del archivo de Google para las carpetas el la cuenta del sistema';
$string['configplugin'] = 'Configurar extensión Google Drive';
$string['defaultreturntype'] = 'Tipo de retorno predeterminado';
$string['docsformat'] = 'Tipo de formato de importación predeterminado';
$string['drawingformat'] = 'Tipo de formato de dibujo predeterminado';
$string['external'] = 'Externo (sólo los enlaces almacenados en Moodle)';
$string['fileoptions'] = 'Los tipos y valores predeterminados de los archivos devueltos se pueden configurar aquí. Tenga en cuenta que todos los archivos vinculados externamente se actualizarán para que el propietario sea la cuenta del sistema Moodle.';
$string['googledocs:view'] = 'Ver repositorio Google Drive';
$string['importformat'] = 'Configurar los formatos de importación por defecto desde Google';
$string['internal'] = 'Interno (archivos almacenados en Moodle)';
$string['issuer'] = 'Servicio OAuth 2';
$string['issuer_help'] = 'Seleccionar el servicio OAuth2 que está configurado para comunicarse con la API de Google Drive. Si el servicio no existe todavía tendrá que crearlo.';
$string['oauth2serviceslink'] = '<a href="{$a}" title="Enlace a la configuración de servicios OAuth 2">Configuración de servicios OAuth 2</a>';
$string['oauthinfo'] = '<p> Para utilizar este plugin, debe registrar su sitio en Google, como se describe en la documentación <a href="{$a->docsurl}">Google OAuth 2.0 setup</a>.</p><p> Como parte del proceso de registro, tendrá que introducir la siguiente URL como "Authorized Redirect URIs \': </p><p> {$a->callbackurl} </p> Una vez registrado, se le proporcionará un ID de cliente y el secreto que se puede utilizar para configurar los plugins de Google Drive y Picasa.</p><p>Tenga en cuenta que tiene que habilitar el servicio "Drive API".</p>';
$string['owner'] = 'Propiedad de: {$a}';
$string['pluginname'] = 'Google Drive';
$string['presentationformat'] = 'Formato predeterminado de importación de presentación';
$string['privacy:metadata:repository_googledocs'] = 'El complemento de repositorio de Google Drive no almacena ningún dato personal, pero envía los datos de usuario desde Moodle al servidor remoto.';
$string['privacy:metadata:repository_googledocs:email'] = 'El correo electrónico del usuario del repositorio de Google Drive.';
$string['privacy:metadata:repository_googledocs:searchtext'] = 'La consulta de texto de búsqueda de usuario del repositorio de Google Drive.';
$string['searchfor'] = 'Buscar {$a}';
$string['servicenotenabled'] = 'Acceso no configurado. Asegúrese de que el servicio \'Drive API\' está habilitado.';
$string['spreadsheetformat'] = 'Formato predeterminado de importación de hoja de cálculo';
$string['supportedreturntypes'] = 'Archivos soportados';
