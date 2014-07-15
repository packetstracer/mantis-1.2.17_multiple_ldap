<?php

require_once(dirname(dirname(dirname(__FILE__))) .'/core/config_api.php');


/**
 * Obtiene el valor de un campo de configuración de un servidor ldap especificado.
 * @param string $field_name : nombre del campo de configuración a extraer
 * @param integer $server_id : identificador del servidor ldap (id de configuración)
 * @return boolean|string : valor de configuración si existe, false en caso contrario
 */
function getCustomLDAPConfigField($field_name, $server_id) {
	$config = config_get('auth_profiles');

	if (empty($config[$server_id]) || empty($config[$server_id][$field_name])) {
		return false;
	}

	return $config[$server_id][$field_name];
}


