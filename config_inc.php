<?php

	$g_hostname = 'your_host_name';
	$g_db_type = 'mysql';
	$g_database_name = 'database_name';
	$g_db_username = 'database_user';
	$g_db_password = 'database_user_password';
	$g_domain= 'your_domain';
	$g_app='app_name';


/* we want to use LDAP auth */
    //$g_login_method = LDAP;
    $g_login_method = MIXED;

/* the root DN that will be used to form the bind DN during authentication phase */
	$g_ldap_server 		= 'ldap://192.168.56.101';
	$g_ldap_root_dn 	= 'OU=Usuarios,DC=foss,DC=entelgly,DC=com';
	$g_ldap_bind_dn 	= 'cn=Admin1,ou=Usuarios,dc=foss,dc=entelgly,dc=com';
	$g_ldap_bind_passwd = 'P@$$w0rd';



/* we don't want the users to be able to sign-up via mantis */
    $g_allow_signup= ON;

	#### $g_use_ldap_email = ON; #### lo desactivo porque le est�n llegando
    #correos de mi plataforma a nuria
    $g_use_ldap_email = ON;


/* we don't want false mantis lost password feature */
	$g_lost_password_feature = OFF;
    $g_ldap_protocol_version = 3;
    $g_ldap_uid_field= 'sAMAccountName'; # Use 'sAMAccountName' for Active Directory - this is the name of the attribute used to search a user

#---------------------------------------------------------------------------------------------------
# Configuracion del envio de correo
#-----------------------------------------------------------------------

# El metodo de envio de correos es a traves del protocolo SMTP (ver manual)
$g_phpMailer_method = PHPMAILER_METHOD_SMTP ;
# Direccion del servidor SMTP de Beneficencia

$g_smtp_host = '10.2.70.7';

# Permite la conexion anonima, luego los campos usuario y clave pueden quedarse vacios
$g_smtp_username = '';
$g_smtp_password = '';
$g_from_email = 'your_email@domain.com';


$g_log_level = LOG_EMAIL | LOG_EMAIL_RECIPIENT | LOG_DATABASE;
#$g_log_destination = 'file:/var/www/your_log/mantisbt.log';

# END
?>
